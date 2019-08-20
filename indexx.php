<?php 
if (isset($_POST['pretraga']) && !empty($_POST['pretraga'])) {      
  $string = $_POST[ 'pretraga' ];
  $conn = mysqli_connect('localhost', 'root', '06052011');
  $db = mysqli_select_db($conn, 'prodaja zivotinja');
  $sql = "SELECT * FROM `kucni ljubimci`";
  $rs = mysqli_query($conn, $sql);
 
    if (mysqli_num_rows($rs) == 0){
        echo "No records found!";
    }else{
        while($row = mysqli_fetch_array($rs)) {
            echo "Ime: " .$row['FName'] . "  ";
            echo  $row['LName'] . "<br/>";
            echo "Tel: " . $row['Tel'] . "<br/>";
            echo "E-mail: " . $row['email'] . "<br/>";
        }
    }
    mysqli_close($conn);
}
?>
 
<!DOCTYPE html>
<head>
<title> A Web Page </title>
</head>
<body>
<form action = "index.php" method = "post">
    <p>Vrsta rase na prodaji su Nemacki ovcar, Sarplaninac, Civava, Jazavicar, Erdel terijer, Bokser</p>
<table>
    <tr>
        <td colspan = "2"> Rasa pasa </td>
    </tr>
        <td><input type = "text" size = "15" name = "searchName"/></td>
        <td><input type = "submit" value = "Pretraga"/>
    </tr>
</table>
</form>
</body>
</html>