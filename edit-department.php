<?php session_start();
error_reporting(0);
include_once('includes/config.php');
if (strlen($_SESSION['aid']==0)) {
  header('location:logout.php');
  } else{
if(isset($_POST['submit']))
{
$deptName=$_POST['deptName'];
$location=$_POST['location'];
$managerId=$_POST['managerId'];
$id=intval($_GET['id']);
$sql=mysqli_query($con,"update department set deptName='$deptName',location='$location',managerId='$managerId' where departmentID='$id'");
echo "<script>alert('Service detail has been updated successfully');</script>";
echo "<script>window.location.href='manage-services.php'</script>";

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  
  <title>Employee Management System || Update Departments</title>
  <!-- base:css -->
  <link rel="stylesheet" href="vendors/typicons/typicons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="vendors/select2/select2.min.css">
  <link rel="stylesheet" href="vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  
  <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->

    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
          <a class="navbar-brand brand-logo" href="index.html"><img src="images/logo.svg" alt="logo"/></a>
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo-mini.svg" alt="logo"/></a>
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="typcn typcn-th-menu"></span>
          </button>
        </div>
      </div>
      <?php include_once('includes/header.php');?>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
     
    <?php include_once('includes/sidebar.php');?>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
  
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Update Departments</h4>
                  <p class="card-description">
                    Update Department!!!
                  </p>
                  <form class="forms-sample" method="post" action="">
                    <?php
                    $id=intval($_GET['id']);
                         $query=mysqli_query($con,"select * from department where departmentID='$id'");
while($row=mysqli_fetch_array($query))
{
?>
                    <div class="form-group">
                       <label for="exampleInputUsername1">Department Title</label>
                      <input id="sertitle" name="deptName" type="text" class="form-control" required="true" value="<?php echo htmlentities($row['deptName']);?>">
                    </div>
                    <div class="form-group">
                       <label for="exampleInputUsername1">Location</label>
                      <input id="sertitle" name="location" type="text" class="form-control" required="true" value="<?php echo htmlentities($row['location']);?>">
                    </div>
                    <div class="form-group">
                       <label for="exampleInputUsername1">Manager ID</label>
                      <input id="sertitle" name="managerId" type="text" class="form-control" required="true" value="<?php echo htmlentities($row['managerId']);?>">
                    </div>
                    <?php } ?>
                    <button type="submit" class="btn btn-primary mr-2" name="submit">Submit</button>
                  </form>
                </div>
              </div>
            </div>
     
          </div>
        </div>
        <!-- content-wrapper ends -->
       <?php include_once('includes/footer.php');?>
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <script src="vendors/typeahead.js/typeahead.bundle.min.js"></script>
  <script src="vendors/select2/select2.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="js/file-upload.js"></script>
  <script src="js/typeahead.js"></script>
  <script src="js/select2.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
<?php } ?>