<?php 
include "connection.php";
session_start()
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Edit </title>
 	<style type="text/css">
 		label
 		{
 			color: white;
 		}
 		.form-control
 		{
 			height: 25px;
 			width: 260px;
 			border-radius: 8px;
 			text-align: center;
 		}
 		button
 		{
 			border-radius: 8px;
 			width: 80px; 
 			height: 30px;
 		}
 	</style>
 </head>
 <body style="background-color: #004528;">
	
	<?php
	/*$sql = "SELECT * FROM employee WHERE Id ='$_SESSION[id]'";*/
		$result = mysqli_query($db,"SELECT * FROM employee WHERE Id ='$_SESSION[id]';") or die (mysql_error());

		while ($row = mysqli_fetch_assoc($result)) 
		{
			
			$id= $row['Id'];
			$name= $row['Name']; 
			$gender= $row['Gender'];
			$birth= $row['Date of Birth'];  
			$designation= $row['Designation']; 
			$salary= $row['Salary']; 
			$hired= $row['Hired Date'];  
			$contact= $row['Contact Number'];
			$address= $row['Address']; 
			$email= $row['Email']; 
		}

	?>

	  <legend><h1 style="text-align: center;color: yellow;">Edit Employees Data</h1></legend>

	<form style="text-align: center;" action="" method="post" enctype="multipart/form-data">

		<label><h4><b>Id: </b></h4></label>
		<input class="form-control" type="text" name="id" value="<?php echo $id; ?>">

		<label><h4><b>Name: </b></h4></label>
		<input class="form-control" type="text" name="name" value="<?php echo $name; ?>">

		<label><h4><b>Gender: </b></h4></label>
		<input class="form-control" type="text" name="gender" value="<?php echo $gender; ?>">

		<label><h4><b>Date of Birth</b></h4></label>
		<input class="form-control" type="text" name="birth" value="<?php echo $birth; ?>">

		<label><h4><b>Designation:</b></h4></label>
		<input class="form-control" type="text" name="designation" value="<?php echo $designation; ?>">

		<label><h4><b>Salary: </b></h4></label>
		<input class="form-control" type="text" name="salary" value="<?php echo $salary; ?>">
		<label><h4><b>Hired Date: </b></h4></label>
		<input class="form-control" type="text" name="hired" value="<?php echo $hired; ?>">
		<label><h4><b>Contact Number: </b></h4></label>
		<input class="form-control" type="text" name="contact" value="<?php echo $contact; ?>">
		<label><h4><b>Address: </b></h4></label>
		<input class="form-control" type="text" name="address" value="<?php echo $address; ?>">
		<label><h4><b>Email: </b></h4></label>
		<input class="form-control" type="text" name="email" value="<?php echo $email; ?>">

		<br>
		<br>
			<button style="background-color: #e6f365;" type="submit" name="submit3">save</button>
	</form>

	<?php 
		if(isset($_POST['submit3']))
		{
			$id= $_POST['id'];
			$name=  $_POST['name'];
			$gender=  $_POST['gender'];
			$birth=  $_POST['birth'];
			$designation=  $_POST['designation'];
			$salary=  $_POST['salary'];
			$hired=  $_POST['hired'];
			$contact=  $_POST['contact'];
			$address=  $_POST['address'];
			$email=  $_POST['email'];

	$sql1= "UPDATE employee SET  `Id`='$id',`Name`='$name',`Gender`='$gender',`Date of Birth`='$birth',`Designation`='designation',`Salary`='$salary',`Hired Date`='$hired',`Contact Number`='$contact',`Address`='$address',`Email`='$email' WHERE Id ='".$_SESSION['id']."';";

			if(mysqli_query($db,$sql1))
			{
				?>
					<script type="text/javascript">
						alert("Saved Successfully.");
						window.location="employee.php";
					</script>
				<?php
			}
		}
	 ?>
 </body>
 </html>