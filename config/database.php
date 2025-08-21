<?php
$conn = new mysqli('localhost', 'root', '', 'sertifikasi');
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
session_start();