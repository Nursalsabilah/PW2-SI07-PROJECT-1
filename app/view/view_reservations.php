<?php
//1. Include database connection
require_once __DIR__ . "/../../config/dbkoneksi.php";

// Check if reservation ID is set
if (isset($_GET['id'])) {
    // Get reservation ID from URL parameter
    $reservation_id = $_GET['id'];

    // Query to get reservation details based on ID
    $stmt = $dbh->prepare('SELECT * FROM reservations WHERE id = ?');
    $stmt->execute([$reservation_id]);
    $reservation = $stmt->fetch(PDO::FETCH_ASSOC);
} else {
    // If no reservation ID is selected, redirect to the reservations data page
    header("Location: ../data/data_reservations.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Details</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Reservation Details</h2>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>Guest ID:</strong> <?php echo $reservation['guest_id']; ?></li>
                            <li class="list-group-item"><strong>Room ID:</strong> <?php echo $reservation['room_id']; ?></li>
                            <li class="list-group-item"><strong>Check In Date:</strong> <?php echo $reservation['check_in_date']; ?></li>
                            <li class="list-group-item"><strong>Check Out Date:</strong> <?php echo $reservation['check_out_date']; ?></li>
                            <!-- Add more details as needed -->
                        </ul>
                    </div>
                    <div class="card-footer text-center">
                        <a href="../../src/pages/data_reservations.php" class="btn btn-secondary">Back</a>
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