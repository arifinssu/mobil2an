<!doctype html>

<head>
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Mobil2an</title>
    <link rel="shortcut icon" href="assets/images/favicon-alt.ico" type="image/x-icon" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap-material-design.css">
    <link rel="stylesheet" href="assets/css/ripples.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/colors.css">
</head>

<body class="home_alt">

    <!-- LOADER -->
    <div id="preloader">
        <img class="preloader" src="assets/images/loader-alt.gif" alt="">
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
                                <li><a href="tersedia">Yang Tersedia</a></li>
                                <li class="active"><a href="tambah">Tambah Mobilnya</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>

        <section class="section">
            <div class="container">
                <div class="page-title text-center">
                    <h1>Tambah mobil2an Yuk</h1>
                    <ul class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li class="active">Tambah</li>
                    </ul>
                </div><!-- end title -->
            </div><!-- end container -->
        </section><!-- end section -->

        <section class="section lb">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="widget">
                            <div class="custom-module">
                                <h4 class="module-title"><i class="material-icons">note_add</i> Tambah Mobil</h4>

                                <div class="panel panel-primary">
                                    <div class="panel-body">
                                        <form class="sidebar-login" action="config/aksi" method="POST" enctype="multipart/form-data">
                                            <input type="text" class="form-control" name="merek" placeholder="Merek">
                                            <input type="text" class="form-control" name="model" placeholder="Model">
                                            <select type="text" class="form-control" name="bb">
                                                <option disabled selected>Bahan Bakar</option>
                                                <option value="Bensin">Bensin</option>
                                                <option value="Solar">Solar</option>
                                            </select>
                                            <input type="number" class="form-control" name="harga" placeholder="Harga">
                                            Upload gambar mobilnya! <input type="file" name="file">
                                            <input type="submit" class="btn btn-raised btn-info gr" name="tambah" value="Tambah">
                                        </form>
                                    </div>
                                </div>

                            </div><!-- end custom-module -->
                        </div><!-- end widget -->
                    </div>
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/ripples.min.js"></script>
    <script src="assets/js/material.min.js"></script>
    <script src="assets/js/custom.js"></script>

</body>

</html>