<?php 
	function is_password_valid($password){
		$result=true;
		if( strlen($password ) < 8 ) {
			$error .= "Password Terlalu Pendek!
			";
			$result = false;
			}
		if( !preg_match("#[a-z]+#", $password ) ) {
			$error .= "Password Harus Menggunakan Huruf Kecil!
			";
			$result = false;
			}
		if( !preg_match("#[A-Z]+#", $password ) ) {
			$error .= "Password Harus Menggunakan Huruf Besar!
			";
			$result = false;
			}
		if( !preg_match("#\W+#", $password ) ) {
			$error .= "PPassword Harus Menggunakan Simbol!
			";
			$result = false;
			}
		if( !preg_match("#[0-9]+#", $password ) ) {
			$error .= "Password Harus Menggunakan Angka!
			";
			$result = false;
			}
		

		return $result;




	}
	function is_username_valid($username){
		$result = true;
		if( preg_match("#\W+#", $username ) ) {
			$error .= "Username Tidak Boleh Simbol!
			";
			$result = false;
			}
		if( preg_match("#[0-9]+#", $username ) ) {
			$error .= "Username Tidak Boleh Angka!
			";
			$result = false;
			}
		if( preg_match("#[A-Z]+#", $username ) ) {
			$error .= "Username Tidak Boleh Huruf Besar!
			";
			$result = false;
			}
		if( strlen($username ) < 3 ) {
			$error .= "Username Terlalu Pendek!
			";
			$result = false;
			}
		if( strlen($username ) >9 ) {
			$error .= "Username Terlalu Panjang!";
			$result = false;
			}

		return $result;
	}


echo is_username_valid('siska');
echo is_password_valid('codeYourFuture!123');





 ?>