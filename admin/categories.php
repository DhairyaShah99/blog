<?php
$page_title = "Categories";
?>
<!DOCTYPE html>
<html lang="en">

<?php
include_once ("includes/header.php");
?>

  <body id="page-top" class="sidebar-toggled">

  <?php
    include_once ("includes/navigation.php");
  ?>

    <div id="wrapper">

      <!-- Sidebar -->
        <?php
            include_once ("includes/sidebar.php");
        ?>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active"><?echo $page_title;?></li>
          </ol>

          <!--MAIN PAGE CONTENT-->
            <div class="row">
                <div class="col-md-6">
                    <?php
                    include_once ("pages/categories/add-category-form.php");
                    ?>
                </div>
                <div class="col-md-6">
                    <?php
                    include_once ("pages/categories/edit-category-form.php");
                    ?>
                </div>
            </div>
            <!--END OF ROW-->
            <?php
            include_once ("pages/categories/view-all-categories.php");
            ?>

          </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
            <?php
            include_once ("includes/footer.php");
            ?>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->


    <!-- Bootstrap core JavaScript-->
        <?php
        include_once ("includes/scripts_btn_to_top.php");
        ?>

  </body>

</html>
