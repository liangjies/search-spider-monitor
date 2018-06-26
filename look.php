<?php
include 'config.php';
date_default_timezone_set("Asia/Shanghai");
$date=date("Y-m-d");
$d=strtotime("tomorrow");
$tom=date("Y-m-d", $d);
$result=$db->query("select count(*) AS id from ip where riqi>='$date' and riqi<'$tom'")->fetch();//fetchAll()
$allresult=$db->query("select count(*) AS id from ip")->fetch();//fetchAll()
//print_r($result);
$num=$result['id'];
//echo $num;
$allnum=$allresult['id'];
//echo $allnum
echo "今日访问量：";
echo "$num";
echo "|";
echo "总访问量：";
echo "$allnum";
?>