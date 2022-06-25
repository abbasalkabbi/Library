<?php 

$name="Logup";
require"./api/config.php";
require"./components/header.php";
if(isset($_SESSION['username'])){
  header("location: index.php");
}
?>
<style>
.btn-color{
    background-color: #0e1c36;
    color: #fff;
}

.profile-image-pic{
    height: 200px;
    width: 200px;
    object-fit: cover;
}



.cardbody-color{
    background-color: #ebf2fa;
}

a{
    text-decoration: none;
}
</style>
<!-- container -->
<div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h2 class="text-center text-dark mt-5">تسجبل </h2>
        <div class="text-center mb-5 text-dark">مكتبة </div>
        <div class="card my-5">

          <form class="card-body cardbody-color p-lg-5">

            <div class="text-center">
              <img src="https://www.ukrgate.com/eng/wp-content/uploads/2021/02/The-Ukrainian-Book-Institute-Purchases-380.9-Thousand-Books-for-Public-Libraries1.jpeg" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                width="200px" alt="profile">
            </div>
            <!-- Errors -->
            <div class="errors">
            </div>
            <!-- Errors END -->
            <div class="mb-3">
              <input type="text" class="form-control"name='username' id="Username" aria-describedby="emailHelp"
                placeholder="User Name">
            </div>
            <div class="mb-3">
              <input type="password" class="form-control" id="password" name='password' placeholder="Password">
            </div>
            <div class="text-center"><button type="submit" class="btn btn-color px-5 mb-5 w-100">تسجبل </button></div>
            <div id="emailHelp" class="form-text text-center mb-5 text-dark"> لديك حساب
                ؟<a href="./login.php" class="text-dark fw-bold">  تسجبل الدخول الحسابك</a>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
<script src="./src/login.js"></script>
</body>
</html>