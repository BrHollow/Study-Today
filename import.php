<?php
	include "conexão.php";

	function generateHash ($length = 32){
		$caracteres = '1234567890qwertyuiopasdfghjklzxcvnmQWERTYUIOPASDDFGHJKLZXCVBNM';
		$caracteresLenght = strlen($caracteres); 
		$hashString = '';
		for ($i=0; $i < $length; $i++) { 
			$hashString .= $caracteres[rand(0,$caracteresLenght - 1)];
		}
		return $hashString;
	}
?>