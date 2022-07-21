<?php
echo "<head><title>My Guest Book</head></title>";
$nama= $_POST['nama'];
$nim= $_POST['nim'];
$email= $_POST['email'];
$prodi= $_POST['prodi'];
$fp = fopen("guestbook.txt", "a+");
fputs($fp, "$nama|$nim|$email|$prodi\n");
fclose($fp);

echo "Terimakasih Atas Partisipasi Anda Mengisi Buku Tamu<br>";
echo "<a href=kalenderr.php> Isi Buku Tamu</a><br>";
echo "<a href=lihatt.php> Lihat Buku Tamu</a><br>";
?>


