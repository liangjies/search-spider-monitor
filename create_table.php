<?php
include 'config.php';
$sql='
CREATE TABLE "ip"(
[id] integer PRIMARY KEY AUTOINCREMENT
,[ip] text
,[riqi] text
,[shijian] text
,[page] text
);
';
$db->exec($sql);
?>