<?php
// SQLSRV Extension Sample Code (optional, remove if not needed)
$connectionInfo = array("UID" => "azuresql", "pwd" => "NI@12345", "Database" => "abcuni", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:it21372094abcuni.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);

// PDO Connection
try {
    $pdo = new PDO("sqlsrv:server = tcp:it21372094abcuni.database.windows.net,1433; Database = abcuni", "azuresql", "NI@12345");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}
?>
