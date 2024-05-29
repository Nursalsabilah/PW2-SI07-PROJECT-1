<?php
$guests_message = "";

if (isset($_POST["add_guests"])) {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $no_telepon = $_POST["no_telepon"];

    try {
        // Prepared statement untuk menghindari SQL injection
        $query = $dbh->prepare("INSERT INTO guests (first_name, last_name, email, phone) VALUES (?, ?, ?, ?)");
        $query->execute([$first_name, $last_name, $email, $no_telepon]);

        $guests_message = "Guests berhasil ditambahkan";
    } catch (PDOException $e) {
        // Jika terjadi kesalahan
        $guests_message = "Gagal menambahkan guests: " . $e->getMessage();
    }
}
