<?php
session_start();

$koneksi = mysqli_connect("localhost", "root", "", "adm_indonesia");

// Button Simpan Data Pegawai

	if (isset($_POST['ButtonSimpan'])) {
	$id_pegawai = $_POST['id_pegawai'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$status = $_POST['status'];

	$simpan = mysqli_query($koneksi, "Insert into pegawai (id_pegawai,username,password,status) values ('$id_pegawai','$username','$password','$status')");
	if ($simpan) {
		$_SESSION['berhasil'] = "Berhasil Simpan Data";
		header('location:admin/pegawai.php');
	} else {
		$_SESSION['gagal'] = "Gagal Simpan Data";
		header('location:admin/pegawai.php');
	}
	}

// Button Ubah Data Pegawai
	if (isset($_POST['ButtonUbah'])) {

	$ubahdata = mysqli_query($koneksi, "update pegawai set
									username = '$_POST[username]',
									password= '$_POST[password]',
									status= '$_POST[status]'
									WHERE id_pegawai = '$_POST[id_pegawai]'
									");

	if ($ubahdata) {
		$_SESSION['berhasil'] = "Berhasil Mengubah Data";
		header('location:admin/pegawai.php');
	} else {
		$_SESSION['gagal'] = "Gagal Ubah Data";
		header('location:admin/pegawai.php');
	}
	}

// Button Hapus Data Pegawai
	if (isset($_POST['ButtonHapus'])) {

	$hapusdata = mysqli_query($koneksi, "delete from pegawai where id_pegawai='$_POST[id_pegawai]' ");

	if ($hapusdata) {
		$_SESSION['berhasil'] = "Berhasil Hapus Data";
		header('location:admin/pegawai.php');
	} else {
		$_SESSION['gagal'] = "Gagal Hapus Data";
		header('location:admin/pegawai.php');
	}
	}


// Button Simpan Data Daerah

	if (isset($_POST['ButtonSimpanDaerah'])) {
	$id_daerah = $_POST['id_daerah'];
	$kode = $_POST['kode'];
	$provinsi = $_POST['provinsi'];
	$kode_site = $_POST['kode_site'];
	$wilayah = $_POST['wilayah'];

	$simpandatadaerah = mysqli_query($koneksi, "Insert into daerah (id_daerah,kode, provinsi, kode_site, wilayah) values ('$id_daerah','$kode','$provinsi','$kode_site','$wilayah')");
	if ($simpandatadaerah) {
		$_SESSION['berhasil'] = "Berhasil Simpan Data";
		header('location:admin/daerah.php');
	} else {
		$_SESSION['gagal'] = "Gagal Hapus Data";
		header('location:admin/daerah.php');
	}
	}
// Button Ubah Data Daerah
	if (isset($_POST['ButtonUbahDaerah'])) {

	$ubahdatadaerah = mysqli_query($koneksi, "update daerah set
									kode = '$_POST[kode]',
									provinsi = '$_POST[provinsi]',
									wilayah = '$_POST[wilayah]',
									kode_site = '$_POST[kode_site]'
									WHERE id_daerah = '$_POST[id_daerah]'
									");

	if ($ubahdatadaerah) {
		$_SESSION['berhasil'] = "Berhasil Mengubah Data";
		header('location:admin/daerah.php');
	} else {
		$_SESSION['gagal'] = "Gagal Mengubah Data";
		header('location:admin/daerah.php');
	}
	}

// Button Hapus Data Daerah

	if (isset($_POST['ButtonHapusDaerah'])) {

	$hapusdatadaerah = mysqli_query($koneksi, "delete from daerah where kode_site ='$_POST[kode_site]' ");

	if ($hapusdatadaerah) {
		$_SESSION['berhasil'] = "Berhasil Hapus Data";
		header('location:admin/daerah.php');
	} else {
		$_SESSION['gagal'] = "Gagal Hapus Data";
		header('location:admin/daerah.php');
	}
	}

// Button Simpan Data Dukcapil

	if (isset($_POST['ButtonSimpanDukcapil'])) {
	$id_pinjam = $_POST['id_pinjam'];
	$kode_site = $_POST['kode_site'];
	$wilayah = $_POST['wilayah'];
	$status = $_POST['status'];
	$tanggal = $_POST['tanggal'];


	$tambahdata = mysqli_query($koneksi, "Insert into pinjam_pakai_dukcapil_pusat (id_pinjam,kode_site,wilayah,status,tanggal) values ('$id_pinjam','$kode_site','$wilayah','$status','$tanggal')");
	if ($tambahdata) {
		$_SESSION['berhasil'] = "Berhasil Simpan Data";
		header('location:admin/dukcapil.php');
	} else {
		$_SESSION['gagal'] = "Gagal Simpan Data";
		header('location:admin/dukcapil.php');
	}
	}
// Button Ubah Data Dukcapil
	if (isset($_POST['ButtonUbahDukcapil'])) {

	$ubahdataDukcapil = mysqli_query($koneksi, "update pinjam_pakai_dukcapil_pusat set
									kode_site = '$_POST[kode_site]',
									wilayah = '$_POST[wilayah]',
									status = '$_POST[status]',
									tanggal = '$_POST[tanggal]'
									WHERE id_pinjam = '$_POST[id_pinjam]'
									");

	if ($ubahdataDukcapil) {
		$_SESSION['berhasil'] = "Berhasil Mengubah Data";
		header('location:admin/dukcapil.php');
	} else {
		$_SESSION['gagal'] = "Gagal Mengubah Data";
		header('location:admin/dukcapil.php');
	}
	}

// Button Hapus Data Dukcapil

	if (isset($_POST['ButtonHapusDukcapil'])) {

	$hapusdata = mysqli_query($koneksi, "delete from pinjam_pakai_dukcapil_pusat where id_pinjam ='$_POST[id_pinjam]' ");

	if ($hapusdata) {
		$_SESSION['berhasil'] = "Berhasil Hapus Data";
		header('location:admin/dukcapil.php');
	} else {
		$_SESSION['gagal'] = "Gagal Hapus Data";
		header('location:admin/dukcapil.php');
	}
	}


// Button Simpan Data APBD

	if (isset($_POST['ButtonSimpanAPBD'])) {
	$id_pengadaan = $_POST['id_pengadaan'];
	$kode_site = $_POST['kode_site'];
	$wilayah = $_POST['wilayah'];
	$status = $_POST['status'];
	$tanggal = $_POST['tanggal'];


	$tambahdata = mysqli_query($koneksi, "Insert into pengadaan_daerah_apbd (id_pengadaan,kode_site,wilayah,status,tanggal) values ('$id_pengadaan','$kode_site','$wilayah','$status','$tanggal')");
	if ($tambahdata) {
		$_SESSION['berhasil'] = "Berhasil Simpan Data";
		header('location:admin/apbd.php');
	} else {
		$_SESSION['gagal'] = "Gagal Simpan Data";
		header('location:admin/apbd.php');
	}
	}
// Button Ubah Data APBD
	if (isset($_POST['ButtonUbahAPBD'])) {

	$ubahdataAPBD = mysqli_query($koneksi, "update pengadaan_daerah_apbd set
									kode_site = '$_POST[kode_site]',
									wilayah = '$_POST[wilayah]',
									status = '$_POST[status]',
									tanggal = '$_POST[tanggal]'
									WHERE id_pengadaan = '$_POST[id_pengadaan]'
									");

	if ($ubahdataAPBD) {
		$_SESSION['berhasil'] = "Berhasil Mengubah Data";
		header('location:admin/apbd.php');
	} else {
		$_SESSION['gagal'] = "Gagal Mengubah Data";
		header('location:admin/apbd.php');
	}
	}

// Button Hapus Data APBD

	if (isset($_POST['ButtonHapusAPBD'])) {

	$hapusdata = mysqli_query($koneksi, "delete from pengadaan_daerah_apbd where id_pengadaan ='$_POST[id_pengadaan]' ");

	if ($hapusdata) {
		$_SESSION['berhasil'] = "Berhasil Hapus Data";
		header('location:admin/apbd.php');
	} else {
		$_SESSION['gagal'] = "Gagal Hapus Data";
		header('location:admin/apbd.php');
	}
	}

// Button Simpan Data Dukcapil pegawai

	if (isset($_POST['pegawaiButtonSimpanDukcapil'])) {
	$id_pinjam = $_POST['id_pinjam'];
	$kode_site = $_POST['kode_site'];
	$wilayah = $_POST['wilayah'];
	$status = $_POST['status'];
	$tanggal = $_POST['tanggal'];


	$tambahdata = mysqli_query($koneksi, "Insert into pinjam_pakai_dukcapil_pusat (id_pinjam,kode_site,wilayah,status,tanggal) values ('$id_pinjam','$kode_site','$wilayah','$status','$tanggal')");
	if ($tambahdata) {
		$_SESSION['berhasil'] = "Berhasil Simpan Data";
		header('location:admin/dukcapil.php');
	} else {
		$_SESSION['gagal'] = "Gagal Simpan Data";
		header('location:admin/dukcapil.php');
	}
	}
// Button Ubah Data Dukcapil pegawai
	if (isset($_POST['pegawaiButtonUbahDukcapil'])) {

	$ubahdataDukcapil = mysqli_query($koneksi, "update pinjam_pakai_dukcapil_pusat set
									kode_site = '$_POST[kode_site]',
									wilayah = '$_POST[wilayah]',
									status = '$_POST[status]',
									tanggal = '$_POST[tanggal]'
									WHERE id_pinjam = '$_POST[id_pinjam]'
									");

	if ($ubahdataDukcapil) {
		$_SESSION['berhasil'] = "Berhasil Mengubah Data";
		header('location:pegawai/dukcapil.php');
	} else {
		$_SESSION['gagal'] = "Gagal Mengubah Data";
		header('location:pegawai/dukcapil.php');
	}
	}

// Button Hapus Data Dukcapil pegawai

	if (isset($_POST['pegawaiButtonHapusDukcapil'])) {

	$hapusdata = mysqli_query($koneksi, "delete from pinjam_pakai_dukcapil_pusat where id_pinjam ='$_POST[id_pinjam]' ");

	if ($hapusdata) {
		$_SESSION['berhasil'] = "Berhasil Hapus Data";
		header('location:pegawai/dukcapil.php');
	} else {
		$_SESSION['gagal'] = "Gagal Hapus Data";
		header('location:pegawai/dukcapil.php');
	}
	}

// Button Simpan Data APBD

	if (isset($_POST['pegawaiButtonSimpanAPBD'])) {
		$id_pengadaan = $_POST['id_pengadaan'];
		$kode_site = $_POST['kode_site'];
		$wilayah = $_POST['wilayah'];
		$status = $_POST['status'];
		$tanggal = $_POST['tanggal'];


		$tambahdata = mysqli_query($koneksi, "Insert into pengadaan_daerah_apbd (id_pengadaan,kode_site,wilayah,status,tanggal) values ('$id_pengadaan','$kode_site','$wilayah','$status','$tanggal')");
		if ($tambahdata) {
			$_SESSION['berhasil'] = "Berhasil Simpan Data";
			header('location:admin/apbd.php');
		} else {
			$_SESSION['gagal'] = "Gagal Simpan Data";
			header('location:admin/apbd.php');
		}
		}

// Button Ubah Data APBD pegawai
if (isset($_POST['pegawaiButtonUbahAPBD'])) {

	$ubahdataAPBD = mysqli_query($koneksi, "update pengadaan_daerah_apbd set
									kode_site = '$_POST[kode_site]',
									wilayah = '$_POST[wilayah]',
									status = '$_POST[status]',
									tanggal = '$_POST[tanggal]'
									WHERE id_pengadaan = '$_POST[id_pengadaan]'
									");


	if ($ubahdataAPBD) {
		$_SESSION['berhasil'] = "Berhasil Mengubah Data";
		header('location:pegawai/apbd.php');
	} else {
		$_SESSION['gagal'] = "Gagal Mengubah Data";
		header('location:pegawai/apbd.php');
	}
}

// Button Hapus Data APBD pegawai

if (isset($_POST['pegawaiButtonHapusAPBD'])) {

	$hapusdata = mysqli_query($koneksi, "delete from pengadaan_daerah_apbd where id_pengadaan ='$_POST[id_pengadaan]' ");

	if ($hapusdata) {
		$_SESSION['berhasil'] = "Berhasil Hapus Data";
		header('location:pegawai/apbd.php');
	} else {
		$_SESSION['gagal'] = "Gagal Hapus Data";
		header('location:pegawai/apbd.php');
	}
}
