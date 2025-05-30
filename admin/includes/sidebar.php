<section>
 <div class="d-flex">
  <!-- Sidebar -->
  <aside class="sidebar d-flex flex-column">
   <div class="logo-img">
    <img class="logo-bm" src="../images/Logo.png" alt="">
    <div class="logo">BM Digital Services</div>
   </div>
   <nav>

    <h6>Home</h6>
    <a href="<?php echo $_SERVER['PHP_SELF'] ?>?page=Dashboard" class="active">
     <div class="logo-home">
      <img class="logo-bm" src="../images/Icons/Dashboard.png" alt="">
      Dashboard
     </div>
    </a>

    <h6>Sales</h6>

    <a href="<?php echo $_SERVER['PHP_SELF'] ?>?page=Inventory">
     <div class="logo-sales">
      <img class="logo-bm" src="../images/Icons/Inventory.png" alt="">
      Inventory
     </div>
    </a>

    <a href="<?php echo $_SERVER['PHP_SELF'] ?>?page=Create-order">
     <div class="logo-sales">
      <img class="logo-bm" src="../images/Icons/Create_order.png" alt="">
      Create order
     </div>
    </a>

    <a href="<?php echo $_SERVER['PHP_SELF'] ?>?page=Payment">
     <div class="logo-sales">
      <img class="logo-bm" src="../images/Icons/Payment.png" alt="">
      Payment
     </div>
    </a>

    <a href="<?php echo $_SERVER['PHP_SELF'] ?>?page=Sales">
     <div class="logo-sales">
      <img class="logo-bm" src="../images/Icons/Sales.png" alt="">
      Recent sales
     </div>
    </a>

    <a href="<?php echo $_SERVER['PHP_SELF'] ?>?page=Admin">
     <div class="logo-sales">
      <img class="logo-bm" src="../images/Icons/Admin.png" alt="">
      Admin
     </div>
    </a>


    <div class="settings-layout">
     <h6>Settings</h6>
     <a href="<?php echo $_SERVER['PHP_SELF'] ?>?page=Settings">
      <div class="logo-settings">
       <img class="logo-bm" src="../images/Icons/Settings.png" alt="">
       General
      </div>
     </a>
    </div>

   </nav>
  </aside>