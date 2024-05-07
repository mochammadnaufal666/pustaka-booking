<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Transaksi</title>
</head>
<body>
    <h2>Hasil Transaksi</h2>
    <?php
    
    if(isset($_GET['result'])) {
        $result = $_GET['result'];
        echo nl2br($result); 
    }
    ?>
</body>
</html>
