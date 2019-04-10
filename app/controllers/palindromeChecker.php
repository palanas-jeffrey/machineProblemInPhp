

<?php 


session_start();


	$specimen = $_POST['name'];

	$arrSpecimen = str_split($specimen);


	function palindromeChecker($a){
		$arrlength = count($a);
		$true = 0;
		$false = 0;
		$y = $arrlength;
		for($x=0; $x<$arrlength; $x++){
			$y--;
			if($a[$x]==$a[$y]){
				$true++;
			}else{
				$false++;
			}
		};
		if ($true == $arrlength && $true !== 0){
			print_r("Palindrome");
		}else{
			print_r("Not a palindrome");
		}
	};

	palindromeChecker($arrSpecimen);

?> 