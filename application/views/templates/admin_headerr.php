<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
        <?= $title; ?>
    </title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendors/jqvmap/dist/jqvmap.min.css">


    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="<?= base_url('assets/'); ?>images/logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="<?= base_url('assets/'); ?>images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="<?= base_url('admin'); ?>"> <i class="menu-icon fa fa-home"></i>Halaman
                            Admin </a>
                    </li>
                    <h3 class="menu-title">DATA MASTER</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user-circle-o"></i>MASTER</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="<?= base_url('guru'); ?>">MASTER GURU</a>
                            </li>
                            <li><i class="fa fa-table"></i><a href="<?= base_url('siswa'); ?>">MASTER SISWA</a></li>
                            <li><i class="fa fa-table"></i><a href="<?= base_url('jabatan'); ?>">MASTER JABATAN</a>
                            </li>
                            <li><i class="fa fa-table"></i><a href="<?= base_url('kelas'); ?>">MASTER KELAS</a></li>
                            <li><i class="fa fa-table"></i><a href="<?= base_url('mapel'); ?>">MASTER MATA
                                    PELAJARAN</a>
                            </li>
                            <li><i class="fa fa-table"></i><a href="<?= base_url('durasi'); ?>">MASTER DURASI</a></li>
                            <li><i class="fa fa-table"></i><a href="<?= base_url('rencana'); ?>">MASTER RENCANA
                                    PEMBELAJARAN</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">

                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="<?= base_url('assets/'); ?>images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>

                            <a class="nav-link" href="<?= base_url('auth/logout'); ?>"><i class="fa fa-power-off"></i>
                                Logout</a>
                        </div>
                    </div>

                </div>
            </div>
        </header><!-- /header -->
        <!-- Header-->