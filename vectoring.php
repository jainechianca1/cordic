<?php
$x1=0+$_GET["x"];
$y1=0+$_GET["y"];
$z1 =0+$_GET["z"];

$p = 1;

for ($i=0;$i<=11;$i++){
	if ($y1>=0){
		$x2=$x1+$y1/$p;
		$y2=$y1-$x1/$p;
		$z2=$z1+atan(1/($p));
		
	}
	else{
		$x2=$x1-$y1/$p;
		$y2=$y1+$x1/$p;
		$z2=$z1-atan(1/($p));
	}
	$z1 = $z2;
	$x1 = $x2;
	$y1 = $y2;	
	$p *= 2;
}
//Problema no arco tangente
$x1 = $x1/1.6467;
//$z1 = $z1-1;
		
		echo "O valor da raiz quadrada de x² +  y² eh :".$x1."</br>";
		echo "O Y convergiu ate :".$y1."</br>";
		echo "O valor da atan(y/x) eh: ".$z1."</br>";
		
		
?>