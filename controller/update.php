<?php
    session_start();
    include "../model/db_connection.php";
    
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']))
    {
        $id=$_SESSION['id'];
        $add_qry="UPDATE admin SET fullname='$_POST[name]',email='$_POST[email]',phone='$_POST[phone]',dateOfBirth='$_POST[dob]' WHERE id=$id";
        mysqli_query($link,$add_qry);
        $_SESSION['fullname']=$_POST['name'];
        $_SESSION['email']=$_POST['email'];
        $_SESSION['phone']=$_POST['phone'];
        $_SESSION['dateOfBirth']=$_POST['dob'];
        header('location: ../view/profile.php');

        /*
        $data = file_get_contents('../model/admin.json');
        $myJSON = json_decode($data, true);

        foreach($myJSON as $key=>$user)
        {
            if($user['id'] == $_SESSION['id'])
            {
                $myJSON[$key]['fullname'] = $_POST['name'];
                $myJSON[$key]['email'] = $_POST['email'];
                $myJSON[$key]['phone'] = $_POST['phone'];
                $myJSON[$key]['dateOfBirth'] = $_POST['dob'];

                $newJSON = json_encode($myJSON);
                file_put_contents('../model/admin.json', $newJSON);
            }
        }
        */
        echo "Success";
    }
?>