<?php
	include("connection.php");
?>
<html>
<head>
	<meta charset="utf-8">
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
				font-size:50px;
				margin: 0px;
				padding: 0px;
				color: rebeccapurple;
				text-shadow: 3px 3px black;
				text-align: center;
				margin-top: -30px;
					padding-top: -30px;

		
		}
		

table {
font-familY:VERDANA;
			color:black;
	
			width: 900px;

			height: 560px;
			font-weight:bold;
			background-image:linear-gradient(aqua,white,rebeccapurple) ;
			border-collapse:collapse;
			border:2px solid BLACK;
			border-style:solid;
			box-shadow:12px 12px 20px aqua,-12px -12px 20px rebeccapurple;
				font-size: 12px;
		
}
a{
	font-size: 35px;
	color: rebeccapurple;
	
	text-decoration: none;
	margin-top: -5px;
			padding-top: -5px;

}

	
 
		    

	</style>
<body>
	
	<center>
		<div class="h2">RECORD</div>
	<table border="2">
		<tr>
			<th>FIRST NAME</th>
			<th>LAST NAME</th>
			<th>EMAIL ID</th>
			<th>MOBILE NUMBER</th>
			<th>GENDER</th>
			<th>DATE OF BIRTH</th>
			<th>PASSWORD</th>
			<th>CONFIRM PASSWORD</th>
		</tr>

    
	<?php
	
		
		$result=mysqli_query($conn,"SELECT * from registration")or die(mysqli_error($conn));
		while($res=mysqli_fetch_array($result))
		{
			echo'<tr>';
				echo'<td>'.$res['firstname'].'</td>';
				echo'<td>'.$res['lastname'].'</td>';
				echo'<td>'.$res['emailid'].'</td>';
				echo'<td>'.$res['mobileno'].'</td>';
				echo'<td>'.$res['gender'].'</td>';
				echo'<td>'.$res['dob'].'</td>';
				echo'<td>'.$res['password'].'</td>';
				echo'<td>'.$res['confirmpassword'].'</td>';
			echo'</tr>';
		}
	?>

</table>
<tr>
		<th><strong>click her for home page</strong>

			<a href="fhome.php">click here</a>
	
	</th>
</tr>

</center>
</body>
</html>