<?php
	include"database.php";
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>School Management System</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body class="back">
	
		<?php include"navbar.php";?>
		
		<img src="img/teacher.jpg" width="300">
		
		<div class="login">
			<h1 class="heading">Teacher's Login</h1>
			<div class="log">
				<?php
					if(isset($_POST["login"]))
					{
						$sql="select * from staff where TNAME='{$_POST["name"]}'and TPASS='{$_POST["pass"]}'";
						$res=$db->query($sql);
						if($res->num_rows>0)
						{
							$ro=$res->fetch_assoc();
							$_SESSION["TID"]=$ro["TID"];
							$_SESSION["TNAME"]=$ro["TNAME"];
							echo "<script>window.open('teacher_home.php','_self');</script>";
						}
						else
						{
							echo "<div class='error'>Invalid Username Or Password</div>";
						}
					}
				
				
				
				?>
			
				<form name="myForm" method="post" action="<?php echo $_SERVER["PHP_SELF"];?>" onsubmit="return validateForm()">
					<label>User Name</label><br>
					<input id="myName" onfocus="focusID()" onblur="blurID()" type="text" name="name" placeholder="Enter User Name"><br><br>
					<p id="nameError"></p>

					

					<label>Password </label><br><br>
					<input type="password" placeholder="Enter Password" id="myPsw" onfocus="focusPsw()" onblur="blurPsw()" name="pass" placeholder="Enter Your Password"><br>
					<p id="pswError"></p>
					

					<input type="checkbox" checked="checked" name="remember"> Remember me
					
					<button type="submit" class="btn" name="login">Login Here</button>
				</form>
			</div>
		</div>
		
		
		
		
		
			<!-- <script src="js/jquery.js"></script>
		         <script>
		        $(document).ready(function(){
		        	$(".error").fadeTo(1000, 100).slideUp(1000, function(){
		        			$(".error").slideUp(1000);
		        	});
		        	
		        	$(".success").fadeTo(1000, 100).slideUp(1000, function(){
		        			$(".success").slideUp(1000);
		        	});
		        });
			</script> -->
		
<script>
function focusID() {
  document.getElementById("nameError").innerHTML = "";
  document.getElementById("myName").style.background = "white";
  
}

function blurID() {
  var x = document.forms["myForm"]["name"].value;
  if (x == ""){

  document.getElementById("nameError").innerHTML ="<span style='color: red;'>User Name must be filled out</span>"; 
  document.getElementById("myName").style.background = "red";
  }
}





function focusPsw() {
  document.getElementById("pswError").innerHTML = "";
  document.getElementById("myPsw").style.background = "white";
  
}
function checkPassword(str)
{
    var re = /^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
    return re.test(str);
}

function blurPsw() {
  var x = document.forms["myForm"]["pass"].value;
  if (x == ""){
  document.getElementById("pswError").innerHTML ="<span style='color: red;'>Password must be filled out</span>"; 
  document.getElementById("myPsw").style.background = "red";
  }
  else if(x.length<8) {
    document.getElementById("pswError").innerHTML ="<span style='color: red;'>Password must be at least eight characters</span>"; 
    document.getElementById("myPsw").style.background = "red";
  }
  // else {
  //   var pass = checkPassword(x);
  //   if(!pass) {
  //     document.getElementById("pswError").innerHTML ="<span style='color: red;'>Password must contain min 8 letter password, with at least a symbol, upper and lower case letters and a number</span>"; 
  //     document.getElementById("myPsw").style.background = "red";
  //   }
  // }
}


function validateForm() {
  var a = document.forms["myForm"]["name"].value;
  var b = document.forms["myForm"]["pass"].value;

  if (a == null || a == "", b == null || b == "") {
      alert("Please Fill All Required Field");
      return false;
    }
 
}

function validateForm() {
  var a = document.forms["myForm"]["name"].value;
  var b = document.forms["myForm"]["pass"].value;

  if (a == null || a == "", b == null || b == "") {
      alert("Please Fill All Required Field");
      return false;
    }  
    else if(b.length<8, b.length<8) {
    alert("Password must be at least eight characters");
    return false;
  
  }
 
}



</script>


	</body>
</html>