<?php include_once("db_connect.php"); ?>
<?php include('server.php') ?>
<?php

//action.php

session_start();
$username=$_SESSION['username'];
if(isset($_POST["action"]))
{
	if($_POST["action"] == "add")
	{
		if(isset($_SESSION["shopping_cart"]))
		{
			$is_available = 0;
			foreach($_SESSION["shopping_cart"] as $keys => $values)
			{
				if($_SESSION["shopping_cart"][$keys]['product_id'] == $_POST["product_id"])
				{
					$is_available++;
					$_SESSION["shopping_cart"][$keys]['product_quantity'] = $_SESSION["shopping_cart"][$keys]['product_quantity'] + $_POST["product_quantity"];
				}
			}
			if($is_available == 0)
			{
				$item_array = array(
					'product_id'               =>     $_POST["product_id"],  
					'product_name'             =>     $_POST["product_name"],  
					'product_price'            =>     $_POST["product_price"],  
					'product_quantity'         =>     $_POST["product_quantity"]
				);
				$_SESSION["shopping_cart"][] = $item_array;
			}
		}
		else
		{
			$item_array = array(
				'product_id'               =>     $_POST["product_id"],  
				'product_name'             =>     $_POST["product_name"],  
				'product_price'            =>     $_POST["product_price"],  
				'product_quantity'         =>     $_POST["product_quantity"]
			);
			$_SESSION["shopping_cart"][] = $item_array;
		}
        $productid = $_POST["product_id"];
        $productname = $_POST["product_name"];
        $productprice = $_POST["product_price"];
        $productqty = $_POST["product_quantity"];
        
        $insertCartDetails = "INSERT INTO cart(username,product_id,product_name,product_price,product_quantity)
        VALUES('".$username."','".$productid."','".$productname."','".$productprice."','".$productqty."')";
        mysqli_query($conn, $insertCartDetails) or die("database error: ".mysqli_error($conn));

        
	}

	if($_POST["action"] == 'remove')
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["product_id"] == $_POST["product_id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				$productid = $_POST["product_id"];
				$DeleteCartDetails = "DELETE FROM cart WHERE username='" .$username. "' and product_id='" .$productid. "'";
        		mysqli_query($conn, $DeleteCartDetails) or die("database error: ".mysqli_error($conn));

			}
		}
	}
	if($_POST["action"] == 'empty')
	{
		unset($_SESSION["shopping_cart"]);
		$DeleteCartDetails = "DELETE FROM cart WHERE username='" . $username . "'";
       	mysqli_query($conn, $DeleteCartDetails) or die("database error: ".mysqli_error($conn));
	}
}

?>