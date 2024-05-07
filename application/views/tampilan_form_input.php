<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Transaksi</title>
</head>
<body>
    <h2>Form Input Transaksi</h2>
    <form action="submit_transaksi.php" method="post">
        <label for="nama_pembeli">Nama Pembeli:</label><br>
        <input type="text" id="nama_pembeli" name="nama_pembeli" required><br><br>
        
        <label for="no_hp">Nomor HP:</label><br>
        <input type="text" id="no_hp" name="no_hp" required><br><br>
        
        <label for="merk_sepatu">Merk Sepatu:</label><br>
        <select id="merk_sepatu" name="merk_sepatu" required>
            <option value="">Pilih Merk</option>
            <option value="Nike">Nike - Rp 375,000</option>
            <option value="Adidas">Adidas - Rp 300,000</option>
            <option value="Kickers">Kickers - Rp 250,000</option>
            <option value="Eiger">Eiger - Rp 275,000</option>
            <option value="Bucherri">Bucherri - Rp 400,000</option>
        </select><br><br>
        
        <label for="ukuran_sepatu">Ukuran Sepatu:</label><br>
        <select id="ukuran_sepatu" name="ukuran_sepatu" required>
            <option value="">Pilih Ukuran</option>
            <?php for ($i = 32; $i <= 44; $i++) { ?>
                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
            <?php } ?>
        </select><br><br>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>

