<?PHP
$arr1= array(array(1,2),array(4,5));
$arr2 = array(array(1,2),array(4,5));
$result = array();
for($i=0;$i<2;$i++) {
	for($j=0;$j<2;$j++) {
		$sum=0;
		for($k=0;$k<2;$k++) {
			$sum = $sum+$arr1[$i][$k]*$arr2[$k][$j];
		}
		echo $sum." ";
	}
	echo "<br>";
}
?>
		