<?php
//1. Sertakan koneksi database
require_once __DIR__ . "/../../config/dbkoneksi.php";

// Periksa apakah parameter ID guest dipilih
if (isset($_GET['id'])) {
    // Dapatkan ID guest dari parameter URL
    $guest_id = $_GET['id'];

    // Query untuk mendapatkan detail guest berdasarkan ID
    $stmt = $dbh->prepare('SELECT * FROM guests WHERE id = ?');
    $stmt->execute([$guest_id]);
    $guest = $stmt->fetch(PDO::FETCH_ASSOC);
} else {
    // Jika tidak ada ID guest yang dipilih, kembalikan ke halaman data guests
    header("Location: ../data/data_guests.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Guest</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Detail Guest</h2>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>Nama Depan:</strong> <?php echo $guest['first_name']; ?></li>
                            <li class="list-group-item"><strong>Nama Belakang:</strong> <?php echo $guest['last_name']; ?></li>
                            <li class="list-group-item"><strong>Email:</strong> <?php echo $guest['email']; ?></li>
                            <li class="list-group-item"><strong>No. Telepon:</strong> <?php echo $guest['phone']; ?></li>
                            <!-- Tambahkan detail lainnya sesuai kebutuhan -->
                        </ul>
                    </div>
                    <div class="card-footer text-center">
                        <a href="../../src/pages/data_guests.php" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>