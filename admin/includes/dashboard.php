<?php $currentPage = "Dashboard" ?>
<?php include 'top-bar.php' ?>

<div class="d-flex gap-3 mb-3 flex-wrap justify-content-between">
 <div class="card-value">
  <img src="../images/Icons/Money.png" alt="">
  <div class="card-container">
   <small>Capital</small>
   <span class="info">
    ₱ 6,435.00
    <span class="graph-info">
     <img src="../images/Icons/Arrow_up.png" alt="">
     +500
    </span>
   </span>
  </div>
 </div>

 <div class="card-value">
  <img src="../images/Icons/Money.png" alt="">
  <div class="card-container">
   <small>Total Revenue</small>
   <span class="info">
    ₱ 6,435.00
    <span class="graph-info">
     <img src="../images/Icons/Arrow_up.png" alt="">
     +500
    </span>
   </span>
  </div>
 </div>

 <div class="card-value">
  <img src="../images/Icons/Money.png" alt="">
  <div class="card-container">
   <small>Total Profit</small>
   <span class="info">
    ₱ 6,435.00
    <span class="graph-info">
     <img src="../images/Icons/Arrow_up.png" alt="">
     +500
    </span>
   </span>
  </div>
 </div>

 <div class="card-value">
  <img src="../images/Icons/Money.png" alt="">
  <div class="card-container">
   <small>Total Customer</small>
   <span class="info">
    ₱ 6,435.00
    <span class="graph-info">
     <img src="../images/Icons/Arrow_up.png" alt="">
     +500
    </span>
   </span>
  </div>
 </div>

 <div class="card-value">
  <img src="../images/Icons/Money.png" alt="">
  <div class="card-container">
   <small>Gross Income</small>
   <span class="info">
    ₱ 6,435.00
    <span class="graph-info">
     <img src="../images/Icons/Arrow_up.png" alt="">
     +500
    </span>
   </span>
  </div>
 </div>
</div>

<div id="chart_container">
 <div id="chart_div"></div>
</div>

<section class="dashboard-tables">
 <div class="table-card">
  <h2>Expiring Soon</h2>
  <div class="table-wrapper">
   <table>
    <thead>
     <tr>
      <th>Customer Name</th>
      <th>End</th>
      <th>Product</th>
      <th>Duration</th>
      <th>Agent</th>
     </tr>
    </thead>
    <tbody>
     <tr>
      <td>Brian Pable Sumayan</td>
      <td><span class="tag tag-expiring">May 30 2025</span></td>
      <td>GPT</td>
      <td>3 mo</td>
      <td><span class="agent-badge agent-princes">princes</span></td>
     </tr>
     <tr>
      <td>Princes Sumayan</td>
      <td><span class="tag tag-expiring">May 30 2025</span></td>
      <td>GPT</td>
      <td>3 mo</td>
      <td><span class="agent-badge agent-princes">princes</span></td>
     </tr>
     <tr>
      <td>Princes Sumayan</td>
      <td><span class="tag tag-warning">May 31 2025</span></td>
      <td>GPT</td>
      <td>3 mo</td>
      <td><span class="agent-badge agent-princes">princes</span></td>
     </tr>
     <tr>
      <td>Brian Pable Sumayan</td>
      <td><span class="tag tag-expiring">May 30 2025</span></td>
      <td>GPT</td>
      <td>3 mo</td>
      <td><span class="agent-badge agent-princes">princes</span></td>
     </tr>
     <tr>
      <td>Princes Sumayan</td>
      <td><span class="tag tag-expiring">May 30 2025</span></td>
      <td>GPT</td>
      <td>3 mo</td>
      <td><span class="agent-badge agent-princes">princes</span></td>
     </tr>
     <tr>
      <td>Princes Sumayan</td>
      <td><span class="tag tag-warning">May 31 2025</span></td>
      <td>GPT</td>
      <td>3 mo</td>
      <td><span class="agent-badge agent-princes">princes</span></td>
     </tr>
     <tr>
      <td>Brian Pable Sumayan</td>
      <td><span class="tag tag-expiring">May 30 2025</span></td>
      <td>GPT</td>
      <td>3 mo</td>
      <td><span class="agent-badge agent-princes">princes</span></td>
     </tr>
     <tr>
      <td>Princes Sumayan</td>
      <td><span class="tag tag-expiring">May 30 2025</span></td>
      <td>GPT</td>
      <td>3 mo</td>
      <td><span class="agent-badge agent-princes">princes</span></td>
     </tr>
     <tr>
      <td>Princes Sumayan</td>
      <td><span class="tag tag-warning">May 31 2025</span></td>
      <td>GPT</td>
      <td>3 mo</td>
      <td><span class="agent-badge agent-princes">princes</span></td>
     </tr>
    </tbody>
   </table>
  </div>
 </div>

 <div class="table-card">
  <h2>Recent Transaction</h2>
  <div class="table-wrapper">
   <table>
    <thead>
     <tr>
      <th>Customer Name</th>
      <th>End</th>
      <th>Product</th>
      <th>Duration</th>
      <th>Agent</th>
     </tr>
    </thead>
    <tbody>
     <tr>
      <td>Brian Pable Sumayan</td>
      <td><span class="tag tag-recent">May 30 2025</span></td>
      <td>GPT</td>
      <td>3 mo</td>
      <td><span class="agent-badge agent-princes">princes</span></td>
     </tr>
     <tr>
      <td>Princes Sumayan</td>
      <td><span class="tag tag-recent">May 30 2025</span></td>
      <td>GPT</td>
      <td>3 mo</td>
      <td><span class="agent-badge agent-dindin">dindin</span></td>
     </tr>
     <tr>
      <td>Princes Sumayan</td>
      <td><span class="tag tag-recent">May 30 2025</span></td>
      <td>GPT</td>
      <td>3 mo</td>
      <td><span class="agent-badge agent-micah">micah</span></td>
     </tr>

     <tr>
      <td>Brian Pable Sumayan</td>
      <td><span class="tag tag-recent">May 30 2025</span></td>
      <td>GPT</td>
      <td>3 mo</td>
      <td><span class="agent-badge agent-brian">brian</span></td>
     </tr>
     <tr>
      <td>Princes Sumayan</td>
      <td><span class="tag tag-recent">May 30 2025</span></td>
      <td>GPT</td>
      <td>3 mo</td>
      <td><span class="agent-badge agent-louie">louie</span></td>
     </tr>
     <tr>
      <td>Princes Sumayan</td>
      <td><span class="tag tag-recent">May 30 2025</span></td>
      <td>GPT</td>
      <td>3 mo</td>
      <td><span class="agent-badge agent-ysh">ysh</span></td>
     </tr>
     <tr>
      <td>Brian Pable Sumayan</td>
      <td><span class="tag tag-recent">May 30 2025</span></td>
      <td>GPT</td>
      <td>3 mo</td>
      <td><span class="agent-badge agent-princes">princes</span></td>
     </tr>
     <tr>
      <td>Princes Sumayan</td>
      <td><span class="tag tag-recent">May 30 2025</span></td>
      <td>GPT</td>
      <td>3 mo</td>
      <td><span class="agent-badge agent-princes">princes</span></td>
     </tr>
     <tr>
      <td>Princes Sumayan</td>
      <td><span class="tag tag-recent">May 30 2025</span></td>
      <td>GPT</td>
      <td>3 mo</td>
      <td><span class="agent-badge agent-princes">princes</span></td>
     </tr>
     <tr>
      <td>Brian Pable Sumayan</td>
      <td><span class="tag tag-recent">May 30 2025</span></td>
      <td>GPT</td>
      <td>3 mo</td>
      <td><span class="agent-badge agent-princes">princes</span></td>
     </tr>
     <tr>
      <td>Princes Sumayan</td>
      <td><span class="tag tag-recent">May 30 2025</span></td>
      <td>GPT</td>
      <td>3 mo</td>
      <td><span class="agent-badge agent-princes">princes</span></td>
     </tr>
     <tr>
      <td>Princes Sumayan</td>
      <td><span class="tag tag-recent">May 30 2025</span></td>
      <td>GPT</td>
      <td>3 mo</td>
      <td><span class="agent-badge agent-princes">princes</span></td>
     </tr>
    </tbody>
   </table>
  </div>
 </div>
</section>

<script src="./assets/javascript/dashboard.js"></script>