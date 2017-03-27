<?php
include_once('Enhanced_CS.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Stemming</title>
</head>
<body align=center>
<h3 >PENCARIAN KATA DASAR</h3>
<form align="center" method="post" action="">
<input type="text" name="kata" id="kata" size="20" value="<?php if(isset($_POST['kata'])){ echo $_POST['kata']; }else{ echo '';}?>">
<input class="btnForm" type="submit" name="submit" value="Cari"/>
</form>
<?php

if(isset($_POST['kata'])){
	$teksAsli = $_POST['kata'];
	echo "Teks asli : ".$teksAsli.'<br/>';
	$stemming = Enhanced_CS($teksAsli);
	echo "Kata dasar : ".$stemming.'<br/>';
}
?>
<form action="index.php" method="get">
<input class="btnForm" type="submit" name="submit" value="Kembali"/>
</form>
</body>
</html>