<?php
$host ="localhost";
$user ="root";
$password ="";
$database="ukk-perpusdigital";
$koneksi=new mysqli($host, $user, $password, $database);
if ($koneksi->connect_error) {
    die("koneksi gagal: " .$koneksi->connect_error);
}
?>