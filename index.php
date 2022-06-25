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
        <div class="container row g-3 mt-5 mb-4">
            <!-- book -->
            <div class="card col-sm-6 col-md-3 m-2" >
                <img src="https://www.noor-book.com/publice/covers_cache_webp/13/a/7/2/dc13b922dba725451acca7f60e4273cf.png.webp" class="card-img-top" alt="..." >
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <a href="#" class="btn btn-primary">Show</a>
                </div>
            </div>
        <!-- End Book -->
    <?php }
    ?>
        
    </div>
    <!-- Books  END-->
</body>
</html>