<?php
if (!isset($_SESSION['user_id'])){
    session_start();
}
$role = $_SESSION['role'];
?>

    <ul class="sidebar navbar-nav toggled">
    <li class="nav-item active">
        <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown">
            <i class="fas fa-fw fa-folder"></i>
            <span>Posts</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">

            <a class="dropdown-item" href="posts.php">View All Posts</a>
            <a class="dropdown-item" href="posts.php?source=add_post">Add Post</a>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="categories.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Categories</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="comments.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Comments</span></a>
    </li>
        <?php

        if ($role == "super-user") {

            ?>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Users</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="pagesDropdown">

                    <a class="dropdown-item" href="users.php">View All User</a>
                    <a class="dropdown-item" href="">Add User</a>
                </div>
            </li>
            <?php
        }
        ?>

    <li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Profile</span></a>
    </li>
</ul>