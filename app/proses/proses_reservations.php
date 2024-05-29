<?php
$reservation_message = "";

if (isset($_POST["submit_reservation"])) {
    $guest_id = $_POST["guest_id"];
    $room_id = $_POST["room_id"];
    $check_in_date = $_POST["check_in_date"];
    $check_out_date = $_POST["check_out_date"];

    try {
        $query = $dbh->prepare("INSERT INTO reservations (guest_id, room_id, check_in_date, check_out_date) VALUES (?, ?, ?, ?)");
        $query->execute([$guest_id, $room_id, $check_in_date, $check_out_date]);

        $reservation_message = "Reservation berhasil ditambahkan";
    } catch (PDOException $e) {
        // Jika terjadi kesalahan
        $reservation_message = "Reservation gagal ditambahkan: " . $e->getMessage();
    }
}
