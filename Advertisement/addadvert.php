<html>
<head>
  <meta charset="utf-8">
  <title>Stackfindover: Sign in</title>
  <link rel="stylesheet" type="text/css" href="../css/advertcss/style.css">
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
          <h1><a href="http://blog.stackfindover.com/" rel="dofollow">LaundryMen</a></h1>
        </div>
        <div class="formbg-outer">
          <div class="formbg">
            <div class="formbg-inner padding-horizontal--48">
              <span class="padding-bottom--15">Submit Your Company Info</span>
              <form id="stripe-login" method="POST" action="../actions/addadvert.php" enctype="multipart/form-data">
                <div class="field padding-bottom--24">
                  <label for="cname">Company Name</label>
                  <input type="text" name="cname" required>
                </div>
                 <div class="field padding-bottom--24">
                  <label for="email">Company Email</label>
                  <input type="email" name="cemail" id="cemail" onfocusout="myFunction()" required>
                </div>
                   <div class="field padding-bottom--24">
                   <label for="desc">Upload Company logo</label>
                  <input type="file" name="image[]" required accept="image/*">
                </div>
                 <div class="field padding-bottom--24">
                  <label for="desc">Company Description</label>
                  <textarea placeholder="Enter company description" name="desc" required></textarea>
                </div>
             </form>
             <form id="paymentForm">
                <div class="field padding-bottom--24">
                   <input type="hidden" id="email" required />
                    <input type="hidden" id="amount" value="0.5" required />
                  <input type="submit" name="add" value="Continue" onclick="payWithPaystack()">
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
<script>
      
    // Here the value is stored in new variable x 
    function myFunction() {
        var x = document.getElementById("cemail").value;
        document.getElementById("email").value = x;
    };
    const paymentForm = document.getElementById('paymentForm');
  paymentForm.addEventListener("submit", payWithPaystack, false);

  // PAYMENT FUNCTION
  function payWithPaystack(e) {
  e.preventDefault();
  let handler = PaystackPop.setup({
    key: 'pk_live_bd5356607a881f3a0d6843b75d3172b74b9675cd', // Replace with your public key
    email: document.getElementById("email").value,
    amount: document.getElementById("amount").value * 100,
    currency:'GHS',
     ref: ''+Math.floor((Math.random() * 1000000000) + 1),
    onClose: function(){
    alert('Window closed.');
    },
    callback: function(response){
            alert("payment have been made"+ response.reference);
            $.ajax({
              url:"../actions/process.php?reference="+ response.reference,
              method:'GET',
              success: function (response){
                document.getElementById("stripe-login").submit();
              }

            });
    }
  });
  handler.openIframe();
}
    </script>
<script src="https://js.paystack.co/v1/inline.js"></script> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</html>