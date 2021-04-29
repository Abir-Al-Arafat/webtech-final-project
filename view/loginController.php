<?php
    require_once 'models/db_config.php' ;    
    $username="";
    $err_username="";
    $password="";
    $err_password="";
    $type = "";
    $err_type="";
    $hasError=false;
    

 

        
    
    
        if (isset($_POST["sign_up"])){
            if (empty($_POST["username"])){
                $err_username="Username Required";
                $hasError=true;
            }
            elseif(strlen($_POST["username"])<6){
                $err_username="Username must contain at least 6 characters ";
                $hasError=true;
            }
            elseif(strpos($_POST["username"]," ")) {
                $err_username="space is not allowed";
                $hasError=true;
            }
            else{
                $username=htmlspecialchars($_POST["username"]);
                
            }



 

            if(empty($_POST["password"]))
            {
                $hasError = true ;
                $err_password = "Password required!" ;
            }
            else 
            {
                $password = $_POST["password"] ;
            }

 
 
 

            
            if(empty($_POST["type"]))
            {
                $err_type="User type required";
                $hasError=true;
            }
            else
            {
                 $type=htmlspecialchars($_POST["type"]);
            }    
			
			
			
			
           if(!$hasError)
           {
              insertUser($username,$password,$type);
           }
        }

 
 
 
 
 
 
 

        
        
        if(isset($_POST["login"]))
        {
            
            if(empty($_POST["username"])){
                $err_username="Username Required";
                $hasError=true;
            }
            elseif(strlen($_POST["username"])<6){
                $err_username="Username must contain at least 6 characters ";
                $hasError=true;
            }
            elseif(strpos($_POST["username"]," ")) {
                $err_username="space is not allowed";
                $hasError=true;
            }
            else{
                $username=htmlspecialchars($_POST["username"]);
                
            }
			
			
			
			
			
			
            
			
			
            if(empty($_POST["password"]))
            {
                $hasError = true ;
                $err_password = "Password required!" ;
            }
            else 
            {
                $password = $_POST["password"] ;
            }
			
			
			
			
            if(isset($_POST['login']))
            {
                if(authentication($username,$password))
                {
                    header("Location: employee1.php") ;
                }
                echo "Invalid username or password" ;
                
            }
        }
    
	
	
	
	
    function insertUser($username,$password,$type)
    {
        $query = "INSERT INTO user VALUES (NULL,'$username','$password','$type')" ;
        
        execute($query) ;
    }
     
     
     
    function authentication($username,$password)
    {
        $query = "select * from user where username='$username' and password='$password'";
        $result = get($query) ;
        if(count($result)>0)
        {
            return $result[0] ;
        } 
        return false ;   
    } 
?>