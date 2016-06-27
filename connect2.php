<?php
//mysqli_select_db("guest");//選擇資料庫
//mysqli_query("set names utf8");
//以utf8讀取資料，讓資料可以讀取中文
//$Cmysqli = new mysqli('localhost','root','0000','guest');//連結伺服器
//$Cmysqli->query("SET NAMES utf8");//以utf8讀取資料，讓資料可以讀取中文

$Cmysqli = new mysqli('localhost','root','0000','guest');//連結伺服器
$Cmysqli->query("SET NAMES utf8");//以utf8讀取資料，讓資料可以讀取中文
$data=mysqli_query($Cmysqli,"SELECT * FROM showBoard");//從contact資料庫中選擇所有的資料表
?>
