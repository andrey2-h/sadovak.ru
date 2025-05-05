<?php 

$conn = pg_connect("host=localhost dbname=php_site user=php_user password=123")
   or die("Connection error: " . pg_last_error());

?>