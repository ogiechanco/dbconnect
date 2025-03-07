<?php
require_once("includes/dbconnect.php");

$title = $_POST['txttitle'];
$content = $_POST['txtcontent'];
#echo "{$title} - {$content}";

try {
    $sql="INSERT INTO about(atitle, acontent) VALUES(?, ?)";
    $data = array($title, $content);
    $stmt = $con->prepare($sql);
    $stmt->execute($data);
    header("location:about.php");
} catch (PDOException $th) {
    echo $th->getMessage();
}

?>