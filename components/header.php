<?php 
session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title><?php echo html_entity_decode($name)?></title>
</head>
<body>
    <!-- Nav bar -->
    <nav class="navbar navbar-light bg-light fixed-top">
    <div class="container-fluid">
        <!-- Name  -->
        <a class="navbar-brand" href="#">مكتبة </a>
        <!-- End Name -->
        <!-- button Show navbar -->
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!--  button Show navbar  END-->
        <!-- Nav item -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <!-- Name on nav item -->
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Books</h5>
                <!-- Name on nav item END -->
                <!-- close button -->
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                <!-- close button END-->
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <!-- Home link -->
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <!-- END Home Link -->
                    <!-- if admin  -->
                    <?php 
                            if($_SESSION['is_admin'] == true){
                        ?>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="<?php echo home_base_url()?>admin">Admin </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="<?php echo home_base_url()?>admin/AddBook.php">Add Book </a>
                            </li>
                        <?php } ?>
                    <!-- if Admin END -->
                    <!-- if not login -->
                    <?php if(!isset($_SESSION['username']))
                    {
                        ?>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?php echo home_base_url()?>login.php" 
                            >Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/logup.php">Log Up</a>
                        </li>
                    <?php }else{?>
                        <!-- if login -->
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./api/logout.php">Logout </a>
                        </li>
                        <?php
                        }
                        ?>
                        <!-- End logined -->
                </ul>
            </div>
        </div>
        <!-- Nav item END -->
    </div>
</nav>

