<?php
session_start();
?>
<html>
<head>
  <meta charset="utf-8">
  <title> Sign In</title>
  <link rel="stylesheet" type="text/css" href="../css/advertcss/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  
</head>

<body>
  <div class="login-root">
    <div class="box-root flex-flex flex-direction--column" style="min-height: 100vh;flex-grow: 1;">
      <div class="loginbackground box-background--white padding-top--64">
        <div class="loginbackground-gridContainer">
          <div class="box-root flex-flex" style="grid-area: top / start / 8 / end;">
            <div class="box-root" style="background-image: linear-gradient(white 0%, rgb(247, 250, 252) 33%); flex-grow: 1;">
            </div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 4 / 2 / auto / 5;">
            <div class="box-root box-divider--light-all-2 animationLeftRight tans3s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 6 / start / auto / 2;">
            <div class="box-root box-background--blue800" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 7 / start / auto / 4;">
            <div class="box-root box-background--blue animationLeftRight" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 8 / 4 / auto / 6;">
            <div class="box-root box-background--gray100 animationLeftRight tans3s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 2 / 15 / auto / end;">
            <div class="box-root box-background--cyan200 animationRightLeft tans4s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 3 / 14 / auto / end;">
            <div class="box-root box-background--blue animationRightLeft" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 4 / 17 / auto / 20;">
            <div class="box-root box-background--gray100 animationRightLeft tans4s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 5 / 14 / auto / 17;">
            <div class="box-root box-divider--light-all-2 animationRightLeft tans3s" style="flex-grow: 1;"></div>
          </div>
        </div>
      </div>
      <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
        <div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center">
          <h1><a href="../index.php" rel="dofollow">LaundryMen</a></h1>
        </div>
        <div class="formbg-outer">
          <div class="formbg">
            <div class="formbg-inner padding-horizontal--48">
              <span class="padding-bottom--15" style="text-align:center;"><strong>Sign In</strong></span>
              <form id="stripe-login" method="POST" action="../actions/login_process.php">
              <?php
							
  
							if (!empty($_SESSION['error'])){
								?>
								<div  style="color: red; text-align:center;">
									<?php
									echo $_SESSION['error'];
									unset($_SESSION['error']);
                  ?>
                </div>
                  <?php
								}
								?>
                
                <div class="field padding-bottom--24">
                  <label for="email">Your Email</label>
                  <input type="email" name="email" required onfocus="this.placeholder = ''"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="email must be eg. laundrymen@gmail.com">
                </div>
                   <div class="field padding-bottom--24">
                   <label for="password">Password  <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span></label>
                   
                  <input type="password" name="password" id="password-field" required onfocus="this.placeholder = ''"  >
                 
                </div>
                
               
              
                <div class="field padding-bottom--24" >
                <input type="submit" name="submit" value="Sign In">
                </div> 
                <div class="field padding-bottom--24">
                
                <p style="text-align: center;" >Don't have an account?<a href="register.php"  > Sign Up</a> </p>
                <br><a href="../index.php"><i class="fa fa-arrow-left" aria-hidden="true"></i> Go Home </a>
                </div> 
                </form>
            </div>
          </div>
          <div class="footer-link padding-top--24">
            <div class="listing padding-top--24 padding-bottom--24 flex-flex center-center">
              <span><a href="#">?? LaundryMen</a></span>
              <span><a href="#">Contact</a></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
<script src="../js/main2.js"></script>


</html>