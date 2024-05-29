<?php
require_once __DIR__ . "/../../config/dbkoneksi.php";
require_once __DIR__ . "/../../app/proses/proses_rooms.php";

include '../layouts/header.php';
include '../layouts/sidebar.php';

// Query untuk mendapatkan daftar hotel
$query_hotels = $dbh->query('SELECT id, name FROM hotels');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Rooms</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper bg-white">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Add Rooms</h1>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Data Rooms</li>
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
                                <?php if (!empty($rooms_message)) : ?>
                                    <div class="alert alert-info" role="alert">
                                        <?= $rooms_message ?>
                                    </div>
                                <?php endif; ?>
                                <form method="post" action="">
                                    <div class="mb-3">
                                        <label for="hotel_id" class="form-label">Hotel</label>
                                        <select class="form-control" id="hotel_id" name="hotel_id" required>
                                            <option value="">Pilih Hotel</option>
                                            <?php foreach ($query_hotels as $hotel) : ?>
                                                <option value="<?= $hotel['id'] ?>"><?= $hotel['name'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="room_number" class="form-label">Room Number</label>
                                        <input type="number" class="form-control" id="room_number" name="room_number" placeholder="Room Number" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="room_type" class="form-label">Room Type</label>
                                        <input type="text" class="form-control" id="room_type" name="room_type" placeholder="Room Type" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="price" class="form-label">Price</label>
                                        <input type="number" class="form-control" id="price" name="price" placeholder="Price" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="availability" class="form-label">Availability</label>
                                        <input type="text" class="form-control" id="availability" name="availability" placeholder="Availability" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100" name="add_room">Add Room</button>
                                </form>
                                <a href="../../src/pages/data_rooms.php" class="btn btn-secondary mt-3">Back to Rooms List</a>

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