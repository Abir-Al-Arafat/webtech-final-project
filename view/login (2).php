<?php
    require_once "controllers/loginController.php" ;
?>
<html>
    <head>
    <style>
         body{
                background-color:rgb(223,223,242);
            }
            .login-div{
                border:1px solid black;
                margin:auto;
                width:30%;
                margin-top:12%;
                background-color:rgb(255,255,255);
                padding:12px;
            }
            .my-font{
                font-size:25px;
                font-family:consolas;
            }
            .my-text-field{
                width:100px;
            }
            .btn-mine{
                background-color:rgb(185,143,221);
                border:none;
                color:white;
                width:99%;
                border-radius:3px;
                padding:5px;
                margin-top:15px;
            }
            .btn-mine:hover{
                background-color:rgb(111,77,145);
            }
            .btn-mine:active{
                background-color:rgb(97,15,115);
            }
     </style> 

 

        
<body>

 


        <form action="" method="post">
         <div class="login-div">
        <table >
        
          <tr>
                 <td><img src="img/loginform.png" width="150px" height="150px"</td>
                 <td><h1 align="center">Login Form</h1></td>
             </tr>
                    <td><span><b>Username:</b></span></td>
                    <td><input type="text" value="<?php echo $username;?>" name="username" placeholder="username">
                        <span><?php echo $err_username;?></span></td>
                </tr>
                <tr>
                    <td><span><b>Password:</b></span></td>
                    <td><input type="password" name="password" value="<?php echo $password;?>" placeholder="Password"><br>
                        <span><?php echo $err_password;?></span></td>
                </tr>
                
                <tr>
                    <td><input type="submit" name="login" value="Login"></td>
                </tr>
            </table>
    </form>    
    </fieldset>
        </div>
    

 

</body>

 

 


</html>
