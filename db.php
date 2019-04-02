<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:arieserver.database.windows.net,1433; Database = firstsql", "aarie33", "Arie321321");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    print("koneksi lancar");
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}
