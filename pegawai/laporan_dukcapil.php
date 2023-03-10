<?php
include "..//function.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />

        <title>Laporan Pinjam Pakai Dukcapil Pusat</title>

        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css">
        <link href="../css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">

        
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
        <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
        
    </head>
    
    <script>
  	$( function() {
        $( "#tambahtanggal" ).datepicker({
        dateFormat: "yy-mm-dd"
            });
        } );
 
 </script>
  <script>
  	$( function() {
        $( "#ubahtanggal" ).datepicker({
        dateFormat: "yy-mm-dd"
            });
        } );
 
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
                        MCA Project
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-8">
                        
                        <br>
                        <br>
                        <div class="row">
                            <div class="ms-4 col-sm-10 col-md-11">
                            <h4 class="ms-3"><i class="fa fa-cubes"></i> Laporan Pinjam Pakai Dukcapil Pusat </h4>
                            <hr class="mt-3" >
                            </div>
    <div class="ms-4 col-sm-10 col-md-6">    
    <form method="post">
    <td>Dari Tanggal</td>
    <td><input type="date" name="dari_tgl" required="required"></td>
    <td>Sampai Tanggal</td>
    <td><input type="date" name="sampai_tgl" required="required"></td>
    <td><input type="submit" class="btn btn-primary" name="filter" value="Filter"></td>
    </div> 
        <!-- Awal Mengatur Sebuah Tampilan Table -->
                            
                            <div class=" table-responsive">
                            <div class="ms-4 col-md-11 mt-3">
                            <table id="tables" class="table table-hover table-sm">
                                <thead class="table-dark">
                                    
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Site</th>
                                            <th>Wilayah</th>
                                            <th>Status</th>
                                            <th>Tanggal</th>
                                        </tr>
                                        </thead>
        <!-- Akhir Mengatur Sebuah Tampilan Table -->  

    <!-- Awal Menampilkan data dari database ke sebuah table -->                   
                                    
                                    <tbody>
                                        
                                    <?php
                                    $no = 1;
                                    if (isset($_POST['filter'])) {
                                        $dari = $_POST['dari_tgl'];
                                        $sampai = $_POST['sampai_tgl'];
                                        $sql1 = mysqli_query($koneksi, "SELECT * FROM pinjam_pakai_dukcapil_pusat where tanggal BETWEEN '$dari' AND '$sampai' order by id_pinjam ASC");
        
                                    } else {
                                        $sql1 = mysqli_query($koneksi, "SELECT * FROM pinjam_pakai_dukcapil_pusat where tanggal");
                                      }
                                      while ($data = mysqli_fetch_array($sql1)) {
                                        $id_pengadaan = $data['id_pinjam'];
                                        $kode_site = $data['kode_site'];
                                        $wilayah = $data['wilayah'];
                                        $status = $data['status'];
                                        $tanggal = $data['tanggal'];
                                        

                                    ?>
                                    <tr>
                                        <td> <?php echo $no++; ?> </td>
                                        <td> <?php echo $kode_site; ?></td>
                                        <td> <?php echo $wilayah; ?></td>
                                        <<td> <?php echo $status; ?> </td>
                                        <td> <?php echo date('d F Y', strtotime($data['tanggal'])); ?> </td>
                                    </tr>
                                    <?php
                                    };
                                    ?>

                                </table>
                                <hr>
                                <a type="button" class="btn btn-success btn-sm ms-2 col-sm-10 col-md-2"
   href="..//cetak/cetak_laporan_dukcapil.php?dari_tgl=<?php echo $dari; ?>&&sampai_tgl=<?php echo $sampai; ?>"
   target="_blank">
   Cetak Laporan</a>  
                            </div>
                         </div>
                    </div>
                </main>  
            </div> 
</body>
</html>
