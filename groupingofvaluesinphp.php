<?php 

$items= array(1,0,1,1,0,1,1,0,0,1,1);


$arrlength = count($items); 
$counter=0;
for($x=0; $x<$arrlength; $x++){
		if($items[$x] == 1 && $items[$x-1] ==0){
			$counter++;
		}
}
echo "$counter";
 ?>
