<?php $page_title = 'BM Digital Services'; ?>
<?php $page_style = 'style.css'; ?>
<?php include './includes/header.php'; ?>

<div class="content-container">
 <h1>Welcome back!</h1>
 <p>Simplify your workflow and boost your productivity</p>
</div>

<div class="login-container">
 <form action="login.php" method="POST">
  <!-- Username -->
  <label class="form-label" for="username">Username</label>
  <div class="input-group mb-4 username-wrapper">
   <input type="text" id="username" name="username" class="form-control" placeholder="Input Username" required />
   <img src="images/Icons/account.png" class="username-password" />
  </div>

  <!-- Password -->
  <label class="form-label" for="password">Password</label>
  <div class="input-group mb-4 password-wrapper">
   <input type="password" id="password" name="password" class="form-control" placeholder="Input Password" required />
   <img src="images/Icons/Eye_close.png" alt="toggle password" class="toggle-password" id="togglePassword" />
  </div>

  <input type="submit" name="login" value="Login" class="btn btn-login text-white">
 </form>
</div>

<?php include './includes/footer.php' ?>