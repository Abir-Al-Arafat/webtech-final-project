<?php
    session_start();
    include "../model/db_connection.php";
    $_SESSION['abc'] = "hello";

    if(empty($_POST['op'])||empty($_POST['np'])||empty($_POST['cnp']))
    {
        echo "One or more of the fields are empty!";
    }

    else if(isset($_POST['op']) && isset($_POST['np']) && isset($_POST['cnp']))
    {
        $oldpass = $_POST['op']; // old password
        $newpass = $_POST['np']; // new password
        $cnewpass = $_POST['cnp']; // confirm new password
        if( $_SESSION['password'] == $oldpass )
        {
            if($newpass == $cnewpass)
            {
                $id=$_SESSION['id'];
                $update_qry="UPDATE admin SET password=$newpass WHERE id=$id";
                mysqli_query($link,$update_qry);
                $_SESSION['password']=$newpass;
                header('location: ../view/viewAllUsers.php');

            /*
            $data = file_get_contents('../model/login.json');
            $myJSON = json_decode($data, true);

            foreach($myJSON as $key=>$user)
            {
            if($user['id'] == $_SESSION['id'])
            {
                $myJSON[$key]['password'] = $_POST['np'];
                $newJSON = json_encode($myJSON);
                file_put_contents('../model/login.json', $newJSON);
                echo "Success";
            }
            }
            */            
            } 
            else
            {
                echo "password did not match";
            }
        }
        else
        {
            echo "old password did not match";
        }        
    }
    else
    {
        echo "one of the fields are empty";
    }
?>