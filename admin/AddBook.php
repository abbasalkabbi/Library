<?php 
$name="Add Book";
require'../api/config.php';
require"../components/header.php";

?>
<style>
    .require {
    color: #666;
}
label small {
    color: #999;
    font-weight: normal;
}
</style>

    <div class="container mt-5 ">
        <div class="row ">
            
            <div class="col-md-8 col-md-offset-2">
                
                <h1>Upload Book</h1>
                
                <form action="" method="POST" class="m-5 " enctype='multipart/form-data'>
                    <!-- Errors -->
                    <div class="errors">
                    </div>
                    <!-- Errors END -->
                    <div class="form-group mb-3">
                        <label for="title">Title </label>
                        <input type="text" class="form-control" name="title" />
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label" name="pdf">Book PDF</label>
                        <input class="form-control" type="file" id="formFile" name="pdf">
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label" name="thumbnail">thumbnails</label>
                        <input class="form-control" type="file" id="formFile" name="thumbnail">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                            Upload
                        </button>
                        <button class="btn btn-default">
                            Cancel
                        </button>
                    </div>
                    
                </form>
            </div>
            
        </div>
    </div>
    <script src="./Addbook.js"></script>
</body>
</html>