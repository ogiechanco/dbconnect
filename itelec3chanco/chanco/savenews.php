<?php
require_once("includes/dbconnect.php");

if(isset($_POST['txttitle'])){
    $title = $_POST['txttitle'];
    $author = $_POST['txtauthor'];
    $id = $_POST['txtid'];
    $dposted = $_POST['dposted'];
    $story = $_POST['txtstory'];
    $picture = $_POST['picture'];
    echo $title . $author . $dposted . $story . $picture;
    try {
        
        if($id == 0){
            $sql="INSERT INTO news(title, author, datePosted, story, picture) VALUES(?, ?, ?, ?, ?)";
            $data = array($title, $author, $dposted, $story, $picture);
            $stmt = $con->prepare($sql);
            $stmt->execute($data);
            header("location:news.php");
            exit;
        }else{
                $sql="UPDATE news SET title = ?, author = ?, datePosted = ?, story = ?, picture = ? WHERE md5(newsID)  = ?";
                $data = array($title, $author, $dposted, $story, $picture, $id);
                $stmt = $con->prepare($sql);
                $stmt->execute($data);
                header("location:news.php");
                exit;
        }
        
    } catch (PDOException $th) {
        echo $th->getMessage();
    }
}



if(isset($_GET['delid'])){
    $delSQL = "DELETE FROM news WHERE md5(newsID) = ?";
    $data = array($_GET['delid']);
    try {
        $stmtDel = $con->prepare($delSQL);
        $stmtDel->execute($data);
        header("location:news.php");
    } catch (PDOException $th) {
        echo $th->getMessage();
    }
}


?>