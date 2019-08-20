<?php
$users = array("Richard", "Thomas", "Robert", "Ana");
echo count(preg_grep( "/^".$_GET['name']."$/i" , $users));
?>
