<?PHP
$fp = fopen("prog6.txt",'r');
$count = fread($fp,10);
fclose($fp);
$count = $count+1;
echo "<p> page count :" .$count."</p>";
$fp = fopen("prog6.txt",'w');
fwrite($fp,$count);
fclose($fp);
?>