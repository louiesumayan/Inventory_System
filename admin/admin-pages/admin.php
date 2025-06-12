<?php $currentPage = "Admin" ?>
<?php include './includes/top-bar.php' ?>

<section class="search-container">
 <div class="search-input">
  <!-- uncomment this for future changes -->
  <input placeholder="Search" type="text" name="serach" id="">
  <i class="fa-solid fa-magnifying-glass"></i>
 </div>
 <button class="add-product" name="add-product"><i class="fa-solid fa-plus"></i> Add Payment</button>
</section>

<!-- admin-section.html -->
<section class="c-order-section finance f-ledger active">
 <div class="c-order-table">
  <div class="c-order-header finance-header">
   <div class="col col-product">Agent</div>
   <div class="col col-agent">Name</div>
   <div class="col col-mop">Total Amount</div>
   <div class="col col-duration">Commission</div>
   <div class="col col-price">Percentage</div>
   <div class="col col-start">Number Of Customer</div>
   <div class="col col-end">MOP</div>
   <div class="col col-action">Action</div>
  </div>
  <div class="c-order-body">
   <!-- Row 1 -->
   <div class="c-order-row finance-row">
    <div class="col col-agent">
     <span class="agent-badge agent-micah">micah</span>
    </div>
    <div class="col col-agent">
     <span>Brian Sumayan</span>
    </div>
    <div class="col col-mop">₱123</div>
    <div class="col col-duration">₱13</div>
    <div class="col col-duration">50%</div>
    <div class="col col-duration">13</div>
    <div class="product-col">
     <img src="../images/Icons/Gcash.png" alt="GPT Icon" class="row-icon" />
     <span class="row-text">Gcash</span>
     <img src="../images/Icons/Seabank.png" alt="GPT Icon" class="row-icon" />
     <span class="row-text">Sea Bank</span>
    </div>
    <div class="col col-action">
     <button class="action-btn"><img src="../images/Icons/action-btn.png" alt=""></button>
    </div>
   </div>

  </div>
 </div>
</section>