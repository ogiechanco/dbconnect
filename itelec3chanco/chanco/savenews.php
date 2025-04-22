<?php
require_once("includes/dbconnect.php");
require_once("includes/functions.php");

if(isset($_POST['txttitle'])){
    $title = htmlspecialchars($_POST['txttitle']);
    $author = htmlspecialchars($_POST['txtauthor']);
    $id = $_POST['txtid'];
    $dposted = htmlspecialchars($_POST['dposted']);
    $story = htmlspecialchars($_POST['txtstory']);
    $file = ($_FILES['picture']);
    $upload_directory = "uploads/news/";
    try {
        
        

        if($id == 0){
            $sql="INSERT INTO news(title, author, datePosted, story, picture) VALUES(?, ?, ?, ?, ?)";
            $ext = $file['name'];
            $data = array($title, $author, $dposted, $story, $ext);
        }else{
                $sql="UPDATE news SET title = ?, author = ?, datePosted = ?, story = ?, picture = ? WHERE md5(newsID)  = ?";
                $data = array($title, $author, $dposted, $story, $picture, $id);
        }
        $stmt = $con->prepare($sql);
        $stmt->execute($data);
        if(isset($_FILES['picture'])){
            if(!(empty($_FILES['picture']['name']))){
                $fname = explode(".", $_FILES['picture']['name']);
                $ext = $fname[1];
                if(!(empty($_FILES['picture']['name']))){
                    $newpic = "{$newID}";
                }
            }
        }
        $newname = $con->lastInsertId();
        uploadOne($file, $newname, $upload_directory);

        //header("location:news.php");
        
        
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