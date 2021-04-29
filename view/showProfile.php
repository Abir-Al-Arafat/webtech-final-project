
<?php 
include('../controller/session.php');
include('../view/navbar2.php');
include('../model/showProfileDB.php');

?> 


<!DOCTYPE HTML>  
<html>
<head>
<link rel="stylesheet" type="text/css" href="../view/showProfile.css"/> 
</head>
<body>  

   <div class="form">
    <form action="editProfile101.php" method="post" >  
    
    <br>
    <fieldset>
        <br>
      <legend>Profile</legend>
      <label for="id"><b>ID:</b></label>
      <label for="name"><b><?php echo $_SESSION['userid'];?></b></label>
     <br><br>
      <label for="name"><b>Name:</b></label>
      <label for="name"><b><?php echo $name;?></b></label>
      <br><br>
      <label for="email"><b>Email:</b></label>
      <label for="email"><b><?php echo $email;?></b></label>
      <br><br>
      <label for="dob"><b>Gender: </b></label>
      <label for="dob"><b><?php echo $gender;?></b></label>
      <br><br>
      <label for="dob"><b>Date Of Birth: </b></label>
      <label for="dob"><b><?php echo $dob;?></b></label>
      <br>
      
      <br>
      <input type="submit"  name="submit" value="Edit" id="submit">
      </fieldset>  
    </form>
</div>
    
    </body>
    </html>