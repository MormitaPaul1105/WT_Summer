<html>
<head>
    <Title> Home Page</title>
<body>
    <h1> Registration Form</h1>
    
    <form action="../control/process.php" method="POST">
        <table>
            <tr> <td>First Name: </td>
            <td><input type= "text" name="fname">
            </tr></td>

        <tr><td>Last Name: </td>
        <td><input type="text"  name="lname"></tr></td>

        <tr><td>Age: </td>  
        <td><input type="text" name="age"></tr></td>

        <tr><td>Designation:</td>

        <td><input type="radio" name="designation" value="Junior Programmer" >Junior Programmer

        <input type="radio" name="designation" value="Senior Programmer" >Senior Programmer

        <input type="radio" name="designation" value="Project_Lead" >Project Lead</td></tr>

        <tr><td>Preferred language</td>

        <td><input type="checkbox" name="P_Language" value="java">Java

        <input type="checkbox" name="P_Language2" value="php">PHP

        <input type="checkbox" name="P_Language3" value="c++">C++
     
    </td></tr>

        <tr><td>E-mail: </td>
            
        <td><input type="text" name="Email"> </tr></td>

        <tr><td>Password: </td>

        <td><input type="password" name="pass"> 
    </tr></td>
       
        <tr><td> Please choose a file </td><td><input type= "file" name=" File"> </td> </tr>

       <tr><td> <input type="submit" name="Submit"> <input type= "reset" name = Reset></td></tr>
</table>
</form>
</body>
</html>