<?php
include('databaseconnect.php');

if (isset($_POST['book'])) {
    $book = $_POST['book']; // ✅ Use $book directly

    try {
        $dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $dbh->prepare("DELETE FROM booking WHERE book = :book");
        $stmt->bindParam(':book', $book, PDO::PARAM_INT);
        $stmt->execute();

        echo "success";
    } catch (PDOException $e) {
        echo "error: " . $e->getMessage();
    }
} else {
    echo "error: book ID not set.";
}
?>
