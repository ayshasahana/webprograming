<html><head>
<title>registration form</title>
</head>
<body bgcolor=#737CA1>
<center>
<h1 align=center>RESGISTRATION FORM</h1>
<fieldset><legend>PERSONAL DETAILS</legend>

<form name="form" action="#" method="POST">
Username:<br>
<input type="text" name="name"><br>
E-mail:<br>
<input type="email" name="email"><br>
Create Password:<br>
<input type="password" name="pass1"><br>
Confirm Password:<br>
<input type="password" name="pass2"><br>
Contact:<br>
<input type="number" name="phn"><br>
Gender:<br>
<input type="radio" name="male">Male
<input type="radio" name="female">Female
<input type="radio" name="other">Other<br><br>
<input type="submit" value="SUBMIT" name="Submit"><br><br>
<input type="reset" value="RESET" name="Reset">
</fieldset></center>
</form>
<?php
if(isset($_POST['Submit']))
{
$username=$_POST['name'];
$password1=$_POST['pass1'];
$password2=$_POST['pass2'];
$email=$_POST['email'];
$phone=$_POST['phn'];
if(empty($username))
{
 echo "<script>alert('Enter Username!')</script>";
}
else if(empty($email))
{
 echo "<script>alert('Enter e-mail!')</script>";
}
else if(empty($password1))
{
 echo "<script>alert('Enter password!')</script>";
}
else if(strlen($password1)<8)
{
 echo "<script>alert('Your password must contain atleat 8 character!')</script>";
}
else if($password1!=$password2){
echo "<script>alert('Passwords do not Match!')</script>";
}
else if(empty($phone))
{echo "<script>alert('Enter Phone Number!')</script>";
}
else
{
 echo "<script>alert('Registration successful!')</script>";
}
}
?>
</body>
</html>

