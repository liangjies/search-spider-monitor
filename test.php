<?php
/**
 * Created by PhpStorm.
 * User: liangjies
 * Date: 2018/6/26
 * Time: 23:22:57
 */
error_reporting(0);
include 'config.php';
if(!file_exists('bot.db'))
    include 'creat.php';
$date=date("Y-m-d");
$d=strtotime("tomorrow");
$tom=date("Y-m-d", $d);
$ipresult=$db->query("select count(*) AS id from ip where riqi>='$date' and riqi<'$tom'")->fetch();//fetchAll()
$allipresult=$db->query("select count(*) AS id from ip")->fetch();//fetchAll()
//print_r($result);
$ipnum=$ipresult['id'];
//echo $num;
$allipnum=$allipresult['id'];
//echo $allnum
@$zz=$_GET['zz'];
if($zz=="baidu")
{
    $where="where robotsname='baidu'";
}
elseif($zz=="google")
{
    $where="where robotsname='Google'";
}
elseif($zz=="soso")
{
    $where="where robotsname='soso'";
}
elseif($zz=="sogou")
{
    $where="where robotsname='sogou'";
}
elseif($zz=="bing")
{
    $where="where robotsname='bing'";
}
elseif($zz=="yahoo")
{
    $where="where robotsname='yahoo'";
}
elseif($zz=="youdao")
{
    $where="where robotsname='youdao'";
}
elseif($zz=="Alexa")
{
    $where="where robotsname='Alexa'";
}
elseif($zz=="so")
{
    $where="where robotsname='so'";
}
else
{
    $where=null;
}
$sql="select count(*) AS id from robots $where";
$resultc=$DB->query($sql)->fetch();
//$rsc=mysql_fetch_array($resultc);
$num=$resultc['id'];//取得数据表的总记录数
//echo $num;
$pagesize=20;//分页大小
if($_GET[page]<>""){
    $page=$_GET[page]-1;
    if($page<0)$page=0;
    if($page>(intval($num/$pagesize)))$page=intval($num/$pagesize);}
$sql="select * from robots $where order by id DESC limit ".$pagesize*$page.",".$pagesize;
//$ok=mysql_query($sql,$conn);
$ok=$DB->query($sql);
$m=$ok->fetch(PDO::FETCH_NUM);
?>
    </head>
    <body>
    <table align=center width=960 cellpadding=3 cellspacing=1  bgcolor=#009900 >
        <tr align=center style=#008822  bgcolor=#0077aa height=100>
            <td colspan=4 style=font-size:28px;font-weight:bold;>搜索引擎蜘蛛爬行监测系统</td>
        </tr>
        <tr bgcolor=#E8F3FF align=left style=color:blue; height=50><td colspan=4 >查看各引擎蜘蛛抓取列表: <a href='index.php'>查看全部</a> | <a href='?zz=baidu'>百度</a> | <a href='?zz=google'>谷歌</a> | <a href='?zz=sogou'>搜狗</a> | <a href='?zz=soso'>SOSO</a> | <a href='?zz=yahoo'>雅虎</a> | <a href='?zz=bing'>Bing</a> | <a href='?zz=youdao'>有道</a> | <a href='?zz=Alexa'>Alexa</a> | <a href='?zz=so'>360</a></td></tr>
        <tr  height=20px bgcolor=#E8F3FF style=color:blue;>
            <td colspan=4 >
<?php
echo "今日访问量：";
echo "$ipnum";
echo "|";
echo "总访问量：";
echo "$allipnum";
?>