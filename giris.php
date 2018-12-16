<?php
@session_start();
@$kontrol=$_POST["kontrol"];
if($kontrol)
{
$nick=$_POST["nick"];
$sifre=$_POST["sifre"];
if($nick=="admin" && $sifre="12345")
{
$_SESSION["giris"]=true;
$msg="Giriş yaptınız, panel'e yönlendiriliyor!";
echo "<script type='text/javascript'>setTimeout(function(){document.location='panel.php';},1500);</script>";
}
}
?>
<?php include("header.php");?>
<center>
<form method="POST">
<table>
<tr><td>Kullanıcı Adı:</td><td><input type="text" name="nick" id="nick" required autofocus/></td></tr>
<tr><td>Şifreniz:</td><td><input type="password" name="sifre" id="sifre" required/></td></tr>
<tr><td></td><td><input type="submit" value="Giriş"/></td></tr>
<tr><td></td><td><?=@$msg?></td></tr>
</table>
<input type="hidden" name="kontrol" value="1"/>
</form>
</center>
<?php include("footer.php");?>