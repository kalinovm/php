<?php
$cars = array(
	"mercedes","bmw","audi","honda","audi1","audi2"
);
function select(){
echo "<select>";

foreach($cars as $car){
echo "<option>{$car}</option>";
}
echo "</select>";
}
select();
?>