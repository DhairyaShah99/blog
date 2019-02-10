<div class="row">
    <div class="col-md-12">
        <a href="users.php?source=add_user" type="button" class="btn btn-primary">Add Post</a>
    </div>
</div>
<div class="mb-3"></div>
<div class="row">
    <div class="col-md-12">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Role</th>

                    <th></th>
                    <th></th>

                </tr>
                </thead>
                <tbody>
                <?php
                include_once ("../includes/functions.php");
                $result = get_all_users();
                while($row = mysqli_fetch_assoc($result)){
                    $user_id=$row['user_id'];
                    $username=$row['username'];
                    $password=$row['password'];
                    $first_name=$row['first_name'];
                    $last_name=$row['last_name'];
                    $image=$row['image'];
                    $email=$row['email'];
                    $role=$row['role'];


                    echo<<<USER
<tr>
                              <td>$user_id</td>
                              <td><img src="images/users/$image" width="100px" class="img-fluid rounded-circle"></td>
                          
                              <td>$username</td>
           
                              <td>$password</td>
               
                              <td>$first_name</td>
                              <td>$last_name</td>
       
                          
                              <td>$email</td>
                          
                              
                              <td>$role</td>
                              
                              <td><a href="users.php?source=delete_user&user_id=$user_id" class="btn btn-danger"><span class="fa fa-trash"></span></a></td>
                              <td><a href="posts.php?source=edit_post&post_id=post_id" class="btn btn-outline-warning"><span class="fa fa-edit"></span></a></td>
                          </tr>
USER;

                }
                ?>


                </tbody>
            </table>
        </div>
    </div>
</div>