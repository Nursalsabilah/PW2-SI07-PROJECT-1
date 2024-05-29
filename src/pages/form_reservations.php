<?php
require_once __DIR__ . "/../../config/dbkoneksi.php";
require_once __DIR__ . "/../../app/proses/proses_reservations.php";

include '../layouts/header.php';
include '../layouts/sidebar.php';

// Query untuk mendapatkan daftar ruangan
$query_rooms = $dbh->query('SELECT id, room_number FROM rooms');

// Query untuk mendapatkan daftar tamu
$query_guests = $dbh->query('SELECT id, first_name FROM guests');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Reservations</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="content-wrapper bg-white">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 ">
                        <h1 class="m-0">Add Reservations</h1>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Data Reservations</li>
                        </ol>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-5 mx-auto">
                        <div class="card">
                            <div class="card-body">
                                <?php if (!empty($reservation_message)) : ?>
                                    <div class="alert alert-info" role="alert">
                                        <?= $reservation_message ?>
                                    </div>
                                <?php endif; ?>
                                <form method="post" action="">

                                    <div class="mb-3">
                                        <label for="guest_id" class="form-label">Guest</label>
                                        <select class="form-control" id="guest_id" name="guest_id" required>
                                            <option value="">Select Guest</option>
                                            <?php foreach ($query_guests as $guest) : ?>
                                                <option value="<?= $guest['id'] ?>"><?= $guest['first_name'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="room_id" class="form-label">Room</label>
                                        <select class="form-control" id="room_id" name="room_id" required>
                                            <option value="">Select Room</option>
                                            <?php foreach ($query_rooms as $room) : ?>
                                                <option value="<?= $room['id'] ?>"><?= $room['room_number'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="check_in_date" class="form-label">Check In Date</label>
                                        <input type="datetime-local" class="form-control" id="check_in_date" name="check_in_date" placeholder="Check In Date" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="check_out_date" class="form-label">Check Out Date</label>
                                        <input type="datetime-local" class="form-control" id="check_out_date" name="check_out_date" placeholder="Check In Date" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100" name="submit_reservation">Add Reservation</button>
                                </form>
                                <a href="../../src/pages/data_reservations.php" class="btn btn-secondary mt-3">Back to Reservation List</a>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!--/. container-fluid -->
        </section>
        <!-- /.content -->
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<?php
include '../layouts/footer.php';
?>