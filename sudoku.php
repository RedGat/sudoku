<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type = "text/css"></style>
</head>
<body>
<form>
	<table cellpadding="0" cellspacing="0">
<?php

$c = 0;

$num = array("fila" => $fila, "col" => $col, "val" => $val);

for($i = 1; $i <= 9; $i++) {
	$nums = array($fila,$col,$val);
	$fila = rand(0,8);
	$col = rand(0,8);
	$nval = rand(1,9);
	$num[] = $num;


}

for($i = 1; $i <= 9; $i++) {
	echo "<tr>\n";
	for($j = 1; $j <= 9; $j++) {
		echo "\t<td style = 'border: 1px solid black'>";

		if( $i = $num["fila"] && $j == $num["col"])
			echo $num["val"];
		else
			echo"<input type = 'number' name = '$c'>";

		
		echo"</td>";
		$c++;
		
	}
	echo "</tr>\n";
}



?>

</table>
<input type = "submit" />
</form>

<?php 
	echo "hola";
?>
</body>

</html>
