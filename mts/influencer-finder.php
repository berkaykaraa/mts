<?php
include("db_conn.php");


$sorgu=mysqli_query($baglan,"SELECT hastaneler.hastane_adi FROM hastaneler WHERE hastaneler.hastane_id=201");
if(mysqli_num_rows($sorgu)>0){
    $hastane1=mysqli_fetch_row($sorgu);
}
$sorgu=mysqli_query($baglan,"SELECT hastaneler.hastane_adi FROM hastaneler WHERE hastaneler.hastane_id=202");
if(mysqli_num_rows($sorgu)>0){
    $hastane2=mysqli_fetch_row($sorgu);
}

$sorgu=mysqli_query($baglan,"SELECT hastaneler.hastane_adi FROM hastaneler WHERE hastaneler.hastane_id=203");
if(mysqli_num_rows($sorgu)>0){
    $hastane3=mysqli_fetch_row($sorgu);
}

$sorgu=mysqli_query($baglan,"SELECT hastaneler.hastane_adi FROM hastaneler WHERE hastaneler.hastane_id=204");
if(mysqli_num_rows($sorgu)>0){
    $hastane4=mysqli_fetch_row($sorgu);
}

$sorgu=mysqli_query($baglan,"SELECT hastaneler.hastane_adi FROM hastaneler WHERE hastaneler.hastane_id=205");
if(mysqli_num_rows($sorgu)>0){
    $hastane5=mysqli_fetch_row($sorgu);
}

$sorgu=mysqli_query($baglan,"SELECT hastaneler.hastane_adi FROM hastaneler WHERE hastaneler.hastane_id=206");
if(mysqli_num_rows($sorgu)>0){
    $hastane6=mysqli_fetch_row($sorgu);
}



?>





<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <title>Yavuz Biyomedikal Rapor Paneli</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="index.php">Yavuz Biyomedikal</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list" style="background-color:yellow">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                MENÜ
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>RAPORLAR</a>
                                <div id="submenu-1" class="collapse submenu">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-2" aria-controls="submenu-1-2">DURUM TAKİPLERİ</a>
                                            <div id="submenu-1-2" class="collapse submenu">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="index.php">SATIŞ SORUMLULARI</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="ecommerce-product.php">ÜRÜN LİSTESİ</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="dashboard-finance.php">FİNANS</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="dashboard-sales.php">SATIŞLAR</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-1" aria-controls="submenu-1-1">HASTANE İŞLEMLERİ</a>
                                            <div id="submenu-1-1" class="collapse submenu">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="influencer-finder.php">HASTANE ALIMLARI</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-6" aria-controls="submenu-6"><i class="fas fa-fw fa-file"></i>KULLANICI İŞLEMLERİ</a>
                                <div id="submenu-6" class="collapse submenu">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/login.php">GİRİŞ YAP</a>
                                        </li>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="influence-finder">
                <div class="container-fluid dashboard-content">
                    <!-- ============================================================== -->
                    <!-- pageheader -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h3 class="mb-2">HASTANE ALIM İŞLEMLERİ</h3>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">RAPORLAR</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">HASTANE ALIM İŞLEMLERİ</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- content -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- search bar  -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- end search bar  -->
                        <!-- ============================================================== -->
                        <div class="col-xl-9 col-lg-8 col-md-8 col-sm-12 col-12">
                            <!-- ============================================================== -->
                            <!-- card influencer one -->
                            <!-- ============================================================== -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-xl-9 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="user-avatar float-xl-left pr-4 float-none">
                                                <img src="logoes/hospital-1.png" alt="User Avatar" class="rounded-circle user-avatar-xl">
                                                    </div>
                                                <div class="pl-xl-3">
                                                    <div class="m-b-0">
                                                        <div class="user-avatar-name d-inline-block">
                                                            <h2 class="font-24 m-b-10"><?php echo $hastane1[0]?></h2>
                                                        </div>
                                                        <div class="rating-star d-inline-block pl-xl-2 mb-2 mb-xl-0">
                                                            <i class="fa fa-fw fa-star"></i>
                                                            <i class="fa fa-fw fa-star"></i>
                                                            <i class="fa fa-fw fa-star"></i>
                                                            <i class="fa fa-fw fa-star"></i>
                                                            <i class="fa fa-fw fa-star"></i>
                                                            <p class="d-inline-block text-dark">52 Ürün Satışı </p>
                                                        </div>
                                                    </div>
                                                    <div class="user-avatar-address">
                                                        <p class="mb-2"><i class="fa fa-map-marker-alt mr-2  text-primary"></i>Piri Reis, Bayramoğlu, Fatih Sultan Mehmet Cd. No:131, 41700 Darıca/Kocaeli</span>
                                                        </p>
                                                        <div class="mt-3">
                                                            <a href="#" class="mr-1 badge badge-light">Medikal gaz sistemleri kurulumu</a><a href="#" class="mr-1 badge badge-light">Bakım onarım işlemleri</a><a href="#" class="mr-1 badge badge-light">Medikal malzemeler tedariği</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="float-xl-right float-none mt-xl-0 mt-4">
                                                    <a href="#" class="btn btn-secondary">İletişime Geç</a>
                                                </div>
                                            </div>
                                        </div>
                                    
                                </div>
                                <!-- ============================================================== -->
                                <!-- end card influencer one -->
                                <!-- ============================================================== -->


                            <!-- ============================================================== -->
                            <!-- card influencer one -->
                            <!-- ============================================================== -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-xl-9 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="user-avatar float-xl-left pr-4 float-none">
                                                <img src="logoes/hospital-1.png" alt="User Avatar" class="rounded-circle user-avatar-xl">
                                                    </div>
                                                <div class="pl-xl-3">
                                                    <div class="m-b-0">
                                                        <div class="user-avatar-name d-inline-block">
                                                            <h2 class="font-24 m-b-10"><?php echo $hastane2[0]?></h2>
                                                        </div>
                                                        <div class="rating-star d-inline-block pl-xl-2 mb-2 mb-xl-0">
                                                            <i class="fa fa-fw fa-star"></i>
                                                            <i class="fa fa-fw fa-star"></i>
                                                            <i class="fa fa-fw fa-star"></i>
                                                            <i class="fa fa-fw fa-star"></i>
                                                            <i class="fa fa-fw fa-star"></i>
                                                            <p class="d-inline-block text-dark">112 Ürün Satışı</p>
                                                        </div>
                                                    </div>
                                                    <div class="user-avatar-address">
                                                        <p class="mb-2"><i class="fa fa-map-marker-alt mr-2  text-primary"></i>Dindoğru, Dindoğru mahallesi E-5 Yolu Üzeri, 434 Nolu sokak No:2, 39200 Babaeski/Kırklareli</span>
                                                        </p>
                                                        <div class="mt-3">
                                                            <a href="#" class="mr-1 badge badge-light">Bakım ve onarım</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="float-xl-right float-none mt-xl-0 mt-4">
                                                    <a href="#" class="btn btn-secondary">İletişime Geç</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <!-- ============================================================== -->
                                <!-- end card influencer one -->
                                <!-- ============================================================== -->
                                <!-- ============================================================== -->
                            <!-- card influencer one -->
                            <!-- ============================================================== -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-xl-9 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="user-avatar float-xl-left pr-4 float-none">
                                                <img src="logoes/hospital-1.png" alt="User Avatar" class="rounded-circle user-avatar-xl">
                                                    </div>
                                                <div class="pl-xl-3">
                                                    <div class="m-b-0">
                                                        <div class="user-avatar-name d-inline-block">
                                                            <h2 class="font-24 m-b-10"><?php echo $hastane3[0]?></h2>
                                                        </div>
                                                        <div class="rating-star d-inline-block pl-xl-2 mb-2 mb-xl-0">
                                                            <i class="fa fa-fw fa-star"></i>
                                                            <i class="fa fa-fw fa-star"></i>
                                                            <i class="fa fa-fw fa-star"></i>
                                                            <i class="fa fa-fw fa-star"></i>
                                                            <i class="fa fa-fw fa-star"></i>
                                                            <p class="d-inline-block text-dark">129 Ürün Satışı</p>
                                                        </div>
                                                    </div>
                                                    <div class="user-avatar-address">
                                                        <p class="mb-2"><i class="fa fa-map-marker-alt mr-2  text-primary"></i>Bademlik, 39010 Kırklareli Merkez/Kırklareli</span>
                                                        </p>
                                                        <div class="mt-3">
                                                            <a href="#" class="mr-1 badge badge-light">Bakım, onarım</a><a href="#" class="mr-1 badge badge-light">Medikal Gaz Tesisatı</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="float-xl-right float-none mt-xl-0 mt-4">
                                                    <a href="#" class="btn btn-secondary">İletişime Geç</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ============================================================== -->
                                <!-- end card influencer one -->
                                <!-- ============================================================== -->
                                <!-- ============================================================== -->
                            <!-- card influencer one -->
                            <!-- ============================================================== -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-xl-9 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="user-avatar float-xl-left pr-4 float-none">
                                                <img src="logoes/hospital-1.png" alt="User Avatar" class="rounded-circle user-avatar-xl">
                                                    </div>
                                                <div class="pl-xl-3">
                                                    <div class="m-b-0">
                                                        <div class="user-avatar-name d-inline-block">
                                                            <h2 class="font-24 m-b-10"><?php echo $hastane4[0]?></h2>
                                                        </div>
                                                        <div class="rating-star d-inline-block pl-xl-2 mb-2 mb-xl-0">
                                                            <i class="fa fa-fw fa-star"></i>
                                                            <i class="fa fa-fw fa-star"></i>
                                                            <i class="fa fa-fw fa-star"></i>
                                                            <i class="fa fa-fw fa-star"></i>
                                                            <i class="fa fa-fw fa-star"></i>
                                                            <p class="d-inline-block text-dark">17 Ürün Satışı</p>
                                                        </div>
                                                    </div>
                                                    <div class="user-avatar-address">
                                                        <p class="mb-2"><i class="fa fa-map-marker-alt mr-2  text-primary"></i>Fatih, Şht. Sercan Gedikli Sk. No:1, 22030 Edirne Merkez/Edirne</span>
                                                        </p>
                                                        <div class="mt-3">
                                                            <a href="#" class="mr-1 badge badge-light">Bakım ve onarım</a><a href="#" class="mr-1 badge badge-light">hastane ekipmanlarının tedariği</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="float-xl-right float-none mt-xl-0 mt-4">
                                                    <a href="#" class="btn btn-secondary">İletişime Geç</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                             <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-xl-9 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="user-avatar float-xl-left pr-4 float-none">
                                                <img src="logoes/hospital-1.png" alt="User Avatar" class="rounded-circle user-avatar-xl">
                                                    </div>
                                                <div class="pl-xl-3">
                                                    <div class="m-b-0">
                                                        <div class="user-avatar-name d-inline-block">
                                                            <h2 class="font-24 m-b-10"><?php echo $hastane5[0]?></h2>
                                                        </div>
                                                        <div class="rating-star d-inline-block pl-xl-2 mb-2 mb-xl-0">
                                                            <i class="fa fa-fw fa-star"></i>
                                                            <i class="fa fa-fw fa-star"></i>
                                                            <i class="fa fa-fw fa-star"></i>
                                                            <i class="fa fa-fw fa-star"></i>
                                                            <i class="fa fa-fw fa-star"></i>
                                                            <p class="d-inline-block text-dark">71 Ürün Satışı</p>
                                                        </div>
                                                    </div>
                                                    <div class="user-avatar-address">
                                                        <p class="mb-2"><i class="fa fa-map-marker-alt mr-2  text-primary"></i>Kavaklı, Hacı Ahmet Kırı Mevkii No:1, 43300 Kayaarası/Tavşanlı/Kütahya</span>
                                                        </p>
                                                        <div class="mt-3">
                                                            <a href="#" class="mr-1 badge badge-light">Bakım ve onarım</a><a href="#" class="mr-1 badge badge-light">Medikal malzemelerin tedariği</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="float-xl-right float-none mt-xl-0 mt-4">
                                                    <a href="#" class="btn btn-secondary">İletişime Geç</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-xl-9 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="user-avatar float-xl-left pr-4 float-none">
                                                <img src="logoes/hospital-1.png" alt="User Avatar" class="rounded-circle user-avatar-xl">
                                                    </div>
                                                <div class="pl-xl-3">
                                                    <div class="m-b-0">
                                                        <div class="user-avatar-name d-inline-block">
                                                            <h2 class="font-24 m-b-10"><?php echo $hastane6[0]?></h2>
                                                        </div>
                                                        <div class="rating-star d-inline-block pl-xl-2 mb-2 mb-xl-0">
                                                            <i class="fa fa-fw fa-star"></i>
                                                            <i class="fa fa-fw fa-star"></i>
                                                            <i class="fa fa-fw fa-star"></i>
                                                            <i class="fa fa-fw fa-star"></i>
                                                            <i class="fa fa-fw fa-star"></i>
                                                            <p class="d-inline-block text-dark">95 Ürün Satışı</p>
                                                        </div>
                                                    </div>
                                                    <div class="user-avatar-address">
                                                        <p class="mb-2"><i class="fa fa-map-marker-alt mr-2  text-primary"></i>Merkez/Bolu</span>
                                                        </p>
                                                        <div class="mt-3">
                                                            <a href="#" class="mr-1 badge badge-light">Bakım ve onarım</a><a href="#" class="mr-1 badge badge-light">Hastabaşı montaj, bakır boru tesisatı</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="float-xl-right float-none mt-xl-0 mt-4">
                                                    <a href="#" class="btn btn-secondary">İletişime Geç</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            
                                <!-- ============================================================== -->
                                <!-- end card influencer one -->
                                <!-- ============================================================== -->
                                

                                <!-- ============================================================== -->
                                <!-- end content -->
                                <!-- ============================================================== -->
                            </div>
                            <!-- ============================================================== -->
                            <!-- influencer sidebar  -->
                            <!-- ============================================================== -->
                                                     <!-- ============================================================== -->
                            <!-- end influencer sidebar  -->
                            <!-- ============================================================== -->
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- footer -->
                    <!-- ============================================================== -->
                    
                    <!-- ============================================================== -->
                    <!-- end footer -->
                    <!-- ============================================================== -->
                </div>
                <!-- ============================================================== -->
                <!-- end wrapper  -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- end main wrapper  -->
            <!-- ============================================================== -->
            <!-- Optional JavaScript -->
            <!-- jquery 3.3.1 -->
            <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
            <!-- bootstap bundle js -->
            <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
            <!-- slimscroll js -->
            <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
            <!-- main js -->
            <script src="assets/libs/js/main-js.js"></script>
</body>
 
</html>