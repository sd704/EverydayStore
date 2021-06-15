<!DOCTYPE html>
<html>
	<head>
		<title>Everyday Store</title>
		<?php require 'includes/requirements.php'?>
		<?php require 'includes/common.php'?>
		<link href="index.css" rel="stylesheet" type="text/css"/>
		<style>footer{position:fixed;}</style>
	</head>

	<body>
		<?php require 'includes/header.php'?>
		
		<div class="col-lg-offset-3 col-md-offset-3 col-lg-6 col-md-6 row_style">	
		<table class="table table-hover table-striped text-center row_style">
		<thead>
			<tr>
				<th>Item Number</th>
				<th>Item Name</th>
				<th>Price</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
		
	<?php
	$r=mysqli_query($c,"SELECT * FROM items INNER JOIN users_items ON user_id='{$_SESSION['id']}' and item_id=pid ;") or die(mysqli_error($c));
	if(mysqli_num_rows($r)==0)
	{	echo "Add items to the cart first!";	}
	else
	{	$sum=0;	$n=1;
		while($n<=mysqli_num_rows($r))
		{	
			$row=mysqli_fetch_array($r); $sum+=$row['price'];	?>
 			<tr>
				<td><?php echo $n;$n++;?></td>
				<td><?php echo $row['name'];?></td>
				<td><?php echo $row['price'];?></td>
				<td><a href='includes/cart-remove.php?id=<?php echo $row['id']?>}' class='remove_item_link' > Remove</a></td>
			</tr>
		<?php } ?>
		<tr>
			<td></td>
			<td>Total</td>
			<td><?php echo 'Rs '.$sum.'/-'; ?></td>
			<td><a href="success.php"><button class="btn btn-primary">Confirm Order</button></a></td>
		</tr>
	<?php } ?>	
	</tbody></table></div>

		
			<?php require 'includes/footer.php'?>
		
	</body>
</html>



















