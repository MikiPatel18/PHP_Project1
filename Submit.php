<?php
// MikiPatel-8622608
session_start();	

//database connect
require('mysqli_connect.php');

		if ($_SERVER["REQUEST_METHOD"] == "POST") 
		{
            $firstname = $lastname = $payment_method = '';
            $firstname = strip_tags($_POST['firstname']); 
            $lastname = strip_tags($_POST['lastname']);
            $payment_method = $_POST['payment_method'];
            $errorfirstname = $errorlastname = '';
		  if (empty($_POST["firstname"])) // check firstname field
		  {
		    header("location:Checkout.php");

		  } 
		  else 
		  {
		    if(preg_match('^[A-Za-z]^',$firstname)){  
                $firstname_New = $firstname;
            }
            else
                $errorfirstname = 'only Charector allow';
            }
		  
		  


		  if (empty($_POST["lastname"])) // check lastname field
		  {
		    header("location:Checkout.php");
		    
		  } 
          else 
          {
		    if(preg_match('^[A-Za-z]^',$lastname)){  
                $lastname_New = $lastname;
            }
            else
                $errorlastname = 'only Charector allow';
            }
		  



		  if(empty($_POST["payment_method"]))
		  {
		  	header("location:Checkout.php"); // redirect to same page	
		  }
		  else
		  {
		  	$payment_method = $_POST["payment_method"];
		  }



		  if(empty($_POST["Book_Name"]))
		  {
		  	header("location:Checkout.php");
		  	
		  }
		  else
		  {
		  	$Book_Name = $_POST["Book_Name"];
		  }


		  if(empty($_POST["Book_Quantity"]))
		  {
		  	header("location:Checkout.php");
		  	
		  }
		  else
		  {
		  	$Book_Quantity = $_POST["Book_Quantity"];
		  }

		  


		}
		// get book inventory data with help of book name
		$data = mysqli_query($db,"SELECT * FROM bookinventory WHERE Book_Name='".$Book_Name."'");
        $row = mysqli_fetch_array($data);
		// compare book quantity with inventory data
        if($row["Book_Quantity"] < $Book_Quantity){
            echo $Book_Quantity. "Not Available";
        }
        else
        {
			// insert data into order table 
			$q = "INSERT INTO bookinventory_order (firstname, lastname, Book_name, Book_Quantity, payment_method) VALUES ('$firstname_New', '$lastname_New', '$Book_Name','$Book_Quantity','$payment_method')";

			if (mysqli_query($db, $q)) 
			{
			    
				header('location:complete.php');

				$_SESSION['Book_Quantity'] = $Book_Quantity;

			} 
			else 
			{
			    echo "Error: " . $sql . "<br>" . $conn->error;
			}

        }
	?>