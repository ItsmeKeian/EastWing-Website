<?php
include('databaseconnect.php');

try {
    // Connect to the database
    $dbh = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Count all records in 'booking' table
    $countQry = "SELECT COUNT(*) AS total_records FROM `booking`";
    $countStmt = $dbh->prepare($countQry);
    $countStmt->execute();
    $countData = $countStmt->fetch(PDO::FETCH_ASSOC);

    // ✅ Return the count in JSON format
    echo json_encode([
        "status" => 1,
        "unid" => $countData['total_records']
    ]);

} catch (PDOException $e) {
    echo json_encode([
        "status" => 0,
        "message" => "Error: " . $e->getMessage()
    ]);
}

$dbh = null;
?>
