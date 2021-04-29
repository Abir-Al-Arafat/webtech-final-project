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
          $add_qry="insert into admin values(NULL,'$_POST[fullname]','$_POST[email]','$_POST[phone]','$_POST[dateOfBirth]','$_POST[username]','$_POST[password]','$_POST[regdate]','$_POST[type]','$dst')";
          mysqli_query($link,$add_qry);

          //inserting into json file
          if(file_exists('../model/admin.json'))  
          {  
                $current_data = file_get_contents('../model/admin.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                    // 'id'               =>     $_POST["id"],  
                     'fullname'          =>     $_POST["fullname"],  
                     'email'     =>     $_POST["email"],  
                     'phone'     =>     $_POST["phone"],  
                     'dateOfBirth'     =>     $_POST["dateOfBirth"],   
                     'username'     =>     $_POST["username"],  
                     'password'     =>     $_POST["password"],  
                     'regdate'     =>     $_POST["regdate"],  
                     'type'     =>     $_POST["type"],  
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('../model/admin.json', $final_data))  
                {  
                    $message = "File Appended Successfully in admin.json"."<br>";                  
                }  
          }
          if(file_exists('../model/login.json'))
          {
               $current_data_1 = file_get_contents('../model/login.json');
               $array_data_1 = json_decode($current_data_1, true); 
               $extra_1 = array(  
              //      'id'               =>     $_POST["id"],   
                    'username'     =>     $_POST["username"],  
                    'password'     =>     $_POST["password"],   
                    'type'     =>     $_POST["type"]  
               ); 
               $array_data_1[] = $extra_1;
               $final_data_1 = json_encode($array_data_1);
               if(file_put_contents('../model/login.json',$final_data_1))
               {
                    $message_1 = "File Appended Successfully in login.json"."<br>";
                    header('location: ../view/viewAllUsers.php');
               }
          }  

          else  
          {  
                $error = 'JSON File does not exist';  
          }  
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