<?php $currentPage = "Inventory" ?>
<?php include './includes/top-bar.php' ?>

<!-- search input -->
<section class="search-container">
 <div class="tab-container">
  <ul>
   <li class="tab-list active">Product Listed</li>
   <li class="tab-list ">Account Listing</li>
  </ul>
 </div>

 <div class="search-input">
  <input placeholder="Search" type="text" name="serach" id="">
  <i class="fa-solid fa-magnifying-glass"></i>
 </div>
 <button class="add-product" name="add-product"><i class="fa-solid fa-plus"></i> Add Product</button>
</section>

<!-- inventory-product-section.html -->
<section class="inventory-section product active">
 <div class="inventory-table">
  <!-- Table Header -->
  <div class="inventory-header">
   <div class="col product">Product Name</div>
   <div class="col duration">Duration</div>
   <div class="col price">Price</div>
   <div class="col stock">Stock</div>
   <div class="col c-stock">Current Stock</div>
   <div class="col status">Status</div>
   <div class="col account">Account</div>
   <div class="col action">Action</div>
  </div>

  <!-- Scrollable Body with 10 Rows -->
  <div class="inventory-body">
   <!-- Row 1 -->
   <div class="inventory-row">
    <div class="col product">
     <img src="../images/Icons/canva.png" alt="GPT Icon" class="product-icon" />
     <span class="product-name">Canva</span>
    </div>
    <div class="col duration">2 weeks</div>
    <div class="col price">₱100</div>
    <div class="col stock">99999</div>
    <div class="col c-stock">99999</div>
    <div class="col status p-listed">
     <span class="tag">In stock</span>
    </div>
    <div class="col account">bmdigital@proton.me</div>
    <div class="col action">
     <button class="action-btn"><img src="../images/Icons/action-btn.png" alt=""></button>
    </div>
   </div>

  </div>
 </div>
</section>



<!-- inventory-account-section.html -->

<section class="inventory-section account">
 <div class="inventory-table">
  <div class="inventory-header">
   <div class="col product">Account</div>
   <div class="col duration">Phrase</div>
   <div class="col usage">Usage Count</div>
   <div class="col duration">Duration</div>
   <div class="col product">Product Name</div>
   <div class="col start">Start</div>
   <div class="col end">End</div>
   <div class="col action">Action</div>
  </div>

  <div class="inventory-body">
   <div class="inventory-row">
    <div class="col account">bmdigital@proton.me</div>
    <div class="col duration">2qwe@#41</div>
    <div class="col stock">99999</div>
    <div class="col duration">3 mos</div>
    <div class="col product">
     <img src="../images/Icons/canva.png" alt="GPT Icon" class="product-icon" />
     <span class="product-name">Canva account</span>
    </div>
    <div class="col status">
     <span class="tag tag-recent">May 25 2025</span>
    </div>
    <div class="col status">
     <span class="tag tag-expiring">May 25 2025</span>
    </div>
    <div class="col action">
     <button class="action-btn"><img src="../images/Icons/action-btn.png" alt=""></button>
    </div>
   </div>

  </div>
 </div>
</section>

<script type="module" src="./assets/javascript/inventory.js"></script>