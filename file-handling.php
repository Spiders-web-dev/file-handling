<?php
error_reporting(E_ERROR|E_PARSE);
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$gender=$_POST["gender"];
$email=$_POST["email"];
$username=$_POST["username"];
$password=$_POST["password"];
$remail=$_POST["remail"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>
       

Registration Form

    </title>

</head>
<body>


<h1>Registration form</h1>  

<form method="post">

    

    <fieldset>
    <legend>Basic Information:</legend>



    <label for="fname">First Name</label>
    <input type="text" name="fname" placeholder="Enter first name"required id="fastname">
    
    <br>
    <br>

    <label for="lname">Last Name</label>
    <input type="text" name="lname" placeholder="Enter last name"required id="lastname">
    
    <br>
    <br>

    <lebel>Gender</lebel>
    <input type="radio" name="gender" id="male"  value="male"required>
    <lable for="male">Male</lable>
    <input type="radio" name="gender" id="female"  value="female"required>
    <lable for="male">Female</lable>
    <input type="radio" name="gender" id="other"  value="other"required>
    <lable for="male">Other</lable>

    <br>
    <br>




    <br><br>

    <lebel>Email</label>
    <input type="email" id="email" placeholder="Enter email"required name="email">

 

    </fieldset>

    <br><br>

    <fieldset>
    <legend>User Account Information:</legend>

    <label for="username">Username</label>
    <input type="text" name="username" placeholder="Enter username"required id="username">

    <br><br>

    <label for="password">Password</label>
    <input type="password" name="password" placeholder="Enter password"required id="password">

    <br><br>

    

<lebel>Recovery Email</label>
<input type="email" id="remail" placeholder="Enter recovery email"required name="remail">


    id="link" name="link">

</fieldset>
   

<br><br>

<input type="submit" value="Submit">

</form>


</body>
</html>
<?php

$file=fopen("test.txt","a");
fwrite($file,$fname);
echo "<br/>";
fwrite($file,$lname);
echo "<br/>";
fwrite($file,$gender);
echo "<br/>";
fwrite($file,$email);
echo "<br/>";
fwrite($file,$username);
echo "<br/>";
fwrite($file,$password);
echo "<br/>";
fwrite($file,$remail);
echo "<br/>";
echo "<br/>";
echo "<br/>";
fclose($file);
?>