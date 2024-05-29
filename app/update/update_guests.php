<?php
require_once __DIR__ . "/../../config/dbkoneksi.php";

// Jika parameter id tidak tersedia
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    header("Location: ../../src/pages/data_guests.php");
    exit;
}

// Mendapatkan id dari parameter GET
$id = $_GET['id'];

// Query untuk mendapatkan data guest berdasarkan id
$stmt = $dbh->prepare("SELECT * FROM guests WHERE id = :id");
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();
$guest = $stmt->fetch(PDO::FETCH_ASSOC);

// Jika guest dengan id yang diberikan tidak ditemukan
if (!$guest) {
    header("Location: ../../src/pages/data_guests.php");
    exit;
}

// Pesan hasil update guest
$update_message = '';

// Jika form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = htmlspecialchars($_POST['first_name']);
    $last_name = htmlspecialchars($_POST['last_name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);

    // Query untuk melakukan update guest
    $sql = "UPDATE guests SET first_name = :first_name, last_name = :last_name, email = :email, phone = :phone WHERE id = :id";
    $stmt = $dbh->prepare($sql);

    // Binding parameter
    $stmt->bindParam(':first_name', $first_name, PDO::PARAM_STR);
    $stmt->bindParam(':last_name', $last_name, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':phone', $phone, PDO::PARAM_STR);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);

    // Eksekusi statement
    if ($stmt->execute()) {
        $update_message = "Guest data updated successfully.";
    } else {
        $update_message = "An error occurred. Guest data could not be updated.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Guest</title>
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
                        <h2 class="ms-auto text-center">Update Guest</h2>
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
                                        <label for="first_name" class="form-label">First Name</label>
                                        <input type="text" class="form-control" id="first_name" name="first_name" value="<?= $guest['first_name'] ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="last_name" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" id="last_name" name="last_name" value="<?= $guest['last_name'] ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" value="<?= $guest['email'] ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="phone" class="form-label">Phone</label>
                                        <input type="text" class="form-control" id="phone" name="phone" value="<?= $guest['phone'] ?>" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100" name="submit_guest">Update Guest</button>
                                </form>
                                <a href="../../src/pages/data_guests.php" class="btn btn-secondary mt-3">Back to Guests List</a>
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