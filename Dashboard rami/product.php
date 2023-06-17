<!DOCTYPE html>
<html lang="en">
<?php
include 'C:\xampp\htdocs\Signup\connection.php';
function get_safe_value($con, $value) {
   if ($value != '') {
       $value = mysqli_real_escape_string($con, $value);
       return $value;
   }
   return '';
}

if (isset($_GET['type'])) {
   $type = get_safe_value($con, $_GET['type']);

   if ($type == 'delete') {
   $id = get_safe_value($con, $_GET['id']);
   $delete_sql = "delete from product where id='$id'";
   mysqli_query($con, $delete_sql);
}

if ($type == 'status') {
   $operation = get_safe_value($con, $_GET['operation']);
   $id = get_safe_value($con, $_GET['id']);
   if ($operation == 'active') {
      $status = '1';
   } else {
      $status = '0';
   }
   $update_status_sql = "update product set status='$status' where id='$id'";
   mysqli_query($con, $update_status_sql);
}

}


?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link type="text/css" rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css"/>
    <link type="text/css" rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css"/>
    <link type="text/css" rel="stylesheet" href="assets/plugins/flag-icon/flag-icon.min.css"/>
    <link type="text/css" rel="stylesheet" href="assets/plugins/simple-line-icons/css/simple-line-icons.css">
    <link type="text/css" rel="stylesheet" href="assets/plugins/ionicons/css/ionicons.css">
    
    <link type="text/css" rel="stylesheet" href="assets/plugins/chartist/chartist.css">
    <link type="text/css" rel="stylesheet" href="assets/plugins/apex-chart/apexcharts.css">
    <link type="text/css" rel="stylesheet" href="assets/css/app.min.css"/>
    <link type="text/css" rel="stylesheet" href="assets/css/style.min.css"/>
    <!-- Favicon -->	
    <link rel="icon" href="https://static.vecteezy.com/system/resources/previews/002/219/582/original/illustration-of-book-icon-free-vector.jpg" type="">
 
</head>
<body>
    <div class="page-container">
        <!--================================-->
        <!-- Page Sidebar Start -->
        <!--================================-->
        <div class="page-sidebar">
           <div class="logo">
              <a class="logo-img" href="index.html">	
                 <span>Library</span>	
              <img class="desktop-logo" src="" alt="">
              <img class="small-logo" src="" alt="">
              </a>			
              
           </div>
           <!--================================-->
           <!-- Sidebar Menu Start -->
           <!--================================-->
           <div class="page-sidebar-inner">
              <div class="page-sidebar-menu">
                 <ul class="accordion-menu">
                    <li >
                       <a href=""><i data-feather="home"></i>
                       <span>Dashboard</span></a>
                    </li>
                    <li>
                       <a href=""><i data-feather="package"></i>
                       <span>Product</span><i class="accordion-icon fa fa-angle-left"></i>
                       <ul class="sub-menu">
                          <li><a href="#">Category 1</a></li>
                          <li><a href="#">Category 2</a></li>
                          <li><a href="#">Category 3</a></li>
                       </ul>
                    </li>
                    <li>
                       <a href=""><i data-feather="user"></i>
                       <span>Users</span><i class="accordion-icon fa fa-angle-left"></i>
                       <ul class="sub-menu">
                          <li><a href="#">Online</a></li>
                          <li><a href="#">All</a></li>
                          <li><a href="#">Subscribers</a></li>
                       </ul>
                    </li>
                    
                 </ul>
              </div>
           </div>
        </div>
        <div class="page-content">
           <div class="page-header">
              <nav class="navbar navbar-expand-lg">
                 <ul class="list-inline list-unstyled mg-r-20">
                    <li class="list-inline-item align-text-top"><a class="hidden-md hidden-lg" href="#" id="sidebar-toggle-button"><i class="ion-navicon tx-20"></i></a></li>
                    <li class="list-inline-item align-text-top"><a class="hidden-xs hidden-sm" href="#" id="collapsed-sidebar-toggle-button"><i class="ion-navicon tx-20"></i></a></li>
                 </ul>
              </nav>
           
           </div>
           <div class="content pb-0">
   <div class="orders">
      <div class="row">
         <div class="col-xl-12">
            <div class="card">
               <div class="card-body">
                  <h4 class="box-title">Products </h4>
                  <h4 class="box-link"><span class='btn btn-secondary '><a href="addproduct.php" class="text-white">Add Products</a></span> </h4>
                  
               </div>
               
               
               <div class="card-body--">
                  <div class="table-stats order-table ov-h">
                     <table class="table ">
                        <thead>
                           <tr>
                              <th class="serial">#</th>
                              
                              <th>Category</th>
                              <th>Name</th>
                              <th>Image</th>
                              <th>Price ($)</th>
                              <th>Discount Price ($)</th>
                              <th>QTY</th>
                              <th></th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php
                           $sql = "SELECT * FROM product"; 
                           $res = mysqli_query($con, $sql);
                           $i = 1;
                           while ($row = mysqli_fetch_assoc($res)) { ?>
                              <tr>
                                 <td class="serial"><?php echo $i ?></td>
                               
                                 <td><?php echo $row['db_category'] ?></td>
                                 <td><?php echo $row['db_book'] ?></td>
                                 <td><img src="<?php echo 'images/' .$row['db_image']; ?>" style="height:100px;width:100px;" /></td>                                
                                 <td><?php echo $row['db_price'] ?></td>
                                 <td><?php echo $row['db_dprice'] ?></td>
                                 <td><?php echo $row['db_qty'] ?><br />
                                 
                                   


                                 </td>
                                 <td>
                                    <?php
                                    if ($row['status'] == 1) {
                                       echo "<span class='btn btn-warning'><a href='product.php?type=status&operation=deactive&id=" . $row['id'] . "'>Active</a></span>&nbsp";
                                    } else {
                                       echo "<span class='btn btn-success'><a href='product.php?type=status&operation=active&id=" . $row['id'] . "'>Deactive</a></span>&nbsp";
                                    }
                                    echo "<span class='btn btn-secondary'><a href='addproduct.php?edit=" . $row['id'] . "'>Edit</a></span>&nbsp";

                                    echo "<span class='btn btn-danger'><a href='?type=delete&id=" . $row['id'] . "'>Delete</a></span>";
                                    ?>
                                 </td>
                              </tr>
                           <?php $i = $i + 1;
                           } ?>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
                        </div>









                        <script src="assets/plugins/jquery/jquery.min.js"></script>
      <script src="assets/plugins/jquery-ui/jquery-ui.js"></script>
      <script src="assets/plugins/popper/popper.js"></script>
      <script src="assets/plugins/feather-icon/feather.min.js"></script>
      <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
      <script src="assets/plugins/pace/pace.min.js"></script>
      <script src="assets/plugins/countup/counterup.min.js"></script>		
      <script src="assets/plugins/waypoints/waypoints.min.js"></script>
      <script src="assets/plugins/chartjs/chartjs.js"></script>
      <script src="assets/plugins/apex-chart/apexcharts.min.js"></script>
      <script src="assets/plugins/apex-chart/irregular-data-series.js"></script>
      <script src="assets/plugins/simpler-sidebar/jquery.simpler-sidebar.min.js"></script>	   
      <script src="assets/js/dashboard/sales-dashboard-init.js"></script>
      <script src="assets/js/jquery.slimscroll.min.js"></script>
      <script src="assets/js/highlight.min.js"></script>
      <script src="assets/js/app.js"></script>
      <script src="assets/js/custom.js"></script>
</body>
</html>
