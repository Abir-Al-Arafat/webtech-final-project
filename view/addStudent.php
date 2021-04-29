<?php
include "../model/db_connection.php";
session_start();
if($_SESSION['flag']==true)
    {
        //continue
    }
    else
    {
        header('location: ../view/login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='icon' href='./images/assets/favicon.png'>
    <title>Add a new user</title>
</head>
<body background="../images/assets/background.jpg">
    <?php include('./header.php'); ?>
    <div width='100px'>
        <form action='../controller/regcheckStu.php' method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">
            <fieldset>
                <legend>
                    <b>REGISTRATION</b>
                </legend>
                <table align="center">
<!--                    <tr>
                        <td align="right">Id:</td>
                        <td><input type='number' name='id'/></td>
                    </tr> -->
                    <tr>
                        <td align="right">Full Name:</td>
                        <td><input type='text' name='fullname' id='fullname' onkeyup="checkName()" onblur="checkName()"/></td>
                        <td><span id="nameErr"></span></td>
                    </tr>
                    <tr>
                        <td align="right">Father's Name:</td>
                        <td><input type='text' name='fathername' id='fathername' onkeyup="checkName()" onblur="checkName()"/></td>
                        <td><span id="nameErr"></span></td>
                    </tr>
                    <tr>
                        <td align="right">Mother's Name:</td>
                        <td><input type='text' name='mothername' id='mothername' onkeyup="checkName()" onblur="checkName()"/></td>
                        <td><span id="nameErr"></span></td>
                    </tr>

                    <tr>
                        <td align="right">Class:</td>
                        <td>
                        <select name="class" id="class">
                            <option value="one">One</option>
                            <option value="two">Two</option>
                            <option value="three">Three</option>
                            <option value="four">Four</option>
                            <option value="five">Five</option>
                        </select>
                        </td>
                    </tr>
                    
                    <tr>
                        <td align="right">Email:</td>
                        <td><input type='email' name='email' id='email' onkeyup="checkEmail()" onblur="checkEmail()"/></td>
                        <td><span id="emailErr"></span></td>
                    </tr>
                    <tr>
                        <td align="right">Phone:</td>
                        <td><input type='text' name='phone' id='phone' value="+88" onkeyup="checkPhone()" onblur="checkPhone()"/></td>
                        <td><span id="phoneErr"></span></td>
                    </tr>
                    <tr>
                        <td align="right">Date of Birth:</td>
                        <td><input type='date' name='dateOfBirth' id='dateOfBirth' onkeyup="dob()" onblur="dob()"/></td>
                        <td><span id="dobErr"></span></td>
                    </tr>
                    <tr>
                        <td align="right">Username:</td>
                        <td><input type='text' name='username' id='username' onkeyup="checkUN()" onblur="checkUN()"/></td>
                        <td><span id="unErr"></span></td>
                    </tr>
                    <tr>
                        <td align="right">Password:</td>
                        <td><input type='password' name='password' id='password' onkeyup="checkPass()" onblur="checkPass()"/></td>
                        <td><span id="passErr"></span></td>
                    </tr>
                    <tr>
                        <td align="right">Confirm Password:</td>
                        <td><input type='password' name='confirmpassword' id='confirmpassword' onkeyup="checkPassC()" onblur="checkPassC()"/></td>
                        <td><span id="passErrC"></span></td>
                    </tr>
                    <tr>
                        <td align="right">Registration date:</td>
                        <td><input type='date' name='regdate' id='regdate' onkeyup="reg()" onblur="reg()" required/></td>
                        <td><span id="regdateErr"></span></td>
                    </tr>
                    <tr>
                        <td align="right">Image:</td>
                        <td><input type='file' name='f1' id='f1'/></td>
                    </tr>
                    <tr>
                        <td align="right">Type:</td>
                        <td><input type='text' name='type' value = 'student' readonly/></td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td align="center" colspan="2"><input type='submit' name = 'submit' value="Confirm Registration"></td>
                    </tr>
                    <tr>
                        <td align="center" colspan="2"><input type='reset' value="Reset"></td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </div>
    <?php include('../resources/registration.js'); ?>
</body>
</html>