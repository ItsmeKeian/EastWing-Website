<?php
include('databaseconnect.php');

try {
    $ab = isset($_POST['a']) ? $_POST['a'] : "";

    $dbh = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);

    $qry = "SELECT * FROM booking WHERE book = :a";

    $stmt = $dbh->prepare($qry);
    $stmt->bindParam(":a", $ab);
    $stmt->execute();

    $count = $stmt->rowCount();

    if ($count > 0) {
        $data = $stmt->fetch(PDO::FETCH_ASSOC);




        $a1 = $data["name"];
        $a2 = $data["phone"];
        $a3 = $data["email"];
        $a4 = $data["address"];
        $a5 = $data["dateofevent"];
        $a6 = $data["timeofevent"];
        $a7 = $data["selectevent"];
        $a8 = $data["message"];
        $a9 = $data["book"];
       
       




        $arr = array("a1" => $a1,"a2" => $a2,"a3" => $a3,"a4" => $a4,"a5" => $a5,"a6" => $a6,"a7" => $a7,"a8" => $a8,"a9" => $a9, "status" => 1);

        
    } else {
        $arr = array("status" => 0);
    }

    echo json_encode($arr);
} catch (PDOException $e) {
    $arr = array("err" => $e->getMessage());
    echo json_encode($arr);
}

$dbh = null;
?>