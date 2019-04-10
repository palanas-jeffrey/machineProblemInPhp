<?php 
echo "<h2>Asterisk Used To Draw Shapes<h2>";

for ($x=0; $x<5; $x++){
	print_r("*");
}
echo "<br>";
for($x=0; $x<4; $x++){
	print_r('*'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'*');
	echo "<br>";
}
for($x=0; $x<5; $x++){
	print_r('*');
}

echo "<hr>";

for($x=0; $x<5; $x++){
	print_r('*');
}
echo "<br>";
for($x=0; $x<4; $x++){
	for($y=0 ; $y<1; $y++){

	print_r('*'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'*');
	};
	echo "<br>";
	
};
for($x=0; $x<5; $x++){
	print_r('*');
}

echo "<hr>";


for($x=0; $x<7; $x++){
	for($y=0; $y<$x; $y++){
		echo "*";
	}
	echo "<br>";
}

echo "<hr>";
$arrSample = array(1,2,3,4,5,6,7,8,9 );
$arrlength = count($arrSample); 

for($x=0;$x<$arrlength; $x++){
	for($y=0;$y<$x; $y++){
		echo "$arrSample[$y]";
	}
	echo "<br>";
}

 ?>