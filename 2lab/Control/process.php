<?php




$fname=$_POST["fname"];
$lname=$_POST["lname"];
$age=$_POST["age"];
//$des=$_REQUEST['designation'];
$email=$_POST["Email"];
$password=$_POST["pass"];
$PL=" ";

if(strlen($_POST["fname"])>5)
{
    echo "Valid First Name<br>";
}
else{
    echo "First name more than 4 character<br>";
    
}
if(strlen($_POST["lname"])>5){
    echo  "Valid Last Name <br>";
}
else{
    echo  "Last name more than 4 character <br>";
    
}


if(empty($email)){
    echo "Email should not be empty<br>";
}
else{
    echo "Email is: " .$_POST["Email"] ;
    echo '<br>';
}

if(preg_match("/^[a-zA-Z-' ]*$/",$password))
{
    echo "Password should at least contain one numeric value";
    echo "<br>";
    
}
    else{
        echo "Password is valid<br>";
       
    }

if(isset($_REQUEST["designation"])){
    echo "Designation is = ".$_REQUEST["designation"];
    echo "<br>";
}
if(!isset($_REQUEST["designation"])){
    echo "Destination must be selected<br>";
}




if(isset($_REQUEST["P_Language"])|| (isset($_REQUEST["P_Language2"])) || (isset($_REQUEST["P_Language3"])))
{
    if(isset($_POST["P_Language"])&&isset($_POST["P_Language2"])&&isset($_POST["P_Language3"]))
{
   
$PL=$_REQUEST["P_Language"]." and ".$_REQUEST["P_Language2"]." and ".$_REQUEST["P_Language3"];
echo "<br> Interesed in " .$_REQUEST["P_Language"] ;
echo "," .$_REQUEST["P_Language2"]; 
echo "  ";
echo "and";
echo "  ".$_REQUEST["P_Language3"];

echo '<br>' ;
}

else if (isset($_POST["P_Language"])&&isset($_POST["P_Language2"]))
{
echo "<br> Interesed in " .$_REQUEST["P_Language"] ;
echo " and " .$_REQUEST["P_Language2"];
echo '<br>';
$PL=$_REQUEST["P_Language"]." and ".$_REQUEST["P_Language2"];

}

else if(isset($_REQUEST["P_Language2"]) && isset($_REQUEST["P_Language3"]))
{
echo "<br> Interesed in " .$_REQUEST["P_Language2"] ;
echo " and " .$_REQUEST["P_Language3"];
echo '<br>';
$PL=$_REQUEST["P_Language2"]." and ".$_REQUEST["PL3"];



}
else if(isset($_REQUEST["P_Language"]) && isset($_REQUEST["P_Language3"]))
{
echo "<br> Interesed in " .$_REQUEST["P_Language"] ;
echo " and " .$_REQUEST["P_Language3"];
echo '<br>';
$PL=$_REQUEST["P_Language"]." and ".$_REQUEST["P_Language3"];


}
   else if(isset($_REQUEST["P_Language"]))
   {
    echo "<br> Interesed in ".$_REQUEST["P_Language"];
    $PL=$_REQUEST["P_Language"];
}
  
else if(isset($_REQUEST["P_Language2"]))
{
echo "<br> Interesed in ".$_REQUEST["P_Language2"];
$PL=$_REQUEST["P_Language2"];

}
else  if(isset($_REQUEST["P_Language3"]))
{
echo "<br> Interesed in ".$_REQUEST["P_Language3"];
$PL=$_REQUEST["P_Language3"];

}

}
else
{
    echo " Preferred language must be selected ";
    echo '<br>';


}

?>