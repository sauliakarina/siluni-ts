<?php 

$json = json_encode($instansiBaru_2);
echo $json;

echo "<br>";
$a = json_decode($json);
for ($i=0; $i <count($a) ; $i++) { 
	echo $a;
}
?>