<?php 
include "../model/db_connection.php";
session_start();
$id=$_SESSION['id']; // current user id
if(isset($_POST["submit"]))
{
    $tm=md5(time());
    $fnm=$_FILES["image"]["name"];
    $dst="../images/profile/".$tm.$fnm; 
    //$dst1="images/profile/".$tm.$fnm; 
    move_uploaded_file($_FILES["image"]["tmp_name"],$dst);

    if($fnm=="")
    {
        echo "no images were selected";
    }
    else
    {
        $upload_qry="UPDATE admin SET image1='$dst' WHERE id=$id";
        mysqli_query($link,$upload_qry);
        $_SESSION['image1'] = $dst;
        header('location: ../view/changepropic.php');
    }
}
?>