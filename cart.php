<html>
    <head>
        <title>Cart</title>
		<!-- css -->
		<link rel="stylesheet" href="assets/styles.css" type="text/css">
		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        <div class="bgi container-fluid">
            <?php include("includes/header.inc.php"); ?>
            <main class="min-vh-100">
                <div class="container">
                <!-- php print info in table -->
		<?php
			if(isset($_SESSION["shopping_cart"])){
    			$total_price = 0;
		?> 
		<table class="table">
			<tbody>
			<tr> <td></td>
				<td>Item</td>
				<td>Number</td>
				<td>Price</td>
				<td>Cart Total</td>
			</tr> 
			<?php 
				foreach ($_SESSION["shopping_cart"] as $product){
			?>
			<tr> 
				<td><?php echo $product["Name"]; ?><br/>
				<td>
				<form method='post' action=''>
				<input type='hidden' name='action' value="remove" />
				<button type='submit' class='remove'>Remove Item</button>
					<select name='quantity' class='quantity' onChange="this.form.submit()">
					<option <?php if($product["quantity"]==1) echo "selected";?> value="1">1</option>
					<option <?php if($product["quantity"]==2) echo "selected";?> value="2">2</option>
					<option <?php if($product["quantity"]==3) echo "selected";?> value="3">3</option>
					<option <?php if($product["quantity"]==4) echo "selected";?> value="4">4</option>
					<option <?php if($product["quantity"]==5) echo "selected";?> value="5">5</option>
					</select>
				</form>
				</td>
				<td><?php echo "$".$product["Price"]; ?></td>
				<td><?php echo "$".$product["Price"]*$product["quantity"]; ?></td>
			</tr>
			<?php $total_price += ($product["price"]*$product["quantity"]);} ?>
			<tr>
				<td colspan="5" align="right">
					<strong>TOTAL: <?php echo "$".$total_price; ?></strong>
				</td>
			</tr>
		</tbody>
		</table>
		<?php  }else{  echo "<h3>Your cart is empty!</h3>"; } ?>
                </div>
            </main>
            <?php include("includes/footer.inc.php"); ?>    
        </div>
        
    </body>
</html>
