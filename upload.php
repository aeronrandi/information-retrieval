<html>
<title>Form Upload</title>
<body>
<form enctype="multipart/form-data" method="POST" action="hasil_upload.php">
File yang di upload : <input type="file" name="fupload"><br>
Deskripsi File : <br>
<textarea name="deskripsi" rows="8" cols="40"></textarea><br>
<input type="submit" value="Upload">
<form action="index.php" method="get">
<input class="btnForm" type="submit" name="submit" value="Kembali"/>
</form>
</html>