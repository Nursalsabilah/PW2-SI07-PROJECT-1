<?php
require_once __DIR__ . "/../../config/dbkoneksi.php";

// Check if the 'id' parameter is set
if (!isset($_GET['id'])) {
    header("Location: ../../src/pages/data_reservations.php");
    exit;
}

// Get the ID from the URL parameter
$id = $_GET['id'];

// Query to get reservation data based on ID
$stmt = $dbh->prepare("SELECT * FROM reservations WHERE id = :id");
$stmt->bindParam(':id', $id);
$stmt->execute();
$reservation = $stmt->fetch(PDO::FETCH_ASSOC);

// If reservation with the given ID is not found
if (!$reservation) {
    header("Location: ../../src/pages/data_reservations.php");
    exit;
}

// Message for update result
$update_message = '';

// If the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $guest_id = $_POST['guest_id'];
    $room_id = $_POST['room_id'];
    $check_in_date = $_POST['check_in_date'];
    $check_out_date = $_POST['check_out_date'];

    // Query to update reservation
    $sql = "UPDATE reservations SET guest_id = :guest_id, room_id = :room_id, check_in_date = :check_in_date, check_out_date = :check_out_date WHERE id = :id";
    $stmt = $dbh->prepare($sql);

    // Bind parameters
    $stmt->bindParam(':guest_id', $guest_id, PDO::PARAM_INT);
    $stmt->bindParam(':room_id', $room_id, PDO::PARAM_INT);
    $stmt->bindParam(':check_in_date', $check_in_date);
    $stmt->bindParam(':check_out_date', $check_out_date);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);

    // Execute statement
    if ($stmt->execute()) {
        $update_message = "Reservation data updated successfully.";
    } else {
        $update_message = "An error occurred. Reservation data could not be updated.";
    }
}

// Query to get list of guests
$query_guests = $dbh->query('SELECT id, first_name FROM guests');

// Query to get list of rooms
$query_rooms = $dbh->query('SELECT id, room_number FROM rooms');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Reservation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper bg-white">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid mt-2">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <h2 class="ms-auto text-center">Update Reservation</h2>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-4 mx-auto">
                        <div class="card">
                            <div class="card-body">
                                <?php if (!empty($update_message)) : ?>
                                    <div class="alert alert-info" role="alert">
                                        <?= $update_message ?>
                                    </div>
                                <?php endif; ?>
                                <form method="post" action="">
                                    <div class="mb-3">
                                        <label for="guest_id" class="form-label">Guest</label>
                                        <select class="form-control" id="guest_id" name="guest_id" required>
                                            <option value="">Select Guest</option>
                                            <?php foreach ($query_guests as $guest) : ?>
                                                <option value="<?= $guest['id'] ?>" <?= $guest['id'] == $reservation['guest_id'] ? 'selected' : '' ?>><?= $guest['first_name'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="room_id" class="form-label">Room</label>
                                        <select class="form-control" id="room_id" name="room_id" required>
                                            <option value="">Select Room</option>
                                            <?php foreach ($query_rooms as $room) : ?>
                                                <option value="<?= $room['id'] ?>" <?= $room['id'] == $reservation['room_id'] ? 'selected' : '' ?>><?= $room['room_number'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="check_in_date" class="form-label">Check In Date</label>
                                        <input type="datetime-local" class="form-control" id="check_in_date" name="check_in_date" value="<?= date('Y-m-d\TH:i', strtotime($reservation['check_in_date'])) ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="check_out_date" class="form-label">Check Out Date</label>
                                        <input type="datetime-local" class="form-control" id="check_out_date" name="check_out_date" value="<?= date('Y-m-d\TH:i', strtotime($reservation['check_out_date'])) ?>" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100" name="submit_reservation">Update Reservation</button>
                                </form>
                                <a href="../../src/pages/data_reservations.php" class="btn btn-secondary mt-3">Back to Reservations List</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>