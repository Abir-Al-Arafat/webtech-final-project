<?php 
    session_start();
    $image=$_SESSION['image1'];
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
    <link rel='stylesheet' type="text/css" media="screen" href='style.css'/>
    <title><?php echo $_SESSION['fullname']; ?></title>
</head>
<body background="../images/assets/background.jpg">
    <?php include('./header.php'); ?>

    <nav>
    <div class="navbar">
        <a href="./dashboard.php">Dashboard</a>
        <a href="./profile.php">Profile</a>
        <a href="./viewAllUsers.php">View All Users</a>
        <a href="./search.php">Search</a>
    <div class="dropdown">
    <button class="dropbtn">Add a user
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="./addUser.php">Add an admin</a>
      <a href="#">Add a student</a>
      <a href="#">Add a teacher</a>
      <a href="#">Add an employee</a>
    </div>
    </div> 
    <a href="../controller/logout.php">Logout</a>
    </div>
    </nav>

<!--
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
-->
    <table border="1px solid black" width='100%'>
        <tr>
            <td border="1px solid black">
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
                <table align="center" border="1px solid black">
                    <tr>
                        <td align="right">
                            <b>User Type:</b>
                        </td>
                        <td width='40%'>
                            <?php echo $_SESSION['type']; ?>
                        </td>
                        <td rowspan="6">
                            <img src="<?php echo $image;?>" height="250" width="250" alt="image not available">
                        </td>
                    </tr>
                    <tr>
                        <td align="right">
                            <b>Name:</b>
                        </td>
                        <td>
                            <?php echo $_SESSION['fullname']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td align="right">
                            <b>Email:</b>
                        </td>
                        <td>
                            <?php echo $_SESSION['email']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td align="right">
                            <b>Username:</b>
                        </td>
                        <td>
                            <?php echo $_SESSION['username']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td align="right">
                            <b>Date of Birth:</b>
                        </td>
                        <td>
                            <?php echo $_SESSION['dateOfBirth']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td align="right">
                            <b>Registration Date:</b>
                        </td>
                        <td>
                            <?php echo $_SESSION['regdate']; ?>
                        </td>
                    </tr>
                </table>
                <br>
            </td>
        </tr>
    </table>
    <?php include('./footer.php'); ?>
</body>
</html>