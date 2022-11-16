<?php
require("../controllers/advert_controller.php"); 

function viewAdverts(){
  $result=select_all_adverts_ctr();
  $i=0;
  if ($result!=false) {
    while($i < count($result)){
      ?>
      <tr>
        <td class="image-cell">
          <div class="image">
            <img src="../images/adverts/<?php echo $result[$i]['company_image'];  ?>" class="rounded-full">
          </div>
        </td>
        <td data-label="Company"><?php echo $result[$i]['company_name']; ?></td>
        <td data-label="Company"><?php echo $result[$i]['company_email']; ?></td>

        <td data-label="Toggle Approval">
         <form method="POST" action="../actions/updateadvert.php" id="<?php echo 'approve'.$i;  ?>" >
          <input type="hidden" name="id" value="<?php echo $result[$i]['company_id']; ?>">
          <input type="hidden" name="ss" value="<?php echo $result[$i]['Approved']; ?>">
          <div class="field">
            <div class="field-body">
              <div class="field">
                <label class="switch">
                  <input type="checkbox" value="<?php echo $result[$i]['Approved']; ?>" <?php if($result[$i]['Approved']=='Yes'){
                   echo "checked";
                 } ?> name="status" onclick="document.getElementById('<?php echo 'approve'.$i;  ?>').submit();">
                 <span class="check"></span>
                 <span class="control-label"><?php echo $result[$i]['Approved']; ?></span>
               </label>
             </div>
           </div>
         </div>
       </form>
     </td>

     <td class="actions-cell">
      <div class="buttons right nowrap">
        <a href="<?php echo "mailto:". $result[$i]['company_email']; ?>">
         <button class="button small blue "   type="button" title="Email Company" >
          <span class="icon"><i class="mdi mdi-mail"></i></span>
        </button>
      </a>
      <button class="button small green --jb-modal"  data-target="<?php echo "sample-modal-2".$i; ?>" type="button" title="View Advert">
        <span class="icon"><i class="mdi mdi-eye"></i></span>
      </button>
      <button class="button small red --jb-modal" data-target="<?php echo "sample-modal".$i; ?>" type="button" title="Delete Advert">
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
     <form method="POST" action="../actions/deladvert.php">
      <p>Do you want to delete this subscription?</p>
      <input type="hidden" name="pid" value="<?php echo $result[$i]['company_id']; ?>">
      <input type="hidden" name="image" value="<?php echo $result[$i]['company_image']; ?>">

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
      <p class="modal-card-title">View Advert</p>
    </header>
    <section class="modal-card-body">
      <input type="hidden" name="id" value="<?php echo $result[$i]['company_id']; ?>">
      <div class="field">
        <label for="sname" class="label">Company Name</label>
        <div class="field-body">
          <div class="field">
            <div class="control icons-left">
              <input class="input" type="text" placeholder="Name" name="sname" value="<?php echo $result[$i]['company_name']; ?>">
              <span class="icon left"><i class="mdi mdi-account"></i></span>
            </div>
          </div>
          <div class="field">
           <label for="price" class="label">Company Email</label>
           <div class="control icons-left icons-right">
            <input class="input" type="text" placeholder="Enter Price" name="price"  value="<?php echo $result[$i]['company_email']; ?>">
            <span class="icon left"><i class="mdi mdi-mail"></i></span>
          </div>
        </div>
        <div class="field">
         <label for="price" class="label">Company Description</label>
         <div class="control icons-left icons-right">
          <textarea class="textarea"><?php echo $result[$i]['company_info']; ?></textarea>
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
          <button class="button --jb-modal-close blue" type="button">Exit</button>

        </footer>

      </div>
    </div>


    <?php

    $i++;
  }

}

}

function showAdverts(){
  $result=show_all_adverts_ctr();
  $i=0;
  if ($result!=false) {
    while($i < count($result)){
      ?>
      <div class="tt-item">
        <div class="title-block">
          <div class="title-block__label">
          Adverstiment </div>
          <h4 class="title-block__title">
           <?php echo $result[$i]['company_name']; ?></h4>
         </div>
         <blockquote>
          <p>
           <?php echo $result[$i]['company_info']; ?>
         </p>
         <p><strong class="tt-base-color02">- <?php echo $result[$i]['company_email']; ?></strong></p>
       </blockquote>
     </div>


     <?php

     $i++;
   }

 }

}

function showPics(){
  $result=show_all_adverts_ctr();
  $i=0;
  if ($result!=false) {
    while($i < count($result)){
      ?>
        <div class="tt-item">
                                      
                                      <img width="289" height="244"
                                        src="../images/adverts/<?php echo $result[$i]['company_image']; ?>"
                                        class="attachment-full size-full" alt=""
                                        loading="lazy" style="width: 200px;" />
                                    </div>


     <?php

     $i++;
   }

 }

}


?>