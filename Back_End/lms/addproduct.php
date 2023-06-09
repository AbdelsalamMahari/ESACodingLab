<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOKSTORE</title>
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
           <div class="p-3 mx-auto">
            <h1 class="text-secondary mx-auto ">Add Book</h1>
            <form action="addBook_action.php" method="POST" enctype="multipart/form-data">
              <div class="row ">
                <div class="col-md-6 col-xl-4">
                  <div class="form-group">
                    <label for="book-name" class="text-secondary">Book Name:</label>
                    <input type="text" class="form-control" id="book-name" placeholder="Enter Book Name" name="bookName">
                  </div>
                </div>
                <div class=" col-md-6 col-xl-4  ">
                  <div class="form-group">
                    <label for="author-name" class="text-secondary">Author Name:</label>
                    <input type="text" class="form-control" id="author-name" placeholder="Enter Author Name" name="authorName">
                  </div>
                </div>
              </div>
              <div class="row ">
                <div class="col-md-6 col-xl-4">
                  <div class="form-group">
                    <label for="price" class="text-secondary">Price:</label>
                    <div class="input-group">
                      <span class="input-group-text">$</span>
                      <input type="number" class="form-control" id="price" placeholder="Enter Price" name="price">
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-4">
                  <div class="form-group">
                    <label for="discount-price" class="text-secondary">Price after Discount:</label>
                    <div class="input-group">
                      <span class="input-group-text">$</span>
                      <input type="number" class="form-control" id="discount-price" placeholder="Enter Discounted Price" name="priceAfter">
                    </div>
                  </div>
                </div>
                <div class="form-group col-md-6 col-xl-12">
                    <label for="category" class="text-secondary ">Category:</label>
                    <select class="form-control" id="category" name="category">
                      <option value="category1">Category 1</option>
                      <option value="category2">Category 2</option>
                      <option value="category3">Category 3</option>
                    </select>
                    
                  </div>
                  <div class="form-group col-md-6 col-xl-6">
                    <label for="description" class="text-secondary">Book Description:</label>
                    <textarea class="form-control" id="description" rows="3" placeholder="Enter Book Description" name="bookDesc"></textarea>
                  </div>
                  <div class="form-group col-md-6 col-xl-4">
                    <label for="image" class="text-secondary">Book Image:</label>
                    <input type="file" class="form-control-file " id="image" name="bookImg">
                    <button type="submit" class="btn btn-success mt-2">Submit</button>
                  </div>
              </div>
              
              
              
            </form>
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
