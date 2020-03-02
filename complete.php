<!-- Miki Patel-8622608 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book Store</title>
	<style>
        ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #333;
        }

        li {
        float: left;
        }

        li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        }

        li a:hover:not(.active) {
        background-color: #111;
        }
        h1,h3{
            text-align:center;
        }

        .active {
        background-color: #4CAF50;
        }
		.footer {
        position: fixed;
        bottom: 0;
        width: 99%;
        background-color: #333;
        color: white;
        text-align: center;
        padding-top:10px;
        padding-bottom:10px;
        margin-bottom:10px;
		}
		input[type=text], select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        }

        input[type=submit] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        }

        input[type=submit]:hover {
        background-color: #45a049;
        }

        div {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
        }
</style>
</head>
<body>

		<div class="wrapper">

		<div id="header">
			<header>
				<h1>Book Store</h1>
			</header>
		</div>

		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="Book.php">Book List</a></li>
				
			</ul>
		</nav>

		<main>
		<?php
		// start session
				session_start();
				// connect to database
				require('mysqli_connect.php');
				// store book quantity to session
				$Book_Quantity = $_SESSION['Book_Quantity'];

				$Book_Name = $_SESSION['Book_Name'];

				// find data help with session book name
				$data = mysqli_query($db,"SELECT * FROM bookinventory WHERE Book_Name='".$Book_Name."'");

				$row = mysqli_fetch_array($data);

				$quantity = $row['Book_Quantity'];

				$New_Quantity = $quantity-$Book_Quantity;
				// update book quantity with new data
				$q = "UPDATE bookinventory SET Book_Quantity = '$New_Quantity' where Book_Name = '".$Book_Name."' ";

				if ($db->query($q) === TRUE) 
				{
					echo "<h3>"."Successfully Order Placed."."</h3>";
				} 
				else 
				{
					echo "Error: " . $db->error;
				}

				?>
			
			
		</main>



		</div>

		<footer class="footer">

			Copyright © 2020 Miki Patel

		</footer>
    
</body>
</html>