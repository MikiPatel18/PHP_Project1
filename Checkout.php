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
    <?php
    // session start
    session_start();
    //database connection
    require('mysqli_connect.php');
        // getting book id
    $id = $_GET['Book_Id'];
    // find particular book data using with id
    $data = mysqli_query($db,"SELECT * FROM bookinventory WHERE Book_Id=".$id);
    $row = mysqli_fetch_array($data);

    $Book_Name = $row['Book_Name'];
        // store book name with session
    $_SESSION['Book_Name'] = $Book_Name;




    ?>
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
            <div id="form">
            <form action="Submit.php" method="POST">

                        <input type="hidden" name="Book_Id" value="<?php echo $id ?>">
                        <input type="hidden" name="Book_Name" value="<?php echo $Book_Name ?>">

                        
                        FirstName:<input type="text" name="firstname" required>
                                     

                        
                        LastName:<input type="text" name="lastname" required>
                                     

                        
                        Quantity:<input type="text" name="Book_Quantity" required>
                                    

                        Select Payment Method:<br>
                        <select name="payment_method">
                            <option value="CASH" selected="true">Cash On Delivery</option>
                            <option value="VISA">VISA Card</option>
                            <option value="Debit">Debit Card</option>
                        </select><br>



                        <input type="Submit" name="submit" value="Submit">

                    </form>


            </div>


        </main>
    </div>
    <footer class="footer">

            Copyright © 2020 Miki Patel

    </footer>
    
</body>
</html>