<?php

$pdo = new PDO("mysql:host=localhost;dbname=telefoni", "root", "06052011");
$pdo->exec("insert into mobile_phones values (null,'samsunggg','jkikj')");

?>