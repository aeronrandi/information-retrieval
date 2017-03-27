<html>
<title>Aplikasi Download</title>
<body>
<h2>Download File Pdf</h2>
</body>
<?php
  $konek = new mysqli("mysql.idhostinger.com","u182305923_stbi","lutfiant0","u182305923_stbi");

  $query = "SELECT * FROM upload ORDER BY id_upload DESC";
  $hasil = mysqli_query($konek, $query);

  while ($r = mysqli_fetch_array($hasil)){
    echo "Nama File : <b>$r[nama_file]</b> <br>";
    echo "Deskripsi : $r[deskripsi] <br>";
    echo "<a href=\"simpan.php?file=$r[nama_file]\">Download File</a><hr><br>";
  }
?>
<html>
<form action="index.php" method="get">
<input class="btnForm" type="submit" name="submit" value="Kembali"/>
</form>
</html>