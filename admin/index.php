<?php $page_title = "BM Admin Dashboard" ?>
<?php $page_style = "admin-styles.css" ?>
<?php include 'includes/header.php' ?>

<section>
 <div class="d-flex">
  <!-- Sidebar -->
  <aside class="sidebar d-flex flex-column">
   <div class="logo">BM Digital Services</div>
   <nav>
    <h6>Home</h6>
    <a href="#" class="active">Dashboard</a>

    <h6>Sales</h6>
    <a href="#">Inventory</a>
    <a href="#">Create order</a>
    <a href="#">Payment</a>
    <a href="#">Recent sales</a>
    <a href="#">Admin</a>

    <h6>Settings</h6>
    <a href="#">General</a>
   </nav>
  </aside>

  <!-- Main Content -->
  <main class="main-content flex-grow-1">
   <h2 class="mb-4">Dashboard</h2>

   <div class="d-flex gap-3 mb-5 flex-wrap">
    <div class="card-value">
     <small>Capital</small>
     ₱ 6,435.00
    </div>
    <div class="card-value">
     <small>Total revenue</small>
     ₱ 6,435.00
    </div>
    <div class="card-value">
     <small>Total profit</small>
     ₱ 6,435.00
    </div>
    <div class="card-value">
     <small>Total customer</small>
     115
    </div>
    <div class="card-value">
     <small>Gross income</small>
     ₱ 6,435.00
    </div>
   </div>

   <section class="table-section">
    <h5>Expiring Soon</h5>
    <div class="table-responsive">
     <table class="table table-borderless">
      <thead>
       <tr>
        <th>Customer</th>
        <th>Order date</th>
        <th>Status</th>
        <th>Product</th>
        <th>Price</th>
        <th>Duration</th>
        <th>Agent</th>
        <th>Account use</th>
       </tr>
      </thead>
      <tbody>
       <tr>
        <td>Brian Pable Sumayan</td>
        <td>March 14 2025</td>
        <td><span class="status-badge status-red">End in 1 day</span></td>
        <td>GPT</td>
        <td>499</td>
        <td>3 months</td>
        <td>Micah</td>
        <td>bmdigitalservices@...</td>
       </tr>
       <tr>
        <td>Micah Tolitol</td>
        <td>March 14 2025</td>
        <td><span class="status-badge status-red">End in 2 days</span></td>
        <td>GPT</td>
        <td>499</td>
        <td>3 months</td>
        <td>Brian</td>
        <td>bmdigitalservices@...</td>
       </tr>
       <tr>
        <td>Micah Tolitol</td>
        <td>March 14 2025</td>
        <td><span class="status-badge status-orange">End in 12 days</span></td>
        <td>GPT</td>
        <td>499</td>
        <td>3 months</td>
        <td>Brian</td>
        <td>bmdigitalservices@...</td>
       </tr>
      </tbody>
     </table>
    </div>
   </section>

   <!-- Duplicate section example, just remove if needed -->
   <section class="table-section">
    <h5>Expiring Soon</h5>
    <div class="table-responsive">
     <table class="table table-borderless">
      <thead>
       <tr>
        <th>Customer</th>
        <th>Order date</th>
        <th>Status</th>
        <th>Product</th>
        <th>Price</th>
        <th>Duration</th>
        <th>Agent</th>
        <th>Account use</th>
       </tr>
      </thead>
      <tbody>
       <tr>
        <td>Brian Pable Sumayan</td>
        <td>March 14 2025</td>
        <td><span class="status-badge status-red">End in 1 day</span></td>
        <td>GPT</td>
        <td>499</td>
        <td>3 months</td>
        <td>Micah</td>
        <td>bmdigitalservices@...</td>
       </tr>
       <tr>
        <td>Micah Tolitol</td>
        <td>March 14 2025</td>
        <td><span class="status-badge status-red">End in 2 days</span></td>
        <td>GPT</td>
        <td>499</td>
        <td>3 months</td>
        <td>Brian</td>
        <td>bmdigitalservices@...</td>
       </tr>
       <tr>
        <td>Micah Tolitol</td>
        <td>March 14 2025</td>
        <td><span class="status-badge status-orange">End in 12 days</span></td>
        <td>GPT</td>
        <td>499</td>
        <td>3 months</td>
        <td>Brian</td>
        <td>bmdigitalservices@...</td>
       </tr>
      </tbody>
     </table>
    </div>
   </section>
  </main>
 </div>
</section>


<?php include 'includes/footer.php' ?>