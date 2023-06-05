<?php
// memanggil library FPDF
require('fpdf.php');
include 'koneksi.php';

// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l', 'mm', 'A5');

// membuat halaman baru
$pdf->AddPage();

// setting jenis font yang akan digunakan
$pdf->SetFont('Helvetica', 'BU', 16);

// mencetak string 
$pdf->Cell(190, 7, 'SMA BINA BANGSA JAYA 23', 0, 1, 'C');
$pdf->SetFont('Helvetica', 'B', 12);

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10, 7, '', 0, 1);

$pdf->Cell(190, 7, 'DAFTAR SISWA KELAS MIPA-01', 0, 1, 'C');

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10, 5, '', 0, 1);

$pdf->SetFont('Helvetica', 'B', 10);
$pdf->Cell(25, 7, 'NIS', 1, 0, 'C');
$pdf->Cell(35, 7, 'NAMA', 1, 0, 'C');
$pdf->Cell(35, 7, 'JENIS KELAMIN', 1, 0, 'C');
$pdf->Cell(40, 7, 'NOMOR TELEPON', 1, 0, 'C');
$pdf->Cell(55, 7, 'ALAMAT', 1, 1, 'C');

$pdf->SetFont('Helvetica', '', 10);

$siswa = mysqli_query($connection, "SELECT * FROM siswa");
while ($row = mysqli_fetch_array($siswa)){
    $pdf->Cell(25, 6, $row['nis'], 1, 0, 'C');
    $pdf->Cell(35, 6, $row['nama'], 1, 0, 'C');
    $pdf->Cell(35, 6, $row['jenis_kelamin'], 1, 0, 'C');
    $pdf->Cell(40, 6, $row['telp'], 1, 0, 'C'); 
    $pdf->Cell(55, 6, $row['alamat'], 1, 1, 'C'); 
}

$pdf->Output();
?>