<?php
	include("connection.php");
?>


<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript">
	function myOnClickFn()
	{
		window.location="purchasing.php";
	}

	</script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>product page</title>
	<style type="text/css">
	body{
			background: url("3.php.jpg");
		}

	.products .box-container{
			
			background: url("3.php.jpg");
			display: flex;
			flex-wrap: wrap;
			gap: 1.5rem;
		
		}

	.products .box-container .box{
		
		background-color: white;
		flex: 1 1 20rem;
		box-shadow: 0 0rem 0.9rem aqua;
		border-radius: .5rem;
		border: .1rem solid rebeccapurple;
		position: relative;

	}
.products .box-container .box .discount{

	position: absolute;
	top: :1rem; right: 0.5rem;
	padding: .8rem 1rem;
	font-size: 2rem;
	color: black;
	background: aqua;
	z-index: 1;
	border-radius: .5rem;
}

.products .box-container .box .image{

	position: relative;
	text-align: center;
	padding-top: 6rem;
	overflow: hidden;
}

.products .box-container .box .image img{

	height: 200px;
}

.products .box-container .box:hover .image img{

	transform: scale(1.1);
}

.products .box-container .box .image .icons{

	position: absolute;
	bottom: -7rem; left: 0; right: 0;
	display: flex;
}
.products .box-container .box:hover .image .icons{
	bottom: 0;
}

.products .box-container .box .image .icons a{

	height: 3rem;
	line-height: 3rem;
	font-size: 1.5rem;
	width: 10%;
	background: rebeccapurple;
	color: black;
	text-decoration: none;

}

.products .box-container .box .image .icons .cart-btn{

	border-left: .1rem solid aqua;
	border-right: .1rem solid aqua;
	width: 100%;

}

.products .box-container .box .image .icons a:hover{

	background: aqua;

}


.products .box-container .box .content{
	padding: 0rem;
	padding-bottom: 2px;
	text-align: center;
}

.products .box-container .box .content h3{
	font-size: 1.5rem;
	color:black;
}

.products .box-container .box .content .price{
	font-size: 1.9rem;
	color: black;
	font-weight: bold;
	padding-top: 0rem;
}

.products .box-container .box .content .price span{
	font-size: 1.5rem;
	color: rebeccapurple;
	font-weight: lighter;
	text-decoration: line-through;
}
h1{
	font-family:'Quicksand';
		font-size:33px;
			color: black;
			text-shadow: 1px 1px aqua;
			text-align: center;
			margin-top: -4px;
			padding-top: -4px;
	}

.neonbutton{

	margin: 30px;
	pad
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
	border-radius:1px;
	padding:1px;
	margin: 3px;
	font-size:9px;


	
}
.neonbutton .btn:hover {
	color:black;
	background:rebeccapurple;
	box-shadow:0 0 15px aqua;
}


	</style>
</head>
<body>
<section class="products" id="products">
	<center><h1>LATEST <span>MEDICINE</span></h1></center>
	<div class="box-container">
		<div class="box">
			<span class="discount">10%</span>
			<div class="image">
				<img src="medicine1.jpg" alt="">
				<div class="icons">
					<a href="#" class="fas fa-heart">&#10084;&#65039;	</a>

					<a onclick="myOnClickFn()" class="cart-btn"> BUY NOW</a>
					<a href="#" class="fas fa-share" onclick="myOnClickFn()">&#x27A6;</a>
				</div>
			</div>
			<div class="content">
				<h3>
					Paracetamol 500mg
				</h3>
				<div class="price"> ₹50 <span> ₹55</span></div>
			</div>
		</div>
		<div class="box">
			<span class="discount">10%</span>
			<div class="image">
				<img src="medicine2.jpg" alt="">
				<div class="icons">
					<a href="#" class="fas fa-heart">&#10084;&#65039;</a>

					<a onclick="myOnClickFn()" class="cart-btn"> BUY NOW</a>
					<a href="#" class="fas fa-share">&#x27A6;</a>
				</div>
			</div>
			<div class="content">
				<h3>
					Dolo paracetomal 650mg
				</h3>
				<div class="price"> ₹100<span> ₹110</span></div>
			</div>
		</div>
		<div class="box">
			<span class="discount">10%</span>
			<div class="image">
				<img src="medicine3.jpg" alt="">
				<div class="icons">
					<a href="#" class="fas fa-heart">&#10084;&#65039;</a>

					<a onclick="myOnClickFn()" class="cart-btn"> BUY NOW</a>
					<a href="#" class="fas fa-share">&#x27A6;</a>
				</div>
			</div>
			<div class="content">
				<h3>
					Paracetomal ip 250 mg
				</h3>
				<div class="price">₹200<span> ₹220</span></div>
			</div>
		</div>
		<div class="box">
			<span class="discount">10%</span>
			<div class="image">
				<img src="m8.jpg" alt="">
				<div class="icons">
					<a href="#" class="fas fa-heart">&#10084;&#65039;</a>

					<a onclick="myOnClickFn()" class="cart-btn"> BUY NOW</a>
					<a href="#" class="fas fa-share">&#x27A6;</a>
				</div>
			</div>
			<div class="content">
				<h3>
					Uristop
				</h3>
				<div class="price"> ₹300<span> ₹330</span></div>
			</div>
		</div>
		<div class="box">
			<span class="discount">10%</span>
			<div class="image">
				<img src="m5.jpg" alt="">
				<div class="icons">
					<a href="#" class="fas fa-heart">&#10084;&#65039;</a>

					<a onclick="myOnClickFn()" class="cart-btn"> BUY NOW</a>
					<a href="#" class="fas fa-share">&#x27A6;</a>
				</div>
			</div>
			<div class="content">
				<h3>
					Uric acid flush
				</h3>
				<div class="price">₹100<span> ₹110</span></div>
			</div>
		</div>
<div class="box">
			<span class="discount">10%</span>
			<div class="image">
				<img src="m9.jpg" alt="">
				<div class="icons">
					<a href="#" class="fas fa-heart">&#10084;&#65039;</a>

					<a onclick="myOnClickFn()" class="cart-btn"> BUY NOW</a>
					<a href="#" class="fas fa-share">&#x27A6;</a>
				</div>
			</div>
			<div class="content">
				<h3>
					Pudin hara
				</h3>
				<div class="price">₹50<span> ₹55</span></div>
			</div>
		</div>
		<div class="box">
			<span class="discount">10%</span>
			<div class="image">
				<img src="m11.jpg" alt="">
				<div class="icons">
					<a href="#" class="fas fa-heart">&#10084;&#65039;</a>

					<a onclick="myOnClickFn()" class="cart-btn"> BUY NOW</a>
					<a href="#" class="fas fa-share">&#x27A6;</a>
				</div>
			</div>
			<div class="content">
				<h3>
					Madhu rashak
				</h3>
				<div class="price"> ₹400<span> ₹440</span></div>
			</div>
		</div>
		<div class="box">
			<span class="discount">10%</span>
			<div class="image">
				<img src="m12.jpg" alt="">
				<div class="icons">
					<a href="#" class="fas fa-heart">&#10084;&#65039;</a>

					<a onclick="myOnClickFn()" class="cart-btn"> BUY NOW</a>
					<a href="#" class="fas fa-share">&#x27A6;</a>
				</div>
			</div>
			<div class="content">
				<h3>
					Chyawanprash
				</h3>
				<div class="price">₹300<span> ₹330</span></div>
			</div>
		</div>
		<div class="box">
			<span class="discount">10%</span>
			<div class="image">
				<img src="m13.jpg" alt="">
				<div class="icons">
					<a href="#" class="fas fa-heart">&#10084;&#65039;	</a>

					<a onclick="myOnClickFn()" class="cart-btn">BUY NOW</a>					
					<a href="#" class="fas fa-share">&#x27A6;</a>
				</div>
			</div>
			<div class="content">
				<h3>
					Joinflex
				</h3>
				<div class="price">₹200<span> ₹220</span></div>
			</div>
		</div>
		<div class="box">
			<span class="discount">10%</span>
			<div class="image">
				<img src="m45.jpg" alt="">
				<div class="icons">
					<a href="#" class="fas fa-heart">&#10084;&#65039;</a>

					<a onclick="myOnClickFn()" class="cart-btn">BUY NOW</a>					
					<a href="#" class="fas fa-share">&#x27A6;</a>
				</div>
			</div>
			<div class="content">
				<h3>
					move gel
				</h3>
				<div class="price">₹10<span> ₹11</span></div>
			</div>
		</div>
		<div class="box">
			<span class="discount">10%</span>
			<div class="image">
				<img src="m54.jpg" alt="">
				<div class="icons">
					<a href="#" class="fas fa-heart">&#10084;&#65039;	</a>

					<a onclick="myOnClickFn()" class="cart-btn">BUY NOW</a>					
					<a href="#" class="fas fa-share">&#x27A6;</a>
				</div>
			</div>
			<div class="content">
				<h3>
					Dabur hapano
				</h3>
				<div class="price">₹200<span> ₹220</span></div>
			</div>
		</div>
		<div class="box">
			<span class="discount">10%</span>
			<div class="image">
				<img src="7.jpg" alt="">
				<div class="icons">
					
						<a href="#" class="fas fa-heart">&#10084;&#65039;</a>
					<a  class="cart-btn" onclick="myOnClickFn()" >BUY NOW</a>					
					<a href="#" class="fas fa-share">&#x27A6;</a>
				</div>
			</div>
			<div class="content">
				<h3>
					Vatican trick-p
				</h3>
				<div class="price">₹100<span> ₹110</span></div>
			</div>
		</div>
		
		
</div>

	</div>
</section>


	
</body>
</html>