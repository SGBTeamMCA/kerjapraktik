<?php
include "../function.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />

        <title> Dashboard </title>
        
        <link href="../css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="../datatables/datatables.css">
        <script type="text/javascript" src="../datatables/datatables.js"></script>
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
        
    </head>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#tables').DataTable();
                });
    </script>

    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <button class="btn btn-link btn-lg order-1 order-lg-0 me-4 me-lg-0 ms-0 ps-3" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <a class="navbar-brand ms-2" href="index.php">Menu</a>
            <!-- Sidebar Toggle-->
            
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <a class="nav-item">
                    <a class="nav-link" id="navbarDropdown" href="../logout.php" role="button" aria-expanded="false"> Logout <i class="fas fa-sign-out-alt"></i></a>   
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>

                            <a class="nav-link" href="daerah.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Daerah
                            </a>

                            <a class="nav-link" href="dukcapil.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Pinjam Pakai Dukcapil Pusat
                            </a>

                            <a class="nav-link" href="apbd.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Pengadaan Daerah APBD
                            </a>
                            
                            <a class="nav-link" href="pegawai.php">
                                <div class="sb-nav-link-icon"><i class="fa fa-user"></i></div>
                                Pegawai
                            </a>

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Laporan
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="laporan_dukcapil.php">Dukcapil</a>
                                    <a class="nav-link" href="laporan_apbd.php">APBD</a>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-8">
                    <h1 class="mt-4">Dashboard</h1> 

                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card text-black mb-4">
                                    <div class="card-body">Jumlah Status Daerah
                                    <?php
                                        $hitungdaerah = "SELECT COUNT(*) AS Jumlah FROM daerah";
                                        $query = mysqli_query($koneksi, $hitungdaerah);
                                        $result = mysqli_fetch_array($query);
                                        echo '<h1>'.$result['Jumlah'].'</h1>';
                                    ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card text-black mb-4">
                                    <div class="card-body">Jumlah Status Dukcapil
                                    <?php
                                        $hitungdukcapil = "SELECT COUNT(*) AS Jumlah FROM pinjam_pakai_dukcapil_pusat";
                                        $query = mysqli_query($koneksi, $hitungdukcapil);
                                        $result = mysqli_fetch_array($query);
                                        echo '<h1>'.$result['Jumlah'].'</h1>';
                                    ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card  text-black mb-4">
                                    <div class="card-body">Jumlah Status APBD
                                    <?php
                                        $hitungapbd = "SELECT COUNT(*) AS Jumlah FROM pengadaan_daerah_apbd";
                                        $query = mysqli_query($koneksi, $hitungapbd);
                                        $result = mysqli_fetch_array($query);
                                        echo '<h1>'.$result['Jumlah'].'</h1>';
                                    ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card  text-black mb-4">
                                    <div class="card-body">Jumlah Status Pegawai 
                                    <?php
                                        $hitungpegawai = "SELECT COUNT(*) AS Jumlah FROM pegawai";
                                        $query = mysqli_query($koneksi, $hitungpegawai);
                                        $result = mysqli_fetch_array($query);
                                    ?>
                                    <div class=""> <h1><?php echo $result['Jumlah'] ?></h1></div>
                                    </div>
                                </div>
                            </div>
                                </div>
                            </div>
                        </div>
            </main>                
    </body>
</html>
