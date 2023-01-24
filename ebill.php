<html>
<body bgcolor="pink">
<h1 align="center">ELECTRICITY BILL</h1>
<form method="post" action="#">
Consumer id:<input type="number" name="id"><br><br>
Name:<input type="text" name="name"><br><br>
Unit consumed:<input type="number" name="units"><br><br>
<input type="submit">
<input type="reset">
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$id=$_POST["id"];
$name=$_POST["name"];
$units=$_POST["units"];
echo"<h3> KSEB </h3>";
echo"consumer id:".$id."<br>";
echo"consumer name:".$name."<br>";
echo"consumer id:".$units."<br>";
if($units<100)
{
$amt=$units*3;
}
elseif($units>100 && $units<=200)
{
$amt=$units*4;
}
elseif($units>200 && $units<=300)
{
$amt=$units*5;
}
else
{
$amt=$units*5;
}
echo"<h4> total :rs.".($amt)."</h4><br>";}
?>
</body>
</html>

