<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
<link rel="stylesheet" type="text/css" href="../view/navBar2.css"/> 
</head>
<body>

<div class="navbar">
  <a href="../controller/home1.php">Home</a>
  <a href="../view/getCourseAJAX.php">Courses By Semester</a>
  <!-- <a href="#">Academic</a> -->
  <a href="../view/offeredCoursesAJAX.php">Offered Courses</a>
  <a href="../view/downloadForms.php">Forms</a>

  <div class="dropdown">
    <button class="dropbtn">Settings
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="../view/showProfile.php">Profile</a>
      <a href="../view/changePasswordV.php">Change Password</a>
      
    </div>
  </div> 
  <a  style="float:right" href="../controller/logout101.php">Logout</a>
</div>

</body>
</html>
