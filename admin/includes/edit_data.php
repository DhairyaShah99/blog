<?php
include_once ("admin_connection.php");
if(isset($_POST['edit-category'])){
    $cat_title = $_POST['cat_title'];
    $cat_id = $_POST['cat_id'];
    $query = "UPDATE categories SET cat_title ='$cat_title' WHERE cat_id = $cat_id";
    mysqli_query($connection,$query);
    if(mysqli_errno($connection)){
        die((mysqli_error($connection)));
    }
    header("Location: ../categories.php");
}
?>