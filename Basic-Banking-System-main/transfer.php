<?php
session_start();
$con = mysqli_connect('localhost', 'root', '', 'banking_system');
$q = "select name from users";
$result = mysqli_query($con, $q);
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Select User</title>
	<link rel="stylesheet" href="button.css">
	<style>
		body {
			text-align: center;
		}

		body {

			background-image: url("back2.jpg");
			background-position: center;
			background-size: cover;
			object-fit: cover;
			
		}

		html,
		body {
			height: 100%;
			width: 100%;

		}

		html {
			display: table;
			margin: auto;
		}

		body {
			display: table-cell;
			
		}

		.center {
			display: inline-block;
			background: transparent;
			padding: 50px;
			border: 2px ridge black;
			
		}

		.ho {
			padding-top: 50px;
		}

		.butto1 {
			background-color: #bebebe;
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
			color: orange;
			padding: 12px 16px;
			font-size: 23px;
			cursor: pointer;
		}
		
		.btn:hover {
			background-color:  orange;
		}


		.button {
			border-radius: 10px;
			border: 1px solid black;
			height: 51px;
			width: 218px;
			margin: auto;
			overflow: hidden;
			cursor: pointer;
			color: #28048a;
			font-size: 17px;
			font-weight: bold;
			background: orange;

		}

		.button:hover { 
			background-color: orange;
		}
	</style>
	<script>
		
		function random_function() {
			var a = document.getElementById("input").value;
			if (a === "Rushikesh") {
				var arr = ["Tejas", "Rohit", "Tanmay", "Varad", "Rohan", "Shubham", "Sudarshan", "Sahil", "Akash"];
			} else if (a === "Tejas") {
				var arr = ["Rushikesh", "Rohit", "Tanmay", "Varad", "Rohan", "Shubham", "Sudarshan", "Sahil", "Akash"];
			} else if (a === "Rohit") {
				var arr = ["Rushikesh", "Tejas", "Tanmay", "Varad", "Rohan", "Shubham", "Sudarshan", "Sahil", "Akash"];
			} else if (a === "Tanmay") {
				var arr = ["Rushikesh", "Tejas", "Rohit", "Varad", "Rohan", "Shubham", "Sudarshan", "Sahil", "Akash"];
			} else if (a === "Varad") {
				var arr = ["Rushikesh", "Tejas", "Rohit", "Tanmay", "Rohan", "Shubham", "Sudarshan", "Sahil", "Akash"];
			} else if (a === "Rohan") {
				var arr = ["Rushikesh", "Tejas", "Rohit", "Tanmay", "Varad", "Shubham", "Sudarshan", "Sahil", "Akash"];
			} else if (a === "Shubham") {
				var arr = ["Rushikesh", "Tejas", "Rohit", "Tanmay", "Varad", "Rohan", "Sudarshan", "Sahil", "Akash"];
			} else if (a === "Sudarshan") {
				var arr = ["Rushikesh", "Tejas", "Rohit", "Tanmay", "Varad", "Rohan", "Shubham", "Sahil", "Akash"];
			} else if (a === "Sahil") {
				var arr = ["Rushikesh", "Tejas", "Rohit", "Tanmay", "Varad", "Rohan", "Shubham", "Sudarshan", "Akash"];
			} else if (a === "Akash") {
				var arr = ["Rushikesh", "Tejas", "Rohit", "Tanmay", "Varad", "Varad", "Shubham", "Sudarshan", "Sahil"];
			}
			var string = "";

			for (i = 0; i < arr.length; i++) {
				string = string + "<option value=" + arr[i] + ">" + arr[i] + "</option>";
			}
			document.getElementById("output").innerHTML = string;
		}
	</script>
</head>

<body>
<ul class="nav-ul">
<a href="index.php">
		<li class="nav-li"><button class="btn"><img src="logo1.png" alt="home" width="65px" height="65px"></button></li>
	</a>
	</ul>
	
	<h1 style=" font-size:40px;color:orange;text-shadow: 1.5px 1.5px black;">Transfer Amount</h1><br>
	<div class="center">
		<form action="updatecredit.php" method="post">
			<label for="sender" align="left">Senders Name: &nbsp;</label>
			<select id="input" name="sender" style="font-size: 10pt; height: 28px; width:290px;" align="middle" onchange="random_function()">
				<option selected>Select Name</option>
				<option value="Rushikesh">Rushikesh</option>
				<option value="Tejas">Tejas</option>
				<option value="Rohit">Rohit</option>
				<option value="Tanmay">Tanmay</option>
				<option value="Varad">Varad</option>
				<option value="Shubham">Shubham</option>
				<option value="Sudarshan">Sudarshan</option>
				<option value="Sahil">Sahil</option>
				<option value="Swapnil">Swapnil</option>
				<option value="Akash">Akash</option>
			</select><br><br>
			<label for="receiver" align="left">Receiver Name:&nbsp;</label>
			<select id="output" name="receiver" style="font-size: 10pt; height: 28px; width:290px;" align="middle" onchange="random_function1()">
			<option selected>Select Name</option>
				<option value="Rushikesh">Rushikesh</option>
				<option value="Tejas">Tejas</option>
				<option value="Rohit">Rohit</option>
				<option value="Tanmay">Tanmay</option>
				<option value="Varad">Varad</option>
				<option value="Shubham">Shubham</option>
				<option value="Sudarshan">Sudarshan</option>
				<option value="Sahil">Sahil</option>
				<option value="Swapnil">Swapnil</option>
				<option value="Akash">Akash</option>
			</select><br><br>

			</select><br><br>
			<label for="transfer" align="left">Amount: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
			<input type="number" name="transfer" style="font-size: 12pt; height: 20px; width:285px;" align="middle" required><br><br>
			<div class="button1">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="button" onMouseOver="this.style.color='red'" onMouseOut="this.style.color='#28048a'" type="submit" name="submit" value="Transfer" style="height:40px; width:100px;">
			</div>
		</form>
	</div><br><br><br>
	
</body>

</html>