<?php
	function	alg($a, $b){
		return $a[$b];
	}
	
	$a = 0;
	$b = 0;
	$blub[$a] = alg($a, $b);
	$a = 0;
	for($b = 0; $b < 100; $b++){
		$blub[$a] = decbin($b);
		$a++;
		//echo $blub[$a]."<br>";
	}
	/*$blub = decbin(100);
	echo $blub;*/
	
	
	$test = array();
	$z = 0;
	for($u = 0; $u < 2**63; $u++){
		$test[$z] = decbin($u);
		$z++;
		echo $test[$u]."<br>";
	}
	//echo $test[$u - 1];
?>