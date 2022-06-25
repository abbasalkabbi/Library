<?php 
require'../api/config.php';
$title=$_POST['title'];
$img_name=$_FILES['thumbnail']['name'];// get name image
$img_ext = pathinfo($img_name,PATHINFO_EXTENSION);// get file extension
$img_ext_allowed=array("jpeg","gif","png","jpg");
$tmp_img=$_FILES['thumbnail']['tmp_name'];// get where image
$book_name=$_FILES['pdf']['name'];
$book_ext = pathinfo($book_name,PATHINFO_EXTENSION);// get file extension
$tmp_book=$_FILES['pdf']['tmp_name'];// get where pdf
if(in_array($img_ext,$img_ext_allowed) === true){
    // if  thumbnail is  image
    if($book_ext === 'pdf'){
        $img_name_new=time().$title.'thumbnails.'.$img_ext;
        $book_name_new=time().$title.'.'.$book_ext;
        if(!empty($title)){
            if(move_uploaded_file($tmp_img,"../thumbnails/".$img_name_new) && move_uploaded_file($tmp_book,"../Books/".$book_name_new)){
                echo json_encode(["status" => true, "message" => "تم تجميل الكتاب"]);
                $add=mysqli_query($conn,"INSERT INTO books (title,url_img,url_pdf) VALUES('$title','$img_name_new','$book_name_new')");
            }
        }else{
            echo json_encode(["status" => false, "message" => "Title is Empty"]);
        }
    }else{
        echo json_encode(["status" => false, "message" => "Book is not Pdf"]);
    }
}else{
    echo json_encode(["status" => false, "message" => "thumbnail is not image"]);
}
?>