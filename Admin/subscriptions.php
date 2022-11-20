<?php
  session_start();
if (empty($_SESSION['id']) and empty($_SESSION['name']) and empty($_SESSION['email'] and $_SESSION['role']!=1) ){
  
    header("location:../index.php"); // redirects to login page
        exit;
}
?>
<!DOCTYPE html>
<html lang="en" class="">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>LaundryMen Admin</title>

  <!-- Tailwind is included -->
  <link rel="stylesheet" href="../css/admincss/main.css?v=1628755089081">

  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png"/>
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png"/>
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png"/>
  <link rel="mask-icon" href="safari-pinned-tab.svg" color="#00b4b6"/>

  <meta name="description" content="Admin One - free Tailwind dashboard">

  <meta property="og:url" content="https://justboil.github.io/admin-one-tailwind/">
  <meta property="og:site_name" content="JustBoil.me">
  <meta property="og:title" content="Admin One HTML">
  <meta property="og:description" content="Admin One - free Tailwind dashboard">
  <meta property="og:image" content="https://justboil.me/images/one-tailwind/repository-preview-hi-res.png">
  <meta property="og:image:type" content="image/png">
  <meta property="og:image:width" content="1920">
  <meta property="og:image:height" content="960">

  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:title" content="Admin One HTML">
  <meta property="twitter:description" content="Admin One - free Tailwind dashboard">
  <meta property="twitter:image:src" content="https://justboil.me/images/one-tailwind/repository-preview-hi-res.png">
  <meta property="twitter:image:width" content="1920">
  <meta property="twitter:image:height" content="960">

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-130795909-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-130795909-1');
  </script>

</head>
<body>

<div id="app">

<nav id="navbar-main" class="navbar is-fixed-top">
  <div class="navbar-brand">
    <a class="navbar-item mobile-aside-button">
      <span class="icon"><i class="mdi mdi-forwardburger mdi-24px"></i></span>
    </a>
    <div class="navbar-item">
      <div class="control"><input placeholder="Search everywhere..." class="input"></div>
    </div>
  </div>
  <div class="navbar-brand is-right">
    <a class="navbar-item --jb-navbar-menu-toggle" data-target="navbar-menu">
      <span class="icon"><i class="mdi mdi-dots-vertical mdi-24px"></i></span>
    </a>
  </div>
  <div class="navbar-menu" id="navbar-menu">
    <div class="navbar-end">
        <!-- <div class="navbar-item dropdown has-divider">
          <a class="navbar-link">
            <span class="icon"><i class="mdi mdi-menu"></i></span>
            <span>Sample Menu</span>
            <span class="icon">
              <i class="mdi mdi-chevron-down"></i>
            </span>
          </a>
          <div class="navbar-dropdown">
            <a href="profile.html" class="navbar-item">
              <span class="icon"><i class="mdi mdi-account"></i></span>
              <span>My Profile</span>
            </a>
            <a class="navbar-item">
              <span class="icon"><i class="mdi mdi-settings"></i></span>
              <span>Settings</span>
            </a>
            <a class="navbar-item">
              <span class="icon"><i class="mdi mdi-email"></i></span>
              <span>Messages</span>
            </a>
            <hr class="navbar-divider">
            <a class="navbar-item">
              <span class="icon"><i class="mdi mdi-logout"></i></span>
              <span>Log Out</span>
            </a>
          </div>
        </div> -->
            <div class="navbar-item dropdown has-divider has-user-avatar">
        <a class="navbar-link">
          <div class="user-avatar">
            <img src="https://avatars.dicebear.com/v2/initials/john-doe.svg" alt="John Doe" class="rounded-full">
          </div>
          <div class="is-user-name"><span><?php


if (!empty($_SESSION['name'])){

    echo $_SESSION['name'];


}
?></span></div>
          <span class="icon"><i class="mdi mdi-chevron-down"></i></span>
        </a>
        <div class="navbar-dropdown">
         
          <a class="navbar-item" href="../actions/log_out.php">
            <span class="icon"><i class="mdi mdi-logout"></i></span>
            <span>Log Out</span>
          </a>
        </div>
      </div>
     <!--  <a href="https://justboil.me/tailwind-admin-templates" class="navbar-item has-divider desktop-icon-only">
        <span class="icon"><i class="mdi mdi-help-circle-outline"></i></span>
        <span>About</span>
      </a>
      <a href="https://github.com/justboil/admin-one-tailwind" class="navbar-item has-divider desktop-icon-only">
        <span class="icon"><i class="mdi mdi-github-circle"></i></span>
        <span>GitHub</span>
      </a>
      <a title="Log out" class="navbar-item desktop-icon-only">
        <span class="icon"><i class="mdi mdi-logout"></i></span>
        <span>Log out</span>
      </a> -->
    </div>
  </div>
</nav>

<aside class="aside is-placed-left is-expanded">
  <div class="aside-tools">
    <div>
      Admin <b class="font-black">LaundryMen</b>
    </div>
  </div>
  <div class="menu is-menu-main">
    <p class="menu-label">General</p>
    <ul class="menu-list">
      <li >
        <a href="index.php">
          <span class="icon"><i class="mdi mdi-desktop-mac"></i></span>
          <span class="menu-item-label">Dashboard</span>
        </a>
      </li>
    </ul>
    <p class="menu-label">Manage Services</p>
    <ul class="menu-list">
       <li class="active">
        <a class="dropdown">
          <span class="icon"><i class="mdi mdi-view-list"></i></span>
          <span class="menu-item-label">Subscriptions</span>
          <span class="icon"><i class="mdi mdi-minus"></i></span>
        </a>
        <ul>
          <li >
            <a href="subscriptions.php">
              <span>Add Subscription</span>
            </a>
          </li>
          <li>
            <a href="viewsubs.php">
              <span>View Subscriptions</span>
            </a>
          </li>
        </ul>
      </li>
    <li>
        <a class="dropdown">
          <span class="icon"><i class="mdi mdi-washing-machine"></i></span>
          <span class="menu-item-label">One Time Wash</span>
          <span class="icon"><i class="mdi mdi-plus"></i></span>
        </a>
        <ul>
          <li>
            <a href="addprod.php">
              <span>Add Product</span>
            </a>
          </li>
          <li>
            <a href="viewprod.php">
              <span>View Products</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="--set-active-profile-html">
        <a href="advertisment.php">
          <span class="icon"><i class="mdi mdi-cash-usd"></i></span>
          <span class="menu-item-label">Manage Advertisements</span>
        </a>
      </li>
        <li >
        <a href="subscribers.php">
          <span class="icon"><i class="mdi mdi-account-multiple"></i></span>
          <span class="menu-item-label">Subscribers</span>
        </a>
      </li>
        </ul>
      </li>
    </ul>
   <!--  <p class="menu-label">About</p>
    <ul class="menu-list">
      <li>
        <a href="https://justboil.me" onclick="alert('Coming soon'); return false" target="_blank" class="has-icon">
          <span class="icon"><i class="mdi mdi-credit-card-outline"></i></span>
          <span class="menu-item-label">Premium Demo</span>
        </a>
      </li>
      <li>
        <a href="https://justboil.me/tailwind-admin-templates" class="has-icon">
          <span class="icon"><i class="mdi mdi-help-circle"></i></span>
          <span class="menu-item-label">About</span>
        </a>
      </li>
      <li>
        <a href="https://github.com/justboil/admin-one-tailwind" class="has-icon">
          <span class="icon"><i class="mdi mdi-github-circle"></i></span>
          <span class="menu-item-label">GitHub</span>
        </a>
      </li>
    </ul> -->
  </div>
</aside>

<section class="is-title-bar">
  <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
    <ul>
      <li>LaundryMen Admin</li>
      <li>Add Subscriptions</li>
    </ul>
   
  </div>
</section>

<section class="is-hero-bar">
  <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
    <h1 class="title">
      Subscriptions
    </h1>
  </div>
</section>

  <section class="section main-section">
    <div class="card mb-6">
      <header class="card-header">
        <p class="card-header-title">
          <span class="icon"><i class="mdi mdi-ballot"></i></span>
          Add Subscription
        </p>
      </header>
      <div class="card-content">
        <form method="POST" action="../actions/addsubscription.php">
          <div class="field">
            <label for="sname" class="label">Name</label>
            <div class="field-body">
              <div class="field">
                <div class="control icons-left">
                  <input class="input" type="text" placeholder="Name" name="sname">
                  <span class="icon left"><i class="mdi mdi-account"></i></span>
                </div>
              </div>
              <div class="field">
                 <label for="price" class="label">Price</label>
                <div class="control icons-left icons-right">
                  <input class="input" type="text" placeholder="Enter Price" name="price" >
                  <span class="icon left"><i class="mdi mdi-mail"></i></span>
                </div>
              </div>
                <div class="field">
                 <label for="bagno" class="label">No. of Bags</label>
                <div class="control icons-left icons-right">
                  <input class="input" type="text" placeholder="Enter Bag Number" name="bagno" >
                  <span class="icon left"><i class="mdi mdi-bag-personal"></i></span>
                </div>
              </div>
              <div class="field">
                 <label for="pickup" class="label">Pickups</label>
                <div class="control icons-left icons-right">
                  <input class="input" type="text" placeholder="Enter pickup times" name="pickup" >
                  <span class="icon left"><i class="mdi mdi-bike"></i></span>
                </div>
              </div>
          <div class="field">
                 <label for="link" class="label">Paystack Link</label>
                <div class="control icons-left icons-right">
                  <input class="input" type="text" placeholder="Enter Paystack Link" name="link" >
                  <span class="icon left"><i class="mdi mdi-link"></i></span>
                </div>
              </div>
              <div class="field">
            <label class="label">Package Description</label>
            <div class="control">
              <textarea class="textarea" placeholder="Enter package description" name="desc"></textarea>
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
         
          <div class="field grouped">
            <div class="control">
              <button type="submit" class="button green" name="add">
                Add Subscription
              </button>
            </div>
            <!-- <div class="control">
              <button type="reset" class="button red">
                Reset
              </button>
            </div> -->
          </div>
        </form>
      </div>
    </div>

  </section>


<footer class="footer">
  <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0">
    <div class="flex items-center justify-start space-x-3">
      <div>
        © 2022, LaundryMen
      </div>
     
    </div>
   
  </div>
</footer>

<div id="sample-modal" class="modal">
  <div class="modal-background --jb-modal-close"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Sample modal</p>
    </header>
    <section class="modal-card-body">
      <p>Lorem ipsum dolor sit amet <b>adipiscing elit</b></p>
      <p>This is sample modal</p>
    </section>
    <footer class="modal-card-foot">
      <button class="button --jb-modal-close">Cancel</button>
      <button class="button red --jb-modal-close">Confirm</button>
    </footer>
  </div>
</div>

<div id="sample-modal-2" class="modal">
  <div class="modal-background --jb-modal-close"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Sample modal</p>
    </header>
    <section class="modal-card-body">
      <p>Lorem ipsum dolor sit amet <b>adipiscing elit</b></p>
      <p>This is sample modal</p>
    </section>
    <footer class="modal-card-foot">
      <button class="button --jb-modal-close">Cancel</button>
      <button class="button blue --jb-modal-close">Confirm</button>
    </footer>
  </div>
</div>

</div>

<!-- Scripts below are for demo only -->
<script type="text/javascript" src="../js/adminjs/main.min.js?v=1628755089081"></script>


<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '658339141622648');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=658339141622648&ev=PageView&noscript=1"/></noscript>

<!-- Icons below are for demo only. Feel free to use any icon pack. Docs: https://bulma.io/documentation/elements/icon/ -->
<link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.9.95/css/materialdesignicons.min.css">

</body>
</html>
