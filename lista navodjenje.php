<?php
require "config.php";
print_r($_REQUEST);
$person = Person::getById(2);
//print_r{$person}


?>