<?php include("header.php");?>
<div style="margin-left:300px;">
<h1>Mesajlar</h1>
		<?php
		require("db.php");
		$id=$_GET["id"];
		$sorgu=mysql_query("SELECT * FROM mesajlar WHERE id='$id'");
		while($row=mysql_fetch_array($sorgu))
		{
		$yazan=$row["adsoyad"];
		$baslik=$row["baslik"];
		$mesaj=$row["mesaj"];
		$tarih=$row["tarih"];
		$mail=$row["eposta"];
		}
		?>
		<table border=1>
		<tr><td>Mesajı Yazan:</td><td><?=$yazan?></td></tr>
		<tr><td>Mesajın Başlığı:</td><td><?=$baslik?></td></tr>
		<tr><td>E-Mail:</td><td><?=$mail?></td></tr>
		<tr><td>Mesaj Tarihi:</td><td><?=$tarih?></td></tr>
		<tr><td>Mesaj:</td><td><?=$mesaj?></td></tr>
		</table>
		</div>
<?php include("footer.php");?>