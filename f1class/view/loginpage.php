<html>
    <title>Customer Login Page</title>
        <body>
        <?php
       include ("../control/processlogin.php");
        ?>

<form action="" method="post" enctype="multipart/form-data">
    <center>
    <h1> Customer Login Page</h1>

<table>
<tr><td>
    
</td></tr>
<tr><td>Username:</td>
<td><input type="text"name="firstname"></td></tr>
 <tr><td>Password: </td>
 <td> <input type="password" name="password"  ></td></tr>
 
 <tr> <td>
<input type="submit"name="login"value="Login"></td></tr>
<tr> <td>
<tr><td>
    <a href ="../view/lb_task3.php"> Sign up</a>

</td>

</table>
</center>
</form> 


</body>
    </html>