<?php
require("../controllers/product_controller.php"); 

function selectCategories(){
  $result=view_categories_ctr();
  $i=0;
  if ($result!=false) {

    while($i < count($result)){
      ?>

      <option value="<?php echo $result[$i]['cat_id']; ?>"><?php echo $result[$i]['cat_name']; ?></option>

      <?php
$i++;
    }

}else{
  echo "No Catgories added";
}
}
function viewProducts(){
  $result=view_products_ctr();
  $i=0;
if ($result!=false) {
  while($i < count($result)){
    $category=view_one_category_ctr($result[$i]['category']);
    ?>
    <tr>
      <td class="image-cell">
      </td>
      <td data-label="Name"><?php echo $result[$i]['wash_name']; ?></td>
      <td data-label="Price"><?php echo $result[$i]['wash_price']; ?></td>
      <td data-label="Number of Bags"><?php echo $category['cat_name'] ?></td>
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
               <form method="POST" action="../actions/delproduct.php">
                <p>Do you want to delete this subscription?</p>
                <input type="hidden" name="id" value="<?php echo $result[$i]['wash_id']; ?>">

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
              <form method="POST" action="../actions/editproduct.php">
                <input type="hidden" name="id" value="<?php echo $result[$i]['wash_id']; ?>">
                <div class="field">
                  <label for="sname" class="label">Name</label>
                  <div class="field-body">
                    <div class="field">
                      <div class="control icons-left">
                        <input class="input" type="text" placeholder="Name" name="sname" value="<?php echo $result[$i]['wash_name']; ?>">
                        <span class="icon left"><i class="mdi mdi-account"></i></span>
                      </div>
                    </div>
                    <div class="field">
                     <label for="price" class="label">Price</label>
                     <div class="control icons-left icons-right">
                      <input class="input" type="text" placeholder="Enter Price" name="price"  value="<?php echo $result[$i]['wash_price']; ?>">
                      <span class="icon left"><i class="mdi mdi-mail"></i></span>
                    </div>
                  </div>
                    <div class="field">
            <label class="label">Category</label>
               <div class="control">
              <div class="select ">
                <select name="cid">
               <?php
      
         selectCategories();

         ?>
           </select>
              </div>
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
function showProducts(){
  $result=view_delicate_products_ctr();
  $i=0;
if ($result!=false) {
  while($i < count($result)){
    $category=view_one_category_ctr($result[$i]['category']);
    ?>
    <div style="padding-right: 30px;">
    <li  
                class="prd product type-product post-1506 status-publish first instock product_cat-music has-post-thumbnail downloadable virtual purchasable product-type-simple">
                <a href="../product/album/index.html"
                  class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                  <div class="prd-img">
                    <img width="250" height="250" src="delicate.png"
                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt=""
                      loading="lazy"
                      srcset="delicate.png 300w, delicate.png 150w, delicate.png 768w, delicate.png 600w, delicate.png 100w, delicate.png 800w"
                      sizes="(max-width: 300px) 100vw, 300px" 
                      />
                  </div>
                  <div class="prd-info">
                    <h2 class="woocommerce-loop-product__title"><?php echo $result[$i]['wash_name']; ?></h2>
                    <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span
                            class="woocommerce-Price-currencySymbol">GH₵ <?php echo $result[$i]['wash_price']; ?></span>
                  </div>
                </a><a rel="nofollow" href="index50e8.html?add-to-cart=1506" data-quantity="1"
                  data-product_id="1506" data-product_sku="woo-album"
                  class="btn btn-default button product_type_simple add_to_cart_button ajax_add_to_cart"
                  data-product_id="1506" data-product_sku="woo-album"
                  aria-label="Add &ldquo;Album&rdquo; to your cart" rel="nofollow"><span>Add to
                    cart</span></a>
              </li>
</div>
  <?php

  $i++;
}

}
else {
  echo "No products added!";
}

}

function showBedWear(){
  $result=view_bed_products_ctr();
  $i=0;
if ($result!=false) {
  while($i < count($result)){
    $category=view_one_category_ctr($result[$i]['category']);
    ?>
    <div style="padding-right: 30px;">
    <li  
                class="prd product type-product post-1506 status-publish first instock product_cat-music has-post-thumbnail downloadable virtual purchasable product-type-simple">
                <a href="../product/album/index.html"
                  class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                  <div class="prd-img">
                    <img width="250" height="250" src="9.svg"
                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt=""
                      loading="lazy"
                      srcset="9.svg 300w,  150w, 9.svg 768w, 9.svg 600w, 9.svg 100w, 9.svg 800w"
                      sizes="(max-width: 300px) 100vw, 300px" 
                      />
                  </div>
                  <div class="prd-info">
                    <h2 class="woocommerce-loop-product__title"><?php echo $result[$i]['wash_name']; ?></h2>
                    <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span
                            class="woocommerce-Price-currencySymbol">GH₵ <?php echo $result[$i]['wash_price']; ?></span>
                  </div>
                </a><a rel="nofollow" href="index50e8.html?add-to-cart=1506" data-quantity="1"
                  data-product_id="1506" data-product_sku="woo-album"
                  class="btn btn-default button product_type_simple add_to_cart_button ajax_add_to_cart"
                  data-product_id="1506" data-product_sku="woo-album"
                  aria-label="Add &ldquo;Album&rdquo; to your cart" rel="nofollow"><span>Add to
                    cart</span></a>
              </li>
</div>
  <?php

  $i++;
}

}
else {
  echo "No products added!";
}

}



  ?>



