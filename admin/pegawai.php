<?php

use function PHPSTORM_META\type;

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

    <title> Data Pegawai </title>

    <link href="../css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../datatables/datatables.css">
    <script type="text/javascript" src="../datatables/datatables.js"></script>
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>

</head>

<script type="text/javascript">
    $(document).ready(function() {
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
                            <h4 class="ms-3"><i class="fa fa-cubes"></i> Data Pegawai</h4>
                            <hr class="mt-3">
                        </div>


                        <!-- Awal Button Tambah Data -->
                        <div class="ms-4 col-sm-10 col-md-2">
                            <button type="button" class="btn btn-primary py-1" data-bs-toggle="modal" data-bs-target="#ModalTambahPegawai"> Tambah Data </button>
                        </div>
                        <!-- Akhir Button Tambah Data -->

                        <!-- Awal Menampilkan Notifikasi Berhasil Tambah / hapus / edit sebuah data -->
                        <?php
                        if (isset($_SESSION['berhasil'])) :
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
                            if (isset($_SESSION['gagal'])) :
                            ?>

                                <div class="ms-4 col-sm-10 col-md-11 mt-3">
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
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
                                                    <th>ID Pegawai</th>
                                                    <th>Username</th>
                                                    <th>Password</th>
                                                    <th>Status</th>
                                                    <th>Opsi</th>
                                                </tr>
                                            </thead>
                                            <!-- Akhir Mengatur Sebuah Tampilan Table -->

                                            <!-- Awal Menampilkan data dari database ke sebuah table -->

                                            <tbody>

                                                <?php
                                                $no = 1;
                                                $tampil = mysqli_query($koneksi, "Select * From pegawai ORDER BY id_pegawai ASC");
                                                while ($data = mysqli_fetch_array($tampil)) {
                                                    $id_pegawai = $data['id_pegawai'];
                                                    $username = $data['username'];
                                                    $password = $data['password'];
                                                    $status = $data['status'];


                                                ?>
                                                    <tr>
                                                        <td> <?= $no++; ?> </td>
                                                        <td> <?= $id_pegawai; ?></td>
                                                        <td> <?= $username; ?> </td>
                                                        <td>
                                                            <style hidden>
                                                                <?= $password; ?>
                                                            </style>
                                                        </td>
                                                        <td> <?= $status; ?> </td>
                                                        <td>
                                                            <a href="#" class="btn btn-warning py-1" data-bs-toggle="modal" data-bs-target="#ModalUbahPegawai<?= $id_pegawai ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                                                            <a href="#" class="btn btn-danger py-1" data-bs-toggle="modal" data-bs-target="#ModalHapusPegawai<?= $id_pegawai ?>"><i class="fa-solid fa-trash-can"></i></a>
                                                        </td>
                                                    </tr>
                                                    <!-- Awal Modal Ubah Data -->

                                                    <div class="modal fade" id="ModalUbahPegawai<?= $id_pegawai ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Ubah Data Daerah</h1>

                                                                </div>
                                                                <form method="POST" action="../function.php">
                                                                    <input type="hidden" name="id_pegawai" value="<?= $data['id_pegawai'] ?>">
                                                                    <div class="modal-body">

                                                                        <div class="mb-3">
                                                                            <label class="form-label">Username</label>
                                                                            <input type="text" class="form-control" name="username" value="<?= $data['username'] ?>" placeholder="Masukan Username" required>
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label class="form-label">Password</label>
                                                                            <input type="password" class="form-control" name="password" value="<?= $data['password'] ?>" placeholder="Masukan Password Anda">
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label class="form-label">Status</label>
                                                                            <select class="form-select" name="status" id="status">
                                                                                
                                                                            <?php
                                                                            $options = array("admin", "pegawai"); // daftar opsi ENUM
                                                                            foreach ($options as $option) {
                                                                            $selected = "";
                                                                            if ($option == "$status") { // menandai opsi yang sudah dipilih
                                                                                $selected = "selected";
                                                                            }
                                                                            echo "<option value='$option' $selected>$option</option>";
                                                                            }
                                                                            ?>
                                                                            </select>
                                                                            </div>

                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-danger py-1" data-bs-dismiss="modal">Batal</button>
                                                                        <button type="submit" class="btn btn-success py-1" name="ButtonUbah">Ubah</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Akhir Modal Ubah Data -->

                                                    <!-- Modal Hapus Data -->
                                                    <div class="modal fade" id="ModalHapusPegawai<?= $id_pegawai ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Hapus Data Pegawai</h1>

                                                                </div>
                                                                <form method="POST" action="../function.php">
                                                                    <input type="hidden" name="id_pegawai" value="<?= $data['id_pegawai'] ?>">

                                                                    <div class="modal-body">
                                                                        <h6 class="text-center">Apakah Anda Yakin Ingin Menghapus Data ini ? <br>
                                                                            <span class="text-danger"><?= $data['username'] ?> - <?= $data['status'] ?></span>
                                                                        </h6>

                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-danger py-1" data-bs-dismiss="modal">Batal</button>
                                                                        <button type="submit" class="btn btn-success py-1" name="ButtonHapus">Hapus</button>
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

                                            <!-- Awal Kode Otomatis -->
                                            <?php
                                            $query = mysqli_query($koneksi, "SELECT max(id_pegawai) as angkaTerbesar FROM pegawai");
                                            $data = mysqli_fetch_array($query);
                                            $idpgw = $data['angkaTerbesar'];

                                            $urut = (int) substr($idpgw, 3, 3);
                                            $urut++;

                                            $huruf = "USR";
                                            $idpgw = $huruf . sprintf("%03s", $urut);
                                            ?>
                                            <!-- Akhir Kode Otomatis -->

                                            <!-- Modal Tambah Data -->
                                            <div class="modal fade" id="ModalTambahPegawai" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Data Pegawai</h1>

                                                        </div>
                                                        <form method="POST" action="../function.php">
                                                            <div class="modal-body">


                                                                <div class="mb-3">
                                                                    <label class="form-label">ID Pegawai</label>
                                                                    <input type="text" class="form-control" name="id_pegawai" value="<?php echo $idpgw ?>" readonly>
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label class="form-label">Username</label>
                                                                    <input type="text" class="form-control" name="username" placeholder="Masukan Username Anda" required>
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label class="form-label">Password</label>
                                                                    <input type="password" class="form-control" name="password" placeholder="Masukan Password Anda" required>
                                                                </div>

                                                                <?php
                                                                $query = "SHOW COLUMNS FROM pegawai WHERE Field = 'status'";
                                                                $result = mysqli_query($koneksi, $query);
                                                                $row = mysqli_fetch_array($result);
                                                                $options = explode(",", str_replace("'", "", substr($row['Type'], 5, (strlen($row['Type'])-6))));
                                                                ?>
                                                                <div class="mb-3">
                                                                    <label class="form-label">Status</label>
                                                                    <select class="form-select" name="status" required>
                                                                        <option selected value="">Silahkan Pilih Status</option>
                                                                        <?php foreach ($options as $option): ?>
                                                                            <option value="<?php echo $option; ?>"><?php echo $option; ?></option>
                                                                             <?php endforeach; ?>  
                                                                    </select>
                                                                </div>


                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger py-1" data-bs-dismiss="modal">Batal</button>
                                                                <button type="submit" class="btn btn-success py-1" name="ButtonSimpan">Simpan</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Akhir Modal Tambah Data -->


                                        </table>
                                    </div>
                                </div>
                    </div>
            </main>
        </div>
</body>

</html>