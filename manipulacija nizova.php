<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "testdb";
 
// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);
 
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully! <br>";
 
$name = 'Peter';
 
$query = "SELECT * FROM users WHERE firstname = '$name'";
$result = mysqli_query($conn, $query);
 
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}
 
mysqli_close($conn);
?>