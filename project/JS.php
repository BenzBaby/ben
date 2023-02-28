<html>
<link rel="stylesheet" href="1.css">
<body>
<script>
function validateform()
{
var x=document.myform.name.value;
var y=document.myform.password.value;
if(x==null || x=="")
{
alert("Enter your name");
}
else if(y==null || y=="")
{
alert("Enter your password ");
}
}
</script> 
<form name="myform" onsubmit=validateform()>
<center>
<br><br><br><br><br><br><br>
<h1>LOGIN</h1>
&nbsp&nbsp&nbsp&nbsp Name:<input type="text" name="name">
<BR><BR>
Password:<input type="password" name="password"><br><br>



<input type="submit" value="submit"><p>

</form>
</body>
</html>