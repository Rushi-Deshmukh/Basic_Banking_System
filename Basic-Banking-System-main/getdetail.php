<?php
session_start();
$con = mysqli_connect('localhost', 'root', '', 'banking_system');

$q = "select * from users ";
$result = mysqli_query($con, $q);
$row_count = mysqli_num_rows($result);


?>
<html>

<head>
	<title>View all Customers</title>
	<link rel="stylesheet" href="index.css">
	<link rel="stylesheet" href="button.css">

	<style>
		body {
			text-align: center;
		}

		.flat-table-1 {

			width: 100%;
			height: 100vh;
			background-color: black;


		}
		}

		.flat-table-1 tr:hover {
			background: rgba(0, 0, 0, 0.19);
		}

		h1 {
			font-family: Arial, Times, serif;
		}

		table {
			text-align: center;
			margin-left: auto;
			margin-right: auto;
			border: 4px solid black;
			border-collapse: collapse;
		}

		th {
			color: #ffbf00;
			font-size: 24px;
			padding: 16px;
		}

		td {
			text-align: center;
			font-size: 22px;
			color: white;
			padding: 0px 20px 0px 20px;
		}

		tr {
			transition: background 0.3s, box-shadow 0.3s;
		}

		th,
		td {
			border-collapse: collapse;
			border: 2px groove gray;
			text-shadow: 1px 1px black;
		}

		.css-button {
			margin-left: auto;
			margin-right: auto;
			
		}
		
		
		.button1{
			width: 200px;
			padding: 15px 0;
			text-align: center;
			margin: 20px 10px;
			border-radius: 25px;
			font-weight: bold;
			border: 2px solid #ffbf00;
			background: transparent;
			color: white;
			cursor: pointer;
			position: relative;
			overflow: hidden;
		}

		

		.button1:hover {
			background-color: #ffbf00;
		}

		.view {
			top: 50%;
			padding-top: 20px;
			text-align: center;
		}

		.ho {
			padding-top: 50px;
			padding-bottom: 100px;
		}
		
		.buttons{
			background:transparent;
			border: none;
			border-radius: 50px;
			color: white;
			padding: 12px 16px;
			font-size: 23px;
			cursor: pointer;
			align-items: left;
			float: left;
		}
		.glow-on-hover{
			background:transparent;
			border: none;
			border-radius: 50px;
			color: white;
			padding: 12px 16px;
			font-size: 23px;
			cursor: pointer;


		}
		.nav-ul {
			list-style-type: none;
			margin: 0;
			padding: 5px;
			verflow: hidden;
			
			}

		.nav-li {
		  float:left;
		}

		.nav-li a {
			
		  display: block;
		  color:yellow;
		  text-align: center;
		  padding: 8px 10px;
		  text-decoration: none;
		  text-transform:uppercase;
		}
		.btn {
			background:transparent;
			border: none;
			border-radius: 50px;
			color: white;
			padding: 12px 16px;
			font-size: 23px;
			cursor: pointer;
		}
		.buttons{
			
			right:42%;
			text-align:left;
		}
		.btn:hover {
			background-color:  yellow;
		}
		body {

			background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url("back.jpg");
			background-position: center;
			background-size: cover;
			width: 100%;
			height: 100vh;
			

		}

		.content{
			width: 100%;
			position: absolute;
			
			transform: translateY(-50%);
			text-align: center;
			color: orange;
		}

		.content h1{
			font-size: 30px;
			margin-top: 80px;
		}

	</style>

</head>

<body>
		
	<ul class="nav-ul">
	<a href="index.php">
		<li class="nav-li"><button class="btn"><i class="fa fa-home"><img src="logo1.png" width="45px" height="45px"></i></button></li>
	</a>
	</ul><div class="content">
	<h1 >CUSTOMERS INFORMATION</h1></div>
	<table class="flat-table-1">
		<thead>
			<th>SR.NO.</th>
			<th>NAME</th>
			<th>EMAIL ID</th>
			<th>CREDIT</th>
			<th></th>
		</thead>
		<tbody>
			<tr>
				<?php
					$row = mysqli_fetch_array($result);
				?>
				<td> 1</td>
				<td><?php echo  $row["name"]; ?></td>
				<td><?php echo  $row["email"]; ?></td>
				<td><?php echo  $row["amount"]; ?></td>
				<td>
					<form action="user.php" method="post" class="view">
						<button class="button1" type="submit" name="name" value="Rushikesh">View</button>
					</form>
				</td>
			</tr>
			<tr>
				<?php
					$row = mysqli_fetch_array($result);
				?>
				<td> 2</td>
				<td><?php echo  $row["name"]; ?></td>
				<td><?php echo  $row["email"]; ?></td>
				<td><?php echo  $row["amount"]; ?></td>
				<td>
					<form action="user.php" method="post" class="view">
						<button class="button1" type="submit" name="name" value="Tejas">View</button>
					</form>
				</td>
			</tr>
			<tr>
				<?php
					$row = mysqli_fetch_array($result);
				?>
				<td> 3</td>
				<td><?php echo  $row["name"]; ?></td>
				<td><?php echo  $row["email"]; ?></td>
				<td><?php echo  $row["amount"]; ?></td>
				<td>
					<form action="user.php" method="post" class="view">
						<button class="button1" type="submit" name="name" value="Rohit">View</button>
					</form>
				</td>
			</tr>
			<tr>
				<?php
					$row = mysqli_fetch_array($result);
				?>
				<td> 4</td>
				<td><?php echo  $row["name"]; ?></td>
				<td><?php echo  $row["email"]; ?></td>
				<td><?php echo  $row["amount"]; ?></td>
				<td>
					<form action="user.php" method="post" class="view">
						<button class="button1" type="submit" name="name" value="Tanmay">View</button>
					</form>
				</td>


			</tr>
			<tr>
				<?php
					$row = mysqli_fetch_array($result);
				?>
				<td> 5</td>
				<td><?php echo  $row["name"]; ?></td>
				<td><?php echo  $row["email"]; ?></td>
				<td><?php echo  $row["amount"]; ?></td>
				<td>
					<form action="user.php" method="post" class="view">
						<button class="button1" type="submit" name="name" value="Varad">View</button>
					</form>
				</td>
			</tr>
			<tr>
				<?php
					$row = mysqli_fetch_array($result);
				?>
				<td> 6</td>
				<td><?php echo  $row["name"]; ?></td>
				<td><?php echo  $row["email"]; ?></td>
				<td><?php echo  $row["amount"]; ?></td>
				<td>
					<form action="user.php" method="post" class="view">
						<button class="button1" type="submit" name="name" value="Rohan">View</button>
					</form>
				</td>
			</tr>
			<tr>
				<?php
					$row = mysqli_fetch_array($result);
				?>
				<td> 7</td>
				<td><?php echo  $row["name"]; ?></td>
				<td><?php echo  $row["email"]; ?></td>
				<td><?php echo  $row["amount"]; ?></td>
				<td>
					<form action="user.php" method="post" class="view">
						<button class="button1" type="submit" name="name" value="Shubham">View</button>
					</form>
				</td>
			</tr>
			<tr>
				<?php
					$row = mysqli_fetch_array($result);
				?>
				<td> 8</td>
				<td><?php echo  $row["name"]; ?></td>
				<td><?php echo  $row["email"]; ?></td>
				<td><?php echo  $row["amount"]; ?></td>
				<td>
					<form action="user.php" method="post" class="view">
						<button class="button1" type="submit" name="name" value="Sudarshan">View</button>
					</form>
				</td>
			</tr>
			<tr>
				<?php
					$row = mysqli_fetch_array($result);
				?>
				<td> 9</td>
				<td><?php echo  $row["name"]; ?></td>
				<td><?php echo  $row["email"]; ?></td>
				<td><?php echo  $row["amount"]; ?></td>
				<td>
					<form action="user.php" method="post" class="view">
						<button class="button1" type="submit" name="name" value="Sahil">View</button>
					</form>
				</td>
			</tr>
			<tr>
				<?php
					$row = mysqli_fetch_array($result);
				?>
				<td> 10</td>
				<td><?php echo  $row["name"]; ?></td>
				<td><?php echo  $row["email"]; ?></td>
				<td><?php echo  $row["amount"]; ?></td>
				<td>
					<form action="user.php" method="post" class="view">
						<button class="button1" type="submit" name="name" value="Akash">View</button>
					</form>
				</td>
			</tr>
		</tbody>
	</table><br><br>

	
</body>

</html>