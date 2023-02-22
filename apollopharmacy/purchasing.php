<?php
	include("connection.php");
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
	<script type="text/javascript">
		function myOnClickFn()
		{
			window.location="medrecord.php";
		}

		function myOnClickFnn()
		{
			window.location="medsearch.php";
		}

</script>
	<meta charset="UTF-8">
	<title>registration page</title>
	<style type="text/css">
		body{
			background: url("3.php.jpg")  ;
			height: 100vh;
			background size: cover;
			margin: auto; 
		}

.h2{

 		
 				font-family:'Quicksand';
				font-size:33px;
				margin: 0px;
				padding: 0px;
				color: black;
				text-shadow: 1px 1px aqua;
				text-align: center;
				margin-top: -20px;
					padding-top: -20px;

		}
		

table{

	font-familY:VERDANA;
	color:black;
	width: 490px;

			height: 560px;
			font-weight:bold;
			background-image:linear-gradient(aqua,white,rebeccapurple) ;
			border-collapse:collapse;
			border:2px solid white;
			border-style:solid;
			box-shadow:12px 12px 20px aqua,-12px -12px 20px rebeccapurple;
				font-size: 15px;
		
}
	
table td{
			margin-top: -10px;
			padding-top: -10px;

		}    
    


	input[type=text],input[type=email],input[type=number],input[type=password]
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
	width:140px;
	height:25px;
	border-radius:1px;
	padding:1px;
	margin: 3px;
	font-size:12px;

}
.neonbutton .btn:hover{
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
  PURCHASING </div>

	</tr>
	<tr>
<!---------------Medicine Name----------------->

	<td>&emsp;Medicine Name

	&emsp;&emsp;&emsp;<input type="text" name="medicinename" maxlength="200" onclick="" >
	</td>
</tr>

<!---------------Batch No----------------->
<tr>
	<td>&emsp;Batch No
	&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="batchno" maxlength="100" />
	
</td>
</tr>


<!-------------Manufacturing No------------>
<tr>
	<td>&emsp;Manufacturing No
	&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="manufacturingno" maxlength="10" />
	
</td>
</tr>

<!---------Quantity----->
<tr>
	<td>&emsp;Quantity
	&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="quantity" maxlength="50" />
	
</td>
</tr>

<!------------Price------------->
<tr>
	<td>&emsp;Price
	&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;<input type="text" name="price" maxlength="6" />
	
</td>
</tr>

<!------------GST------------->
<tr>
	<td>&emsp;GST
	&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="gst" maxlength="50" />
	
</td>
</tr>

<!------------Manufacturing Date------------->
<tr>
	<td>&emsp;Manufacturing Date
	&nbsp;<input type="text" name="manufacturingdate"  />
</td>
</tr>


<!------------Expiry Date------------->
<tr>
	<td>&emsp;Expiry Date
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="expirydate"  />
</td>
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
		<th>

			<a href="medicine.php">BACK NOW</a>
	
	</th>
</tr>

</table>
</form>
<?php
//insert
if(isset($_POST['submit']))
{
	$medicinename =$_POST['medicinename'];
	$batchno =$_POST['batchno'];
	$manufacturingno =$_POST['manufacturingno'];
	$quantity=$_POST['quantity'];
	$price=$_POST['price'];
	$gst=$_POST['gst'];
	$manufacturingdate=$_POST['manufacturingdate'];
	$expirydate =$_POST['expirydate'];
	
	$result=mysqli_query($conn,"INSERT INTO medicine VALUES('$medicinename','$batchno','$manufacturingno','$quantity','$price','$gst','$manufacturingdate','$expirydate')")or die(mysqli_error($conn));
	
	if($result)
	{
		echo '<script type="text/javascript">alert("Successfuly")</script>';
		echo "<script>window.location='pay1.php';</script>";
	}
	else
	{
		echo '<script type="text/javascript">alert(" Not Successfuly")</script>';
	}
}

?>
	<?php
	//update
	if (isset($_POST['update']))
	{
		$medicinename =$_POST['medicinename'];
	  $result="UPDATE medicine SET medicinename='$_POST[medicinename]',batchno='$_POST[batchno]',manufacturingno
		='$_POST[manufacturingno]' ,quantity ='$_POST[quantity]' ,price ='$_POST[price]',gst ='$_POST[gst]',manufacturingdate ='$_POST[manufacturingdate]',expirydate='$_POST[expirydate]' where medicinename='$_POST[medicinename]'";
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
		$emailid =$_POST['medicinename'];
		//$result="DELETE FROM REGISTRATION SET firstname='$_POST[firstname]',lastname='$_POST[lastname]',emailid
		//='$_POST[emailid]' ,mobileno ='$_POST[mobileno]' ,gender ='$_POST[gender]',dob ='$_POST[dob]',password ='$_POST[password]',confirmpassword ='$_POST[confirmpassword]' where emailid='$_POST[emailid]'";
		$result="delete FROM medicine WHERE medicinename='$_POST[medicinename]'";
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
