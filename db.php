<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:arieserver.database.windows.net,1433; Database = firstsql", "aarie33", "Arie321321");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "aarie33@arieserver", "pwd" => "Arie321321", "Database" => "firstsql", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:arieserver.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
