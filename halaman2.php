<?php
if(!isset($_POST['nama1'])){
    header('location:index.php');
}

$nama = $_POST["nama1"].$_POST["nama2"];
$alamat = $_POST["alamat"];
$kdpos = $_POST["kdpos"];
$date = $_POST["date"];
$tlp1 = $_POST["tlp1"];
$tlp2 = $_POST["tlp2"];
$email = $_POST["email"];

//opsional
$tgllahir = date("l, d M Y", strtotime($date));

// if($now == )
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS REKWEB - Halaman 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="hasil">
        <p>
            Terimakasih Anda sudah mendaftar Bpk/Ibu <strong><?= $_POST["nama1"]; ?> <?=$_POST["nama2"];?></strong> kami akan segera menginformasikan jadwal anda ke email <a href=""><?= $email; ?></a>
        </p>
        <h1>
            Berikut Data anda : <br>
            Nama : <strong><?= $_POST["nama1"]; ?> <?=$_POST["nama2"];?></strong><br>
            alamat : <?= $alamat;?><br>
            Kode Pos : <?= $kdpos ;?> <br>
            Tgl Lahir : <?= $tgllahir; ?><br>
            No HP : <?= $tlp1; ?> <br>
            Telephone : <?= $tlp2; ?>
        </h1>
        <a href="index.php">Kembali</a>
    </div>
</body>
</html>