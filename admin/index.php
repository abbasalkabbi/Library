<?php 
$name="Admin";
require'../api/config.php';
require"../components/header.php";
if(isset($_SESSION['username'])){
    if($_SESSION['is_admin'] != true){
    header("location: /");
    }
}else{
    header("location: /");
}
?>
    
    <br>
    <br>
    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">Hi, Admin</h1>
            <p>
            <a href="./AddBook.php" class="btn btn-primary my-2">Add Book</a>
            </p>
        </div>
        </div>
    </section>
    <!-- Saerch -->
    <form action="" class="container row d-flex justify-content-center mt-5">  
            <div class="input-group rounded ">
                <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
            </div>
        </form>
        <!-- Saerch END -->

        <!-- Books -->
        <div class="album py-5 bg-light books">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <!-- book -->
                        <div class="card mb-4 box-shadow">
                            <img src="../thumbnails/1656195482ملزمةthumbnails.jpg" class="card-img-top" alt="dd" >
                            <!-- <img class="card-img-top"  alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src='../thumbnails/1656195482ملزمةthumbnails.jpg' data-holder-rendered="true"> -->
                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a type="button" href="../Books/${book.url_pdf}" class="btn btn-sm btn-outline-secondary">View</a>
                                        <a type="button"  href="../api/delete.php?id=${book.id}" class="btn btn-sm btn-outline-secondary">Edit</a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- book -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Books -->

        <script >
            const url='http://localhost/Library/api/books.php?name=',
    container=document.querySelector(".books .container .row  .col-md-4"),
    input_search=document.querySelector("form input")
    fetch(`${url}`)
    .then(response => response.json())
    .then(data => datainsert(data));

input_search.addEventListener('input', (e)=>{
    let value= e.target.value;
    if(value ==''){
        fetch(`${url}`)
        .then(response => response.json())
        .then(data => datainsert(data));
    }else{
        fetch(`${url}${value}`)
        .then(response => response.json())
        .then(data => datainsert(data));
    }
});

function datainsert(data){
    container.innerHTML=''
    data.forEach(book => {
        container.innerHTML+=
    `
    <!-- book -->
    <div class="card mb-4 box-shadow">
                            <img src="../thumbnails/${book.url_img}" class="card-img-top" alt="dd" >
                            <div class="card-body">
                                <p class="card-text">${book.title}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a type="button" href="../Books/${book.url_pdf}" class="btn btn-sm btn-outline-success">View</a>
                                        <a type="button"  href="../api/delete.php?id=${book.id}" class="btn btn-sm btn-outline-danger">Edit</a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
    <!-- End Book -->
    `
    });
    
}
        </script>
</body>
</html>