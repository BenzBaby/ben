<html>
<head>
<title>DELTA LAUNDRY WORKS</title>
</head>
<link rel="stylesheet" href="1.css">
<body>
<?php
include 'dbconnect';
if(isset($_POST["b1"]))
{
$Nm=$_POST["name"];
$Em=$POST["email"];
$Ps=$_POST["password"];
$Pn=$_POST["phoneno"];
$in="INSERT INTO `regis`(`Name`, `Email`, `Password`, `Phone`) VALUES ('$Nm','$Em','$Ps','$Pn')";
$res=mysqli_query($con,$in);
header("location:JS.html");
}
?>
<script>
function validateform()
{
var x=document.myform.name.value;
var y=document.myform.password.value;
var z=document.myform.cpassword.value;
var b=document.myform.phoneno.value;
var a=document.myform.address.value;
if(x==null || x=="")
{
alert("the name field should not be blank");
}
else if(y.length<6)
{
alert("password length should be minimum 6 ");
}
else if(y!=z)
{
alert("Password doesnot match");
}
else if(b==null || b=="")
{
alert("the phoneno field should not be blank");
}
else if(a==null || a=="")
{
alert("the address field should not be blank");
}
}
</script> 
<form name="myform" onsubmit=validateform() action="#" method="POST">

<center>
<form method="POST" action="1.php">
<br><h1>SIGN UP</h1><br>
Name:<input type="text" name="name">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

<label for="email">Email:</label>
<input type="text" id="address" name="email" ><br><br><br>



Password:<input type="password" name="password">
ConfirmPassword:<input type="password" name="cpassword">


<label for="phone">phone no:</label>
<input type="text" id="phone" name="phoneno"pattern="[789][0-9]{9}"  ><br>

<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<textarea required id="address" name="address" rows="4" >Enter address</textarea >
<br><br>
<input type="submit" value="submit" name="b1"><br><br>

 <a href="JS.html">Already have an account?Login</a>
                                        