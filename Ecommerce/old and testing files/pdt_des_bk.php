<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Description</title>
		<script src="js/jquery.min.js"></script> 
		<script src="js-1/bootstrap.min.js"></script>
		<script src="js/"></script>
		<link rel="stylesheet" href="css-1/bootstrap.min.css" /> 	
		<link rel="stylesheet" href="css/" />

	<style>
	* {
  box-sizing: border-box;
}
.popover
		{
		    width: 100%;
		    max-width: 800px;
		}
.zoom {
    padding: 8px;
   /* background-color: green; */
    transition: transform .1s;
    width: 200px;
    height: 200px;
   /* margin: 0 auto; */
}
.zoom:hover {
    -ms-transform: scale(1.5); /* IE 9 */
    -webkit-transform: scale(1.5); /* Safari 3-8 */
    transform: scale(1.5); 
}
.topnav {
    background-color: #00008B  ;
    overflow: hidden;
}
/* Style the links inside the navigation bar */
.topnav a {
    float: left;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
}
/* Change the color of links on hover */
.topnav a:hover {
    background-color: #ddd;
    color: black;
}
/* Add a color to the active/current link */
.topnav a.active {
    background-color: #4CAF50;
    color: white;
}
html,
body {
  width: 100%;
  height: 100%;
  margin: 0;
  background-color: #d9f3fb;
  font-family: 'Roboto', sans-serif;
}
 .button {
  display: inline-block;
  padding: 7px 15px;
  font-size: 14px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4286f4;
  border: none;
  border-radius: 8px;
  box-shadow: 0 5px #999;
}
.button:hover {background-color: #3e8e41}
.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #a0c5ed ;
   text-align: center;
  } 
  .t_align{
  alignment-adjust:central;
   }
</style>
  </head>
  <body>
  <div class="header"> <a href="ecommerce.php"></div>
  <?php
    echo "<img src='images/Logo.png' height='80' width='80' alt='Logo'/>";
?></a>
   <p align="right"><a href="register.php">Login/Register</a></p>
   
<div class="topnav">
 <a href="mob.php">Mobile & accessories</a>
 <a href="comp.php">computer & accessories</a>
 <a href="ent.php">Entertainment devices</a>
 </div>
 
 <div class="container">
 <br/>
			<nav class="navbar navbar-default" role="navigation">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Menu</span>
						<span class="glyphicon glyphicon-menu-hamburger"></span>
						</button>
					</div>
					
					<div id="navbar-cart" class="navbar-collapse collapse">
						<ul class="nav navbar-nav">
							<li>
								<a id="cart-popover" class="btn" data-placement="bottom" title="Shopping Cart">
									<span class="glyphicon glyphicon-shopping-cart"></span>
									<span class="badge"></span>
									<span class="total_price">$ 0.00</span>
								</a>
							</li>
						</ul>
					</div>
					
				</div>
			</nav>
			<div id="popover_content_wrapper" style="display: none">
				<span id="cart_details"></span>
				<div align="right">
					<a href="#" class="btn btn-primary" id="check_out_cart">
					<span class="glyphicon glyphicon-shopping-cart"></span> Check out
					</a>
					<a href="#" class="btn btn-default" id="clear_cart">
					<span class="glyphicon glyphicon-trash"></span> Clear
					</a>
				</div>
			</div>

			<div id="display_item">


			</div>
			
		</div>
 <!-- <div class="container">
			<br />
			
			<br />
			<nav class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Menu</span>
						<span class="glyphicon glyphicon-menu-hamburger"></span>
						</button>
					</div>
			
			<nav class="navbar navbar-default" role="navigation">
				<div class="container-fluid">					
					<div id="navbar-cart" class="navbar-collapse collapse">
						<ul class="nav navbar-nav">
							<li>
								<a id="cart-popover" class="btn" data-placement="bottom" title="Shopping Cart">
									<span class="glyphicon glyphicon-shopping-cart"></span>
									<span class="badge"></span>
									<span class="total_price">$ 0.00</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
			<div id="popover_content_wrapper" style="display: none">
				<span id="cart_details"></span>
				<div align="right">
					<a href="#" class="btn btn-primary" id="check_out_cart">
					<span class="glyphicon glyphicon-shopping-cart"></span> Check out
					</a>
					<a href="#" class="btn btn-default" id="clear_cart">
					<span class="glyphicon glyphicon-trash"></span> Clear
					</a>
				</div>
			</div>

			<div id="display_item">


			</div>
			
		</div> -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="ecommerce";
$ProdID=$_GET['pid'];
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "<br>";
$sql ="SELECT * FROM product_test WHERE product_id='" . $ProdID . "'"; 
$result=mysqli_query($conn,$sql);
$output = '';
	foreach($result as $row)
	{
		$output .= '
		<div class="col-md-3" style="margin-top:12px;">  
		<img src="'.$row["img_link"].'" class="img-responsive" /><br />
            	<h4 class="text-info">'.$row["product_name"].'</h4>
            	<h4 class="text-danger">$ '.$row["product_price"] .'</h4>
            	<input type="text" name="quantity" id="quantity' . $row["product_id"] .'" class="form-control" value="1" />
            	<input type="hidden" name="hidden_name" id="name'.$row["product_id"].'" value="'.$row["product_name"].'" />
            	<input type="hidden" name="hidden_price" id="price'.$row["product_id"].'" value="'.$row["product_price"].'" />
            	<input type="button" name="add_to_cart" id="'.$row["product_id"].'" style="margin-top:5px;" class="btn btn-success form-control add_to_cart" value="Add to Cart" />
            </div>
        </div>
			  	  	     		  
          			 
		';
	}
	echo $output;
	?>
<div class="t_align">

<?php
	echo "Description: ";
					 echo "<br>";
					 echo $row['p_description'] ;      
                  	 echo "<br>";
	?>
 <!-- while($row = mysqli_fetch_array($result)){
	?>
    		<div class="t_align">
             <div class="zoom">
      	   	<?php
      			 echo "<img src='" . $row['img_link'] . "' height='350' width='230' align='left'>";
      			 
      			  ?> 
			  </div> 
          			<?php 
          			 echo $row['product_name'] ;
          			 echo "<br>";
          			 echo "Price: " . $row['product_price'];
          			 echo "<br>";
          			 echo "<br>";     		  
          			 echo "Description: ";
					  echo "<br>";
					 echo $row['p_description'] ;      
                  	 echo "<br>";
				
                  	?>
             <button class="button" type="submit">Add to Cart!</button>
               <button class="button" type="submit">Check out</button>  
	
    </div> --> 
</div>
</div>
 <br><br><br><br><br><br>
 <br><br><br><br><br><br>
 <br><br><br><br><br><br>
 <br><br><br><br><br><br>
 <br><br><br><br><br><br>
<div class="footer">
 <p><a href="contact.php">Contact us</a>|<a href="support.php">Support</a>| © copyright ABC.pvt.Ltd</p>
</div>
</body>
</html>
<script> 
 
$(document).ready(function(){

	

	load_cart_data();
    

	function load_cart_data()
	{
		$.ajax({
			url:"fetch_cart.php",
			method:"POST",
			dataType:"json",
			success:function(data)
			{
				$('#cart_details').html(data.cart_details);
				$('.total_price').text(data.total_price);
				$('.badge').text(data.total_item);
			}
		});
	}

	$('#cart-popover').popover({
		html : true,
        container: 'body',
        content:function(){
        	return $('#popover_content_wrapper').html();
        }
	});

	$(document).on('click', '.add_to_cart', function(){
		var product_id = $(this).attr("id");
		var product_name = $('#name'+product_id+'').val();
		var product_price = $('#price'+product_id+'').val();
		var product_quantity = $('#quantity'+product_id).val();
		var action = "add";
		
		if(product_quantity > 0)
		{
			$.ajax({
				url:"action.php",
				 method:"POST",
				data:{product_id:product_id, product_name:product_name, product_price:product_price, product_quantity:product_quantity, action:action},
				success:function(data)
				{
					load_cart_data();
					alert("Item has been Added into Cart");
				}
			});
		}
		else
		{
			alert("Please Enter Number of Quantity");
		}
	});

	$(document).on('click', '.delete', function(){
		var product_id = $(this).attr("id");
		var action = 'remove';
		if(confirm("Are you sure you want to remove this product?"))
		{
			$.ajax({
				url:"action.php",
				method:"POST",
				data:{product_id:product_id, action:action},
				success:function()
				{
					load_cart_data();
					$('#cart-popover').popover('hide');
					alert("Item has been removed from Cart");
				}
			})
		}
		else
		{
			return false;
		}
	});

	$(document).on('click', '#clear_cart', function(){
		var action = 'empty';
		$.ajax({
			url:"action.php",
			method:"POST",
			data:{action:action},
			success:function()
			{
				load_cart_data();
				$('#cart-popover').popover('hide');
				alert("Your Cart has been clear");
			}
		});
	});
    
});

</script>