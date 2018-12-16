<?php
@$kontrol=$_POST["kontrol"];
if($kontrol)
{
$cont=true;
require("db.php");
$adsoyad=$_POST["adsoyad"];
$tarih=$_POST["tarih"];
$oda=$_POST["oda"];
$sorgu  = sprintf("INSERT INTO rezervasyon(adsoyad,zaman,odasayisi) VALUES('%s','%s','%s')",$adsoyad,$tarih,$oda);
mysql_query($sorgu);
}
?>
<?php include("header.php");?>
<center>
<form method="POST">
<table>
<tr><td>Ad Soyad:</td><td><input type="text" name="adsoyad" id="adsoyad" required autofocus/></td></tr>
<tr><td>Geliş Zamanı:</td><td><input type="date" name="tarih" id="tarih" required/></td></tr>
<tr><td>Paket:</td><td><select name="oda">
<option value="1+1">1+1 Oda(70 TL Günlük)
<option value="2+1">2+1 Oda(120 TL Günlük)
</select></td></tr>
<tr><td></td><td><input type="submit" value="Rezervasyon"/></td></tr>
</table>
<input type="hidden" name="kontrol" value="1"/>
</form>
</center>
<?php $menu=6;include("footer.php");?>
<?php if(@$cont) {?>
<script type="text/javascript">
alert("Rezervasyon yapılmıştır!");
</script>
<?php }?>