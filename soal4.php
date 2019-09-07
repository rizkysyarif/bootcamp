<?php 
function groupNumber($number)
{
	$res = preg_replace("/[^0-9]/", "", $number);
	$var = str_split($res,3);
	$key_terkahir = count($var) - 1;
	$key2_terkahir = $key_terkahir - 1;
	if (strlen($var[$key_terkahir]) == 1) {
		$format_split = str_split($var[$key2_terkahir], 2);
		$var[$key2_terkahir] = $format_split[0];
		$var[$key_terkahir] = $format_split[1].$var[$key_terkahir];
	}

	return implode("-",$var);;

}

echo groupNumber('9931411132314232')

?>