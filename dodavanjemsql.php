<?php

$pdo = new PDO("mysql:host=localhost;dbname=telefoni", "root", "06052011");
$st = $pdo->prepare("insert into mobile_phones values (id,:model,:brend,:cena,:os)");
$model = 'Nokia';
$brend = '3310';
$cena = '200';
$os = 'android';

$st->bindParam(':model',$model);
$st->bindParam(':brend',$brend);
$st->bindParam(':cena',$cena);
$st->bindParam(':os',$os);


$st->execute();

unset($pdo);
#$nizKorisnika = $rez->fetchAll(PDO::FETCH_ASSOC);

#foreach($nizKorisnika as $kljuc => $vrednost)
	#echo "ID: " . $vrednost["id"] . " " . $vrednost["model"] . "<br>";
?>