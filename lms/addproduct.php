<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOKSTORE</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
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
    <link rel="icon" href="images/Logo1.png" type="image/x-icon">
 
</head>
<body>
    <div class="page-container">
        <!--================================-->
        <!-- Page Sidebar Start -->
        <!--================================-->
        <div class="page-sidebar">
           <div class="logo">
              <a class="logo-img" href="index.html">	
              <img class="desktop-logo" src="images/logo1.png" alt="">
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
           <div class="p-3 mx-auto mt-4">
            <h1 id="add_update" class="text-secondary mx-auto">Add Book</h1>
            <div class="row">
                <div class="col-md-6 col-xl-4">
                    <div class="form-group">
                        <label class="text-secondary">Book Name:</label>
                        <input type="text" class="form-control" id="bookName" placeholder="Enter Book Name" name="bookName">
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="form-group">
                        <label class="text-secondary">Author Name:</label>
                        <input type="text" class="form-control" id="authorName" placeholder="Enter Author Name" name="authorName">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-xl-4">
                    <div class="form-group">
                        <label class="text-secondary">Price:</label>
                        <div class="input-group">
                            <span class="input-group-text">$</span>
                            <input type="number" class="form-control" step="0.01" id="price" placeholder="Enter Price" name="price">
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="form-group col-md-6 col-xl-12">
                    <label class="text-secondary">Category:</label>
                    <select class="form-control" id="category" name="category">
                    <option selected disabled value="">Choose...</option>
                        <?php
                        include 'connection.php';
                        // Assuming you have established a database connection
                        $sql = "SELECT `category_id`, `category_name` FROM `categories`";
                        $result = mysqli_query($connection, $sql);
    
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $categoryId = $row['category_id'];
                                $categoryName = $row['category_name'];
                                echo "<option value='$categoryId'>$categoryName</option>";
                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group col-md-6 col-xl-6">
                    <label class="text-secondary">Book Description:</label>
                    <textarea class="form-control" id="description" rows="3" placeholder="Enter Book Description" name="description"></textarea>
                </div>
                <div class="form-group col-md-6 col-xl-4">
                    <label class="text-secondary">Quantity:</label>
                    <input type="number" class="form-control" id="qty" name="qty">
                    <label class="text-secondary">Book Image:</label>
                    <input type="file" class="form-control-file" id="image" name="image">
                    <button type="button" id="add" class="btn btn-success mt-2" style="background-color: #1886a9; border: none;">Submit</button>
                </div>
                
            </div>
            <div id="alert"></div>
            <div class="table-responsive mt-3">
            <table class="table table-striped align-middle text-center">
                <thead class="thead-dark">
                    <tr>
                        <th>No</th>
                        <th>Image</th>
                        <th>Book Name</th>
                        <th>Author</th>
                        <th>Price $</th>
                        <th>Borrow Price $</th>
                        <th>Category</th>
                        <th>Quantity</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="info">
                    <!-- Add rows dynamically using JavaScript or backend programming -->
                </tbody>
            </table>
        </div>
        </div>
        <div id="confirmationModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="confirmationModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmationModalLabel">Confirm Deletion</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete this book?</p>
                </div>
                <div class="modal-footer">
                    <button id="confirmDelete" type="button" class="btn btn-danger">Delete</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
                </div>
            </div>
        </div>
        </div>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="js/app.js"></script>
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
