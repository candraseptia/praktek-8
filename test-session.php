<form action="test-session.php" method="post">
	<table>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>Pesan</td>
			<td><input type="text" name="msg"></td>
		</tr>
		<tr>
			<td><input type="submit" value="SET"></td>
		</tr>
	</table>
</form>


<?php 
session_start();

// echo "Selamat Datang Di PHP";
if (@$_POST["nama"] && @$_POST["msg"]) {
$_SESSION["nama"] = $_POST["nama"];
$_SESSION["msg"] = $_POST["msg"];
echo "<br>Session telah terisi";
}


 ?>