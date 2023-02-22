<!DOCTYPE html>
<html lang="en" dir="ltr">
	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

<head>
	<style type="text/css">

		label.logo{
	
						text-align: right;
						font-size: 30px;
						line-height: 60px;
						padding: 0 100px;
						font-weight: bold;
					}

	@import url('https://fonts./googleapis.com/css2?family=open+sans:wght@300;400;600;700display=swap');

:root{

						--orange: linear-gradient(10deg,rebeccapurple,rebeccapurple,aqua,aqua,rebeccapurple,rebeccapurple);
	}


*{
						font-family: 'open sans',sans-serif;
						margin: 0; padding: 0;
						box-sizing: border-box;
						text-decoration: none;
						outline: none;
						border: none;
						text-transform: capitalize;
						transition: all .2s linear;
}

*::selection{

						background: var(--orange);
						color: #fff;
}

html{

						font-size: 50%;
						overflow-x: hidden;

}

header{
						position: fixed;
						top: 0 ;
						left: 0;
						z-index: 1000;
						background: #fff;
						box-shadow: 0 .1rem  .3rem rgba(0, 0, 0, .3);
						width: 100%;
}

header .heading{

						font-size: 3rem;
						color: #666;
						padding: 1rem;
						text-align: center;
}

header #menu{
						font-size: 3rem;
						color: #666;
						cursor: pointer;
						margin: 1rem;
						display: none;
}

header .navbar ul{

						display: flex;
						align-items: center;
						justify-content: center;
						list-style: none;
						background: var(--orange);
						padding: 1rem;

}

header .navbar ul li{

						margin: 1.5rem;
}


header .navbar ul li a{

						font-size: 2.4rem;
						color: black;
						font-weight: bold;

}

header .navbar ul li a:hover{

						color: white;
}


</style>
</head>
<body >
	<header>
		<div id="menu" class="fas fa-bars"></div>
			<nav class="navbar">
			
				<ul>

					<li><a href="registration.php" target="mj">customer</a></li>
					<li><a href="medicine.php" target="mj">medicine</a></li>
					<li><a href="purchasing.php" target="mj">purchasing</a></li>
					<li><a href="pay1.php" target="mj">payment</a></li>
					<li><a href="about.php" target="mj">about</a></li>
					<li><a href="help.php" target="mj">help</a></li>

				</ul>
			</nav>
		</div>
	</header>
</body>
</html>
