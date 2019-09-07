<?php
	function count_vowels($string){
		$array = str_split($string);
		$vocal = 0 ;
		foreach ($array as $char) {
			if ($char == 'o') {
				$vocal = $vocal+1;
			}
			elseif ($char=='a') {
				$vocal = $vocal+1;
			}
			elseif ($char=='i') {
				$vocal=$vocal+1;
			}
			elseif ($char=='u') {
				$vocal=$vocal+1;
			}
			elseif ($char=='e') {
				$vocal=$vocal+1;
			}
		

		}

		return $vocal;
	} 


	$test = count_vowels('programmer');
	echo "jumlah : ".$test;
 ?>