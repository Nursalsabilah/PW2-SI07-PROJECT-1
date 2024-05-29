<?php
//1. sertakan koneksi database
require_once __DIR__ . "/../../config/dbkoneksi.php";
include '../layouts/header.php';
include '../layouts/sidebar.php';

$query = $dbh->query('SELECT * FROM reservations');
$nomor = 1;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Reservations</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Data Reservations</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Data Reservations</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <!-- Default box -->
                        <div class="card">
                            <div class="card-header">
                                <a href="form_reservations.php"><button class="btn btn-primary mb-1">Add Reservations</button></a>
                                <table class="table table-head-fixed table-responsive-lg table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Guest ID</th>
                                            <th>Room ID</th>
                                            <th>Check In Date</th>
                                            <th>Check out Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($query as $row) {
                                            echo "<tr>";
                                            echo "<td>" . $nomor++ . "</td>";
                                            echo "<td>" . $row['guest_id'] . "</td>";
                                            echo "<td>" . $row['room_id'] . "</td>";
                                            echo "<td>" . $row['check_in_date'] . "</td>";
                                            echo "<td>" . $row['check_out_date'] . "</td>";
                                            echo "<td>
                                            <a href='../../app/view/view_reservations.php?id=" . $row['id'] . "' class='btn btn-secondary btn-sm mr-2 mb-2'>View</a>
                                            <a href='../../app/update/update_reservations.php?id=" . $row['id'] . "' class='btn btn-warning btn-sm mr-2 mb-2'>Update</a>
                                            <a href='#' onclick='return confirmDelete(" . $row['id'] . ")' class='btn btn-danger btn-sm mb-2'>Delete</a>
                                            </td>";
                                            echo "</tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                </div>
        </section>
        <!-- /.content -->
    </div>

    <script>
        function confirmDelete(id) {
            var result = confirm("Apakah Anda yakin ingin menghapus data ini?");
            if (result) {
                window.location = '../../app/delete/delete.php?table=reservations&id=' + id;
            }
            return false;
        }
    </script>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>

<?php
include '../layouts/footer.php';
