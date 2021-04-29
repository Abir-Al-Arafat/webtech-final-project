<?php  
include "../model/db_connection.php";  
$id=$_GET["id"];
$error="";
if(isset($_POST["submit"]))  
{  
    if(empty($_POST["name"]))  
    {  
        $error = "Name field cannot be empty";  
    }
    else if(empty($_POST["email"]))  
    {  
        $error = "E-mail field cannot be empty";  
    }  
    else if(empty($_POST["phone"]))  
    {  
        $error = "Give a valid phone no";  
    }  
    else if(empty($_POST["dob"]))  
    {  
        $error = "date of birth cannot be empty";  
    }
    else if(empty($_POST["username"]))  
    {  
        $error = "User Name cannot be empty";  
    } 
    else if(empty($_POST["password"]))  
    {  
       $error = "password cannot be empty";  
    }
    else if(empty($_POST["regdate"]))
    {
        $error = "registration date cannot be empty";
    }
    else  
    {
        //updating database
        $add_qry="UPDATE admin SET fullname='$_POST[name]',email='$_POST[email]',phone='$_POST[phone]',dateOfBirth='$_POST[dob]',username='$_POST[username]',password='$_POST[password]',regdate='$_POST[regdate]' WHERE id=$id";
        mysqli_query($link,"UPDATE admin SET fullname='$_POST[name]',email='$_POST[email]',phone='$_POST[phone]',dateOfBirth='$_POST[dob]',username='$_POST[username]',password='$_POST[password]',regdate='$_POST[regdate]' WHERE id=$id") or die(mysqli_error($link));
        header('location: ../view/viewAllUsers.php');
    }  
}
    if(isset($error))  
    {  
        echo $error;  
    } 
           
?> 