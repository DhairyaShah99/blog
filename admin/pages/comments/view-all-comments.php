
<div class="row">
    <div class="col-md-12">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Author</th>
                    <th>post Title</th>
                    <th>email</th>
                    <th>Status</th>
                    <th>Content</th>
                    <th>Date</th>
                    <th>Approve</th>
                    <th>Unapprove</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                <?php
                include_once ("../includes/functions.php");
                $condition="comments.comment_post_id=posts.post_id AND posts.post_author = {$_SESSION['user_id']}";
                $comments_result = get_all_comments($condition);
                while($row = mysqli_fetch_assoc($comments_result)){
                    $comment_author=$row['comment_author'];
                    $comment_id=$row['comment_id'];
                    $comment_content=$row['comment_content'];
                    $comment_email=$row['comment_email'];
                    $comment_date=$row['comment_date'];
                    $comment_post_id = $row['comment_post_id'];
                    $comment_status=$row['comment_status'];

                    $result = get_all_posts("post_id=$comment_post_id");

                    if ($row = mysqli_fetch_assoc($result)){
                        $post_title = $row['post_title'];
                    }

                    echo<<<DATA
<tr>
                              
                              <td>$comment_author</td>
           
                              <td><a href="../post.php?post_id=$comment_post_id">$post_title</a></td>
               
                              <td>$comment_email</td>
                              <td>$comment_status</td>
       
                          
                              <td>$comment_content</td>
                              <td>$comment_date</td>
                              
                              <td><a href="comments.php?source=approve&comment_id=$comment_id" class="btn btn-danger">approve</span></a></td>
                              <td><a href="comments.php?source=unapprove&comment_id=$comment_id" class="btn btn-danger">unapprove</span></a></td>
                              <td><a href="comments.php?source=delete_comment&comment_id=$comment_id" class="btn btn-danger"><span class="fa fa-trash"></span></a></td>
                              
                          </tr>
DATA;

                }
                ?>


                </tbody>
            </table>
        </div>
    </div>
</div>