<?php
$dsn = 'mysql:dbname=adan_localhost;host=localhost';
$user = 'adan';
$password = '728103093AAmm!';

try
{
	$db = new PDO($dsn,$user,$password);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
	echo "PDO error".$e->getMessage();
	die();
}

define('PRODUCT_IMG_URL','assets/product-images/');

?>