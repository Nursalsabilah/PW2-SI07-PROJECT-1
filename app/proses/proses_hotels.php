<?php
$hotels_message = "";

if (isset($_POST["add_hotels"])) {
    $name = $_POST["nama"];
    $address = $_POST["alamat"];
    $city = $_POST["city"];
    $country = $_POST["country"];

    try {
        // Prepared statement untuk menghindari SQL injection
        $query = $dbh->prepare("INSERT INTO hotels (name, address, city, country) VALUES (?, ?, ?, ?)");
        $query->execute([$name, $address, $city, $country]);

        $hotels_message = "Hotel berhasil ditambahkan";
    } catch (PDOException $e) {
        // Jika terjadi kesalahan
        $hotels_message = "Gagal menambahkan hotel: " . $e->getMessage();
    }
}
