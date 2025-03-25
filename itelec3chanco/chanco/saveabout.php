<?php
require_once("includes/dbconnect.php");



if(isset($_GET['udid'])){
    $id = $_GET['udid'];
    $title = $_POST['txttitle'];
    $content = $_POST['txtcontent'];
    #echo "{$title} - {$content}";
    try {
        $sql="UPDATE about SET atitle = ?, acontent = ? WHERE aboutID = ?";
        $data = array($title, $content, $id);
        $stmt = $con->prepare($sql);
        $stmt->execute($data);
        header("location:about.php");
    } catch (PDOException $th) {
        echo $th->getMessage();
    }
}

if(isset($_GET['delid'])){
    $delSQL = "DELETE FROM about WHERE aboutID = ?";
    $data = array($_GET['delid']);
    try {
        $stmtDel = $con->prepare($delSQL);
        $stmtDel->execute($data);
        header("location: about.php");
    } catch (PDOException $th) {
        echo $th->getMessage();
    }
}
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $title = $_POST['txttitle'] ?? '';
    $content = $_POST['txtcontent'] ?? '';
    $id = $_POST['udid'] ?? null;
    #echo "{$title} - {$content}";
    try {
        if($id){
            $title = $_POST['txttitle'];
            $content = $_POST['txtcontent'];
            #echo "{$title} - {$content}";
                $sql="UPDATE about SET atitle = ?, acontent = ? WHERE aboutID = ?";
                $data = array($title, $content, $id);
                $stmt = $con->prepare($sql);
                $stmt->execute($data);
                header("location:about.php");
                exit;
        }else{
            $sql="INSERT INTO about(atitle, acontent) VALUES(?, ?)";
            $data = array($title, $content);
            $stmt = $con->prepare($sql);
            $stmt->execute($data);
            header("location:about.php");
            exit;
        }
        
    } catch (PDOException $th) {
        echo $th->getMessage();
    }
}
?>