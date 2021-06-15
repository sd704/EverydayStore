<?php
	function check_if_added_to_cart($item_id)
	{
		require 'common.php';
		$user_id=$_SESSION['id'];
		$r=mysqli_query($c,"SELECT * FROM users_items WHERE item_id='$item_id' AND user_id ='$user_id' and status='Added to cart'") or die(mysqli_error($c));
		if(mysqli_num_rows($r) >= 1)
		{
			return 1;
		}
		else
		{
			return 0;
		}
	}
?>