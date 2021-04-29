<div class="sidebar"><br>
<h3 class="text">Dashboard</h3><br><hr><br>
<ul class="s">
<?php
	if(isset($_SESSION["AID"]))
	{
		echo'
			<li class="li"><a href="admin_home.php">School Information</a></li>
			
			

			<li class="li"><a href="add_staff.php"> Staff</a></li>
			<li class="li"><a href="view_staff.php">View Staff</a></li>
			
			
			
			<li class="li"><a href="logout.php">Logout</a></li>
		
		';
	
	
	}
	else{
		echo'
			<li class="li"><a href="teacher_home.php">Profile</a></li>
			<li class="li"><a href="handle_class.php"> Add Class</a></li>
			<li class="li"><a href="add_stud.php"> Students</a></li>
			
			
			<li class="li"><a href="ajax_search.php">Class Timing</a></li>

			<li class="li"><a href="logout.php">Logout</a></li>

     
		
		';
	}


?>
	

</ul>

</div>




