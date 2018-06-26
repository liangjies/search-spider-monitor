<?php
include('db.php');
define('DB_PCONNECT',false);
define('DB_USER','');
define('DB_HOST','');
define('DB_NAME','');
define('DB_PASS','');
define('DB_PORT','');//留空
define('DB_HOSTRO','');//留空
define('DB_PORTRO','');//留空
define('DB_TYPE','sqlite');
define('DB_PATH','bot.db');
define('DB_A','');
$DB=new db;
$db = new PDO("sqlite:ip.db");
?>