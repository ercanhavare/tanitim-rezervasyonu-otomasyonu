<?php include("header.php");?>
<style>
table th
{
border:1 px solid black;
}
table tr td
{
border:1px solid black;
}
</style>
<center>
<div>
<h1>Rezervasyon</h1>
<table border=1 style="width:250px;margin:0 auto;">
<th>Ad Soyad</th><th>Geliş Zamanı</th><th>Oda Sayısı</th>
<?php
require("db.php");
$sorgu  = mysql_query("SELECT * FROM rezervasyon ORDER by id DESC");
while($row=mysql_fetch_array($sorgu))
{
?>
<tr><td><? echo $row["adsoyad"];?></td><td><? echo $row["zaman"];?></td><td><? echo $row["odasayisi"];?></td></tr>
<?php } ?>
</table>
</div>
</center>
<?php include("footer.php");?>