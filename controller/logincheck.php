<?php
    include "../model/db_connection.php";
    session_start();
    if(empty($_POST['username']) && empty($_POST['password']))
    {
        echo "One or more of the fields are empty!";
    }
    else if(isset($_POST['username']) && isset($_POST['password']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $login_qry = "SELECT * FROM admin WHERE username = '$username' and password = '$password'";
        $res=mysqli_query($link,$login_qry);
        $userFoundFlag=false;

        while($row=mysqli_fetch_array($res))
        {
            $_SESSION['flag']=true;
            $_SESSION['id']=$row["id"];
            $_SESSION['type']=$row["type"];
            $_SESSION['password'] = $row['password'];
            $userFoundFlag = true;
            header('location: ../view/dashboard.php');
        }

        /*$dataString = file_get_contents('../model/login.json');
        $dataJSON = json_decode($dataString, true);
        $userFoundFlag = false;

        foreach($dataJSON as $user)
        {
            if($user['username'] == $username && $user['password'] == $password)
            {
                $_SESSION['flag'] = true;
                $_SESSION['id'] = $user['id'];
                $_SESSION['type'] = $user['type'];                
                $_SESSION['password'] = $user['password'];                
                $userFoundFlag = true;
                header('location: ../view/dashboard.php');
            }
        }*/




        if($userFoundFlag == false)
        {
            $_SESSION['userFoundFlag']=$userFoundFlag;
            $_SESSION["invalid"]="Invalid username or password!!";
            header('location: ../view/login.php');
        }
    }
?>