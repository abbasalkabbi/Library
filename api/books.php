<?php 
include_once 'config.php';
    if(isset($_GET['name'])){
    $name=$_GET['name'];
    //get books_data from databacse
    $q= mysqli_query($conn,"SELECT * FROM books WHERE title LIKE '$name%'");
    $books_data= mysqli_fetch_all($q,MYSQLI_ASSOC);
    echo json_encode($books_data);
    }

?>