<?php
@$kontrol=$_POST["kontrol"];
if($kontrol)
{
$sel=$_POST["kategori"];
if($sel=="1")
{
$path="./images/yemek/";
}
else
{
$path="./images/resim/";
}
move_uploaded_file($_FILES["dosya"]["tmp_name"],$path.$_FILES["dosya"]["name"]);
}
?>
<?php include("header.php");?>
<div style="margin-left:250px;">
<form method="POST" enctype="multipart/form-data">
<table>
<tr><td>Yüklemek istediğiniz kategori:</td><td>
<select name="kategori">
<option value="1">Yemekler</option>
<option value="2">Resimler</option>
</select></td></tr>
<tr><td>Dosyayı Seçiniz:</td><td><input type="file" name="dosya" id="dosya"/></td></tr>
<tr><td></td><td><input type="submit" value="Yükle"/></td></tr>
</table>
<input type="hidden" name="kontrol" value="1"/>
</form>
</div>
<?php include("footer.php");?>