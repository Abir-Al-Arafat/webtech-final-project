<?php  
 include "../model/db_connection.php";

 $message = '';  
 $error = '';  
 if(isset($_POST["submit"]))  
 {  
      if(empty($_POST["fullname"]))  
      {  
           $error = "Name field cannot be empty";  
      }
      else if(empty($_POST["fathername"]))  
      {  
           $error = "fathername cannot be empty";  
      }
      else if(empty($_POST["mothername"]))  
      {  
           $error = "mothername cannot be empty";  
      }  
      else if(empty($_POST["class"]))
      {
           $error = "class cannot be empty";  
      }  
      else if(empty($_POST["email"]))  
      {  
           $error = "E-mail field cannot be empty";  
      }  
      else if(empty($_POST["phone"]))  
      {  
           $error = "Give a valid phone no";  
      }  
      else if(empty($_POST["dateOfBirth"]))  
      {  
           $error = "date of birth cannot be empty";  
      }
      else if(empty($_POST["username"]))  
      {  
           $error = "User Name cannot be empty";  
      } 
      else if(empty($_POST["password"]))  
      {  
           $error = "password cannot be empty";  
      }
      else if(empty($_POST["confirmpassword"]))
      {
          $error = "confirm password field cannot be empty";
      }
      else if(empty($_POST["type"]))
      {
          $error = "type field cannot be empty";
      }
     else  
     {

     $pass = $Cpass = ""; 
     if(isset($_POST['password'])&&isset($_POST['confirmpassword'])) // checking if password is set or not
     {
        $pass = $_POST['password'];
        $Cpass = $_POST['confirmpassword'];
        if($pass == $Cpass) //checking if passwords match or not
        {

          //image uploading procedure
         $tm=md5(time());
         $fnm=$_FILES["f1"]["name"];
         $dst="../images/profile/".$tm.$fnm; 
         //$dst1="images/profile/".$tm.$fnm; 
         move_uploaded_file($_FILES["f1"]["tmp_name"],$dst);

          //inserting into database
          $add_qry="insert into student values(NULL,'$_POST[fullname]','$_POST[fathername]','$_POST[mothername]','$_POST[class]','$_POST[email]','$_POST[phone]','$_POST[dateOfBirth]','$_POST[username]','$_POST[password]','$_POST[regdate]','$_POST[type]','$dst')";
          mysqli_query($link,$add_qry);

          header('location: ../view/addStudent.php');
            
        }
        else
        {
          $error = "Passwords did not match";          
        }
    }
            
          
     }  
 }
     if(isset($message))  
     {  
     echo $message;  
     }
     if(isset($error))  
     {  
          echo $error;  
     } 
     if(isset($message_1))
     {
          echo $message_1;
     }       
 ?> 