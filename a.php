<?php
	function armsrtong($n){
		$sum = 0;
		$rem = $n%10;
		$sum += $rem*$rem*$rem;
		$rem = $n/10;
		echo $sum;  
		if($n > 0){
			 armsrtong($n);		
		}else{

		}
	}

	echo "branch1";
	echo "master changes"; 
	armsrtong(153);
	echo "sdf"; exit;
?>
