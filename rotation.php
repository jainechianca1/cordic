<?php
$x1 = 0+$_GET["x"];
$y1 = 0+$_GET["y"];
$z1 = eval("return ".$_GET["z"].";");
$p = 1;

for ($i = 0;$i <= 11;$i++){
	if ($z1 >= 0) {
		$x2 = $x1-$y1/$p;
		$y2 = $y1+$x1/$p;
		$z2 = $z1-atan(1/$p);
	} 
	else{ 
		$x2 = $x1+$y1/$p;
		$y2 = $y1-$x1/$p;
		$z2 = $z1+atan(1/$p);
	}
	
	$z1 = $z2;
	$x1 = $x2;
	$y1 = $y2;
	$p *= 2;
}	
//Acontecendo problema no de 180
$x1 = $x1/1.6467;
$y1 = $y1/1.6467;
if ($z1 >= 0) {
	echo "O cosseno do angulo eh ".$x1."</br>";
	echo "O seno do angulo eh ".$y1."</br>";
	echo "O angulo convergiu ate: ".$z1."</br>";
}
else{
	echo "O seno do angulo eh ".$x1."</br>";
	echo "O cosseno do angulo eh ".$y1."</br>";
	echo "O angulo convergiu ate: ".$z1."</br>";
	}
?>
