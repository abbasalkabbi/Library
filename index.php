<?php 
$name="Home";
require"./api/config.php";
require"./components/header.php";
?>
    <!-- Home -->
    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">Album example</h1>
            <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
            
        </div>
        </div>
    </section>
    <!-- Home -->
    <?php
    if(!empty($_SESSION['username'])){
        ?>
        <!-- Saerch -->
        <form action="" class="container row d-flex justify-content-center">  
            <div class="input-group rounded ">
                <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
            </div>
        </form>
        <!-- Saerch END -->
        <!-- Books -->
        <div class="container row g-3 mt-5 mb-4 books">
            
    <?php }
    ?>
        
    </div>
    <!-- Books  END-->
    <script src="./src/data.js"></script>
</body>
</html>