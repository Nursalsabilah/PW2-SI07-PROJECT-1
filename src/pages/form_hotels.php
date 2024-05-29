<?php
require_once __DIR__ . "/../../config/dbkoneksi.php";
require_once __DIR__ . "/../../app/proses/proses_hotels.php";

// Query untuk mendapatkan data games
$stmt_games = $dbh->query('SELECT * FROM hotels');
$games = $stmt_games->fetchAll(PDO::FETCH_ASSOC);

// Query untuk mendapatkan data users
$stmt_users = $dbh->query('SELECT * FROM hotels');
$users = $stmt_users->fetchAll(PDO::FETCH_ASSOC);

include '../layouts/header.php';
include '../layouts/sidebar.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Hotels</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="content-wrapper bg-white">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Add Hotels</h1>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Data Hotels</li>
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
                                <?php if (!empty($hotels_message)) : ?>
                                    <div class="alert alert-info" role="alert">
                                        <?= $hotels_message ?>
                                    </div>
                                <?php endif; ?>
                                <form method="post" action="">

                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="name" name="nama" placeholder="Name" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="address" class="form-label">Address</label>
                                        <textarea name="alamat" id="address" cols="30" rows="3" class="form-control"></textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label for="city" class="form-label">City</label>
                                        <input type="text" class="form-control" id="city" name="city" placeholder="City" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="country" class="form-label">Country</label>
                                        <input type="text" class="form-control" id="country" name="country" placeholder="Country" required>
                                    </div>

                                    <button type="submit" class="btn btn-primary w-100" name="add_hotels">Add Hotels</button>

                                </form>
                                <a href="../../src/pages/data_hotels.php" class="btn btn-secondary mt-3">Back to Hotels List</a>

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