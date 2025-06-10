<?php $currentPage = "Create Orders" ?>
<?php $page_style = "order.css" ?>
<?php include './includes/top-bar.php' ?>

<!-- search input -->
<section class="search-container">
 <div class="tab-container">
  <ul>
   <li class="tab-list active">Recent Transaction</li>
   <li class="tab-list">Expiring Soon</li>
  </ul>
 </div>
 <div class="search-input">
  <input placeholder="Search" type="text" name="serach" id="">
  <i class="fa-solid fa-magnifying-glass"></i>
 </div>
 <button class="add-product create-order-btn" name="add-product"><i class="fa-solid fa-plus"></i> Add Order</button>
</section>


<!-- create-order-section.html -->
<section class="c-order-section recent-order active">
 <div class="c-order-table">
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

<section class="c-order-section expiring-soon ">
 <div class="orders-container">
  <!-- Table Header (10 columns) -->
  <div class="orders-header">
   <div class="product-col">Product Name</div>
   <div class="duration-col">Duration</div>
   <div class="price-col">Price</div>
   <div class="end-col">End</div>
   <div class="customer-col">Customer Name</div>
   <div class="notice-col">Notice</div>
   <div class="renew-col">Renew</div>
   <div class="account-col">Account</div>
   <div class="message-col">Message Link</div>
   <div class="action-col">Action</div>
  </div>

  <!-- Scrollable Body with Rows -->
  <div class="orders-body">
   <!-- Row 1 -->
   <div class="orders-row">
    <div class="product-col">
     <img src="../images/Icons/chat-gpt.png" alt="GPT Icon" class="row-icon" />
     <span class="row-text">GPT</span>
    </div>
    <div class="duration-col">3 mos</div>
    <div class="price-col">₱499</div>
    <div class="end-col">
     <span class="tag-expiring">Aug 25 2025</span>
    </div>
    <div class="customer-col">Brian Pable Sumayan</div>
    <div class="notice-col">
     <input type="checkbox" />
    </div>
    <div class="renew-col">
     <input type="checkbox" />
    </div>
    <div class="account-col">chatgpteams11@proto.me</div>
    <div class="message-col">
     <a href="https://business.facebook.com/..." target="_blank">
      https://business.fac...
     </a>
    </div>
    <div class="action-col">
     <button class="action-btn">
      <img src="../images/Icons/action-btn.png" alt="⋮" />
     </button>
    </div>
   </div>

   <!-- Row 2 -->
   <div class="orders-row">
    <div class="product-col">
     <img src="../images/Icons/netflix.png" alt="Netflix Icon" class="row-icon" />
     <span class="row-text">Netflix</span>
    </div>
    <div class="duration-col">3 mos</div>
    <div class="price-col">₱499</div>
    <div class="end-col">
     <span class="tag-expiring">Aug 25 2025</span>
    </div>
    <div class="customer-col">Brian Pable Sumayan</div>
    <div class="notice-col">
     <input type="checkbox" />
    </div>
    <div class="renew-col">
     <input type="checkbox" />
    </div>
    <div class="account-col">dmdigitalservices@proton.me</div>
    <div class="message-col">
     <a href="https://business.facebook.com/..." target="_blank">
      https://business.fac...
     </a>
    </div>
    <div class="action-col">
     <button class="action-btn">
      <img src="../images/Icons/action-btn.png" alt="⋮" />
     </button>
    </div>
   </div>

   <!-- Row 3 -->
   <div class="orders-row">
    <div class="product-col">
     <img src="../images/Icons/grammarly.png" alt="Grammarly Icon" class="row-icon" />
     <span class="row-text">Grammarly</span>
    </div>
    <div class="duration-col">3 mos</div>
    <div class="price-col">₱499</div>
    <div class="end-col">
     <span class="tag-expiring">Aug 25 2025</span>
    </div>
    <div class="customer-col">Brian Pable Sumayan</div>
    <div class="notice-col">
     <input type="checkbox" />
    </div>
    <div class="renew-col">
     <input type="checkbox" />
    </div>
    <div class="account-col">chatgpteams11@proto.me</div>
    <div class="message-col">
     <a href="https://business.facebook.com/..." target="_blank">
      https://business.fac...
     </a>
    </div>
    <div class="action-col">
     <button class="action-btn">
      <img src="../images/Icons/action-btn.png" alt="⋮" />
     </button>
    </div>
   </div>

   <!-- Row 4 -->
   <div class="orders-row">
    <div class="product-col">
     <img src="../images/Icons/canva.png" alt="Canva Icon" class="row-icon" />
     <span class="row-text">Canva</span>
    </div>
    <div class="duration-col">3 mos</div>
    <div class="price-col">₱499</div>
    <div class="end-col">
     <span class="tag-expiring">Aug 25 2025</span>
    </div>
    <div class="customer-col">Brian Pable Sumayan</div>
    <div class="notice-col">
     <input type="checkbox" />
    </div>
    <div class="renew-col">
     <input type="checkbox" />
    </div>
    <div class="account-col">dmdigitalservices@proton.me</div>
    <div class="message-col">
     <a href="https://business.facebook.com/..." target="_blank">
      https://business.fac...
     </a>
    </div>
    <div class="action-col">
     <button class="action-btn">
      <img src="../images/Icons/action-btn.png" alt="⋮" />
     </button>
    </div>
   </div>

   <!-- Row 5 -->
   <div class="orders-row">
    <div class="product-col">
     <img src="../images/Icons/chat-gpt.png" alt="GPT Icon" class="row-icon" />
     <span class="row-text">GPT</span>
    </div>
    <div class="duration-col">3 mos</div>
    <div class="price-col">₱499</div>
    <div class="end-col">
     <span class="tag-expiring">Aug 25 2025</span>
    </div>
    <div class="customer-col">Brian Pable Sumayan</div>
    <div class="notice-col">
     <input type="checkbox" />
    </div>
    <div class="renew-col">
     <input type="checkbox" />
    </div>
    <div class="account-col">chatgpteams11@proto.me</div>
    <div class="message-col">
     <a href="https://business.facebook.com/..." target="_blank">
      https://business.fac...
     </a>
    </div>
    <div class="action-col">
     <button class="action-btn">
      <img src="../images/Icons/action-btn.png" alt="⋮" />
     </button>
    </div>
   </div>

   <!-- Row 6 -->
   <div class="orders-row">
    <div class="product-col">
     <img src="../images/Icons/netflix.png" alt="Netflix Icon" class="row-icon" />
     <span class="row-text">Netflix</span>
    </div>
    <div class="duration-col">3 mos</div>
    <div class="price-col">₱499</div>
    <div class="end-col">
     <span class="tag-expiring">Aug 25 2025</span>
    </div>
    <div class="customer-col">Brian Pable Sumayan</div>
    <div class="notice-col">
     <input type="checkbox" />
    </div>
    <div class="renew-col">
     <input type="checkbox" />
    </div>
    <div class="account-col">dmdigitalservices@proton.me</div>
    <div class="message-col">
     <a href="https://business.facebook.com/..." target="_blank">
      https://business.fac...
     </a>
    </div>
    <div class="action-col">
     <button class="action-btn">
      <img src="../images/Icons/action-btn.png" alt="⋮" />
     </button>
    </div>
   </div>
  </div>
 </div>
</section>

<script type="module" src="./assets/javascript/create-order.js"></script>