<?php include "koneksi.php";
if(!empty($_POST['bb'])) {
      $ekstensi_diperbolehkan	= array('png','jpg');
			$nama = $_FILES['file']['name'];
			$x = explode('.', $nama);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['file']['size'];
			$file_tmp = $_FILES['file']['tmp_name'];	
	  $merek  = $_POST['merek'];
    $model  = $_POST['model'];
    $bb     = $_POST['bb'];
    $harga  = $_POST['harga'];
    if(in_array($ekstensi, $ekstensi_diperbolehkan) == true) {
      if($ukuran < 1044070){			
        $dirUpload = "file/";
        move_uploaded_file($file_tmp, $dirUpload.$nama);
        $query  = mysql_query("INSERT INTO lists VALUES(NULL, '$merek', '$model', '$bb', '$harga', '$nama')");
        if($query) { ?>
          <script>
		        alert("Berhasil Menambahkan Mobilnya!");
		        window.location="/tersedia";
          </script>
<?php   } else { ?>
          <script>
		        alert("Gagal Menambahkan Mobilnya, SIlakan Coba Lagi!");
		        window.location="/tambah";
          </script>
<?php   } } else { ?>
          <script>
		        alert("Ukuran file terlalu besar!");
		        window.location="/tambah";
          </script>
<?php   } } else { ?>
          <script>
		        alert("Ukuran file terlalu besar!");
		        window.location="/tambah";
          </script>
<?php   } } ?>