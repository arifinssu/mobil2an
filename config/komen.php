<?php include "koneksi.php";
    date_default_timezone_set("Asia/Jakarta");
    $waktu     = date('d-m-Y H:i:s');
    $id        = $_POST['id'];
    $no        = $_POST['no'];
    $nama      = $_POST['nama'];
    $judul     = $_POST['judul'];
    $komentar  = $_POST['komentar'];
	$query     = mysql_query("INSERT INTO comments VALUES('$id','$nama','$judul','$komentar','$waktu','0','0','$no')");
    if ($query) { ?>
    
    <script>
		alert("Berhasil Menambahkan Komentarnya!");
		window.location="/config/details?no=<?php echo $no;?>";
    </script>

<?php } else { ?>
    
    <script>
		alert("Gagal Menambahkan Komentarnya, Silakan Coba Lagi!");
		window.location="/config/details?no=<?php echo $no;?>";
    </script>
    
<?php } ?>