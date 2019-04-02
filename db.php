<?php
$host = "arieserver.database.windows.net";
$user = "aarie33";
$pass = "Arie321321";
$db = "firstsql";
try {
    $conn = new PDO("sqlsrv:server = $host; Database = $db", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}
