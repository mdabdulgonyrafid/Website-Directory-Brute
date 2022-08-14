<?php
function e7061($e){
	$ed = base64_decode($e);
	$n = openssl_decrypt("$ed","AES-256-CBC","1921680119216801",0,"1921680119216801");
	return $n;
}
?>
