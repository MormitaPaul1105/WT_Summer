function passval(){
    var passval=document.getElementById("p1").value;
    var pattern=/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/;

    if(passval.length>=8 && passval.match(pattern)){
        document.getElementById("passw").innerHTML="Password is  correct";
        return true;

    }
    else{

        document.getElementById("passw").innerHTML="Password must be more than 8 letters long and must have a uppercase and a number";
        return false;
    }
}


//lastname validation
function lnameval(){
    var patt=/^[a-zA-Z\s]*$/;
    var lnameval=document.getElementById("l1").value;
    if(!isNaN(lnameval) ){
        document.getElementById("lnameerror").innerHTML="Last Name should not contain numbers and symbol";
        return false;
    }
    else if (!lnameval.match(patt)) 
    {
        document.getElementById("lnameerror").innerHTML="Last Name should not contain numbers and symbol";
        return false;
    }
    else{
        document.getElementById("lnameerror").innerHTML="Last Name is correct";
        return true;
    }
}
//firstname validation
function fnameval(){
    var patt=/^[a-zA-Z\s]*$/;

    var fnameval=document.getElementById("f1").value;
    if(!isNaN(fnameval)){
        document.getElementById("nameerror").innerHTML="First Name should not contain numbers and symbol";
        return false;
    }

     else if (!fnameval.match(patt))
    {
        document.getElementById("nameerror").innerHTML="First Name should not contain numbers and symbol";
        return false;
    }
    else{
        document.getElementById("nameerror").innerHTML="First name  is correct";
        return true;
    }

}
//email validation
function emailcheck(){
    var emailval=document.getElementById("mail").value;
    var pattern=/^\w+([-+.']\w+)*@[A-Za-z\d]+\.aiub.edu$/;
    if(emailval.match(pattern)){
        document.getElementById("mailerror").innerHTML="Email is  correct";
        return true;

    }
    else{
        document.getElementById("mailerror").innerHTML="Email is not correct";
        return false;

    }
}
//age validation
function ageval(){
    //age must be a number
    var ageval=document.getElementById("ag1").value;
    if(isNaN(ageval) ) {
        document.getElementById("age").innerHTML="Age must be more then 2 digit";
        return false;

    }
    else if(!isNaN(ageval) && ageval.length<2 ) {
        document.getElementById("age").innerHTML="Age must be more then 2 digit";
        return false;
    }
    else{
        document.getElementById("age").innerHTML="Age is correct";
        return true;

    }  
    
}
//radio 
function getradioval(){
    if(document.getElementById("Junior").checked==true){
        
        document.getElementById("radiovalue").innerHTML="Junior Programmer has been checked";
        return true;
    }
    else if(document.getElementById("Senior").checked==true){
        document.getElementById("radiovalue").innerHTML="Senior Programmer has been checked";
        return true;
        }
    else if(document.getElementById("PL").checked==true){
        document.getElementById("radiovalue").innerHTML="Project Lead has been checked";
        return true;
        }
    else{
        document.getElementById("radiovalue").innerHTML="Please select a radio button";
        return false;
    }

}
//checkbox
function checkval(){
    if(document.getElementById("java").checked==true  && document.getElementById("php").checked==true ){
        
        document.getElementById("checkvalue").innerHTML="Java and PHP has been checked";
        return true;
    }
    else if(document.getElementById("php").checked==true && document.getElementById("cplusplus").checked==true){
        document.getElementById("checkvalue").innerHTML="PHP and C++ has been checked";
        return true;
        }
    else if(document.getElementById("cplusplus").checked==true && document.getElementById("java").checked==true){
        document.getElementById("checkvalue").innerHTML="Java and C++ has been checked";
        return true;
        }
    else if(document.getElementById("java").checked==false && document.getElementById("php").checked==false && document.getElementById("cplusplus").checked==false){
        document.getElementById("checkvalue").innerHTML="Please select a Checkbox";
        return false;
        }
    else if(document.getElementById("php").checked==true ){
        document.getElementById("checkvalue").innerHTML="PHP  has been checked";
        return true;
        }
    else if( document.getElementById("cplusplus").checked==true){
        document.getElementById("checkvalue").innerHTML=" C++ has been checked";
        return true;
        }
    else if(document.getElementById("java").checked==true ){
        document.getElementById("checkvalue").innerHTML="Java has been checked";
        return true;
        }
    else{
        document.getElementById("checkvalue").innerHTML="Java,PHP and C++ has been checked";
        return true;
    }

}
function fileval(){
    //file uploading validation
    var fileval=document.getElementById("f1").value;
    var pattern=/\.(jpg|jpeg|png|doc|docx|pdf)$/;
    if(fileval.match(pattern)){
        document.getElementById("Fileerror").innerHTML="File is  not correct";
        return true;

    }
    else{
        document.getElementById("Fileerror").innerHTML="File is  correct";
        return false;

    }
}



function formcheck(){
    if(fnameval()==true && lnameval()==true && emailcheck()==true && ageval()==true && passval()==true && getradioval()==true && checkval()==true && fileval()==true){ 
        document.getElementById("sub").innerHTML="All information is provided";
        return true;

    }
    else{
        document.getElementById("sub").innerHTML="Please fillup all the fields";
        return false;
    }

}