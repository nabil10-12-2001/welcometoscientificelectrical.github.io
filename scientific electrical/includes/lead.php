<?php $page_name = basename($_SERVER['PHP_SELF']); ?>
<?php $withoutExt = preg_replace('/\\.[^.\\s]{3,4}$/', '', $page_name); 
$selected_category = ucwords(str_replace("-", " ", $withoutExt));
?>
<?php
if ($page_name=="index.php") {
    $index_active="active";
    $page_title = "Welcome to scientific electrical";
	  $page_desc = "";
}

if ($page_name=="about-us.php") {
  $about_active="active";
  $page_title = "Welcome to scientific electrical";
  $page_desc = "";
}
if ($page_name=="services.php") {
  $services_active="active";
  $page_title = "Welcome to scientific electrical";
  $page_desc = "";
}
if ($page_name=="products.php" || $page_name=="g-I-electrode.php") {
  $products_active="active";
  $page_title = "Welcome to scientific electrical";
  $page_desc = "";
}
if ($page_name=="clients.php") {
  $clients_active="active";
  $page_title = "Welcome to scientific electrical";
  $page_desc = "";
}
if ($page_name=="contact-us.php") {
  $contacts_active="active";
  $page_title = "Welcome to scientific electrical";
  $page_desc = "";
}
if ($page_name=="download.php") {
  $enquiry_active="active";
  $page_title = "Welcome to scientific electrical";
  $page_desc = "";
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Welcome To Sceintific Electrical</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="css/owl.carousel.min.css">
  <!-- online link-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body 
class="page-<?php echo ("$withoutExt"); ?>
 <?php if($page_name!="index.php"){?>inner-pages<?php } ?>">
 <div class="load">
<div class="loader-wrapper">
<div class="loader-inner">
        
        </div>
   <div class="loader">
      
   </div>
  
   </div>
</div>
<div class="global-navigation">
<nav class="navbar navbar-expand-lg main-navigation">
  <a class="navbar-brand" href="index.php">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon">
    
          <span class="bar" onclick="myFunction(this)">

              <div class="bar1"></div>
              <div class="bar2"></div>
              <div class="bar3"></div>
            </span>
    </span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item <?=$index_active?>">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item <?=$about_active?>">
        <a class="nav-link" href="about-us.php">About Us</a>
      </li>
      <li class="nav-item <?=$services_active?>">
        <a class="nav-link" href="services.php">Services</a>
      </li>
      <li class="nav-item <?=$products_active?>">
        <a class="nav-link" href="products.php">Our Products</a>
      </li>
      <li class="nav-item <?=$clients_active?>">
        <a class="nav-link" href="clients.php">Clients</a>
      </li>
      <li class="nav-item <?=$contacts_active?>">
        <a class="nav-link" href="contact-us.php">Contact Us</a>
      </li>
      <li class="nav-item <?=$download_active?>">
        <a class="nav-link" href="enquiry-now.php">Download</a>
      </li>
      <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li> -->
     
    </ul>

  </div>
</nav>
</div>
<?php if($page_name=="about-us.php"){ ?>
<div class="breadcrumsbanner innerbanner">
  <div class="caption text-center">
  <h2 class="breadcrums-text">About Us</h2>
  </div>
</div>
<?php } ?>
<?php if($page_name=="contact-us.php"){ ?>
<div class="breadcrumsbanner innerbanner">
  <div class="caption text-center">
  <h2 class="breadcrums-text">Contact Us</h2>
  </div>
</div>
<?php } ?>
<?php if($page_name=="products.php"){ ?>
<div class="breadcrumsbanner innerbanner">
  <div class="caption text-center">
  <h2 class="breadcrums-text">Products</h2>
  </div>
</div>
<?php } ?>
<?php if($page_name=="clients.php"){ ?>
<div class="breadcrumsbanner innerbanner">
  <div class="caption text-center">
  <h2 class="breadcrums-text">Clients</h2>
  </div>
</div>
<?php } ?>
<?php if($page_name=="services.php"){ ?>
<div class="breadcrumsbanner innerbanner">
  <div class="caption text-center">
  <h2 class="breadcrums-text">Services</h2>
  </div>
</div>
<?php } ?>
<?php if($page_name=="g-I-electrode.php"){ ?>
<div class="breadcrumsbanner innerbanner">
  <div class="caption text-center">
  <h2 class="breadcrums-text">G. I. Earth Electrode</h2>
  </div>
</div>
<?php } ?>
<?php if($page_name=="download.php"){ ?>
<div class="breadcrumsbanner innerbanner">
  <div class="caption text-center">
  <h2 class="breadcrums-text">Enquiry</h2>
  </div>
</div>
<?php } ?>
<?php if($page_name=="ese-arrester.php"){ ?>
<div class="breadcrumsbanner innerbanner">
  <div class="caption text-center">
  <h2 class="breadcrums-text">Ese Lightning Arrester</h2>
  </div>
</div>
<?php } ?>