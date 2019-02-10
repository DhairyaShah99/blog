<?php

include_once ("connection.php");

function getAllComments($condition = 1){
    global $connection;
    $sql = "SELECT * FROM comments WHERE $condition";
    $result = mysqli_query($connection, $sql);
    return $result;
}

function getAllPosts($condition = 1){
    global $connection;
    $sql = "SELECT posts.*,CONCAT(users.first_name,CONCAT(\" \", users.last_name)) as author FROM posts, users WHERE posts.post_author = users.user_id AND ($condition)";
    $result = mysqli_query($connection, $sql);
    return $result;
}

function getAllUsers($condition = 1){
    global $connection;
    $sql = "SELECT * FROM users WHERE $condition";
    $result = mysqli_query($connection, $sql);
    return $result;
}

function getAllCategories($condition = 1){
    global $connection;
    $sql = "SELECT * FROM categories WHERE $condition";
    $result = mysqli_query($connection, $sql);
    $categories = array();
    $i=0;
    while($row = mysqli_fetch_assoc($result)) {
        $single_category = array();
        $single_category['cat_id'] = $row['cat_id'];
        $single_category['cat_title'] = $row['cat_title'];
        $categories[$i] = $single_category;
        $i++;
    }
    return $categories;
}

function isLoggedIn(){
    startSession();
    if(isset($_SESSION['user_id'])){
        return true;
    }
    else{
        return false;
    }
}

function startSession(){
    if(session_status() == PHP_SESSION_NONE)
        session_start();
}