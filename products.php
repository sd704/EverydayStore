<!DOCTYPE html>
<html>
	<head>
		<title>Everyday Store</title>
		<?php require 'includes/requirements.php'?>
		<?php require 'includes/common.php'?>
		<link href="index.css" rel="stylesheet" type="text/css"/>
	</head>

	<body>
		<?php require 'includes/header.php'?>
		<?php require 'includes/Check-if-added.php'?>
		<div class="container">
			<div class="jumbotron row_style">
				<h2>Welcome to our Everyday Store!</h2>
				<p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
			</div>
			
			<?php $r=mysqli_query($c,"SELECT pid,name,price FROM items") or die (mysqli_error($c));
			$n=mysqli_num_rows($r);//Total number of products
			for($i=0;$i<$n;$i++) {
			if($i%4==0) { ?><div class="row text-center"><?php } ?>
				<?php $row=mysqli_fetch_array($r); ?>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail"><?php $filename=$row['name'].".jpg" ; ?>
	                        	    <img src="img/<?php echo "$filename" ?>" alt="<?php echo "$filename" ?>">
		                            <div class="caption">
						
						<h3><?php echo $row['name']; ?></h3>
                		                <p><?php echo "Price: Rs. ".$row['price']; ?></p>
						<?php if (!isset($_SESSION['email'])) { ?>
						<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p><?php } 
							else {
								if (check_if_added_to_cart($row['pid'])) { echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } 
								else { ?>
									<a href="includes/cart-add.php?pid=<?php echo $row['pid']?>" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
								<?php } } ?>
					    </div>
		                        </div> 
        			</div>
			<?php if(($i+1)%4==0) { ?></div><?php } } ?>
		</div>

		<?php require 'includes/footer.php'?>
	</body>
</html>



















