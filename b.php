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

	armsrtong(153);
?>
