<html>
<head>
    <title>GRIP_Project_Basic Banking System</title>
    <link rel="shortcut icon" href="images/cm.png">
   
	<link rel="stylesheet" href="one.css">
	<style>


*{
	margin:0;
	padding:0;
	font-family: sans-serif;
}

.banner{
		width: 100%;
		height: 100vh;
		background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url("back.jpg");
		background-size: cover;
		background-position: center;
		
}

.navbar{
	width: 85%;
	margin: auto;
	padding: 35px 0;
	display: flex;
	align-items: center;
	justify-content: space-between;
}

.logo{
	width: 80px;
	cursor: pointer;

}

.navbar ul li{
	list-style:none;
	display: inline-block;
	margin: 0 20px;
	position:relative;
}

.navbar ul li a{
	text-decoration: none;
	color: #fff;
	text-transform: uppercase;
}

.navbar ul li::after{
	content: '';
	height: 3px;
	width: 0;
	background: #009688;
	position: absolute;
	left: 0;
	bottom: -10px;
	transition: 0.5s;
}
	
.navbar ul li:hover::after{
	width: 100%;
}
	
.content{
		width: 100%;
		position: absolute;
		top: 50%;
		transform: translateY(-50%);
		text-align: center;
		color: #000000;
}

.content h1{
		font-size: 30px;
		margin-top: 80px;
}

button{
	width: 200px;
	padding: 15px 0;
	text-align: center;
	margin: 20px 10px;
	border-radius: 25px;
	font-weight: bold;
	border: 2px solid #000000;
	background: transparent;
	color: #ff8000;
	cursor: pointer;
	position: relative;
	overflow: hidden;
}

span{
	background: #000000;
	height: 100%;
	width: 0;
	border-radius: 25px;
	position: absolute;
	left: 0;
	bottom: 0;
	z-index: -1;
	transition: 0.5s;
}

button:hover span{
		width: 100%;
}

button:hover{
	border: none;
}

.rightside{
	background-color: #e8fbff;
}


.rightside img{
	max-width: 400px;
	height: auto;
}

	</style>
</head>
<body >

<div class="banner">
	
		<div class="navbar">
			<img src="logo1.png" class="logo">
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="getdetail.php">View all Customers</a></li>
				<li><a href="#">About</a></li>
				
			</ul>	
		</div>
		
		<div class="content">
			<h1>WELCOME TO ONLINE BANKING...</h1>
			<div>
				<button onclick="document.location='transfer.php'"><span> </span> Transfer Money</button>
				<button onclick="document.location='transaction.php'"><span> </span> Transaction History </button>
			</div>
		</div>
		<div class="rightside">
			<img src="left2.png">
		</div>

	</div>

    </header>

	    
</body>
</html>