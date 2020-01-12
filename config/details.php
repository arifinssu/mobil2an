<?php include "koneksi.php"; $no = $_GET['no'];?>

<head>
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Mobil2an</title>
    <link rel="shortcut icon" href="/assets/images/favicon-alt.ico" type="image/x-icon" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/assets/css/bootstrap-material-design.css">
    <link rel="stylesheet" href="/assets/css/ripples.min.css">
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/colors.css">
</head>

<body class="home_alt">

    <!-- LOADER -->
    <div id="preloader">
        <img class="preloader" src="/assets/images/loader-alt.gif" alt="">
    </div>

    <div id="wrapper">
        <header class="header">
            <div class="container-fluid">
                <nav class="navbar navbar-default">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-responsive-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="/"><i class="material-icons">commute</i>
                                mobil2an</a>
                        </div>
                        <div class="navbar-collapse collapse navbar-responsive-collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="/">Home</a></li>
                                <li class="active"><a href="/tersedia">Yang Tersedia</a></li>
                                <li><a href="/tambah">Tambah Mobilnya</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>

        <section class="section lb">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">


                        <aside class="topic-page topic-list blog-list forum-list single-forum">

                            <?php $query=mysql_query("SELECT * FROM lists WHERE no='$no'"); while($data=mysql_fetch_array($query)) { ?>
                            <article class="well btn-group-sm clearfix">
                                <div class="topic-desc row-fluid clearfix">
                                    <div class="col-sm-2 text-center publisher-wrap">
                                        <img src="file/<?php echo $data['file'];?>" alt="" class="avatar img-circle img-responsive">
                                    </div>
                                    <div class="col-sm-10">
                                        <p> Merek: <?php echo $data['merek'];?> </br>
                                            Model: <?php echo $data['model'];?> </br>
                                            Bahan Bakar: <?php echo $data['bb'];?> </br>
                                            Harga: Rp.<?php echo $data['harga'];?> </br> </p>
                                    </div>
                                </div>
                                <div class="submit-button pull-right">
                                    <a class="btn btn-raised btn-info gr" href="reply?no=<?php echo $no;?>"><i class="material-icons">reply</i>
                                        Reply</a>
                                    <a class="btn btn-raised btn-danger gr" href="../tersedia"><i
                                            class="material-icons">undo</i> Kembali</a>
                                </div>
                            </article>
                            <?php } ?>

                            <?php $query2=mysql_query("SELECT * FROM comments WHERE lists_id='$no' ORDER BY id ASC"); while($data2=mysql_fetch_array($query2)) { $suka=$data2['suka'];$taksuka=$data2['taksuka'];$total=$suka-$taksuka; ?>
                            <article class="well btn-group-sm clearfix">
                                <div class="topic-desc row-fluid clearfix">
                                    <div class="col-sm-12">
                                        <h4><?php echo $data2['judul'];?></h4>
                                        <div class="blog-meta clearfix">
                                            <small>Skor: <?php echo $total;?></small>
                                            <small><?php echo $data2['waktu'];?></small>
                                            <small><?php echo $data2['nama'];?></small>
                                        </div>
                                        <p><?php echo $data2['komentar'];?></p>
                                    </div>
                                </div><!-- end tpic-desc -->
                                <div class="topic-meta clearfix">
                                    <div class="pull-right">
                                        <a class="btn btn-default btn-fab btn-fab-mini"
                                            href="like?no=<?php echo $no;?>&kode=<?php echo $data2['id'];?>&aksi=like"
                                            data-toggle="tooltip" data-placement="bottom" title="Like">
                                            <i class="material-icons">thumb_up</i>
                                        </a>
                                        <a class="btn btn-default btn-fab btn-fab-mini"
                                            href="like?no=<?php echo $no;?>&kode=<?php echo $data2['id'];?>&aksi=dislike"
                                            data-toggle="tooltip" data-placement="bottom" title="Dislike">
                                            <i class="material-icons">thumb_down</i>
                                        </a>
                                    </div>
                                </div>
                            </article>
                            <?php } ?>

                    </aside>
                </div><!-- end col -->
            </div><!-- end row -->
    </div><!-- end container -->
    </section><!-- end section -->


    <script src="/assets/js/jquery.js"></script>
    <script src="/assets/js/bootstrap.js"></script>
    <script src="/assets/js/ripples.min.js"></script>
    <script src="/assets/js/material.min.js"></script>
    <script src="/assets/js/custom.js"></script>

</body>

</html>