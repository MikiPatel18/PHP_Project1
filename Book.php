<!-- Miki Patel-8622608 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        h1{
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
        table, td, th {
        border: 1px solid black;
        }

        table {
        border-collapse: collapse;
        width: 100%;
        }

        th {
        height: 50px;
        
        }
        td{
            text-align:center;
            padding:20px;
        }
        #table{
            margin-top:50px;
            margin-right:70px;
            margin-left:70px;
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
            <li><a class="active" href="Book.php">Book List</a></li>
            
        </ul>
    </nav>
    <div id="table">
                <table>
                    <thead>
                        <tr>
                            <th>Book Name</th>
                            <th>Book Price</th>
                            <th>Book Quantity</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            //connect to database
                             require('mysqli_connect.php');
                                // start session
                             session_start();
                             // display all books data
                             $q = "SELECT * FROM bookinventory";
                                $data = $db->query($q);

                                if ($data->num_rows > 0) {
                                // output data of each row
                                while($row = $data->fetch_assoc()) 
                                {
                                    echo "<tr>";
                                    echo "<td><a href='checkout.php?Book_Id=".$row['Book_Id']."'>" . $row['Book_Name'] . 	"</a></td>";
                                    echo "<td>" . $row['Book_Price'] . 		"</td>";
                                    echo "<td>" . $row['Book_Quantity'] . 	"</td>";
                                    echo "</tr>";
                                     
                                }
                            } else {
                                echo "0 results";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
    </div>

    <footer class="footer">

        Copyright © 2020 Miki Patel

    </footer>
</body>
</html>