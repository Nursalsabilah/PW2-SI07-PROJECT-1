<?php
require_once __DIR__ . "/../../config/dbkoneksi.php";

// Jika parameter id tidak tersedia
if (!isset($_GET['id'])) {
    header("Location: ../../src/pages/data_hotels.php");
    exit;
}

// Mendapatkan id dari parameter GET
$id = $_GET['id'];

// Query untuk mendapatkan data hotel berdasarkan id
$stmt = $dbh->prepare("SELECT * FROM hotels WHERE id = :id");
$stmt->bindParam(':id', $id);
$stmt->execute();
$hotel = $stmt->fetch(PDO::FETCH_ASSOC);

// Jika hotel dengan id yang diberikan tidak ditemukan
if (!$hotel) {
    header("Location: ../../src/pages/data_hotels.php");
    exit;
}

// Pesan hasil update hotel
$update_message = '';

// Jika form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $country = $_POST['country'];

    // Query untuk melakukan update hotel
    $sql = "UPDATE hotels SET name = :name, address = :address, city = :city, country = :country WHERE id = :id";
    $stmt = $dbh->prepare($sql);

    // Binding parameter
    $stmt->bindParam(':name', $name, PDO::PARAM_STR);
    $stmt->bindParam(':address', $address, PDO::PARAM_STR);
    $stmt->bindParam(':city', $city, PDO::PARAM_STR);
    $stmt->bindParam(':country', $country, PDO::PARAM_STR);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);

    // Eksekusi statement
    if ($stmt->execute()) {
        $update_message = "Hotel data updated successfully.";
    } else {
        $update_message = "An error occurred. Hotel data could not be updated.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Hotel</title>
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
                        <h2 class="ms-auto text-center">Update Hotel</h2>
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
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" value="<?= $hotel['name'] ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="address" class="form-label">Address</label>
                                        <input type="text" class="form-control" id="address" name="address" value="<?= $hotel['address'] ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="city" class="form-label">City</label>
                                        <input type="text" class="form-control" id="city" name="city" value="<?= $hotel['city'] ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="country" class="form-label">Country</label>
                                        <input type="text" class="form-control" id="country" name="country" value="<?= $hotel['country'] ?>" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100" name="submit_hotel">Update Hotel</button>
                                </form>
                                <a href="../../src/pages/data_hotels.php" class="btn btn-secondary mt-3">Back to Hotels List</a>
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