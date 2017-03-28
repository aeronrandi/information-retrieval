<?php
// Tentukan folder file yang boleh di download
$folder = "files/";
// Lalu cek menggunakan fungsi file_exist
if (!file_exists($folder.$_GET['files'])) {
  echo "<h1>Access forbidden!</h1>
      <p> Anda tidak diperbolehkan mendownload file ini.</p>";
  exit;
}

// Apabila mendownload file di folder files
else {
  header("Content-Type: octet/stream");
  header("Content-Disposition: attachment; 
  filename=\"".$_GET['files']."\"");
  $fp = fopen($folder.$_GET['files'], "r");
  $data = fread($fp, filesize($folder.$_GET['files']));
  fclose($fp);
  print $data;
}
?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
</body>
</html>