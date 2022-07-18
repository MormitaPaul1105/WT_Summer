<?php
session_start();
include("../model/db.php");
$haserror=0;

if(!empty($_SESSION["firstname"]))
{

    header("Location:../view/customerhome.php");  
}





if(isset($_REQUEST["login"])){
 //$username=$_POST["uname"];
//$password=$_POST["password"];



//if(!empty($_SESSION["username"]))
//{

    //header("Location:../view/customerhome.php");  
//}
    
    if(empty($_REQUEST["firstname"])&&empty($_REQUEST["password"]) ){
         
        echo "User Name and password cannot be empty ";
        echo '<br>';
        
    }
    else
    {
      $mydb=new mydb();
      $conobj=$mydb->openCon();
      $results=$mydb->checkLogin("employee",$_REQUEST["firstname"],$_REQUEST["password"],$conobj);
      if($results->num_rows >0)
      {
        
        $_SESSION["firstname"]=$_REQUEST["firstname"];
        $_SESSION["password"]=$_REQUEST["password"];
            echo "Login Successful";
            header("Location:../view/customerhome.php");  
      }
      else
      {
        echo "not a valid user";
      }
       }
       
    }
    
    
    ?>