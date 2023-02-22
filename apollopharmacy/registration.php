<?php
	include("connection.php");
?>
	<!DOCTYPE HTML>
		<html lang="en">
		<head>
			<script type="text/javascript">

				function myOnClickFn()
						{

							window.location="show_reg2.php";
						}

				function myOnClickFnn()

						{

							window.location="searchshow.php"
						}
			</script>

			<meta charset="UTF-8">
			<title>registration page</title>
				<style type="text/css">

					body{

								background: url("3.php.jpg")center  ;
								height: 100vh;
								background size: cover;
								margin: auto;
								padding: auto;
						}

					.h2{

				 				font-family:'Quicksand';
								font-size:33px;
								margin: 0px;
								padding: 0px;
								color: balck;
								text-shadow: 1px 1px aqua;
								text-align: center;
								margin-top: -20px;
								padding-top: -20px;

		
						}
		

					table {

								font-familY:VERDANA;
								color:black;
								width: 423px;
								height: 560px;
								font-weight:bold;
								background-image:linear-gradient(aqua,white,rebeccapurple) ;
								border-collapse:collapse;
								border:2px solid white;
								border-style:solid;
								box-shadow:12px 12px 20px aqua,-12px -12px 20px rebeccapurple;
								font-size: 95%;
							}

	
					table td{

								margin-top: -10px;
								padding-top: -10px;

		}    

input[type=text],input[type=email],input[type=number],input[type=password],input[type=date]

{
	font-size: 10px;
	font-family: !important;
	box-shadow:  2px 2px black;
	
	height: 20px;
	width:250px;
	margin: 20px;
	padding:3px 20px;
	margin:19px 20;
	margin-top: -10px;
			padding-top: -10px;

	box-sizing:border-box;
	box-shadow: 6px 6px 9px gray, -6px -6px 9px whitesmoke;		  
				 
	

}

input[type=radio]{
	
	

	
	height: 15px;
	width:20px;
	padding:3px 20px;
	margin:19px 20;
	box-sizing:border-box;
	box-shadow: 6px 6px 9px gray, -6px -6px 9px whitesmoke;	
	margin-top: -10px;
			padding-top: -10px;
	  
}


.neonbutton{
	margin-top: -30px;
			padding-top: -5px;


}
 
.neonbutton .btn{

 	border: 2px solid rebeccapurple;
 	background-color: white;
	align-items: center;
	display:inline-block;
	color:black;
	letter-spacing:1px;
	text-transform:uppercase;
	text-decoration:none;
	overflow:hidden;

	margin-left:0px;
	margin-right:0px;
	width:114px;
	height:25px;
	border-radius:1px;
	padding:1px;
	margin: 3px;
	font-size:12px;


	
}
.neonbutton .btn:hover {
	color:black;
	background:rebeccapurple;
	box-shadow:0 0 15px aqua;
}
a{
	font-size: 15px;
	color: aqua;
	
	text-decoration: none;
	margin-top: -5px;
			padding-top: -5px;

}


	</style>

</head>
<body>
	<form method="post">
	
	<div class="webcontainer"></div>
	<div class="article"></div>
	
	<table align="center" cellpadding="0">



<tr>
<div class="h2"	>
 REGISTRATION</div>

	</tr>
	<tr>

	<td>&nbsp;&nbsp;&nbsp;&nbsp;First Name

	&nbsp;<input type="text" name="firstname" maxlength="200" />
	</td>
</tr>

<!---------------Last Name----------------->
<tr>
	<td>&nbsp;&nbsp;&nbsp;&nbsp;Last Name 
	&nbsp;<input type="text" name="lastname" maxlength="100" />
	
</td>
</tr>

<!-------------------email id---------------------->
<tr>
	<td>&nbsp;&nbsp;&nbsp;&nbsp;Email Id
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="email" name="emailid" maxlength="100" />
</td>
</tr>

<!-------------mobile number------------>
<tr>
	<td>&nbsp;&nbsp;&nbsp;&nbsp;Mobile No
 &nbsp;&nbsp;<input type="text" name="mobileno" maxlength="100" />
	
</td>
</tr>
<!-------------gender------------>
<tr>
	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gender

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="gender" value="male"/>
	Male
	&nbsp;<input type="radio" name="gender" value="female"/>
	Female
</td>
</tr>

<!-------------date of birth------------>
<tr>
	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DOB
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="date" name="dob"></td>
</tr>

<tr>
	<td>&nbsp;&nbsp;&nbsp;&nbsp;Password
		&nbsp;&nbsp;<input type="password" name="password" maxlength="100"></td>
</tr>
	<td> ConPassword
	
		 <input type="password" name="confirmpassword" maxlength="100"></td>
</tr>

<tr>
	<th>
		<div class="neonbutton">
	<input type="submit" value="insert" name="submit" class="btn">
	<input type="reset" value="reset" class="btn">
	<input type="submit" value="update" name="update" class="btn">
	<input type="submit" value="delete" name="delete" class="btn">
	<input type="button" value="Record" class="btn" onclick="myOnClickFn()"/>
	<input type="button" value="search" class="btn" onclick="myOnClickFnn()">
	
	</div></th>
	</tr>

	<tr>
		<th><small>Already have an account?</small>

			<a href="login1.php">login now</a>
	
	</th>
</tr>

<!-------------<tr>
	<td colspan="7" border="2">
<div class="neonbutton">

&nbsp;<a href="loginpage.php"> insert</a> 
<a>delete </a> 
<a> order</a> 
<a>update</a>
&nbsp;<a>record</a> 
<a> search</a> 
<a>next</a> 
<a>previous</a>
------>

</table>
</form>
<?php
//insert
if(isset($_POST['submit']))
{
	$firstname =$_POST['firstname'];
	$lastname =$_POST['lastname'];
	$emailid =$_POST['emailid'];
	$mobileno =$_POST['mobileno'];
	$gender =$_POST['gender'];
	$dob =$_POST['dob'];
	$password =$_POST['password'];
	$confirmpassword =$_POST['confirmpassword'];
	
	$result=mysqli_query($conn,"INSERT INTO REGISTRATION VALUES('$firstname','$lastname','$emailid','$mobileno','$gender','$dob','$password','$confirmpassword')")or die(mysqli_error($conn));
	
	if($result)
	{
		echo '<script type="text/javascript">alert("Registered successfuly")</script>';
		echo "<script>window.location='login1.php';</script>";
	}
	else
	{
		echo '<script type="text/javascript">alert(" Not Registered")</script>';
	}
}

?>
	<?php
	//update
	if (isset($_POST['update']))
	{
		$emailid =$_POST['emailid'];
		$result="UPDATE REGISTRATION SET firstname='$_POST[firstname]',lastname='$_POST[lastname]',emailid
		='$_POST[emailid]' ,mobileno ='$_POST[mobileno]' ,gender ='$_POST[gender]',dob ='$_POST[dob]',password ='$_POST[password]',confirmpassword ='$_POST[confirmpassword]' where emailid='$_POST[emailid]'";
		$query_run=mysqli_query($conn,$result);
		if($query_run)
		{
			echo'<script type="text/javascript"> alert("data updated")</script>';

		}
		else
		{
			echo'<script type="text/javascript"> alertO("data not updated")</script>';

		}
	
	}
?>

<?php
	//DELETE
	if (isset($_POST['delete']))
	{
		$emailid =$_POST['emailid'];
		//$result="DELETE FROM REGISTRATION SET firstname='$_POST[firstname]',lastname='$_POST[lastname]',emailid
		//='$_POST[emailid]' ,mobileno ='$_POST[mobileno]' ,gender ='$_POST[gender]',dob ='$_POST[dob]',password ='$_POST[password]',confirmpassword ='$_POST[confirmpassword]' where emailid='$_POST[emailid]'";
		$result="delete FROM REGISTRATION WHERE emailid='$_POST[emailid]'";
		$query_run=mysqli_query($conn,$result);
		if($result)
		{
			echo'<script type="text/javascript"> alert("data deleted")</script>';

		}
		else
		{
			echo'<script type="text/javascript"> alertO("data not deleted")</script>';

		}
	
	}
?>




</body>
</html>
