<?php 
Function db_connect() {
	static $connection;
	if(!isset($connection)) {
		$host = "localhost";
		$name = "root";
		$password = "";
		$dbname = "prodaja zivotinja";
		$connection = mysqli_connect("$host","$name","$password","$dbname");
	}
if($connection === false) {
	
	return mysqli_connect_error();
	}
return $connection;
}


function db_query($query) {
	$connection = db_connect();
	
	$result = mysqli_query($connection,$query);
	
	return $result;
}
	$result = db_query("SELECT * FROM `kucni ljubimci`");
	
	if($result === false) {
		die("Query error!");
	} else {
		$rows = array();
		while ($row = mysqli_fetch_assoc($result)) {
			$rows[] = $row;
		}
	}
		
function db_select($query) {
	$rows = array();
	$result = db_query($query);
	
	if($result === false) {
		return false;
	}
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

$rows = db_select("SELECT * FROM `kucni ljubimci`");
if($rows === false) {
	die("Error.");
}else{
	foreach($rows as $row){
		foreach($row as $key => $value){
			echo ucfirst($key) . ": " . $value . "<br/>";
		}
		echo "---------------<br/>";
	}
}


?>