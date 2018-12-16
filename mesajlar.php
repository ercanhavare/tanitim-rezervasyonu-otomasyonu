<?php include("header.php");?>
<div style="margin-left:300px;">
<h1>Mesajlar</h1>
		<table border=1>
		<th>ID</th><th>Başlık</th><th>İşlem Tarihi</th><th>İşlem</th>
		<?php
		require("db.php");
		$sorgu=mysql_query("SELECT * FROM mesajlar ORDER by id DESC");
		while($row=mysql_fetch_array($sorgu))
		{
		$id=$row["id"];
		$veri = sprintf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>",$id,$row["baslik"],$row["tarih"],"<a href='mesaj.php?id=$id'><input type='button' value='Görüntüle'/></a>");
		echo $veri;
		}
		?>
		</table>
</div>
<?php include("footer.php");?>
<style>
table tr tr
{
border:1px solid black;
}
</style>