<?php

$PHP_SELF = $_SERVER['PHP_SELF'];

if (preg_match("(config.php)",$PHP_SELF)) { 
    Header("Location: index.php");
    die();
}



$dbhost = "localhost";
$dbuname = "huang4k";
$dbpass = "";
$dbname = "my_huang4k";
$prefix = "scrlu_";
$user_prefix = "";
$dbtype = "MySQLI";




$cookie_name = 'test_session';
$cookie_time = 3600;
$cookie_path = '/' ;
$cookie_domain = 'localhost';

?>

