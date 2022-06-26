<?php 
$name="Admin";
require'../api/config.php';
require"../components/header.php";
if(isset($_SESSION['username'])){
    if($_SESSION['is_admin'] != true){
    header("location: index.php");
    }
}else{
    header("location: /");
}
?>
    
</body>
</html>