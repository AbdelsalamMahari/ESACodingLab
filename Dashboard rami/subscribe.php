<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="keyword" content="">
      <meta name="author"  content=""/>
      <!-- Page Title -->
      <title>Admin Dashboard</title>
      <!-- Main CSS -->			
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
      <!--================================-->
      <!-- Page Container Start -->
      <!--================================-->
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
                     <li class="open active">
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



            <div class="page-inner">
                <div id="main-wrapper">




                    <h2>User Management</h2>
                    <!-- View Users -->
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Username</th>
                          <th>Subscription Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <!-- Display user subscriptions dynamically -->
                        <tr>
                          <td>User 1</td>
                          <td>Active</td>
                          <td>
                            <!-- Edit Subscription Button -->
                            <button class="btn btn-primary btn-sm">Edit</button>
                            <!-- Delete Subscription Button -->
                            <button class="btn btn-danger btn-sm">Delete</button>
                          </td>
                        </tr>
                        <!-- Add User Subscription Form -->
                        <tr>
                          <td>
                            <input type="text" class="form-control" placeholder="Username" required>
                          </td>
                          <td>
                            <select class="form-control" required>
                              <option value="active">Active</option>
                              <option value="expired">Expired</option>
                              <option value="canceled">Canceled</option>
                            </select>
                          </td>
                          <td>
                            <!-- Add Subscription Button -->
                            <button class="btn btn-success btn-sm">Add</button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                
                    <!-- Subscription Plans Section -->
                    <h2>Subscription Plans</h2>
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Price</th>
                          <th>Duration</th>
                          <th>Features</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <!-- Display subscription plans dynamically -->
                        <tr>
                          <td>Plan 1</td>
                          <td>$10/month</td>
                          <td>30 days</td>
                          <td>Feature 1, Feature 2, Feature 3</td>
                          <td>
                            <!-- Edit Subscription Plan Button -->
                            <button class="btn btn-primary btn-sm">Edit</button>
                            <!-- Delete Subscription Plan Button -->
                            <button class="btn btn-danger btn-sm">Delete</button>
                          </td>
                        </tr>
                        <!-- Add Subscription Plan Form -->
                        <tr>
                          <td>
                            <input type="text" class="form-control" placeholder="Name" required>
                          </td>
                          <td>
                            <input type="text" class="form-control" placeholder="Price" required>
                          </td>
                          <td>
                            <input type="text" class="form-control" placeholder="Duration" required>
                          </td>
                          <td>
                            <textarea class="form-control" placeholder="Features" required></textarea>
                          </td>
                          <td>
                            <!-- Add Subscription Plan Button -->
                            <button class="btn btn-success btn-sm">Add</button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                
                    <!-- Subscription Status Section -->
                    <h2>Subscription Status</h2>
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Username</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      
                    </table>
                
    
                
                  </div>
                
                  <!-- Bootstrap JavaScript -->
                  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>















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