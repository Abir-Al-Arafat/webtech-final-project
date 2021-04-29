<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='icon' href='./images/favicon.png'>
    <title>School Management System</title>
</head>

<body background="../images/assets/background.jpg">
    <?php include('./header.php'); ?>
    <div width='100px'>
        <form action='../controller/logincheck.php' method="POST" name="loginform" onsubmit="return validateForm()">
            <fieldset>
                <legend>
                    <b>LOG IN</b>
                </legend>
                <table align="center">
                    <tr>
                    <?php
                        if(isset($_SESSION['userFoundFlag']))
                        {
                            if($_SESSION['userFoundFlag']==false)
                            {
                                echo "<td colspan="."2"."><h4 style=color:red >Invalid username or password!</h4></td>"; 
                            }
                        }
                        ?>
                    </tr>
                    <tr>
                        <td align="right">Username:</td>
                        <td><input type='text' name='username' id='username' placeholder="Enter username here" onkeyup="checkName()" onblur="checkName()"/></td>
                        <td align="right"></td>                        
                    </tr>
                    <tr>
                        <td colspan="2" align="right">
                            <span id="nameErr"></span>
                        </td>
                    </tr>
                    <tr>
                        <td align="right">Password:</td>
                        <td><input type='password' name='password' id='password' placeholder="Enter password here" onkeyup="checkPass()" onblur="checkPass()"/></td>
                        
                    </tr>
                    <tr>
                        <td colspan="2" align="right"><span align="right" id="passErr"></span></td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>

                    

                    <tr>
                        <td align="center" colspan="2"><input type='submit' value="Log In"></td>
                    </tr>
                    
               <!-- <tr>
                        <td align="center" colspan="2"><a href="./forgot.php">Forgot Password?</a></td>
                    </tr>
                    <tr>
                        <td align="center" colspan="2"><a href="./signup.php">Sign up</a></td>
                    </tr> -->
                </table>
            </fieldset>
        </form>
    </div>
    <?php include('../resources/login.js'); ?>
</body>
</html>