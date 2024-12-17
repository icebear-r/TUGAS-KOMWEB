<?php
// Mengambil nilai
$name = $_POST["name"];
$email = $_POST["email"];
$kelamin = $_POST["kelamin"];
$tanggallahir = $_POST["tanggallahir"];
$umur = $_POST["umur"];

echo("Nama: {$name} <br>");
echo("Email: {$email} <br>");
echo("Jenis Kelamin: {$kelamin} <br>");
echo("Tanggal Lahir: {$tanggallahir} <br>");
echo("Umur kamu saat ini: {$umur} <br>");
?>
