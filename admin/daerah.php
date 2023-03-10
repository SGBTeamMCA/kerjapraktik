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

        <title> Data Daerah </title>
        
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
                        
                        <br>
                        <br>
                        <div class="row">
                            <div class="ms-4 col-sm-10 col-md-11">
                            <h4 class="ms-3"><i class="fa fa-cubes"></i> Data Daerah</h4>
                            <hr class="mt-3" >
                            </div>
                        
                            
        <!-- Awal Button Tambah Data -->
                        <div class="ms-4 col-sm-10 col-md-2">
                        <button type="button" class="btn btn-primary py-1" data-bs-toggle="modal" data-bs-target="#ModalTambahDaerah"> Tambah Data </button>  
                        </div>
        <!-- Akhir Button Tambah Data --> 
                        
        <!-- Awal Menampilkan Notifikasi Berhasil Tambah / hapus / edit sebuah data -->                
                        <?php
                            if(isset($_SESSION['berhasil'])):
                        ?>
                        
                        <div class="ms-4 col-sm-10 col-md-11 mt-3">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>
                                <?php 
                                    echo $_SESSION['berhasil'];
                                ?>
                        </strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        
                        <?php
                        session_destroy();
                           endif; 
                        ?>
                        </div>
        <!-- Akhir Menampilkan Notifikasi Berhasil Tambah / hapus / edit sebuah data -->     

        <!-- Awal Menampilkan Notifikasi Gagal Tambah / hapus / edit sebuah data -->                
                    <?php
                            if(isset($_SESSION['gagal'])):
                        ?>
                        
                        <div class="ms-4 col-sm-10 col-md-11 mt-3">
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>
                                <?php 
                                    echo $_SESSION['gagal'];
                                ?>
                        </strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        
                        <?php
                        session_destroy();
                           endif; 
                        ?>
                        </div>
        <!-- Akhir Menampilkan Notifikasi Gagal Tambah / hapus / edit sebuah data -->     
        
        <!-- Awal Mengatur Sebuah Tampilan Table -->
                            
                            <div class=" table-responsive">
                            <div class="ms-4 col-md-11 mt-3">
                            <table id="tables" class="table table-hover table-sm">
                                <thead class="table-dark">
                                    
                                        <tr>
                                            <th>#</th>
                                            <th>Kode</th>
                                            <th>Provinsi</th>
                                            <th>Kode Site</th>
                                            <th>Wilayah</th>
                                            <th>Opsi</th>
                                        </tr>
                                        </thead>
        <!-- Akhir Mengatur Sebuah Tampilan Table -->  

    <!-- Awal Menampilkan data dari database ke sebuah table -->                   
                                    
                                    <tbody>
                                        
                                    <?php
                                    $no = 1;
                                    $tampil = mysqli_query($koneksi, "Select * From daerah ORDER BY kode_site ASC");
                                    while ($data = mysqli_fetch_array($tampil)) {
                                        $id_daerah = $data['id_daerah'];
                                        $kode = $data['kode'];
                                        $provinsi = $data['provinsi'];
                                        $kode_site = $data['kode_site'];
                                        $wilayah = $data['wilayah'];
                                        
                                        

                                    ?>
                                    <tr>
                                        <td> <?= $no++; ?> </td>
                                        <td> <?= $kode; ?></td>
                                        <td> <?= $provinsi; ?></td>
                                        <td> <?= $kode_site; ?> </td>
                                        <td> <?= $wilayah; ?> </td>
                                        <td>
                                            <a href="#" class="btn btn-warning py-1" data-bs-toggle="modal" data-bs-target="#ModalUbahDaerah<?= $id_daerah ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                                            <a href="#" class="btn btn-danger py-1" data-bs-toggle="modal" data-bs-target="#ModalHapusDaerah<?= $kode_site ?>"><i class="fa-solid fa-trash-can"></i></a>
                                        </td>
                                    </tr>
        <!-- Awal Modal Ubah Data -->
                                    
                            <div class="modal fade" id="ModalUbahDaerah<?= $id_daerah ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Ubah Data Daerah</h1>
    
                            </div>
                            <form method="POST" action="../function.php">
                             <input type="hidden" name="id_daerah" value="<?= $data['id_daerah'] ?>">   
                            <div class="modal-body">

                                <div class="mb-3">
                                <label class="form-label">Kode</label>
                                <input type="number" class="form-control" name="kode" value="<?= $data['kode'] ?>" id="kodeb-<?= $data['id_daerah'] ?>" readonly>
                                </div>

                                <div class="mb-3">
                                <label class="form-label">Provinsi</label>
                                <select name="provinsi" id="provinsi" class="form-select" onchange='changeValues("<?= $id_daerah; ?>", this.value)' required>
                                                                                <option selected value="<?= $data['provinsi'] ?>"><?= $data['provinsi'] ?></option>
                                                                                <?php
                                                                                $result = mysqli_query($koneksi, "select * from provinsi");
                                                                                $k          = "var kodeb = new Array();\n;";
                                                                                while ($row = mysqli_fetch_array($result)) {
                                                                                    echo '<option name="provinsi" data-id="' . addslashes($row['kode']) . '" value="' . $row['provinsi'] . '">' . $row['provinsi'] . '</option>';
                                                                                    $k .= "kode['" . $row['provinsi'] . "'] = {kode:'" . addslashes($row['kode']) . "'};\n";
                                                                                }
                                                                                ?>
                                                                            </select>
                                </div>
                                
                                <div class="mb-3">
                                <label class="form-label">Kode Site</label>
                                <input type="number" class="form-control" name="kode_site" value="<?= $data['kode_site'] ?>">
                                </div>

                                <div class="mb-3">
                                <label class="form-label">Wilayah</label>
                                <input type="text" class="form-control" name="wilayah" value="<?= $data['wilayah'] ?>" placeholder="Masukan Jabatan">
                                </div>
          
                            
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-danger py-1" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-success py-1" name="ButtonUbahDaerah">Ubah</button>
                            </div>
                            </form>
                    </div>
                 </div>
                </div>
        <!-- Akhir Modal Ubah Data -->                                

        <!-- Modal Hapus Data -->
                <div class="modal fade" id="ModalHapusDaerah<?= $kode_site ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Hapus Data Pegawai</h1>
    
                            </div>
                            <form method="POST" action="../function.php">
                             <input type="hidden" name="kode_site" value="<?= $data['kode_site'] ?>">   

                            <div class="modal-body">
                                        <h6 class="text-center">Apakah Anda Yakin Ingin Menghapus Data ini ? <br>
                                        <span class="text-danger"><?= $data['kode_site']?> - <?= $data['wilayah']?></span>
                                    </h6>

                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-danger py-1" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-success py-1" name="ButtonHapusDaerah">Hapus</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
        <!-- Akhir Modal Hapus Data -->
                                    <?php 
                                    };
                                ?>
                                    </tbody>
    <!-- Akhir Menampilkan data dari database ke sebuah table -->    

        <?php
                                            $query = mysqli_query($koneksi, "SELECT max(id_daerah) as angkaTerbesar FROM daerah");
                                            $data = mysqli_fetch_array($query);
                                            $idw = $data['angkaTerbesar'];

                                            $urut = (int) substr($idw, 3, 3);
                                            $urut++;

                                            $huruf = "IDW";
                                            $idw = $huruf . sprintf("%03s", $urut);
                                            ?>
        <!-- Modal Tambah Data -->
            <div class="modal fade" id="ModalTambahDaerah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Data Pegawai</h1>
    
                            </div>
                            <form method="POST" action="../function.php">
                            <div class="modal-body">

                            <input type="text" class="form-control" name="id_daerah" value="<?php echo $idw ?>" hidden readonly>
                            
                                <div class="mb-3">
                                <label class="form-label">Kode</label>
                                <input type="number" class="form-control" name="kode" id="kode" readonly>
                                </div>

                                <div class="mb-3">
                                <label class="form-label">Provinsi</label>
                                <select name="provinsi" id="provinsi" class="form-select" onchange='changeValue(this.value)' required>
                                <option selected value="">Silahkan Pilih Wilayah</option>
                                        <?php
                                        $result = mysqli_query($koneksi, "select * from provinsi");
                                        $p          = "var kode = new Array();\n;";
                                        while ($row = mysqli_fetch_array($result)) {
                                        echo '<option name="provinsi" value="' . $row['provinsi'] . '">' . $row['provinsi'] . '</option>';
                                        $p .= "kode['" . $row['provinsi'] . "'] = {kode:'" . addslashes($row['kode']) . "'};\n";
                                        }
                                        ?>
                                        </select>

                                </div>

                                <div class="mb-3">
                                <label class="form-label">Kode Site</label>
                                <input type="number" class="form-control" name="kode_site" placeholder="Masukan Kode Site wilayah">
                                </div>

                                <div class="mb-3">
                                <label class="form-label">Wilayah</label>
                                <input type="text" class="form-control" name="wilayah" placeholder="Masukan Nama Wilayah">
                                </div>
          
                            
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-danger py-1" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-success py-1" name="ButtonSimpanDaerah">Simpan</button>
                            </div>
                            </form>
                      </div>
                     </div>
                </div>
        <!-- Akhir Modal Tambah Data -->
        
                                        <script type="text/javascript">
                                                <?php
                                                echo $p;
                                                ?>

                                                function changeValue(id) {
                                                    document.getElementById('kode').value = kode[id].kode;
                                                };
                                            </script>
                                        <script type="text/javascript">
                                                <?php
                                                echo $k;
                                                ?>

                                                function changeValues(iddaerah, id) {
                                                    document.getElementById(`kodeb-${iddaerah}`).value = kode[id].kode;
                                                };
                                            </script>
                                </table>
                            </div>
                         </div>
                    </div>
                </main>  
            </div>                                                   
    </body>
</html>
