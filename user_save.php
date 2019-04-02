<?php 
include 'db.php';
try {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $telp = $_POST['telp'];
    // Insert data
    $sql_insert = "INSERT INTO User (ID, Nama, Alamat, Email, Telp) 
                VALUES ('',?,?,?,?)";
    $stmt = $conn->prepare($sql_insert);
    $stmt->bindValue(1, $nama);
    $stmt->bindValue(2, $alamat);
    $stmt->bindValue(3, $email);
    $stmt->bindValue(4, $telp);
    $stmt->execute();
} catch(Exception $e) {
    echo "Failed: " . $e;
}
header('location:user.php');