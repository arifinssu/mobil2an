<?php include "koneksi.php";
    $kode   = $_GET['kode'];
    $aksi   = $_GET['aksi'];
    $id     = $_GET['no'];
    if ($aksi == "like") {
        $query  = mysql_query("UPDATE comments SET suka = suka + 1 WHERE id='".$kode."'");
        if ($query) { ?>
            <script>
                alert("Berhasil Menambahkan Like!");
                window.location="details?no=<?php echo $id;?>";
            </script>
        <?php } 
    } else if ($aksi == "dislike") {
        $query  = mysql_query("UPDATE comments SET taksuka = taksuka + 1 WHERE id='".$kode."'");
        if ($query) { ?>
            <script>
                alert("Berhasil Menambahkan Dislike!");
                window.location="details?no=<?php echo $id;?>";
            </script>
        <?php } 
    } ?>