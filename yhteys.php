<?php
$palvelin="mysql:host=localhost; dbname=esim2";
try {
	$db=new PDO($palvelin,"phpuser","phppass");
	echo "yhteys ok";
} catch (Exception $e) {
	echo "error".$e->getMessage();
}
?>