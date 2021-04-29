<?php 
include "connection.php";
session_start()
 ?>


<!DOCTYPE html>
<html>
<head>
  <title>Employee Information</title>
</head>
<style > 
  body{
    background-color:rgb(223,223,242);
  }
              
</style>
<body>
  <div class="srch">
    <form class="" method="post" name="form1">
      
        <input style="width: 120px; height: 30px;border-radius: 8px;" type="text" name="input1" placeholder="Employee Id.." required="">
        <button style="background-color: #f44336;border-radius: 8px;width: 80px; height: 30px" type="submit" name="submit1" >Delete</button>
        <button style="background-color:#4CAF50; border-radius: 8px;width: 80px; height: 30px" type="submit" name="submit2" >Edit</button>
    </form>
  </div>

<?php 
  /*Delete when submit1 button is pressed*/
  if(isset($_POST['submit1']))
    {
      $q=mysqli_query($db,"DELETE FROM `employee` WHERE Id = '$_POST[input1]';");
      ?><script type="text/javascript">
        alert("Deleted Successfully.");
      </script>
    <?php
    }

    if(isset($_POST['submit2']))
    {
      header("location:./edit.php");
      $_SESSION['id']=$_POST['input1'];
    }

 ?>
<fieldset align = "center">
  <legend><h1> Employees Data</h1></legend>
  
  <?php 
    $res=mysqli_query($db,"SELECT * FROM employee ;");

      echo"<table align='center', border ='3', cellpadding='20', cellspacing='10'>"; 
       echo"<tr>"; 
                echo"<th>"; echo"Id"; echo"</th>";
                echo"<th>"; echo"Name"; echo"</th>";
                echo"<th>"; echo"Gender"; echo"</th>";
                echo"<th>"; echo"Date of Birth"; echo"</th>";
                echo"<th>"; echo"Designation"; echo"</th>";
                echo"<th>"; echo"Salary"; echo"</th>";
                echo"<th>"; echo"Hired Date"; echo"</th>";
                echo"<th>"; echo"Contact Number"; echo"</th>";
                echo"<th>"; echo"Address"; echo"</th>";
                echo"<th>"; echo"Email"; echo"</th>";
               

      echo"</tr>";

      while($row=mysqli_fetch_assoc($res))
      {
        echo"<tr>";
          
          echo "<td>";  echo $row['Id'];  echo "</td>";
          echo "<td>";  echo $row['Name'];  echo "</td>";
          echo "<td>";  echo $row['Gender'];  echo "</td>";
          echo "<td>";  echo $row['Date of Birth'];  echo "</td>";
          echo "<td>";  echo $row['Designation'];  echo "</td>";
          echo "<td>";  echo $row['Salary'];  echo "</td>";
          echo "<td>";  echo $row['Hired Date'];  echo "</td>";
          echo "<td>";  echo $row['Contact Number'];  echo "</td>";
          echo "<td>";  echo $row['Address'];  echo "</td>";
          echo "<td>";  echo $row['Email'];  echo "</td>";

        echo "<br>";
        echo"</tr>";
      }

      echo"</table>";

  ?>

</fieldset>
</body>
</html>