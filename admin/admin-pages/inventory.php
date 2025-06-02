<?php $currentPage = "Inventory" ?>
<?php include './includes/top-bar.php' ?>

<section class="search-container">
 <div class="search-input">
  <input placeholder="Search" type="text" name="serach" id="">
  <i class="fa-solid fa-magnifying-glass"></i>
 </div>
 <button class="add-product" name="add-product"><i class="fa-solid fa-plus"></i> Add Product</button>
</section>

<!-- inventory-product-section.html -->
<section class="inventory-section">
 <div class="inventory-table">
  <!-- Table Header -->
  <div class="inventory-header">
   <div class="col product">Product Name</div>
   <div class="col duration">Duration</div>
   <div class="col stock">Stock</div>
   <div class="col price">Price</div>
   <div class="col status">Status</div>
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
    <div class="col stock">99999</div>
    <div class="col price">₱100</div>
    <div class="col status">
     <span class="tag">In stock</span>
    </div>
    <div class="col action">
     <button class="action-btn"><img src="../images/Icons/action-btn.png" alt=""></button>
    </div>
   </div>

   <!-- Row 2 -->
   <div class="inventory-row">
    <div class="col product">
     <img src="../images/Icons/chat-gpt.png" alt="GPT Icon" class="product-icon" />
     <span class="product-name">GPT</span>
    </div>
    <div class="col duration">1 mo</div>
    <div class="col stock">5555555</div>
    <div class="col price">₱199</div>
    <div class="col status">
     <span class="tag tag-warning">Low stock</span>
    </div>
    <div class="col action">
     <button class="action-btn"><img src="../images/Icons/action-btn.png" alt=""></button>
    </div>
   </div>

   <!-- Row 3 -->
   <div class="inventory-row">
    <div class="col product">
     <img src="../images/Icons/chat-gpt.png" alt="GPT Icon" class="product-icon" />
     <span class="product-name">GPT</span>
    </div>
    <div class="col duration">2 mos</div>
    <div class="col stock">5555555</div>
    <div class="col price">₱399</div>
    <div class="col status">
     <span class="tag tag-warning">Low stock</span>
    </div>
    <div class="col action">
     <button class="action-btn"><img src="../images/Icons/action-btn.png" alt=""></button>
    </div>
   </div>

   <!-- Row 4 -->
   <div class="inventory-row">
    <div class="col product">
     <img src="../images/Icons/chat-gpt.png" alt="GPT Icon" class="product-icon" />
     <span class="product-name">GPT</span>
    </div>
    <div class="col duration">3 mos</div>
    <div class="col stock">5555555</div>
    <div class="col price">₱499</div>
    <div class="col status">
     <span class="tag tag-expiring">Out of stock</span>
    </div>
    <div class="col action">
     <button class="action-btn"><img src="../images/Icons/action-btn.png" alt=""></button>
    </div>
   </div>

   <!-- Row 5 -->
   <div class="inventory-row">
    <div class="col product">
     <img src="../images/Icons/netflix.png" alt="Netflix Icon" class="product-icon" />
     <span class="product-name">Netflix</span>
    </div>
    <div class="col duration">1 mo</div>
    <div class="col stock">99999</div>
    <div class="col price">₱100</div>
    <div class="col status">
     <span class="tag">In stock</span>
    </div>
    <div class="col action">
     <button class="action-btn"><img src="../images/Icons/action-btn.png" alt=""></button>
    </div>
   </div>

   <!-- Row 6 (Example placeholder) -->
   <div class="inventory-row">
    <div class="col product">
     <img src="../images/Icons/grammarly.png" alt="Placeholder Icon" class="product-icon" />
     <span class="product-name">Product 6</span>
    </div>
    <div class="col duration">—</div>
    <div class="col stock">—</div>
    <div class="col price">—</div>
    <div class="col status">
     <span class="tag">In stock</span>
    </div>
    <div class="col action">
     <button class="action-btn"><img src="../images/Icons/action-btn.png" alt=""></button>
    </div>
   </div>

   <!-- Row 7 (Example placeholder) -->
   <div class="inventory-row">
    <div class="col product">
     <img src="../images/Icons/grammarly.png" alt="Placeholder Icon" class="product-icon" />
     <span class="product-name">Product 7</span>
    </div>
    <div class="col duration">—</div>
    <div class="col stock">—</div>
    <div class="col price">—</div>
    <div class="col status">
     <span class="tag tag-warning">Low stock</span>
    </div>
    <div class="col action">
     <button class="action-btn"><img src="../images/Icons/action-btn.png" alt=""></button>
    </div>
   </div>

   <!-- Row 8 (Example placeholder) -->
   <div class="inventory-row">
    <div class="col product">
     <img src="../images/Icons/grammarly.png" alt="Placeholder Icon" class="product-icon" />
     <span class="product-name">Product 8</span>
    </div>
    <div class="col duration">—</div>
    <div class="col stock">—</div>
    <div class="col price">—</div>
    <div class="col status">
     <span class="tag tag-expiring">Out of stock</span>
    </div>
    <div class="col action">
     <button class="action-btn"><img src="../images/Icons/action-btn.png" alt=""></button>
    </div>
   </div>

   <!-- Row 9 (Example placeholder) -->
   <div class="inventory-row">
    <div class="col product">
     <img src="../images/Icons/grammarly.png" alt="Placeholder Icon" class="product-icon" />
     <span class="product-name">Product 9</span>
    </div>
    <div class="col duration">—</div>
    <div class="col stock">—</div>
    <div class="col price">—</div>
    <div class="col status">
     <span class="tag">In stock</span>
    </div>
    <div class="col action">
     <button class="action-btn"><img src="../images/Icons/action-btn.png" alt=""></button>
    </div>
   </div>

   <!-- Row 10 (Example placeholder) -->
   <div class="inventory-row">
    <div class="col product">
     <img src="../images/Icons/grammarly.png" alt="Placeholder Icon" class="product-icon" />
     <span class="product-name">Product 10</span>
    </div>
    <div class="col duration">—</div>
    <div class="col stock">—</div>
    <div class="col price">—</div>
    <div class="col status">
     <span class="tag tag-warning">Low stock</span>
    </div>
    <div class="col action">
     <button class="action-btn"><img src="../images/Icons/action-btn.png" alt=""></button>
    </div>
   </div>
  </div>
 </div>
</section>



<!-- inventory-account-section.html -->

<section class="search-container">
 <div class="search-input">
  <input placeholder="Search" type="text" name="serach" id="">
  <i class="fa-solid fa-magnifying-glass"></i>
 </div>
 <button class="add-product" name="add-product"><i class="fa-solid fa-plus"></i> Add Account</button>
</section>

<section class="inventory-section">
 <div class="inventory-table">
  <!-- Table Header -->
  <div class="inventory-header">
   <div class="col product">Account</div>
   <div class="col duration">Phrase</div>
   <div class="col stock">Category</div>
   <div class="col price">Start date</div>
   <div class="col status">End date</div>
   <div class="col action">Action</div>
  </div>

  <!-- Scrollable Body with 10 Rows -->
  <div class="inventory-body">
   <!-- Row 1 -->
   <div class="inventory-row">
    <div class="col product">
     <img src="../images/Icons/canva.png" alt="GPT Icon" class="product-icon" />
     <span class="product-name">Canva account</span>
    </div>
    <div class="col duration">2qwe@#41</div>
    <div class="col stock">99999</div>
    <div class="col price">₱100</div>
    <div class="col status">
     <span class="tag">In stock</span>
    </div>
    <div class="col action">
     <button class="action-btn"><img src="../images/Icons/action-btn.png" alt=""></button>
    </div>
   </div>

   <!-- Row 2 -->
   <div class="inventory-row">
    <div class="col product">
     <img src="../images/Icons/chat-gpt.png" alt="GPT Icon" class="product-icon" />
     <span class="product-name">GPT account</span>
    </div>
    <div class="col duration">123@adw2</div>
    <div class="col stock">5555555</div>
    <div class="col price">₱199</div>
    <div class="col status">
     <span class="tag tag-warning">Low stock</span>
    </div>
    <div class="col action">
     <button class="action-btn"><img src="../images/Icons/action-btn.png" alt=""></button>
    </div>
   </div>
  </div>
 </div>
</section>