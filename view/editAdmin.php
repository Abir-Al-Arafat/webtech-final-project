<?php
    session_start();
    include "../model/db_connection.php";
    $id=$_GET["id"];
    $_SESSION["idAll"]=$id;
    $edit_qry="select * from admin where id=$id";
    $res=mysqli_query($link,$edit_qry);

    while($row=mysqli_fetch_array($res))
    {
        $id=$row["id"];
        $fullname=$row["fullname"];
        $email=$row["email"];
        $phone=$row["phone"];
        $dob=$row["dateOfBirth"];
        $username=$row["username"];
        $password=$row["password"];
        $regdate=$row["regdate"];
        $image1=$row["image1"];
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
            <a href="./viewAllUsers.php">View all users</a> ||
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
                <form action='' method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">
                    <table align="center" border="1px solid black">
                        <tr>
                            <td width='40%' align="right">
                                Fullname:
                            </td>
                            <td>
                                <input type='text' name='name' id="name" value="<?php echo $fullname; ?>" onkeyup="checkName()" onblur="checkName()" required/>
                                <span align="right" id="nameErr"></span>
                            </td>
                        </tr>
                        <tr>
                            <td align="right">
                                Email:
                            </td>
                            <td>
                                <input type='email' name='email' id='email' value="<?php echo $email; ?>" onkeyup="checkEmail()" onblur="checkEmail()" required/>
                                <span align="right" id="emailErr"></span>
                            </td>
                        </tr>
                        <tr>
                            <td align="right">
                                Phone:
                            </td>
                            <td>
                                <input type='text' name='phone' id='phone' value="<?php echo $phone; ?>" onkeyup="checkPhone()" onblur="checkPhone()" required/>
                                <span align="right" id="phoneErr"></span>
                            </td>
                        </tr>
                        <tr>
                            <td align="right">
                                Date of birth:
                            </td>
                            <td>
                                <input type='date' name='dob' id='dob' value="<?php echo $dob; ?>" required/>
                            </td>
                        </tr>

                        <tr>
                            <td align="right">
                                Username:
                            </td>
                            <td>
                                <input type='text' name='username' id='username' value="<?php echo $username; ?>" onkeyup="checkUN()" onblur="checkUN()" required/>
                                <span align="right" id="unErr"></span>
                            </td>
                        </tr>

                        <tr>
                            <td align="right">
                                Password:
                            </td>
                            <td>
                                <input type='text' name='password' id='password' value="<?php echo $password; ?>" onkeyup="checkPassEA()" onblur="checkPassEA()" required/>
                                <span align="right" id="passErr"></span>
                            </td>
                        </tr>

                        <tr>
                            <td align="right">
                                Registration Date:
                            </td>
                            <td>
                                <input type='date' name='regdate' id='regdate' value="<?php echo $regdate; ?>" required/>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Image:
                            </td>  
                            <td>
                                <img src="<?php echo $image1; ?>" alt="image not available" height="100" width="100"><br>
                                <input type='file' name='f1'/>
                            </td>                      
                        </tr>

                        <tr>
                            <td colspan="2">
                                <center>
                                    <input type='submit' name="update" value="Update">
                                </center>
<!--                                <a href="../controller/updateAdmin.php?id=<?php echo $id; ?>"><button type="submit" name="submit">Update</button></a> -->
                            </td>
                        </tr>
                    </table>
                </form>
                <br>
            </td>
        </tr>
    </table>
    <?php include('./footer.php'); ?>
    <?php
    if(isset($_POST["update"]))
    {
        $tm=md5(time());
        $fnm=$_FILES["f1"]["name"];
        $dst="../images/profile/".$tm.$fnm; 
        //$dst1="images/profile/".$tm.$fnm; 
        move_uploaded_file($_FILES["f1"]["tmp_name"],$dst);

        if($fnm=="")
        {
        //continue
        $add_qry="UPDATE admin SET fullname='$_POST[name]',email='$_POST[email]',phone='$_POST[phone]',dateOfBirth='$_POST[dob]',username='$_POST[username]',password='$_POST[password]',regdate='$_POST[regdate]' WHERE id=$id";
        mysqli_query($link,$add_qry);
        if($_SESSION['id']==$id)
        {
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['fullname'] = $_POST['name'];
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['dateOfBirth'] = $_POST['dob'];
            $_SESSION['phone'] = $_POST['phone'];
            $_SESSION['regdate'] = $_POST['regdate'];
            $_SESSION['image1'] = $row['image1'];
        }
        }
        else
        {
        $add_qry="UPDATE admin SET fullname='$_POST[name]',email='$_POST[email]',phone='$_POST[phone]',dateOfBirth='$_POST[dob]',username='$_POST[username]',password='$_POST[password]',regdate='$_POST[regdate]',image1='$dst' WHERE id=$id";
        mysqli_query($link,$add_qry);
        if($_SESSION['id']==$id)
        {
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['fullname'] = $_POST['name'];
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['dateOfBirth'] = $_POST['dob'];
            $_SESSION['phone'] = $_POST['phone'];
            $_SESSION['regdate'] = $_POST['regdate'];
            $_SESSION['image1'] = $row['image1'];
        }
        }

        ?>
        <script type="text/javascript">
        window.location="viewAllUsers.php"
        </script>
        <?php

    }
    ?>
    <?php include('../resources/edit.js'); ?>
</body>
</html>