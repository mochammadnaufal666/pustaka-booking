<?php
class TransaksiModel {
    
    private $harga_sepatu = array(
        'Nike' => 375000,
        'Adidas' => 300000,
        'Kickers' => 250000,
        'Eiger' => 275000,
        'Bucherri' => 400000
    );

    
    public function inputTransaksi($nama_pembeli, $no_hp, $merk_sepatu, $ukuran_sepatu) {
        $harga = $this->harga_sepatu[$merk_sepatu]; 
        $total_harga = $harga; 

        
        $result = "Nama Pembeli: $nama_pembeli\n";
        $result .= "Nomor HP: $no_hp\n";
        $result .= "Merk Sepatu: $merk_sepatu\n";
        $result .= "Ukuran Sepatu: $ukuran_sepatu\n";
        $result .= "Total Harga: Rp " . number_format($total_harga, 0, ',', '.');

        return $result;
    }
}
?>
