<?php
	include("connection.php");
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	
	<meta charset="UTF-8">
	<title>registration page</title>
	<style type="text/css">

body{			 
					background: url("3.php.jpg") center;
					height: 100vh;
					background-size: cover;
					margin: auto;
					padding: auto;
		}

		
.h2{

 		
					font-family:'Quicksand';
					font-size:60px;
					color: rebeccapurple;
					text-shadow: 3px 3px black;
					text-align: center;
					margin-top: 10px;
					padding-top: 10px;

		}
		

table{

	font-familY:VERDANA;
	color:black;
	font-size:18px;
	font-weight:bold;
	background-image:linear-gradient(aqua,white,rebeccapurple) ;
	border-collapse:collapse;
	border:2px solid white;
	border-style:solid;
	width: 400px;
	height: 450px;
	margin-top: 30px;
    box-shadow:12px 12px 20px aqua,-12px -12px 20px rebeccapurple;
    
}



table.inner
		{
					border:30px;

}

input[type=email],input[type=password]

{
			height: 35px;
			width: 370px;
			font-size: 15px;
			font-family: !important;
			box-shadow:  2px 2px black;
			padding:2px 12px;
			margin:9px 2;
			box-sizing:border-box;
			box-shadow: 6px 6px 9px gray;		  
	
}

.neonbutton .btn{

 	border: 2px solid rebeccapurple;
 	background-color: white;
	align-items: center;
	display:inline-block;
	color:#008000;
	letter-spacing:2px;
	text-transform:uppercase;
	text-decoration:none;
	overflow:hidden;

	margin-left:0px;
	margin-right:0px;
	width:370px;
	height:30px;
	border-radius:1px;
	padding:1px;
	margin: 3px;
	font-size:10px;
	
}
.neonbutton .btn:hover {
	color:#111;
	background:rebeccapurple;
	box-shadow:0 0 15px aqua;
}
a{
	font-size: 15px;
	color: aqua;
	text-decoration: none;
}

	</style>


<title>Login page</title>

</head>
<body>
<form method="post">
	<table align="center" cellpadding="10">
<tr>
<div class="h2"	>LOGIN PAGE</div>

	</tr>

	

	<tr>
	<td>Email :
	<input type="email" name="emailid"></td>
	</tr>
	<tr>
	<td>Password :
	<input type="password" name="password"></td>
	</tr>
	
	<tr>
	<td><div class="neonbutton">
	&nbsp;&nbsp;<input type="submit" value="login" name="submit" class="btn">
	<input type="reset" value="cancel" class="btn">
	
	</div></td>
	</tr>

	<tr>
		<th><small>Don't have an account?</small>

			<a href="registration.php">registration</a>
	
	</th>
</tr>
	
	</table>
	</form>
<?php
if(isset($_POST['submit']))
{
	
	$emailid=$_POST['emailid'];
	$password=$_POST['password'];
	
	$sql="SELECT * FROM `registration` WHERE emailid='$emailid' and password='$password'";
	$result=mysqli_query($conn,$sql);
	
	if(mysqli_num_rows($result) == 1)
	{
		while($row=mysqli_fetch_array($result))
		{
			echo '<script type="text/javascript">alert("Login successfuly")</script>';
			echo "<script>window.location='fhome.php';</script>";
		}
	}
	else
	{
		echo '<script type="text/javascript">alert(" Login Failed")</script>';
	}
	
}
?>
</body>
</html>