<?php
$ime = basename($_FILES['uploaded']['name']);
$temp = $_FILES['uploaded']['tmp_name'];
$ekstenzija = $_FILES['uploaded']['type'];
$target = "baneri/" . $ime;
$ok = 1;
$types = array('image/jpeg', 'image/gif', 'image/png');
if (!in_array($ekstenzija, $types)) {
 echo "Nije podrzan taj fajl!";
 $ok = 0;
}
list($sirina, $visina, $tip) = getimagesize($temp);
$velicina = filesize($temp);
echo "Sirina fajla: " . $sirina . "<br/>";
echo "Visina fajla: " . $visina . "<br/>";
echo "Velicina fajla: " . $velicina . "<br/>";
$BANER_MAX_SIZE = 3000000;
define("BANER_MAX_SIRINA", 320);
define("BANER_MAX_VISINA", 240);
if ($sirina > BANER_MAX_SIRINA || $visina > BANER_MAX_VISINA ||
 $velicina > $BANER_MAX_SIZE) {
 echo "Mozete postaviti samo banere dimenzija " . BANER_MAX_SIRINA .
 " x " . BANER_MAX_VISINA . " i maks velicine " . $BANER_MAX_SIZE;
 $ok = 0;
}
$blink = $_POST['naziv_link'];
if ($blink == "" || $blink == "http://") {
 $blink = "";
 echo "Niste naveli link ka sajtu tog banera";
 $ok = 0;
} else {
 $blink = mysqli_real_escape_string($konekcija,
stripslashes($_POST['naziv_link']));
}
$trenutak = date('Y-m-d H:i:s', time());
$pozicija = $_POST['poz_izbor'];
if ($ok == 1) {
 if (move_uploaded_file($temp, $target)) {
 $konekcija = mysqli_connect('localhost', 'root', '')
or die(mysqli_error());
 mysqli_select_db($konekcija, "fajlovi");
 $upit = "INSERT INTO baneri VALUES('','" . $trenutak . "', '"
. $ime . "','" . $blink . "', '" . $pozicija . "')";
 $rezultat = mysqli_query($konekcija, $upit)
or die(mysqli_error());
 } else {
 echo $temp . " *** GRESKA PROBLEM U LOKACIJI *** " . $target;
 $ok = 0;
 }
}
if ($ok == 1)
 echo "Baner postavljen u bazu";
else
 echo "Baner nije postavljen";
?>
<br/>
<a href="index.php">Povratak na prvu stranicu</a>