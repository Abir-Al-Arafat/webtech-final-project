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
    if(isset($_SESSION['flag']) == true)
    {
        if(isset($_SESSION['type']) == 'admin')
        {
        $id=$_SESSION['id'];
        $login_qry = "SELECT * FROM admin WHERE id='$id'";
        $res=mysqli_query($link,$login_qry);

        while($row=mysqli_fetch_array($res))
        {
            $_SESSION['username'] = $row['username'];
            $_SESSION['fullname'] = $row['fullname'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['dateOfBirth'] = $row['dateOfBirth'];
            $_SESSION['phone'] = $row['phone'];
            $_SESSION['regdate'] = $row['regdate'];
            $_SESSION['image1'] = $row['image1'];
        }

            /*
            $dataString = file_get_contents('../model/admin.json');
            $dataJSON = json_decode($dataString, true);
            
            foreach($dataJSON as $user)
            {
                if($_SESSION['id'] == $user['id'])
                {
                    $_SESSION['id'] = $user['id'];
                    $_SESSION['username'] = $user['username'];
                    $_SESSION['fullname'] = $user['fullname'];
                    $_SESSION['email'] = $user['email'];
                    $_SESSION['dateOfBirth'] = $user['dateOfBirth'];
                    $_SESSION['phone'] = $user['phone'];
                    $_SESSION['regdate'] = $user['regdate'];
                }
            }
            */
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type="text/css" media="screen" href='style.css'/>
    <title>Dashboard</title>
</head>
<body background="../images/assets/background.jpg">
    <?php include('./header.php'); ?>

    
    
        <nav>
        <div class="navbar">
  <a href="./dashboard.php">Dashboard</a>
  <a href="./profile.php">Profile</a>
  <a href="./viewAllUsers.php">View All Users</a>
  <a href="./search.php">Search</a>
  <a href="../controller/logout.php">Logout</a>
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
</div>
        </nav>
    
    
    
    <table border="1px solid black" width='100%'>
        <tr>
            <th>
                Messages
            </th>
            <th>
                Posts
            </th>
            <th>
                Notifications
            </th>
        </tr>
        <tr>
            <td width='17%'>
                
            </td>
            <td>
                <br><br><br><br><br><br>
                <?php echo "New Posts"; ?>
            </td>
            <td>
                <br><br><br><br><br><br>
                <?php echo "New Notifications"; ?>
            </td>
        </tr>
    </table>
</body>
</html>

<!-- <table>
                    <tr>
                        <td>
                            <label>Account</label>
                            <br>
                            <hr>
                            <ul>
                                <li><a href='./dashboard.php'>Dashboard</a></li>
                                <li><a href='./profile.php'>View Profile</a></li>
                                <li><a href='./editprofile.php'>Edit Profile</a></li>
                                <li><a href='./changepropic.php'>Change Profile Picture</a></li>
                                <li><a href='./changepass'>Change Password</a></li>
                                <li><a href='./logout.php'>Logout</a></li>
                            </ul>
                        </td>
                    </tr>
                </table> -->