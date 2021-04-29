<?php
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
    <title>Document</title>
</head>
<body background="../images/assets/background.jpg">
    <?php include('./header.php'); ?>
    <fieldset>
    <br>
        <nav>
            <a href="./dashboard.php">Dashboard</a> ||
            <a href="./profile.php"><?php echo $_SESSION['fullname']; ?></a> ||
            <a href="./addUser.php">Add a new user</a> ||
            <a href="./search.php">Search</a> ||
            <a href="../controller/logout.php">Log Out</a>
        </nav>
    <br>
    </fieldset>
    <table border="1px solid black" width='100%'>
        <tr>
            <td>
                <label>Menu</label>
                <br>
                <hr>
                <ul>
                    <li><a href='./dashboard.php'>Dashboard</a></li>
                    <li><a href='./editprofile.php'>Edit Profile</a></li>
                    <li><a href='./changepropic.php'>Change Profile Picture</a></li>
                    <li><a href='./changepass.php'>Change Password</a></li>
                    <li><a href='../controller/logout.php'>Logout</a></li>
                </ul>
            </td>
            <td>
                <form action='../controller/update.php' method="POST" onsubmit="return validateForm()">
                    <table align="center" border="1px solid black">
                        <tr>
                            <td width='40%' align="right">
                                Name:
                            </td>
                            <td>
                                <input type='text' name='name' id='name' value="<?php echo $_SESSION['fullname']; ?>" onkeyup="checkName()" onblur="checkName()" required/>
                                <td align="right"><span align="right" id="nameErr"></span></td>
                            </td>
                        </tr>
                        <tr>
                            <td align="right">
                                Email:
                            </td>
                            <td>
                                <input type='email' name='email' id='email' value="<?php echo $_SESSION['email']; ?>" onkeyup="checkEmail()" onblur="checkName()" required/>
                                <td align="right"><span align="right" id="emailErr"></span></td>
                            </td>
                        </tr>
                        <tr>
                            <td align="right">
                                Phone:
                            </td>
                            <td>
                                <input type='text' name='phone' id='phone' value="<?php echo $_SESSION['phone']; ?>" onkeyup="checkPhone()" onblur="checkPhone()" required/>
                                <td align="right"><span align="right" id="phoneErr"></span></td>
                            </td>
                        </tr>
                        <tr>
                            <td align="right">
                                Date of birth:
                            </td>
                            <td>
                                <input type='date' name='dob' id='dob' value="<?php echo $_SESSION['dateOfBirth']; ?>" onkeyup="dob()" onblur="dob()" required/>
                                <td align="right"><span align="right" id="dobErr"></span></td>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <center>
                                    <input type='submit' value="Update">
                                </center>
                            </td>
                        </tr>
                    </table>
                </form>
                <br>
            </td>
        </tr>
    </table>
    <?php include('./footer.php'); ?>
    <?php include('../resources/edit.js'); ?>
</body>
</html>