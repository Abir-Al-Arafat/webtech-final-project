<script>

        function validateForm(){  
		var name=document.loginform.name.value;  
		var email=document.loginform.email.value;  
		var username=document.loginform.username.value;  
		var password=document.loginform.password.value;  
		var conPassword=document.loginform.confirmpassword.value;  
		var gender=document.loginform.gender.value;  
		var dob=document.loginform.dateOfBirth.value;  
		  
		if (name==null || name==""){  
		  alert("Name cannot be blank");  
		  return false;  
		}else if(email==null||email==""){
            alert("E-mail cannot be blank");
            return false;
        }else if(username==null||username==""){
            alert("Username cannot be blank");
            return false;
        }
        else if (password==null||password=="") {
			alert("Password cannot be blank");
			return false;
		}else if(password.length<4){  
		  alert("Password must be at least 4 characters long.");  
		  return false;  
		  }else if(conPassword==null||conPassword==""){
            alert("re-type the same password again");
            return false;
        } else if(gender==null||gender==""){
            alert("choose a gender");
            return false;
        }else if(dob==null||dob==""){
            alert("Date of birth cannot be empty");
            return false;
        }   
		}

        function checkName() {
			if (document.getElementById("name").value == "") {
			  	document.getElementById("nameErr").innerHTML = "Name can't be blank";
			  	document.getElementById("nameErr").style.color = "red";
			  	document.getElementById("name").style.borderColor = "red";
			}else{
			  	document.getElementById("nameErr").innerHTML = "";
				document.getElementById("name").style.borderColor = "black";
			}			
        }

		function checkUN() {
			if (document.getElementById("username").value == "") {
			  	document.getElementById("unErr").innerHTML = "username can't be blank";
			  	document.getElementById("unErr").style.color = "red";
			  	document.getElementById("username").style.borderColor = "red";
			}else{
			  	document.getElementById("unErr").innerHTML = "";
				document.getElementById("username").style.borderColor = "black";
			}			
        }

        function checkEmail() {
			if (document.getElementById("email").value == "") {
			  	document.getElementById("emailErr").innerHTML = "E-mail can't be blank";
			  	document.getElementById("emailErr").style.color = "red";
			  	document.getElementById("email").style.borderColor = "red";
			}else{
			  	document.getElementById("emailErr").innerHTML = "";
				document.getElementById("email").style.borderColor = "black";
			}			
        }

		function checkPhone() {
			if (document.getElementById("phone").value == "") {
				document.getElementById("phoneErr").innerHTML = "please give a valid phone no.";
				document.getElementById("phoneErr").style.color = "red";
				document.getElementById("phone").style.borderColor = "red";
		  }else{
				document.getElementById("phoneErr").innerHTML = "";
			  document.getElementById("phone").style.borderColor = "black";
		  }	
			
		}

        function dob() {
			if (document.getElementById("dob").value == "") {
			  	document.getElementById("dobErr").innerHTML = "Date Of birth can't be blank";
			  	document.getElementById("dobErr").style.color = "red";
			  	document.getElementById("dob").style.borderColor = "red";
			}else{
			  	document.getElementById("dobErr").innerHTML = "";
				document.getElementById("dob").style.borderColor = "black";
			}			
        }
		function reg() {
			if (document.getElementById("regdate").value == "") {
				document.getElementById("regdateErr").innerHTML = "Registration date can't be blank";
				document.getElementById("regdateErr").style.color = "red";
				document.getElementById("regdate").style.borderColor = "red";
		  }else{
				document.getElementById("regdateErr").innerHTML = "";
			  document.getElementById("regdate").style.borderColor = "black";
		  }			
		}
		//checking old password, new password and confirm password
		function checkPass(){
        	if (document.getElementById("op").value == "") {
			  	document.getElementById("opErr").innerHTML = "This field can't be blank";
			  	document.getElementById("opErr").style.color = "red";
			  	document.getElementById("op").style.borderColor = "red";
			}else if(document.getElementById("op").value.length<4){
			  	document.getElementById("op").style.borderColor = "red";
			  	document.getElementById("opErr").style.color = "red";
				document.getElementById("opErr").innerHTML = "Password must be at least 4 characters long.";
			}
			else{
				document.getElementById("opErr").innerHTML = "";
			  	document.getElementById("opErr").style.color = "red";
				document.getElementById("op").style.borderColor = "black";
			}
        }

		//checking new password
		function checkPassNP(){
        	if (document.getElementById("np").value == "") {
			  	document.getElementById("npErr").innerHTML = "This field can't be blank";
			  	document.getElementById("npErr").style.color = "red";
			  	document.getElementById("np").style.borderColor = "red";
			}else if(document.getElementById("np").value.length<4){
			  	document.getElementById("np").style.borderColor = "red";
			  	document.getElementById("npErr").style.color = "red";
				document.getElementById("npErr").innerHTML = "Password must be at least 4 characters long.";
			}
			else{
				document.getElementById("npErr").innerHTML = "";
			  	document.getElementById("npErr").style.color = "red";
				document.getElementById("np").style.borderColor = "black";
			}
        }

        function checkPassCNP(){
        	if (document.getElementById("cnp").value == "") {
			  	document.getElementById("cnpErr").innerHTML = "This field can't be blank";
			  	document.getElementById("cnpErr").style.color = "red";
			  	document.getElementById("cnp").style.borderColor = "red";
			}else if(document.getElementById("cnp").value.length<4){
			  	document.getElementById("cnp").style.borderColor = "red";
			  	document.getElementById("cnpErr").style.color = "red";
				document.getElementById("cnpErr").innerHTML = "Password must be at least 4 characters long.";
			}
			else{
				document.getElementById("cnpErr").innerHTML = "";
			  	document.getElementById("cnpErr").style.color = "red";
				document.getElementById("cnp").style.borderColor = "black";
			}
        }

		function checkPassEA(){
        	if (document.getElementById("password").value == "") {
			  	document.getElementById("passErr").innerHTML = "Password can't be blank";
			  	document.getElementById("passErr").style.color = "red";
			  	document.getElementById("password").style.borderColor = "red";
			}else if(document.getElementById("password").value.length<4){
			  	document.getElementById("password").style.borderColor = "red";
			  	document.getElementById("passErr").style.color = "red";
				document.getElementById("passErr").innerHTML = "Password must be at least 4 characters long.";
			}
			else{
				document.getElementById("passErr").innerHTML = "";
			  	document.getElementById("passErr").style.color = "red";
				document.getElementById("password").style.borderColor = "black";
			}
        }


     
</script>