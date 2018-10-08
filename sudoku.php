<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type = "text/css"></style>
</head>
<body>
<form method = 'post'>
	<table cellpadding="0" cellspacing="0" border="1">
<?php


$num = array();

for($i = 1; $i <= 9; $i++) {
    $fila = rand(1, 9);
    $col = rand(1, 9);
    $val = rand(1, 9);
	$nums = array("fila" => $fila, "col" => $col, "val" => $val);
	$num[] = $nums;
}

for($i = 1; $i <= 9; $i++) {
	echo "<tr>\n";
	for($j = 1; $j <= 9; $j++) {
		echo "\t<td style = 'border: 1px solid black width = 50px'> ";

        $val = null;
        for($k = 0; $k < count($num); $k++) {
            $point = $num[$k];
            if($i == $point["fila"] && $j == $point["col"]) {
                $val = $point["val"];
            }
        }


        if($val) {
        	echo "$val";	
        }
        else {
        	echo "<input type = 'number' value = '$val' style = 'width: 50px'>";
        }
		
		
		echo "</td>";
		
	}
	echo "</tr>\n";
}



?>

</table>
<input type = "submit" />
</form>
</body>

</html>
