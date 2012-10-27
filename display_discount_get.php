<?php 
	// Declare and instantiate variables
	$product_description = null;
	$list_price = null;
	$discount_percent = null;
	
	// Get the user data from the form
	$product_description = $_GET['product_description'];
	$list_price = $_GET['list_price'];
	$discount_percent = $_GET['discount_percent'];	

	// Calculate the discount
	$discount = $list_price * $discount_percent * .01;
	$discount_price = $list_price - $discount;

	// Apply currency formatting to the dollar amount for output
	$list_price_formatted = "$".number_format($list_price, 2);
	$discount_percent_formatted = $discount_percent."%";
	$discount_formatted = "$".number_format($discount, 2);
	$discount_price_formatted = "$".number_format($discount_price, 2);

	// Output the results
?>

<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <link rel="stylesheet" type="text/css" href="css/nav.css" />
</head>
<body>
	<header>
		<img src="images/Homer_Rock_and_Roll.jpg" alt="Homer" width="100" height="100" />
		<hgroup>
			<h1>Homer's Music Store</h1>
			<h2>Rock On!</h2>
		</hgroup>
		<nav>
			<ul id="main">
				<li><a href="index.html">Home</a></li>
				<li><a href="multi_column.html">Layout</a></li>
				<li><a href="table.html">Tables</a></li>
				<li><a href="images.html">Graphics</a></li>
				<li><a href="video.html">Multimedia</a></li>
				<li><a href="email_form.html">Forms</a></li>
				<li><a href="product.php">Products</a></li>
				<li><a href="geolocation.html">Stuff</a></li>
			</ul>
			
		</nav>
	</header>
	<section id="container">
		<header id="top">
			<h1>Product Discount Calculator</h1>
		</header>
    	<div id="content">
        	<label>Product Description:</label>
        	<span><?php echo $product_description; ?></span><br />

        	<label>List Price:</label>
        	<span><?php echo $list_price_formatted; ?></span><br />

        	<label>Standard Discount:</label>
        	<span><?php echo $discount_percent_formatted; ?></span><br />

        	<label>Discount Amount:</label>
        	<span><?php echo $discount_formatted; ?></span><br />

        	<label>Discount Price:</label>
        	<span><?php echo $discount_price_formatted; ?></span><br />

        	<p>&nbsp;</p>
    	</div>
    </section>
    	<footer>
		<p>&copy; 2012 Homer J. Simpson</p>
	</footer>
</body>
</html>