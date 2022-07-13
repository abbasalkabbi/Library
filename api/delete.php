<?php
include_once 'config.php';
session_start();

If (unlink('../Books/')) {
    echo"yes";
} else {
    echo"fuck";
}

if($_SESSION['is_admin'] == true){
    $id=$_GET['id'] ;
    $item=mysqli_query($conn,"SELECT * FROM books  WHERE id=$id ");
    if(mysqli_num_rows($item)){
        // if loggin
        while($obj = mysqli_fetch_object($item)){
            $books= $obj -> url_pdf; //hendle Unique_id
            $thumbnail= $obj -> url_img; //hendle Unique_id
        }
        if(unlink('../Books/'.$books) && unlink('../thumbnails/'.$thumbnail)){
            $delete=mysqli_query($conn,"DELETE FROM books WHERE id=$id");
            if($delete){
                header("location: ../admin");
            }
        }
    
    }
}

?>