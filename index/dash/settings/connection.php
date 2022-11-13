 <!-- making the database connect, so that if the user sign's up, it saves in the database and calls it. -->
 <?php 
      
      require_once('settings/const.php');
  
      $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
  
      if($mysqli === false){
          die("ERROR: Could not connect. " . $mysqli->connect_error);
      }
  
  
  ?>

