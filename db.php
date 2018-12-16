<?php
$db_name="sergen";
$db_user="root";
$db_pass="";
$db_host="localhost";
$conn=mysql_connect($db_host,$db_user,$db_pass);
if(!$conn)
{
die("Veri Tabanı Bağlantısı Kurulamadı!");
}
mysql_select_db($db_name,$conn);
mysql_query("SET NAMES utf8");
?>