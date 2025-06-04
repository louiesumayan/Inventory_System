<?php $currentPage = "Create Orders" ?>
<?php include './includes/top-bar.php' ?>

<!-- search input -->
<section class="search-container">
 <div class="tab-container">
  <ul>
   <li class="tab-list active">Recent Transaction</li>
   <li class="tab-list ">Expiring Soon</li>
  </ul>
 </div>
 <div class="search-input">
  <input placeholder="Search" type="text" name="serach" id="">
  <i class="fa-solid fa-magnifying-glass"></i>
 </div>
 <button class="add-product" name="add-product"><i class="fa-solid fa-plus"></i> Add Product</button>
</section>


<!-- create-order-section.html -->
<section class="c-order-section">
 <div class="c-order-table">
  <!-- Table Header (10 columns) -->
  <div class="c-order-header">
   <div class="col col-product">Product Name</div>
   <div class="col col-agent">Agent</div>
   <div class="col col-mop">MOP</div>
   <div class="col col-duration">Duration</div>
   <div class="col col-price">Price</div>
   <div class="col col-start">Start</div>
   <div class="col col-end">End</div>
   <div class="col col-customer">Customer Name</div>
   <div class="col col-action">Action</div>
  </div>

  <!-- Scrollable Body with 10 Rows -->
  <div class="c-order-body">
   <!-- Row 1 -->
   <div class="c-order-row">
    <div class="col col-product">
     <img src="../images/Icons/chat-gpt.png" alt="GPT Icon" class="row-icon" />
     <span class="row-text">GPT</span>
    </div>
    <div class="col col-agent">
     <span class="agent-badge agent-micah">micah</span>
    </div>
    <div class="col col-mop">GCash</div>
    <div class="col col-duration">3 mos</div>
    <div class="col col-price">₱499</div>
    <div class="col col-start">
     <span class="tag tag-recent">May 25 2025</span>
    </div>
    <div class="col col-end">
     <span class="tag tag-expiring">Aug 25 2025</span>
    </div>
    <div class="col col-customer">Brian Pable Sumayan</div>
    <div class="col col-action">
     <button class="action-btn"><img src="../images/Icons/action-btn.png" alt=""></button>
    </div>
   </div>

   <!-- Row 2 -->
   <div class="c-order-row">
    <div class="col col-product">
     <img src="../images/Icons/canva.png" alt="GPT Icon" class="row-icon" />
     <span class="row-text">GPT</span>
    </div>
    <div class="col col-agent">
     <span class="agent-badge agent-princes">princes</span>
    </div>
    <div class="col col-mop">GCash</div>
    <div class="col col-duration">3 mos</div>
    <div class="col col-price">₱499</div>
    <div class="col col-start">
     <span class="tag tag-recent">May 25 2025</span>
    </div>
    <div class="col col-end">
     <span class="tag tag-expiring">Aug 25 2025</span>
    </div>
    <div class="col col-customer">Brian Pable Sumayan</div>
    <div class="col col-action">
     <button class="action-btn"><img src="../images/Icons/action-btn.png" alt=""></button>
    </div>
   </div>

   <!-- Row 3 -->
   <div class="c-order-row">
    <div class="col col-product">
     <img src="../images/Icons/netflix.png" alt="GPT Icon" class="row-icon" />
     <span class="row-text">GPT</span>
    </div>
    <div class="col col-agent">
     <span class="agent-badge agent-dindin">dindin</span>
    </div>
    <div class="col col-mop">GCash</div>
    <div class="col col-duration">3 mos</div>
    <div class="col col-price">₱499</div>
    <div class="col col-start">
     <span class="tag tag-recent">May 25 2025</span>
    </div>
    <div class="col col-end">
     <span class="tag tag-expiring">Aug 25 2025</span>
    </div>
    <div class="col col-customer">Brian Pable Sumayan</div>
    <div class="col col-action">
     <button class="action-btn"><img src="../images/Icons/action-btn.png" alt=""></button>
    </div>
   </div>

   <!-- Row 4 -->
   <div class="c-order-row">
    <div class="col col-product">
     <img src="../images/Icons/netflix.png" alt="GPT Icon" class="row-icon" />
     <span class="row-text">GPT</span>
    </div>
    <div class="col col-agent">
     <span class="agent-badge agent-brian">Brian</span>
    </div>
    <div class="col col-mop">GCash</div>
    <div class="col col-duration">3 mos</div>
    <div class="col col-price">₱499</div>
    <div class="col col-start">
     <span class="tag tag-recent">May 25 2025</span>
    </div>
    <div class="col col-end">
     <span class="tag tag-expiring">Aug 25 2025</span>
    </div>
    <div class="col col-customer">Brian Pable Sumayan</div>
    <div class="col col-action">
     <button class="action-btn"><img src="../images/Icons/action-btn.png" alt=""></button>
    </div>
   </div>

   <!-- Row 5 -->
   <div class="c-order-row">
    <div class="col col-product">
     <img src="../images/Icons/grammarly.png" alt="GPT Icon" class="row-icon" />
     <span class="row-text">GPT</span>
    </div>
    <div class="col col-agent">
     <span class="agent-badge agent-louie">Louie</span>
    </div>
    <div class="col col-mop">GCash</div>
    <div class="col col-duration">3 mos</div>
    <div class="col col-price">₱499</div>
    <div class="col col-start">
     <span class="tag tag-recent">May 25 2025</span>
    </div>
    <div class="col col-end">
     <span class="tag tag-expiring">Aug 25 2025</span>
    </div>
    <div class="col col-customer">Brian Pable Sumayan</div>
    <div class="col col-action">
     <button class="action-btn"><img src="../images/Icons/action-btn.png" alt=""></button>
    </div>
   </div>

   <!-- Row 6 -->
   <div class="c-order-row">
    <div class="col col-product">
     <img src="../images/Icons/netflix.png" alt="GPT Icon" class="row-icon" />
     <span class="row-text">GPT</span>
    </div>
    <div class="col col-agent">
     <span class="agent-badge agent-ysh">Ysh</span>
    </div>
    <div class="col col-mop">GCash</div>
    <div class="col col-duration">3 mos</div>
    <div class="col col-price">₱499</div>
    <div class="col col-start">
     <span class="tag tag-recent">May 25 2025</span>
    </div>
    <div class="col col-end">
     <span class="tag tag-expiring">Aug 25 2025</span>
    </div>
    <div class="col col-customer">Brian Pable Sumayan</div>
    <div class="col col-action">
     <button class="action-btn"><img src="../images/Icons/action-btn.png" alt=""></button>
    </div>
   </div>

   <!-- Row 1 -->
   <div class="c-order-row">
    <div class="col col-product">
     <img src="../images/Icons/chat-gpt.png" alt="GPT Icon" class="row-icon" />
     <span class="row-text">GPT</span>
    </div>
    <div class="col col-agent">
     <span class="agent-badge agent-micah">micah</span>
    </div>
    <div class="col col-mop">GCash</div>
    <div class="col col-duration">3 mos</div>
    <div class="col col-price">₱499</div>
    <div class="col col-start">
     <span class="tag tag-recent">May 25 2025</span>
    </div>
    <div class="col col-end">
     <span class="tag tag-expiring">Aug 25 2025</span>
    </div>
    <div class="col col-customer">Brian Pable Sumayan</div>
    <div class="col col-action">
     <button class="action-btn"><img src="../images/Icons/action-btn.png" alt=""></button>
    </div>
   </div>

   <!-- Row 2 -->
   <div class="c-order-row">
    <div class="col col-product">
     <img src="../images/Icons/canva.png" alt="GPT Icon" class="row-icon" />
     <span class="row-text">GPT</span>
    </div>
    <div class="col col-agent">
     <span class="agent-badge agent-princes">princes</span>
    </div>
    <div class="col col-mop">GCash</div>
    <div class="col col-duration">3 mos</div>
    <div class="col col-price">₱499</div>
    <div class="col col-start">
     <span class="tag tag-recent">May 25 2025</span>
    </div>
    <div class="col col-end">
     <span class="tag tag-expiring">Aug 25 2025</span>
    </div>
    <div class="col col-customer">Brian Pable Sumayan</div>
    <div class="col col-action">
     <button class="action-btn"><img src="../images/Icons/action-btn.png" alt=""></button>
    </div>
   </div>

   <!-- Row 3 -->
   <div class="c-order-row">
    <div class="col col-product">
     <img src="../images/Icons/netflix.png" alt="GPT Icon" class="row-icon" />
     <span class="row-text">GPT</span>
    </div>
    <div class="col col-agent">
     <span class="agent-badge agent-dindin">dindin</span>
    </div>
    <div class="col col-mop">GCash</div>
    <div class="col col-duration">3 mos</div>
    <div class="col col-price">₱499</div>
    <div class="col col-start">
     <span class="tag tag-recent">May 25 2025</span>
    </div>
    <div class="col col-end">
     <span class="tag tag-expiring">Aug 25 2025</span>
    </div>
    <div class="col col-customer">Brian Pable Sumayan</div>
    <div class="col col-action">
     <button class="action-btn"><img src="../images/Icons/action-btn.png" alt=""></button>
    </div>
   </div>

   <!-- Row 4 -->
   <div class="c-order-row">
    <div class="col col-product">
     <img src="../images/Icons/netflix.png" alt="GPT Icon" class="row-icon" />
     <span class="row-text">GPT</span>
    </div>
    <div class="col col-agent">
     <span class="agent-badge agent-brian">Brian</span>
    </div>
    <div class="col col-mop">GCash</div>
    <div class="col col-duration">3 mos</div>
    <div class="col col-price">₱499</div>
    <div class="col col-start">
     <span class="tag tag-recent">May 25 2025</span>
    </div>
    <div class="col col-end">
     <span class="tag tag-expiring">Aug 25 2025</span>
    </div>
    <div class="col col-customer">Brian Pable Sumayan</div>
    <div class="col col-action">
     <button class="action-btn"><img src="../images/Icons/action-btn.png" alt=""></button>
    </div>
   </div>

   <!-- Row 5 -->
   <div class="c-order-row">
    <div class="col col-product">
     <img src="../images/Icons/grammarly.png" alt="GPT Icon" class="row-icon" />
     <span class="row-text">GPT</span>
    </div>
    <div class="col col-agent">
     <span class="agent-badge agent-louie">Louie</span>
    </div>
    <div class="col col-mop">GCash</div>
    <div class="col col-duration">3 mos</div>
    <div class="col col-price">₱499</div>
    <div class="col col-start">
     <span class="tag tag-recent">May 25 2025</span>
    </div>
    <div class="col col-end">
     <span class="tag tag-expiring">Aug 25 2025</span>
    </div>
    <div class="col col-customer">Brian Pable Sumayan</div>
    <div class="col col-action">
     <button class="action-btn"><img src="../images/Icons/action-btn.png" alt=""></button>
    </div>
   </div>

   <!-- Row 6 -->
   <div class="c-order-row">
    <div class="col col-product">
     <img src="../images/Icons/netflix.png" alt="GPT Icon" class="row-icon" />
     <span class="row-text">GPT</span>
    </div>
    <div class="col col-agent">
     <span class="agent-badge agent-ysh">Ysh</span>
    </div>
    <div class="col col-mop">GCash</div>
    <div class="col col-duration">3 mos</div>
    <div class="col col-price">₱499</div>
    <div class="col col-start">
     <span class="tag tag-recent">May 25 2025</span>
    </div>
    <div class="col col-end">
     <span class="tag tag-expiring">Aug 25 2025</span>
    </div>
    <div class="col col-customer">Brian Pable Sumayan</div>
    <div class="col col-action">
     <button class="action-btn"><img src="../images/Icons/action-btn.png" alt=""></button>
    </div>
   </div>
   <!-- Row 1 -->
   <div class="c-order-row">
    <div class="col col-product">
     <img src="../images/Icons/chat-gpt.png" alt="GPT Icon" class="row-icon" />
     <span class="row-text">GPT</span>
    </div>
    <div class="col col-agent">
     <span class="agent-badge agent-micah">micah</span>
    </div>
    <div class="col col-mop">GCash</div>
    <div class="col col-duration">3 mos</div>
    <div class="col col-price">₱499</div>
    <div class="col col-start">
     <span class="tag tag-recent">May 25 2025</span>
    </div>
    <div class="col col-end">
     <span class="tag tag-expiring">Aug 25 2025</span>
    </div>
    <div class="col col-customer">Brian Pable Sumayan</div>
    <div class="col col-action">
     <button class="action-btn"><img src="../images/Icons/action-btn.png" alt=""></button>
    </div>
   </div>

   <!-- Row 2 -->
   <div class="c-order-row">
    <div class="col col-product">
     <img src="../images/Icons/canva.png" alt="GPT Icon" class="row-icon" />
     <span class="row-text">GPT</span>
    </div>
    <div class="col col-agent">
     <span class="agent-badge agent-princes">princes</span>
    </div>
    <div class="col col-mop">GCash</div>
    <div class="col col-duration">3 mos</div>
    <div class="col col-price">₱499</div>
    <div class="col col-start">
     <span class="tag tag-recent">May 25 2025</span>
    </div>
    <div class="col col-end">
     <span class="tag tag-expiring">Aug 25 2025</span>
    </div>
    <div class="col col-customer">Brian Pable Sumayan</div>
    <div class="col col-action">
     <button class="action-btn"><img src="../images/Icons/action-btn.png" alt=""></button>
    </div>
   </div>

   <!-- Row 3 -->
   <div class="c-order-row">
    <div class="col col-product">
     <img src="../images/Icons/netflix.png" alt="GPT Icon" class="row-icon" />
     <span class="row-text">GPT</span>
    </div>
    <div class="col col-agent">
     <span class="agent-badge agent-dindin">dindin</span>
    </div>
    <div class="col col-mop">GCash</div>
    <div class="col col-duration">3 mos</div>
    <div class="col col-price">₱499</div>
    <div class="col col-start">
     <span class="tag tag-recent">May 25 2025</span>
    </div>
    <div class="col col-end">
     <span class="tag tag-expiring">Aug 25 2025</span>
    </div>
    <div class="col col-customer">Brian Pable Sumayan</div>
    <div class="col col-action">
     <button class="action-btn"><img src="../images/Icons/action-btn.png" alt=""></button>
    </div>
   </div>

   <!-- Row 4 -->
   <div class="c-order-row">
    <div class="col col-product">
     <img src="../images/Icons/netflix.png" alt="GPT Icon" class="row-icon" />
     <span class="row-text">GPT</span>
    </div>
    <div class="col col-agent">
     <span class="agent-badge agent-brian">Brian</span>
    </div>
    <div class="col col-mop">GCash</div>
    <div class="col col-duration">3 mos</div>
    <div class="col col-price">₱499</div>
    <div class="col col-start">
     <span class="tag tag-recent">May 25 2025</span>
    </div>
    <div class="col col-end">
     <span class="tag tag-expiring">Aug 25 2025</span>
    </div>
    <div class="col col-customer">Brian Pable Sumayan</div>
    <div class="col col-action">
     <button class="action-btn"><img src="../images/Icons/action-btn.png" alt=""></button>
    </div>
   </div>

   <!-- Row 5 -->
   <div class="c-order-row">
    <div class="col col-product">
     <img src="../images/Icons/grammarly.png" alt="GPT Icon" class="row-icon" />
     <span class="row-text">GPT</span>
    </div>
    <div class="col col-agent">
     <span class="agent-badge agent-louie">Louie</span>
    </div>
    <div class="col col-mop">GCash</div>
    <div class="col col-duration">3 mos</div>
    <div class="col col-price">₱499</div>
    <div class="col col-start">
     <span class="tag tag-recent">May 25 2025</span>
    </div>
    <div class="col col-end">
     <span class="tag tag-expiring">Aug 25 2025</span>
    </div>
    <div class="col col-customer">Brian Pable Sumayan</div>
    <div class="col col-action">
     <button class="action-btn"><img src="../images/Icons/action-btn.png" alt=""></button>
    </div>
   </div>

   <!-- Row 6 -->
   <div class="c-order-row">
    <div class="col col-product">
     <img src="../images/Icons/netflix.png" alt="GPT Icon" class="row-icon" />
     <span class="row-text">GPT</span>
    </div>
    <div class="col col-agent">
     <span class="agent-badge agent-ysh">Ysh</span>
    </div>
    <div class="col col-mop">GCash</div>
    <div class="col col-duration">3 mos</div>
    <div class="col col-price">₱499</div>
    <div class="col col-start">
     <span class="tag tag-recent">May 25 2025</span>
    </div>
    <div class="col col-end">
     <span class="tag tag-expiring">Aug 25 2025</span>
    </div>
    <div class="col col-customer">Brian Pable Sumayan</div>
    <div class="col col-action">
     <button class="action-btn"><img src="../images/Icons/action-btn.png" alt=""></button>
    </div>
   </div>

  </div>
 </div>
</section>

<!-- expiring soon -->