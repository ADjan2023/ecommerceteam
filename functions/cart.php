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
		while($i<count($result))
		{
			$product=select_one_prod_ctr($result[$i]['p_id']);
			?>
            <p class="cart-empty woocommerce-info"><?php echo $product['wash_name'];?> : GHC <?php echo $product['wash_price'];?>  </p>

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

}