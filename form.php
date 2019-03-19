<?php
$tabuada=$_POST["tabuada"];
	for($i=1;$i<=12;$i++){
	$resultado=$tabuada*$i;
	echo "$tabuada x $i = $resultado<br>";
	}
?>