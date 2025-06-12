<?php $currentPage = "Finance" ?>
<?php include './includes/top-bar.php' ?>

<!-- search input -->
<section class="search-container">
 <div class="tab-container">
  <ul>
   <li class="tab-list active">Financial Ledger</li>
   <li class="tab-list">Transaction Summary</li>
  </ul>
 </div>
 <div class="search-input">
  <input placeholder="Search" type="text" name="serach" id="">
  <i class="fa-solid fa-magnifying-glass"></i>
 </div>
 <button class="add-product" name="add-product"><i class="fa-solid fa-plus"></i> Add Capital</button>
</section>


<!-- finance-section.html -->
<section class="c-order-section finance f-ledger active">
 <div class="c-order-table">
  <div class="c-order-header finance-header">
   <div class="col col-product">Capital</div>
   <div class="col col-agent">Total Revenue</div>
   <div class="col col-mop">Total Profit</div>
   <div class="col col-duration">Gross Income</div>
   <div class="col col-price f-ledger-date">Date</div>
   <div class="col col-start">Product Name</div>
   <div class="col col-end">Duration</div>
   <div class="col col-action">Action</div>
  </div>

  <div class="c-order-body">
   <!-- Row 1 -->
   <div class="c-order-row finance-row">
    <div class="col col-product">
     <span class="row-text">₱123</span>
    </div>
    <div class="col col-agent">
     <span>₱123</span>
    </div>
    <div class="col col-mop">₱123</div>
    <div class="col col-duration">₱123</div>
    <div class="col col-start f-ledger-date">
     <span class="tag tag-recent">May 25 2025</span>
    </div>
    <div class="product-col f-ledger-items">
     <img src="../images/Icons/chat-gpt.png" alt="GPT Icon" class="row-icon" />
     <span class="row-text">GPT</span>
    </div>

    <div class="col col-duration" style="justify-self: center;">3 mos</div>
    <div class="col col-action">
     <button class="action-btn"><img src="../images/Icons/action-btn.png" alt=""></button>
    </div>
   </div>

  </div>
 </div>
</section>

<section class="c-order-section finance f-summary">
 <div class="c-order-table">
  <div class="c-order-header finance-header f-summary-header">
   <div class="col col-product">Product</div>
   <div class="col col-agent">Amount</div>
   <div class="col col-mop">Duration</div>
   <div class="col col-duration t-summary-stat">Start</div>
   <div class="col col-price t-summary-stat">End</div>
   <div class="col col-action">Action</div>
  </div>

  <div class="c-order-body">
   <!-- Row 1 -->
   <div class="c-order-row finance-row f-summary-row">
    <div class="product-col">
     <img src="../images/Icons/chat-gpt.png" alt="GPT Icon" class="row-icon" />
     <span class="row-text">GPT</span>
    </div>
    <div class="col col-agent">
     <span>₱123</span>
    </div>
    <div class="col col-mop">3 mos</div>
    <div class="col col-start t-summary">
     <span class="tag tag-recent">May 25 2025</span>
    </div>
    <div class="col col-start t-summary">
     <span class="tag tag-expiring">May 25 2025</span>
    </div>


    <div class="col col-action">
     <button class="action-btn"><img src="../images/Icons/action-btn.png" alt=""></button>
    </div>
   </div>
   <!-- Row 2 -->
   <div class="c-order-row finance-row f-summary-row">
    <div class="product-col">
     <img src="../images/Icons/chat-gpt.png" alt="GPT Icon" class="row-icon" />
     <span class="row-text">GPT</span>
    </div>
    <div class="col col-agent">
     <span>₱123</span>
    </div>
    <div class="col col-mop">3 mos</div>
    <div class="col col-start t-summary">
     <span class="tag tag-recent">May 25 2025</span>
    </div>
    <div class="col col-start t-summary">
     <span class="tag tag-expiring">May 25 2025</span>
    </div>


    <div class="col col-action">
     <button class="action-btn"><img src="../images/Icons/action-btn.png" alt=""></button>
    </div>
   </div>
   <!-- Row 3-->
   <div class="c-order-row finance-row f-summary-row">
    <div class="product-col">
     <img src="../images/Icons/chat-gpt.png" alt="GPT Icon" class="row-icon" />
     <span class="row-text">GPT</span>
    </div>
    <div class="col col-agent">
     <span>₱123</span>
    </div>
    <div class="col col-mop">3 mos</div>
    <div class="col col-start t-summary">
     <span class="tag tag-recent">May 25 2025</span>
    </div>
    <div class="col col-start t-summary">
     <span class="tag tag-expiring">May 25 2025</span>
    </div>
    <div class="col col-action">
     <button class="action-btn"><img src="../images/Icons/action-btn.png" alt=""></button>
    </div>
   </div>

  </div>
 </div>
</section>

<script type="module" src="./assets/javascript/finance.js"></script>