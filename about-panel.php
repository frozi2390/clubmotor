<?php 
include 'koneksi.php';
session_start();
if (!isset($_SESSION['username'])){
    header("location:form-login.php");
    exit();
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <title>Anak Langit Club</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description"
        content="Free Datta Able Admin Template come up with latest Bootstrap 4 framework with basic components, form elements and lots of pre-made layout options" />
    <meta name="keywords"
        content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, datta able, datta able bootstrap admin template, free admin theme, free dashboard template" />
    <meta name="author" content="CodedThemes" />

    <!-- Favicon icon -->
    <link rel="icon" href="./assets/img/logo.png" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="asset-panel/fonts/fontawesome/css/fontawesome-all.min.css">
    <!-- animation css -->
    <link rel="stylesheet" href="asset-panel/plugins/animation/css/animate.min.css">
    <!-- vendor css -->
    <link rel="stylesheet" href="asset-panel/css/style.css">
    <!-- data table -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

</head>

<body>
    <!-- [ Pre-loader ] start -->
    <!-- [ Pre-loader ] End -->
    <!-- [ navigation menu ] start -->
    <nav class="pcoded-navbar">
        <div class="navbar-wrapper">
            <div class="navbar-brand header-logo">
                <a href="index-panel.php" class="b-brand">

                    <img src="./assets/img/logo.png" alt="" width="50" height="50">
                    <span class="b-title">Anak Langit</span>
                </a>
                <a class="mobile-menu" id="mobile-collapse" href="javascript:"><span></span></a>
            </div>
            <div class="navbar-content scroll-div">
                <ul class="nav pcoded-inner-navbar">
                    <li class="nav-item pcoded-menu-caption">
                        <label>Navigation</label>
                    </li>
                    <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project"
                        class="nav-item active">
                        <a href="index-panel.php" class="nav-link "><span class="pcoded-micon"><i
                                    class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                    </li>

                    <li class="nav-item pcoded-menu-caption">
                        <label>Menu Edit</label>
                    </li>
                    <li data-username="form elements advance componant validation masking wizard picker select"
                        class="nav-item">
                        <a href="about-panel.php" class="nav-link "><span class="pcoded-micon"><i
                                    class="far fa-address-card"></i></span><span class="pcoded-mtext">About</span></a>
                    </li>
                    <li data-username="Table bootstrap datatable footable" class="nav-item">
                        <a href="profil-panel.php" class="nav-link "><span class="pcoded-micon"><i
                                    class="fas fa-user"></i></span><span class="pcoded-mtext">Profil</span></a>
                    </li>
                    <li data-username="Table bootstrap datatable footable" class="nav-item">
                        <a href="artikel-panel.php" class="nav-link "><span class="pcoded-micon"><i
                                    class="fas fa-newspaper"></i></span><span class="pcoded-mtext">Artikel</span></a>
                    </li>
                    <li data-username="Table bootstrap datatable footable" class="nav-item">
                        <a href="galeri-panel.php" class="nav-link "><span class="pcoded-micon"><i
                                    class="fas fa-images"></i></span><span class="pcoded-mtext">Galeri</span></a>
                    </li>
                    <li data-username="Table bootstrap datatable footable" class="nav-item">
                        <a href="produk-panel.php" class="nav-link "><span class="pcoded-micon"><i
                                    class="fas fa-shopping-bag"></i></span><span class="pcoded-mtext">Produk</span></a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- [ navigation menu ] end -->

    <!-- [ Header ] start -->
    <header class="navbar pcoded-header navbar-expand-lg navbar-light">
        <div class="m-header">
            <a class="mobile-menu" id="mobile-collapse1" href="javascript:"><span></span></a>
            <a href="index-panel.php" class="b-brand">
                <div class="b-bg">
                    <i class="feather icon-trending-up"></i>
                </div>
                <span class="b-title">Datta Able</span>
            </a>
        </div>
        <a class="mobile-menu" id="mobile-header" href="javascript:">
            <i class="feather icon-more-horizontal"></i>
        </a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li><a href="javascript:" class="full-screen" onclick="javascript:toggleFullScreen()"><i
                            class="feather icon-maximize"></i></a></li>
                <li class="nav-item dropdown">
                    <a class="dropdown-toggle" href="javascript:" data-toggle="dropdown">Dropdown</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="javascript:">Action</a></li>
                        <li><a class="dropdown-item" href="javascript:">Another action</a></li>
                        <li><a class="dropdown-item" href="javascript:">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <div class="main-search">
                        <div class="input-group">
                            <input type="text" id="m-search" class="form-control" placeholder="Search . . .">
                            <a href="javascript:" class="input-group-append search-close">
                                <i class="feather icon-x input-group-text"></i>
                            </a>
                            <span class="input-group-append search-btn btn btn-primary">
                                <i class="feather icon-search input-group-text"></i>
                            </span>
                        </div>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li>
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="javascript:" data-toggle="dropdown"><i
                                class="icon feather icon-bell"></i></a>
                        <div class="dropdown-menu dropdown-menu-right notification">
                            <div class="noti-head">
                                <h6 class="d-inline-block m-b-0">Notifications</h6>
                                <div class="float-right">
                                    <a href="javascript:" class="m-r-10">mark as read</a>
                                    <a href="javascript:">clear all</a>
                                </div>
                            </div>
                            <ul class="noti-body">
                                <li class="n-title">
                                    <p class="m-b-0">NEW</p>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        <img class="img-radius" src="asset-panel/images/user/avatar-1.jpg"
                                            alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>John Doe</strong><span class="n-time text-muted"><i
                                                        class="icon feather icon-clock m-r-10"></i>30 min</span></p>
                                            <p>New ticket Added</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="n-title">
                                    <p class="m-b-0">EARLIER</p>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        <img class="img-radius" src="asset-panel/images/user/avatar-2.jpg"
                                            alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>Joseph William</strong><span class="n-time text-muted"><i
                                                        class="icon feather icon-clock m-r-10"></i>30 min</span></p>
                                            <p>Prchace New Theme and make payment</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        <img class="img-radius" src="asset-panel/images/user/avatar-3.jpg"
                                            alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>Sara Soudein</strong><span class="n-time text-muted"><i
                                                        class="icon feather icon-clock m-r-10"></i>30 min</span></p>
                                            <p>currently login</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="noti-footer">
                                <a href="javascript:">show all</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="dropdown drp-user">
                        <a href="javascript:" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon feather icon-settings"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-notification">
                            <div class="pro-head">
                                <img src="asset-panel/images/user/avatar-1.jpg" class="img-radius"
                                    alt="User-Profile-Image">
                                <span>John Doe</span>
                                <a href="exit.php" class="dud-logout" title="Logout">
                                    <i class="feather icon-log-out"></i>
                                </a>
                            </div>
                            <ul class="pro-body">
                                <li><a href="javascript:" class="dropdown-item"><i class="feather icon-settings"></i>
                                        Settings</a></li>
                                <li><a href="javascript:" class="dropdown-item"><i class="feather icon-user"></i>
                                        Profile</a></li>
                                <li><a href="message.html" class="dropdown-item"><i class="feather icon-mail"></i> My
                                        Messages</a></li>
                                <li><a href="index.php" class="dropdown-item"><i class="feather icon-lock"></i> Lock
                                        Screen</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </header>
    <!-- [ Header ] end -->

    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper container">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <!-- [ breadcrumb ] start -->
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary mb-3 button-about" data-toggle="modal"
                        data-target="#exampleModal">
                        <i class="far fa-plus-square"></i>Tambah Data
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Judul About</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form class="user" action="tambah/tambah-about.php" method="POST">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="judul"
                                                name="judul" aria-describedby="emailHelp" placeholder="Judul">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1"></label>
                                            <textarea class="form-control" placeholder="Isi Konten"
                                                id="exampleFormControlTextarea1" name="isi" rows="3"></textarea>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="submit" name="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>

                    <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>Judul</th>
                                <th>Isi Konten</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        
                        <tbody>
                        <?php 
                        include "koneksi.php";
                        $data = mysqli_query($koneksi,"SELECT * FROM about");
                        while ($tampil = mysqli_fetch_array($data)){
                        
                        ?>
                            <tr>
                                <td><?= $tampil['judul']; ?></td>
                                <td><?= $tampil['isi']; ?></td>
                                <td>
                                    <a href="hapus/hapus-about.php?id_about=<?= $tampil['id_about']?>" class="btn btn-danger">Hapus</a>
                                </td>

                            </tr>
                            <?php 
                          }
                        ?>

                        </tbody>

                    </table>
                    <!-- [ breadcrumb ] end -->
                    <div class="main-body">
                        <div class="page-wrapper">
                            <!-- [ Main Content ] start -->

                            <!-- [ Main Content ] end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->

    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 11]>
        <div class="ie-warning">
            <h1>Warning!!</h1>
            <p>You are using an outdated version of Internet Explorer, please upgrade
               <br/>to any of the following web browsers to access this website.
            </p>
            <div class="iew-container">
                <ul class="iew-download">
                    <li>
                        <a href="http://www.google.com/chrome/">
                            <img src="asset-panel/images/browser/chrome.png" alt="Chrome">
                            <div>Chrome</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.mozilla.org/en-US/firefox/new/">
                            <img src="asset-panel/images/browser/firefox.png" alt="Firefox">
                            <div>Firefox</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.opera.com">
                            <img src="asset-panel/images/browser/opera.png" alt="Opera">
                            <div>Opera</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.apple.com/safari/">
                            <img src="asset-panel/images/browser/safari.png" alt="Safari">
                            <div>Safari</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="asset-panel/images/browser/ie.png" alt="">
                            <div>IE (11 & above)</div>
                        </a>
                    </li>
                </ul>
            </div>
            <p>Sorry for the inconvenience!</p>
        </div>
    <![endif]-->
    <!-- Warning Section Ends -->

    <!-- Required Js -->
    <script src="asset-panel/js/vendor-all.min.js"></script>
    <script src="asset-panel/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="asset-panel/js/pcoded.min.js"></script>

    <!-- data table -->
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script>
    new DataTable('#example');
    </script>

</body>

</html>