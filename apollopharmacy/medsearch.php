<?php
	include("connection.php");
?>
<html>
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
	
			width:900px;

			height: 130px;
			font-weight:bold;
			background-image:linear-gradient(aqua,white,rebeccapurple) ;
			border-collapse:collapse;
			border:2px solid BLACK;
			border-style:solid;
			box-shadow:12px 12px 20px aqua,-12px -12px 20px rebeccapurple;
				font-size: 12px;
		

}	
 
input[type=text]

{
	font-size: 20px;
	font-family: !important;
	border:  2px solid white;
	height: 50px;
	width:550px;
	margin: 20px;
	padding:3px 20px;
	margin:19px 20;
	margin-top: -10px;
			padding-top: -10px;

	box-sizing:border-box;
	box-shadow: 6px 6px 9px gray, -6px -6px 9px rebeccapurple;		  
				 
	

}

button{
	border: 2px solid rebeccapurple;
 	background-color: aqua;
	align-items: center;
	display:inline-block;
	color:black;
	letter-spacing:1px;
	text-transform:uppercase;
	text-decoration:none;
	overflow:hidden;

	margin-left:0px;
	margin-right:0px;
	width:180px;
	height:40px;
	border-radius:1px;
	padding:1px;
	margin: 3px;
	font-size:15px;

}
button:hover{
	color:black;
	background:rebeccapurple;
	box-shadow:0 0 15px aqua;

}
		    

	</style>
<body>
	<form action="" method="post">
		<center>
		<input type="text" name="medicinename">
	<button type="submit" name="search" >search</button>
</center>
</form>

<center>
	<table border="2">
		<tr>
			<th>MEDICINE NAME</th>
			<th>BATCH NO</th>
			<th>MANUFACTURING NO</th>
			<th>QUANTITY</th>
			<th>PRICE</th>
			<th>GST</th>
			<th>MANUFACTURING DATE</th>
			<th>EXPIRY DATE</th>
		</tr>

<?php
	if (isset($_POST['search']))
	{
		$emailid=$_POST['medicinename'];

		
		$result="SELECT * FROM medicine WHERE medicinename='$_POST[medicinename]'";
		$query_run=mysqli_query($conn,$result);
		
		
		
		
		
			if (mysqli_num_rows($query_run)>0)
		{
			while($row=mysqli_fetch_array($query_run))
			{

				echo'<tr>';
					echo'<td>'.$row['medicinename'].'</td>';
					echo'<td>'.$row['batchno'].'</td>';
					echo'<td>'.$row['manufacturingno'].'</td>';
					echo'<td>'.$row['quantity'].'</td>';
					echo'<td>'.$row['price'].'</td>';
					echo'<td>'.$row['gst'].'</td>';
					echo'<td>'.$row['manufacturingdate'].'</td>';
					echo'<td>'.$row['expirydate'].'</td>';
			echo'</tr>';
		
		}
	} 
	else
	{
			echo'<script type="text/javascript">alert("No Data Available")</script>';
	}
}
?>
</table>
</center>
</body>
</html>