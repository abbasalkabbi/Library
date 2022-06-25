<?php 
session_start();
if(isset($_SESSION['username'])){
    header("location: index.php");
}
$name="Login";
require"./api/config.php";
require"./components/header.php";
?>

    <div class="container d-flex justify-content-center align-items-center">
        <!-- Form login -->
        <form class="col-8 mt-5">
            <!-- Errors -->
            <div class="errors">
            </div>
            <!-- Errors END -->
            <!-- username input -->
            <div class="form-outline mb-4">
                <input type="text" id="username" class="form-control" name="username" />
                <label class="form-label" for="username">username </label>
            </div>
            <!-- Password input -->
            <div class="form-outline mb-4">
                <input type="password" id="form2Example2" class="form-control" name="password"/>
                <label class="form-label" for="form2Example2">Password</label>
            </div>
            <!-- Submit button -->
            <button type="button" class="btn btn-primary btn-block mb-4">log in</button>
    </form>
    <!-- End From -->
    </div>
<script src="./src/login.js"></script>
</body>
</html>