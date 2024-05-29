<?php
$rooms_message = "";

if (isset($_POST["add_room"])) {
    $hotel_id = $_POST["hotel_id"];
    $room_number = $_POST["room_number"];
    $room_type = $_POST["room_type"];
    $price = $_POST["price"];
    $availability = $_POST["availability"];

    try {
        // Prepared statement untuk menghindari SQL injection
        $query = $dbh->prepare("INSERT INTO rooms (hotel_id, room_number, room_type, price, availability) VALUES (?, ?, ?, ?, ?)");
        $query->execute([$hotel_id, $room_number, $room_type, $price, $availability]);

        $rooms_message = "Room berhasil ditambahkan";
    } catch (PDOException $e) {
        // Jika terjadi kesalahan
        $rooms_message = "Gagal menambahkan room: " . $e->getMessage();
    }
}
