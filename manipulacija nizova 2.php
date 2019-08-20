
  <?php
$arr = array();
	$arr[0] = array( "id", "fname", "iname", "email");
    $arr[1] = array(1, "Peter", "Andersen", "peter@gmail.com");
    $arr[2] = array(2, "John", "Miler", "john@gmail.com");
    $arr[3] = array(3, "Thomas", "Swift", "thomas@gmail.com");

	for($i=0; $i<count($arr); $i++){
    echo $arr[$i][0] . " " . $arr[$i][1] . " " . $arr[$i][2] . " " . $arr[$i][3] ."<br>";}

	echo "<tr>"; 
for($row = 0; $row < 4; $row++){
	echo "<td><b>$row</br>";
	echo "<th>";
	
	for($col = 0; $col < 4; $col++){
		echo "<td>".$arr[$row][$col]."</td>";
	}
	echo "</th>;</td>";
	
}
echo "</tr>";

?>