<?php
// Include database connection
require_once __DIR__ . "/../../config/dbkoneksi.php";

// Check if room ID is set
if (isset($_GET['id'])) {
    // Get room ID from URL parameter
    $room_id = $_GET['id'];

    // Query to get room details based on ID
    $stmt = $dbh->prepare('SELECT * FROM rooms WHERE id = ?');
    $stmt->execute([$room_id]);
    $room = $stmt->fetch(PDO::FETCH_ASSOC);
} else {
    // If no room ID is selected, redirect to the rooms data page
    header("Location: ../data/data_rooms.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Details</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Room Details</h2>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>Hotel ID:</strong> <?php echo $room['hotel_id']; ?></li>
                            <li class="list-group-item"><strong>Room Number:</strong> <?php echo $room['room_number']; ?></li>
                            <li class="list-group-item"><strong>Room Type:</strong> <?php echo $room['room_type']; ?></li>
                            <li class="list-group-item"><strong>Price:</strong> <?php echo $room['price']; ?></li>
                            <li class="list-group-item"><strong>Availability:</strong> <?php echo $room['availability']; ?></li>
                            <!-- Add more details as needed -->
                        </ul>
                    </div>
                    <div class="card-footer text-center">
                        <a href="../../src/pages/data_rooms.php" class="btn btn-secondary">Back</a>
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