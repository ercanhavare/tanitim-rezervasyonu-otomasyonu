<?php
require("db.php");
@$kontrol=$_POST["kontrol"];
if($kontrol)
{
$adsoyad=mysql_real_escape_string($_POST["adsoyad"]);
$baslik=mysql_real_escape_string($_POST["baslik"]);
$mesaj=mysql_real_escape_string($_POST["mesaj"]);
$eposta=mysql_real_escape_string($_POST["eposta"]);
$tarih=date("Y-m-d H:i:s");
$sorgu=mysql_query(sprintf("INSERT INTO mesajlar(adsoyad,baslik,mesaj,tarih,eposta) VALUES('%s','%s','%s','%s','%s')",$adsoyad,$baslik,$mesaj,$tarih,$eposta));
echo mysql_error();
echo "<script type='text/javascript'>document.location='iletisim.php?msg=ok';</script>";
}
?>
<?php include("header.php"); ?>
<span style="width:500px;margin-left:250px;">
<form method="POST">
		<h1>İletişim</h1>
			<table>
			<tr><td>Ad Soyadınız:</td><td><input type="text" name="adsoyad" id="adsoyad" required autofocus/></td></tr>
			<tr><td>E-mail:</td><td><input type="text" name="eposta" id="eposta" required /></td></tr>
			<tr><td>Mesajın Konusu:</td><td><input type="text" name="baslik" id="baslik" required /></td></tr>
			<tr><td>Mesajınız:</td><td><textarea style="width:154px;height:94px;" name="mesaj" id="mesaj" required></textarea></td></tr>
			<tr><td></td><td><input type="submit" value="Gönder"/></td></tr>
			</table>
			<input type="hidden" name="kontrol" value="1"/>
			</form></br>
    ADRES: 
    Ekinci Beldesi Atatürk Mahellesi Ak Sokak No: 21 </br>
    Antakya/Hatay</br>

    TELEFON: 0539 847 98 88</br>

    E-Posta : aksakal_ilkay@hotmail.com</br>
</span>
<?php $menu = 7;
include("footer.php");
?>
<?php
if(isset($_GET["msg"]))
{
switch($_GET["msg"])
{
	case "ok":echo("<script type='text/javascript'>alert('Mesajınız gönderilmiştir!');</script>");break;
}
echo "<script type='text/javascript'>document.location='iletisim.php';</script>";
}
?>