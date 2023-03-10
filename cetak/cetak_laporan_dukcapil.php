<?php

require('../fpdf/fpdf.php');

class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('../images/bg-02.png',15,8,33);
    // Arial bold 14
    $this->SetFont('Arial','B',14);
    // Nama instansi
    $this->Cell(70);
    $this->Cell(70,5,'KEMENTERIAN DALAM NEGERI',0,1,'C');

    $this->Cell(70);
    $this->Cell(70,10,'REPUBLIK INDONESIA',0,1,'C');

    $this->SetFont('Arial','B',12);
    $this->Cell(70);
    $this->Cell(70,5,'DIREKTORAT JENDRAL KEPENDUDUKAN DAN PENCATATAN SIPIL',0,1,'C');
    
    $this->SetFont('Arial','',10);
    $this->Cell(70);
    $this->Cell(70,5,'Jalan Raya Pasar Minggu Km. 19 Jakarta Selatan 12072',0,1,'C');
    
    $this->Cell(70);
    $this->Cell(70,5,'Telepon (021)79194075 (Hunting)Fax. (021) 7980655, 7949770',0,1,'C');
    
    //Garis Bawah
    $this->SetLineWidth(1);
    $this->Line(20,41,190,41);
}   

// Page footer
function Footer() {
    $this->SetY(-50);
    $this->SetFont('Times', '', 12);
    $this->Cell(0, 0, 'Jakarta, '.tgl_indo(date('Y-m-d')), 0, 0, 'R');
    $this->Cell(0, 10, 'KEPALA DIVISI ADMINISTRASI', 0, 0, 'R');

    $this->SetFont('Times','U',12);
    $this->Cell(-50, 50, 'Dra. Purwani Widayati', 0, 0, 'C');
    $this->SetFont('Times', '', 12);
    $this->Cell(0,60,'NIP. 19680129 199303 1 008',0,0,'R');
}


}

// Membuat File PDF
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);

$pdf->SetFont('Times','B',14);
$pdf->Cell(45);
$pdf->Cell(45,20,'LAPORAN PINJAM PAKAI DUKCAPIL PUSAT');
$pdf->Ln(4);

function tgl_indo($tanggal){
    $bulan = array(
        1 => 'Januari',
             'Februari',
             'Maret',
             'April',
             'Mei',
             'Juni',
             'Juli',
             'Agustus',
             'September',
             'Oktober',
             'November',
             'Desember'
    );
    $pecah = explode('-', $tanggal);
    return $pecah[2].' '.$bulan[(int)$pecah[1]].' '.$pecah[0];
}

//Tabel
$pdf->Ln(12);
$pdf->Cell(18,6);
$pdf->SetFont('Times','B','10');
$pdf->Cell(20,6,'NO',1,0,'C',0);
$pdf->Cell(25,6,'KODE SITE',1,0,'C',0);
$pdf->Cell(40,6,'Wilayah',1,0,'C',0);
$pdf->Cell(35,6,'Status',1,0,'C',0);
$pdf->Cell(35,6,'Tanggal',1,0,'C',0);

$pdf->SetFont('Times','','10');
include '../function.php';

$dari = mysqli_real_escape_string($koneksi, $_GET['dari_tgl']);
$sampai = mysqli_real_escape_string($koneksi, $_GET['sampai_tgl']);
$sql = mysqli_query($koneksi, "SELECT * FROM pinjam_pakai_dukcapil_pusat where tanggal BETWEEN '$dari' AND '$sampai' order by id_pinjam ASC");
$no = 1;
while($row = mysqli_fetch_array($sql)){
    $pdf->Ln(6);
    $pdf->Cell(18,6);
    $pdf->SetFont('Times','','10');
    $pdf->Cell(20,6,$no,1,0,'C',0);
    $pdf->Cell(25,6,$row['kode_site'],1,0,'C',0);
    $pdf->Cell(40,6,$row['wilayah'],1,0,'C',0);
    $pdf->Cell(35,6,$row['status'],1,0,'C',0);
    $pdf->Cell(35,6,date('d F Y',strtotime( $row['tanggal'])),1,0,'C',0);
    $no++;
}
$pdf->Ln(6);
$pdf->Output();
?>