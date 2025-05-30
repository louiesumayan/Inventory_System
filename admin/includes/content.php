<main class="main-content flex-grow-1">

 <!-- pages -->
 <?php
 // Check if 'page' is set in the URL, otherwise set a default value
 if (isset($_GET['page'])):
  $pages = $_GET['page'];
 else:
  $pages = 'Dashboard'; // Default page when no 'page' parameter is set
 endif;
 ?>

 <h2 class='mb-4'><?php echo $pages; ?></h2>

 <?php

 switch ($pages) {
  case 'Dashboard':
   include 'dashboard.php';
   break;

  case 'Inventory':
   include '../admin/admin-pages/inventory.php';
   break;

  case 'Create-order':
   include '../admin/admin-pages/create-order.php';
   break;

  case 'Payment':
   include '../admin/admin-pages/payment.php';
   break;

  case 'Sales':
   include '../admin/admin-pages/sales.php';
   break;

  case 'Admin':
   include '../admin/admin-pages/admin.php';
   break;

  case 'Settings':
   include 'settings.php';
   break;

  default:
   include 'dashboard.php';
   break;
 }

 ?>



</main>