<?php
require_once __DIR__ . "/../../config/dbkoneksi.php";

// Check if the 'id' parameter is set
if (!isset($_GET['id'])) {
    header("Location: ../../src/pages/data_rooms.php");
    exit;
}

// Get the ID from the URL parameter
$id = $_GET['id'];

// Query to get room data based on ID
$stmt = $dbh->prepare("SELECT * FROM rooms WHERE id = :id");
$stmt->bindParam(':id', $id);
$stmt->execute();
$room = $stmt->fetch(PDO::FETCH_ASSOC);

// If room with the given ID is not found
if (!$room) {
    header("Location: ../../src/pages/data_rooms.php");
    exit;
}

// Query to get list of hotels
$query_hotels = $dbh->query('SELECT id, name FROM hotels');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Room</title>
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
                        <h2 class="ms-auto text-center">Update Room</h2>
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
                                        <label for="hotel_id" class="form-label">Hotel</label>
                                        <select class="form-control" id="hotel_id" name="hotel_id" required>
                                            <option value="">Pilih Hotel</option>
                                            <?php foreach ($query_hotels as $hotel) : ?>
                                                <option value="<?= $hotel['id'] ?>" <?php if ($hotel['id'] == $room['hotel_id']) echo 'selected'; ?>>
                                                    <?= $hotel['name'] ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="room_number" class="form-label">Room Number</label>
                                        <input type="text" class="form-control" id="room_number" name="room_number" value="<?= $room['room_number'] ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="room_type" class="form-label">Room Type</label>
                                        <input type="text" class="form-control" id="room_type" name="room_type" value="<?= $room['room_type'] ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="price" class="form-label">Price</label>
                                        <input type="text" class="form-control" id="price" name="price" value="<?= $room['price'] ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="availability" class="form-label">Availability</label>
                                        <input type="text" class="form-control" id="availability" name="availability" value="<?= $room['availability'] ?>" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100" name="submit_room">Update Room</button>
                                </form>
                                <a href="../../src/pages/data_rooms.php" class="btn btn-secondary mt-3">Back to Rooms List</a>
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