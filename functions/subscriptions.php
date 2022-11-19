<?php
require("../controllers/subscription_controller.php");
function viewSubscription(){
  $result=view_subscription_ctr();
  $i=0;
if ($result!=false) {
  while($i < count($result)){
    ?>
    <tr>
      <td class="image-cell">
      </td>
      <td data-label="Name"><?php echo $result[$i]['subscription_name']; ?></td>
      <td data-label="Price"><?php echo $result[$i]['subscription_price']; ?></td>
      <td data-label="Number of Bags"><?php echo $result[$i]['bag_number']; ?></td>
      <td data-label="Pickups"><?php echo $result[$i]['pickups']; ?></td>
            <!-- <td data-label="Progress" class="progress-cell">
              <progress max="100" value="20">79</progress>
            </td> -->

            <td class="actions-cell">
              <div class="buttons right nowrap">
                <button class="button small green --jb-modal"  data-target="<?php echo "sample-modal-2".$i; ?>" type="button">
                  <span class="icon"><i class="mdi mdi-eye"></i></span>
                </button>
                <button class="button small red --jb-modal" data-target="<?php echo "sample-modal".$i; ?>" type="button">
                  <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                </button>
              </div>
            </td>
          </tr>
          <div id="<?php echo "sample-modal".$i; ?>" class="modal">
            <div class="modal-background --jb-modal-close"></div>
            <div class="modal-card">
              <header class="modal-card-head">
                <p class="modal-card-title">Delete Subscription</p>
              </header>
              <section class="modal-card-body">
               <form method="POST" action="../actions/delsubscription.php">
                <p>Do you want to delete this subscription?</p>
                <input type="hidden" name="sid" value="<?php echo $result[$i]['subscription_id']; ?>">

              </section>
              <footer class="modal-card-foot">
                <button class="button --jb-modal-close" type="button">Cancel</button>
                <button class="button red --jb-modal-close" type="submit" name="delete">Confirm</button>
              </footer>
            </form>
          </div>
        </div>

        <div id="<?php echo "sample-modal-2".$i; ?>" class="modal">
          <div class="modal-background --jb-modal-close"></div>
          <div class="modal-card">
            <header class="modal-card-head">
              <p class="modal-card-title">Edit Subscription</p>
            </header>
            <section class="modal-card-body">
              <form method="POST" action="../actions/editsubscription.php">
                <input type="hidden" name="sid" value="<?php echo $result[$i]['subscription_id']; ?>">
                <div class="field">
                  <label for="sname" class="label">Name</label>
                  <div class="field-body">
                    <div class="field">
                      <div class="control icons-left">
                        <input class="input" type="text" placeholder="Name" name="sname" value="<?php echo $result[$i]['subscription_name']; ?>">
                        <span class="icon left"><i class="mdi mdi-account"></i></span>
                      </div>
                    </div>
                    <div class="field">
                     <label for="price" class="label">Price</label>
                     <div class="control icons-left icons-right">
                      <input class="input" type="text" placeholder="Enter Price" name="price"  value="<?php echo $result[$i]['subscription_price']; ?>">
                      <span class="icon left"><i class="mdi mdi-mail"></i></span>
                    </div>
                  </div>
                  <div class="field">
                   <label for="bagno" class="label">No. of Bags</label>
                   <div class="control icons-left icons-right">
                    <input class="input" type="text" placeholder="Enter Bag Number" name="bagno"  value="<?php echo $result[$i]['bag_number']; ?>">
                    <span class="icon left"><i class="mdi mdi-bag-personal"></i></span>
                  </div>
                </div>
               <div class="field">
                   <label for="bagno" class="label">Pickups</label>
                   <div class="control icons-left icons-right">
                    <input class="input" type="text" placeholder="Enter pickup" name="pickup"  value="<?php echo $result[$i]['pickups']; ?>">
                    <span class="icon left"><i class="mdi mdi-bike"></i></span>
                  </div>
                </div>
                <div class="field">
                   <label for="bagno" class="label">Paystack Link</label>
                   <div class="control icons-left icons-right">
                    <input class="input" type="text" placeholder="Enter subscription link" name="link"  value="<?php echo $result[$i]['paystack_link']; ?>">
                    <span class="icon left"><i class="mdi mdi-link"></i></span>
                  </div>
                </div>
                <div class="field">
                  <label class="label">Package Description</label>
                  <div class="control">
                    <textarea class="textarea" placeholder="Enter package description" name="desc" ><?php echo $result[$i]['Description']; ?></textarea>
                  </div>
                </div>
              </div>
            </div>

         <!--  <div class="field">
            <label class="label">Department</label>
            <div class="control">
              <div class="select">
                <select>
                  <option>Business development</option>
                  <option>Marketing</option>
                  <option>Sales</option>
                </select>
              </div>
            </div>
          </div> -->


        </section>
        <footer class="modal-card-foot">
          <button class="button --jb-modal-close" type="button">Cancel</button>
          <button class="button blue " type="submit" name="edit">Confirm</button>
        </footer>
      </form>
    </div>
  </div>


  <?php

  $i++;
}
}
}

function viewSubscriptionUser(){
  $sub;

  $result=view_subscription_ctr();
  if (empty($_SESSION['id']) and empty($_SESSION['name']) and empty($_SESSION['email']) ) {
  $sub="../../login/login.php";
}
else{
  $sub=$result[$i]['paystack_link'];
}
  $i=0;
if ($result!=false) {
  while($i < count($result)){
    ?>
   <div class="tt-item col-md-4" style="padding-bottom: 100px;">
                                  <div class="promo02 js-handler">
                                    <div class="promo02__icon"><i aria-hidden="true"
                                        class=" icons-2840435"></i></div>
                                    <div class="promo02__title"><?php echo $result[$i]['subscription_name']; ?>
                                    </div>
                                    <div class="promo02__subtitle"><?php echo $result[$i]['pickups']; ?></div>
                                    <div class="promo02__show-layout">
                                      <ul>
                                        <li>Pickup and delivery from location</li>
                                        <li><?php echo $result[$i]['bag_number']; ?> laundry bag(s) will be provided
                                        </li>
                                        <li>Laundry will be washed and dried</li>
                                        <li><?php echo $result[$i]['Description']; ?></li>
                                      </ul>
                                    </div>
                                    <div class="promo02__price">
                                      GH₵ <?php echo $result[$i]['subscription_price']; ?> </div>
                                    <div class="promo02__show-btn">
                                      <a href="<?php echo $sub; ?>"
                                        class="tt-btn tt-btn__wide">
                                        <span class="mask">Order Now</span>
                                        <div class="button">Order Now</div>
                                      </a>
                                    </div>
                                    <div class="promo02__btn-toggle"></div>
                                  </div>
                                </div>


  <?php

  $i++;
}
}
}



  ?>



