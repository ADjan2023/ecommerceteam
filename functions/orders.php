<?php
require("../controllers/orders_controller.php");
function viewOrders(){
  $result=view_orders_ctr();
  $i=0;
  if ($result!=false) {
    while($i < count($result)){
      ?>

      <tr>
        <td class="image-cell">
          <div class="image">
            <img src="../images/logo.jpg" class="rounded-full">
          </div>
        </td>
        <td data-label="Name"><?php echo $result[$i]['customer_name'];  ?></td>
        <td data-label="Company"><?php echo $result[$i]['customer_email'];  ?></td>
        <td data-label="City"><?php echo $result[$i]['customer_contact'];  ?></td>
        <td data-label="Progress" ><?php echo $result[$i]['Hostel_name'];  ?></td>
        <td data-label="Progress" ><?php echo $result[$i]['wash_name'];  ?></td>
        <td data-label="Progress" ><?php echo $result[$i]['Deliv'];  ?></td>
        <td data-label="Created">
          <small class="text-gray-500" title="<?php echo $result[$i]['order_date'];  ?>"><?php echo $result[$i]['order_date'];  ?></small>
        </td>
        <td class="actions-cell">
          <div class="buttons right nowrap">
            <?php 
            $message;
            if ($result[$i]['Deliv']=="delivery") {
              $message= "The delivery person is on their way with your laundry. Your laundry will arrive within 20 minutes. Thank you";
            } else{$message= "Your laundry is ready. Please come and pick it up before 5pm today. Thank you";}

            ?>
            <a href="<?php echo "mailto:".$result[$i]['customer_email']."?subject=Laundry&body=Your Laundry has been picked up" ?>">
             <button class="button small blue "   type="button" title="Pickup Email" >
              <span class="icon"><i class="mdi mdi-mail"></i></span>
            </button>
          </a>
          <a href="<?php echo "mailto:".$result[$i]['customer_email']."?subject=Your Laundry Is Ready&body=".$message; ?>">
           <button class="button small blue "   type="button" title="Deliver Email" >
            <span class="icon"><i class="mdi mdi-bike"></i></span>
          </button>
        </a>
        <button class="button small green --jb-modal"  data-target="<?php echo "sample-modal-2".$i; ?>" type="button">
          <span class="icon"><i class="mdi mdi-check"></i></span>
        </button>

      </div>
    </td>
  </tr>

  <div id="<?php echo "sample-modal-2".$i; ?>" class="modal">
    <div class="modal-background --jb-modal-close"></div>
    <div class="modal-card">
      <header class="modal-card-head">
        <p class="modal-card-title">Do you want to mark <?php echo $result[$i]['customer_name'];  ?>'s order as completed?</p>
      </header>
      <footer class="modal-card-foot">
        <button class="button --jb-modal-close">Cancel</button>
        <form method="POST" action="../actions/complete_order.php">
          <input type="hidden" value="<?php echo $result[$i]['order_id'];  ?>" name="oid">
          <button class="button blue" type="submit" name="update">Yes</button> 
        </form>
      </footer>
    </div>
  </div>
  <?php

  $i++;
}
}
}

function viewSubs(){
  $result=view_subs_ctr();
  $i=0;
  $date=date_create($result[$i]['order_date']);
  $duration;
  if ($result[$i]['sub_name']=="VIP Package") {
    $duration="1 year";
  } else if ($result[$i]['sub_name']=="Standard Package") {
   $duration="4 months";
  } else{
    $duration="4 months";
  }
  date_add($date,date_interval_create_from_date_string($duration));
  if ($result!=false) {
    while($i < count($result)){
      ?>

      <tr>
        <td class="image-cell">
          <div class="image">
            <img src="../images/logo.jpg" class="rounded-full">
          </div>
        </td>
        <td data-label="Name"><?php echo $result[$i]['customer_name'];  ?></td>
        <td data-label="Company"><?php echo $result[$i]['customer_email'];  ?></td>
        <td data-label="City"><?php echo $result[$i]['customer_contact'];  ?></td>
        <td data-label="Progress" ><?php echo $result[$i]['Hostel_name'];  ?></td>
        <td data-label="Progress" ><?php echo $result[$i]['sub_name'];  ?></td>
        <td data-label="Created">
          <small class="text-gray-500" title="<?php echo $result[$i]['order_date'];  ?>"><?php echo $result[$i]['order_date'];  ?></small>
        </td>
        <td data-label="Created">
          <small class="text-gray-500" title="<?php echo date_format($date,"Y-m-d");  ?>"><?php echo date_format($date,"Y-m-d");  ?></small>
        </td>
        <td data-label="Progress" ><?php echo $result[$i]['pickups'];  ?></td>
        <td class="actions-cell">
          <div class="buttons right nowrap">
            <a href="<?php echo "mailto:".$result[$i]['customer_email']."?subject=Laundry&body=Your Laundry has been picked up" ?>">
             <button class="button small blue "   type="button" title="Pickup Email" >
              <span class="icon"><i class="mdi mdi-mail"></i></span>
            </button>
          </a>
          <a href="<?php echo "mailto:".$result[$i]['customer_email']."?subject=Your Laundry Is Ready&body=The delivery person has set off with your laundry. You will recieve it within 20 minutes" ?>">
           <button class="button small blue "   type="button" title="Deliver Email" >
            <span class="icon"><i class="mdi mdi-bike"></i></span>
          </button>
        </a>
        <button class="button small green --jb-modal"  data-target="<?php echo "sample-modal-2".$i; ?>" type="button">
          <span class="icon"><i class="mdi mdi-check"></i></span>
        </button>

      </div>
    </td>
  </tr>

  <div id="<?php echo "sample-modal-2".$i; ?>" class="modal">
    <div class="modal-background --jb-modal-close"></div>
    <div class="modal-card">
      <header class="modal-card-head">
        <p class="modal-card-title">Do you want to mark <?php echo $result[$i]['customer_name'];  ?>'s order as completed?</p>
      </header>
      <footer class="modal-card-foot">
        <button class="button --jb-modal-close">Cancel</button>
        <form method="POST" action="../actions/complete_order.php">
          <input type="hidden" value="<?php echo $result[$i]['order_id'];  ?>" name="oid">
          <button class="button blue" type="submit" name="update">Yes</button> 
        </form>
      </footer>
    </div>
  </div>
  <?php

  $i++;
}
}
}

function viewSales(){
  $result=sales_count_ctr();
  
  if ($result!=false) {
   echo $result['sales'];
}
else{
  echo "0";
}
}

function sumOrders(){
  $result=orders_count_ctr();
  
  if ($result!=false) {
   echo $result['order'];
}
else{
  echo "0";
}
}

function sumClients(){
  $result=clients_count_ctr();
  
  if ($result!=false) {
   echo $result['clients'];
}
else{
  echo "0";
}
}

?>






