<?php

include("../controllers/cart_controller.php");
function showCart($id){
	$ip = $_SERVER['REMOTE_ADDR'];

	if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
		$ip = $_SERVER['HTTP_CLIENT_IP'];
	} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	}

	$result=show_cart_ctr($id,$ip);
	$i=0;
	$total=0;
	
	

	if ($result!=false) {
		?>
		<table >
			<th style="padding-right: 50px;"></th>
			<th>Product</th>
			<th style="padding-right: 70px;"></th>
			<th >Price</th>
			<th style="padding-right: 70px;"></th>
			<th >Quantity</th>
			<th style="padding-right: 70px; "></th>
			<th></th>
			<th style="padding-right: 70px; "></th>

			<tbody>
				<?php
				while($i<count($result))
				{
					$product=select_one_prod_ctr($result[$i]['p_id']);
					?>

					<tr class="cart-empty woocommerce-info" style="height: 65px;">
						<td><?php echo $product['wash_name'];?></td>  
						<td></td>
						<td>GHC <?php echo $product['wash_price'];?> </td>
						<td></td>
						<td style="text-align: center;"> <form method="POST" action="../../actions/update_qty.php" id="<?php echo 'cart'.$i;  ?>" >
							<input type="hidden" name="pid" value="<?php echo $product['wash_id'];  ?>">
							<input type="text" id="quantity" name="quantity" class="form-control input-number text-center"  style="width: 40px;" value="<?php echo $result[$i]['qty'];  ?>" min="1" max="100" onfocusout="document.getElementById('<?php echo 'cart'.$i;  ?>').submit();">

						</form> </td>
						<td></td>
						<td>
							<form method="POST" action="../../actions/delete_from_cart.php">
								<input type="hidden" name="cid" value="<?php echo $result[$i]['c_id'];  ?>">
								<input type="hidden" name="pid" value="<?php echo $result[$i]['p_id'];  ?>">
								<button class="closed text-center" type="submit" name="delete" style="border: 0px; background: transparent;"><i class="fa fa-trash" style="color:red">

								</i></button>
							</form>
							
						</td>
					</tr>

					<?php 

					$total+=($product['wash_price'])*($result[$i]['qty']);
					$i++;
				}
				?>


				<?php

			}

			else{
				?>
				<p class="cart-empty woocommerce-info">Your cart is currently empty.</p>
				<?php

			}

			?>
		</tbody>
	</table>
	<br>
		<p style="width: 590px; font-size:20px; color:black; float:right"> Total Cost: <strong><?php echo "GH₵".$total;  ?></strong></p>
		<br>
		<form method="POST" action="checkout.php">
		<div class="form-check">
  <input type="radio" class="form-check-input" id="radio1" name="optradio" value="pickup" checked> Pickup
  <label class="form-check-label" for="radio1"></label>
</div>
<div class="form-check">
  <input type="radio" class="form-check-input" id="radio2" name="optradio" value="delivery"> Delivery
  <label class="form-check-label" for="radio2"></label>
</div>



	<p class="return-to-shop">
								<button class="btn btn-invert alt wc-backward" type="submit">
									Checkout</button>
							</p>
	</form>
	<?php
}


function orderConfirm($id){
	$ip = $_SERVER['REMOTE_ADDR'];
	
	if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
		$ip = $_SERVER['HTTP_CLIENT_IP'];
	} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	}

	$result=show_cart_ctr($id,$ip);
	$i=0;
	$total=0;
	
	if ($result!=false) {
		?>
		<table >
			<th style="padding-right: 50px;"></th>
			<th>Product</th>
			<th style="padding-right: 70px;"></th>
			<th >Price</th>
			<th style="padding-right: 70px;"></th>
			<th >Quantity</th>
			<th style="padding-right: 70px; "></th>

			<tbody>
				<?php
				while($i<count($result))
				{
					$product=select_one_prod_ctr($result[$i]['p_id']);
					?>

					<tr class="cart-empty woocommerce-info" style="height: 65px;">
						<td><?php echo $product['wash_name'];?></td>  
						<td></td>
						<td>GHC <?php echo $product['wash_price'];?> </td>
						<td></td>
						<td style="text-align: center;"> <form method="POST" action="../../actions/update_qty.php" id="<?php echo 'cart'.$i;  ?>" >
							<input type="hidden" name="pid" value="<?php echo $product['wash_id'];  ?>">
							<input type="text" id="quantity" name="quantity" class="form-control input-number text-center"  style="width: 40px;" value="<?php echo $result[$i]['qty'];  ?>" min="1" max="100" disabled>
							
						</form> </td>
						<td></td>
					</tr>

					<?php 

					$total+=($product['wash_price'])*($result[$i]['qty']);
					$i++;
				}
				?>
				

				<?php
				
			}
			
			else{
				?>
				<p class="cart-empty woocommerce-info">Your cart is currently empty.</p>
				<?php
				
			}

			?>
		</tbody>
	</table>
	<br>
	<p style="width: 490px; font-size:20px; color:black; float:right"><strong><?php if(isset($_POST['optradio'])){if($_POST['optradio']=='delivery'){ $total=$total+10; echo "Total Price: GHS ".$total;} else{ echo "Total Price: GHS ".$total;}} ?></strong></p>

	 
				<form id="paymentForm">
		<input type="hidden" id="email" required value="<?php echo $_SESSION['email']; ?>" />
		<input type="hidden" id="amount" required value="<?php echo $total; ?>" />
		<p><button class="btn btn-invert alt wc-backward" type="submit"  onclick="payWithPaystack()"><img src="../../images/paystack.png" style="height: 20px;"> Pay With Paystack</button>
		</p>
	</form>
	<form id="clearCart" method="POST" action="../../actions/clear_cart.php">
												<input type="hidden" name="cid" required value="<?php echo $_SESSION['id']; ?>" />
												<input type="hidden" name="amount" required value="<?php echo $total; ?>" />
												<input type="hidden" name="deliv" required value="<?php if($_POST['optradio']=='delivery'){ echo "delivery";} else{ echo "pickup";} ?>" />
											</form>
											<form id="fail" method="POST" action="../../actions/failed_order.php">
												<input type="hidden" name="cid" required value="<?php echo $_SESSION['id']; ?>" />
												<input type="hidden" name="deliv" required value="<?php if($_POST['optradio']=='delivery'){ echo "delivery";} else{ echo "pickup";} ?>" />
											</form>

	<?php
}



function countCart(){
  $result=cart_count_ctr();
  
  if ($result!=false) {
   echo $result['count'];
}
else{
  echo "0";
}
}

?>