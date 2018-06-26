<?php
include('config.php');
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
$sql='
CREATE TABLE "robots"(
[id] integer PRIMARY KEY AUTOINCREMENT
,[robotsname] text
,[robotsip] text
,[riqi] text
,[shijian] text
,[robotspage] text
);
';
$DB->exec($sql);
?>