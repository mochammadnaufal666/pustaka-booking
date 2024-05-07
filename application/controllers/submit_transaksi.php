<?php

require_once('TransaksiModel.php');



$nama_pembeli = $_POST['Nama_Pembeli'];
$no_hp = $_POST['No_Hp'];
$merk_sepatu = $_POST['Merk_Sepatu'];
$ukuran_sepatu = $_POST['Ukuran_Sepatu'];


$model = new TransaksiModel();
$result = $model->inputTransaksi($nama_pembeli, $no_hp, $merk_sepatu, $ukuran_sepatu);


('Location: hasil_transaksi.php?result=' . $result);
exit();
?>
