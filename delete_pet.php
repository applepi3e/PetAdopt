<?php
include 'db_connect.php';

if (!isset($_GET['id'])) {
    echo "<script>alert('No pet selected.'); window.location='index.php';</script>";
    exit;
}

$id = $_GET['id'];
$pet = mysqli_query($conn, "SELECT * FROM pets WHERE id=$id");

if (mysqli_num_rows($pet) == 0) {
    echo "<script>alert('Pet not found.'); window.location='index.php';</script>";
    exit;
}

$row = mysqli_fetch_assoc($pet);
$photoPath = "uploads/" . $row['photo'];

if (file_exists($photoPath)) {
    unlink($photoPath); // delete image file
}

mysqli_query($conn, "DELETE FROM pets WHERE id=$id");

echo "<script>alert('Pet record deleted successfully!'); window.location='index.php';</script>";
?>
