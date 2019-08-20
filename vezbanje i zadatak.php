<?php
class Person
{
	public $id;
	public $firstname;
	public $lastname;
	
}
$person = new Person;
$person->id = 1;
$person->firstname = "Miroslav";
$person->lastname = "Kalinov";

$conn = mysqli_connect("localhost","root","","exercise");
mysqli_query($conn,"insert into persons values ('
{$person->firstname}','{$person->lastname}')");