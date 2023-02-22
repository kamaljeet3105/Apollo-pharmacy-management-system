<?php
	include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript">
		function myOnClickFn()
		{
			window.location="payrecord.php";
		}

		function myOnClickFnn()
		{
			window.location="paysearch.php"
		}
	</script>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>payment</title>
	<style type="text/css">
		*{
		font-family: 'poppins', sans-serif;
		margin: 0; padding: 0;
		box-sizing: border-box;
		outline: none; border: none;
		text-decoration: none;
		text-transform: uppercase;

	}

	.container{
		min-height: 100vh;
		background: url("3.php.jpg");
		display: flex;
		align-items: center;
		justify-content: center;
		flex-flow: column;
		padding-bottom: 40px;

}

.container form{

	background-image:linear-gradient(aqua,white,rebeccapurple) ;
	border-radius: 5px;
	box-shadow: 0 10px 15px rgba(0, 0, 0, .1);
	padding: 20px;
	width: 450px;
	padding-top: 160px;
	box-shadow:10px 10px 18px aqua,-10px -10px 18px rebeccapurple;

}

.container form .inputbox{

		margin-top: 20px;	
}

.container form .inputbox span{

	display: block;
	color: #999;
	padding-bottom: 5px ;
}


.container form .inputbox input,
.container form .inputbox select{


	width: 100%;
	padding: 10px;
	border-radius: 10px;
	border: 1px solid rgba(0, 0, 0, .3);
	color: #444;
}

.container form .flexbox{
	display: flex;
	gap: 15px;

}


.container form .flexbox .inputbox{

	flex: 1 1 150px;
}
/*

.container form .submit-btn{

	width: 100%;
	background: linear-gradient(45deg, blueviolet, deeppink);
	margin-top: 20px;
	padding: 10px;
	font-size: 20px;
	color: #fff;
	border-radius: 10px;
	cursor: pointer;
	transition: .2s linear;
	break-before: 5px;

}


.container form .submit-btn:hover{
	letter-spacing: 2px;
	opacity: .8;
}*/

.container .card-container{
	margin-bottom: -110px;
	position: relative;
	height: 180px;
	width: 300px;
	
}

.container .card-container .front{

	position: absolute;
	height: 100%;
	width: 100%;
	top: 0; left: 0;
	background: linear-gradient(45deg, blueviolet, deeppink);
	border-radius: 5px;
	backface-visibility: hidden;
	box-shadow: 0 15px 25px rgba(0, 0, 0, .2);
	padding: 20px;
	transform: perspective(1000px) rotatey(0deg);
		transition: transform .4s ease-out;

}

.container .card-container .front .image{
	display: flex;
	align-items: center;
	justify-content: space-between;
	padding-top: 10px;

}

.container .card-container .front .image img{
	height: 50px;
	
}

.container .card-container .front .card-number-box{

	padding: 20px 0;
	font-size: 15px;
	color: #fff;

}

.container .card-container .front .flexbox{
	
	display: flex;


}

.container .card-container .front .flexbox .box:nth-child(1){

	margin-right: auto;

}

.container .card-container .front .flexbox .box{

	font-size: 15px;
	color: #fff;
	
}

.container .card-container .back{

	position: absolute;
	top: 0; left: 0;
	height: 100%;
	width: 100%;
	background: linear-gradient(45deg, blueviolet, deeppink);
	border-radius: 5px;
	padding: 20px 0;
	text-align: right;
	backface-visibility: hidden;
	box-shadow: 0 15px 25px rgba(0, 0, 0, .2);
	transform: perspective(1000px) rotatey(180deg);
	transition: transform .4s ease-out;

}

.container .card-container .back .stripe{

	background: #000;
	width: 100%;
	margin: 5px 0;
	height: 20px;	
}

.container .card-container .back .box{

	padding: 0 20px;

}

.container .card-container .back .box span{

	color: #fff;
	font-size: 15px;
}

.container .card-container .back .box .cvv-box{

	height: 40px;
	padding: 10px;
	margin-top: 5px;
	color: #333;
	background: #fff;
	border-radius: 5px;
	width: 100%;	
}

.container .card-container .back .box img{

	margin-top: 30px;
	height: 30px;

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
	width:120px;
	height:25px;
	border-radius:8px;
	padding:1px;
	margin: 6px;
	font-size:12px;
	margin-top: 10px;
	padding-top: 5px;

	
}
.neonbutton .btn:hover {
	color:black;
	background:rebeccapurple;
	box-shadow:0 0 15px aqua;
}


	</style>
</head>
<body>
	<div class="container">

		<div class="card-container">
			
			<div class="front">
				<div class="image">
					<img src="chip5.jpg" alt="">
					<img src="visa6.jpg" alt="">
				</div>

				<div class="card-number-box">################</div>

				<div class="flexbox">
					<div class="box">
						<span>card holder</span>
						<div class="card-holder-name">full name</div>
					</div>

					<div class="box">
						<span>expires</span>
						<div class="expiration">
							<span class="exp-month">mm</span>
							<span class="exp-year">yy</span>
						</div>
					</div>
				</div>
			</div>

			<div class="back">
				<div class="stripe"></div>
				<div class="box">
					<span>cvv</span>
					<div class="cvv-box"></div>
					<img src="visa6.jpg" alt="">
				</div>
			</div>
		</div>
		<form action="" method="post">
			<div class="inputbox">
				<span>card number</span>
				<input type="text" name="cardno" class="card-number-input" maxlength="16">
			</div>

			<div class="inputbox">
				<span>card holder</span>
				<input type="text" name="cardholder" class="card-holder-input" >
			</div>

			<div class="flexbox">
			<div class="inputbox">
				<span>expire mm</span>
				<select name="expirymm" id="" class="month-input">
					<option value="month" selected disabled>month</option>
						<option value="o1">01</option>
						<option value="o2">02</option>
						<option value="o3">03</option>
						<option value="o4">04</option>
						<option value="o5">05</option>
						<option value="o6">06</option>
						<option value="o7">07</option>
						<option value="o8">08</option>			
						<option value="o9">09</option>			
						<option value="10">10</option>			
						<option value="11">11</option>		
						<option value="12">12</option>
						
				</select>
			</div>

			<div class="inputbox">
					<span>expiration yy</span>
					<select name="expiryyy" id="" class="year-input">
						<option value="year" selected disabled>year</option>
						<option value="2021">2021</option>
						<option value="2022">2022</option>
						<option value="2023">2023</option>
						<option value="2024">2024</option>
						<option value="2025">2025</option>
						<option value="2026">2026</option>
						<option value="2027">2027</option>
						<option value="2028">2028</option>
						<option value="2029">2029</option>
						<option value="2030">2030</option>
						<option value="2031">2031</option>
						<option value="2032">2032</option>
			
			</select>	
				</div>

				<div class="inputbox">
					<span> cvv</span>
					<input type="text" name="cvv" class="cvv-input" maxlength="4">
					
				</div>
			</div>

		
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


		</form>

	</div>

	<?php
//insert
if(isset($_POST['submit']))
{
	$cardno =$_POST['cardno'];
	$cardholder =$_POST['cardholder'];
	$expirymm=$_POST['expirymm'];
	$expiryyy =$_POST['expiryyy'];
	$cvv =$_POST['cvv'];

	
	$result=mysqli_query($conn,"INSERT INTO payment VALUES('$cardno','$cardholder','$expirymm','$expiryyy','$cvv')")or die(mysqli_error($conn));
	
	if($result)
	{
		echo '<script type="text/javascript">alert("Payment successfully")</script>';
	
	}
	else
	{
		echo '<script type="text/javascript">alert("Payment Unsuccessfully")</script>';
	}
}

?>

	<?php
	//update
	if (isset($_POST['update']))
	{
		$cardno =$_POST['cardno'];
		$result="UPDATE payment SET cardno='$_POST[cardno]',cardholder='$_POST[cardholder]',expirymm
		='$_POST[expirymm]',expiryyy='$_POST[expiryyy]',cvv ='$_POST[cvv]' where cardno='$_POST[cardno]'";
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
		$cardno =$_POST['cardno'];
	
		$result="delete FROM payment WHERE cardno='$_POST[cardno]'";
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




	<script type="text/javascript">
		document.querySelector('.card-number-input').oninput=() =>{

			document.querySelector('.card-number-box').innerText = document.querySelector('.card-number-input').value;
		}

		document.querySelector('.card-holder-input').oninput=() =>{

			document.querySelector('.card-holder-name').innerText = document.querySelector('.card-holder-input').value;
		}

		document.querySelector('.month-input').oninput=() =>{

			document.querySelector('.exp-month').innerText = document.querySelector('.month-input').value;
		}

		document.querySelector('.year-input').oninput=() =>{

			document.querySelector('.exp-year').innerText = document.querySelector('.year-input').value;
		}

		document.querySelector('.cvv-input').onmouseenter =() =>{

			document.querySelector('.front').style.transform= 'perspective(1000px) rotatey(180deg)';

			document.querySelector('.back').style.transform= 'perspective(1000px) rotatey(0deg)';
		}

		document.querySelector('.cvv-input').onmouseleave =() =>{

			document.querySelector('.front').style.transform= 'perspective(1000px) rotatey(0deg)';

			document.querySelector('.back').style.transform= 'perspective(1000px) rotatey(180deg)';
		}

		document.querySelector('.cvv-input').oninput=() =>{

			document.querySelector('.cvv-box').innerText = document.querySelector('.cvv-input') .value;
		}


	</script>




</body>
</html>