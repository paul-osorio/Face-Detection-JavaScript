<?php
include('common/header.php')
?>

<div class="vh-100 vw-100 d-flex justify-content-center align-items-center bg-light">
  <form action="" class="bg-white p-3 rounded-3 shadow-sm" style="width: 320px">
    <div class="mb-3">
      <label for="usernameInput" class="form-label">Username</label>
      <input type="text" class="form-control" id="usernameInput" placeholder="Enter your username">
    </div>
    <div class="mb-3">
      <label for="passwordInput" class="form-label">Password</label>
      <input type="password" class="form-control" id="passwordInput" placeholder="Enter your password">
    </div>
    <button type="submit" class="btn btn-primary w-100">
      Login
    </button>
  </form>
</div>

<?php
include('common/footer.php')
?>