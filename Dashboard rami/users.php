<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
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


                  <div class="col-md-12 col-xl-12">
                     <div class="card mg-b-20">
                        <div class="card-header">
                           <h4 class="card-header-title">
                              Customar Details
                           </h4>
                           
                        </div>
                        <div class="card-body pd-0 collapse show" id="customarDetails">
                           <div class="table-responsive">
                              <table class="table table-hover mg-0">
                                 <thead class="tx-dark tx-uppercase tx-10 tx-bold">
                                    <tr>
                                       <th>User</th>
                                       
                                       <th>Earning</th>
                                       <th class="tx-right">Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td class="d-flex align-items-center">
                                          
                                          <div class="d-block">
                                             <a href="" class="my-0 mt-1 tx-13">Stanley C. Owens</a>		
                                             <p class="tx-12 mg-0 tx-gray-500">New Jersey, UK</p>
                                          </div>
                                       </td>
                                       
                                       <td>
                                          <a href="" class="my-0 mt-1 tx-13">$2,545</a>
                                          <p class="tx-12 mb-0 tx-gray-500">Total Sales</p>
                                       </td>
                                       <td class="tx-right">
                                          <a href="" class="btn btn-sm btn-label-success">Contact</a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td class="d-flex align-items-center">
                                         
                                          <div class="d-block">
                                             <a href="" class="my-0 mt-1 tx-13">John Doe</a>			
                                             <p class="tx-12 mg-0 tx-gray-500">New Jersey, UK</p>
                                          </div>
                                       </td>
                                       
                                       <td>
                                          <a href="" class="my-0 mt-1 tx-13">$3,545</a>
                                          <p class="tx-12 mb-0 tx-gray-500">Total Sales</p>
                                       </td>
                                       <td class="tx-right">
                                          <a href="" class="btn btn-sm btn-label-success">Contact</a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td class="d-flex align-items-center">
                                          
                                          <div class="d-block">
                                             <a href="#" class="my-0 mt-1 tx-13">Stanley Owens</a>		
                                             <p class="tx-12 mg-0 tx-gray-500">New Jersey, UK</p>
                                          </div>
                                       </td>
                                       
                                       <td>
                                          <a href="" class="my-0 mt-1 tx-13">$6,545</a>
                                          <p class="tx-12 mb-0 tx-gray-500">Total Sales</p>
                                       </td>
                                       <td class="tx-right">
                                          <a href="" class="btn btn-sm btn-label-success">Contact</a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td class="d-flex align-items-center">
                                          
                                          <div class="d-block">
                                             <a href="" class="my-0 mt-1 tx-13">Adam L. Easter</a>		
                                             <p class="tx-12 mg-0 tx-gray-500">New Jersey, UK</p>
                                          </div>
                                       </td>
                                       
                                       <td>
                                          <a href="" class="my-0 mt-1 tx-13">$5,545</a>
                                          <p class="tx-12 mb-0 tx-gray-500">Total Sales</p>
                                       </td>
                                       <td class="tx-right">
                                          <a href="" class="btn btn-sm btn-label-success">Contact</a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td class="d-flex align-items-center">
                                         
                                          <div class="d-block">
                                             <a href="" class="my-0 mt-1 tx-13">Jeffery M. Jensen</a>			
                                             <p class="tx-12 mg-0 tx-gray-500">New Jersey, UK</p>
                                          </div>
                                       </td>
                                       
                                       <td>
                                          <a href="" class="my-0 mt-1 tx-13">$1,545</a>
                                          <p class="tx-12 mb-0 tx-gray-500">Total Sales</p>
                                       </td>
                                       <td class="tx-right">
                                          <a href="" class="btn btn-sm btn-label-success">Contact</a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td class="d-flex align-items-center">
                                          
                                          <div class="d-block">
                                             <a href="" class="my-0 mt-1 tx-13">Stanley C. Owens</a>		
                                             <p class="tx-12 mg-0 tx-gray-500">New Jersey, UK</p>
                                          </div>
                                       </td>
                                       
                                       <td>
                                          <a href="" class="my-0 mt-1 tx-13">$2,545</a>
                                          <p class="tx-12 mb-0 tx-gray-500">Total Sales</p>
                                       </td>
                                       <td class="tx-right">
                                          <a href="" class="btn btn-sm btn-label-success">Contact</a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td class="d-flex align-items-center">
                                         
                                          <div class="d-block">
                                             <a href="" class="my-0 mt-1 tx-13">John Doe</a>			
                                             <p class="tx-12 mg-0 tx-gray-500">New Jersey, UK</p>
                                          </div>
                                       </td>
                                       
                                       <td>
                                          <a href="" class="my-0 mt-1 tx-13">$3,545</a>
                                          <p class="tx-12 mb-0 tx-gray-500">Total Sales</p>
                                       </td>
                                       <td class="tx-right">
                                          <a href="" class="btn btn-sm btn-label-success">Contact</a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td class="d-flex align-items-center">
                                          
                                          <div class="d-block">
                                             <a href="#" class="my-0 mt-1 tx-13">Stanley Owens</a>		
                                             <p class="tx-12 mg-0 tx-gray-500">New Jersey, UK</p>
                                          </div>
                                       </td>
                                       
                                       <td>
                                          <a href="" class="my-0 mt-1 tx-13">$6,545</a>
                                          <p class="tx-12 mb-0 tx-gray-500">Total Sales</p>
                                       </td>
                                       <td class="tx-right">
                                          <a href="" class="btn btn-sm btn-label-success">Contact</a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td class="d-flex align-items-center">
                                          
                                          <div class="d-block">
                                             <a href="" class="my-0 mt-1 tx-13">Adam L. Easter</a>		
                                             <p class="tx-12 mg-0 tx-gray-500">New Jersey, UK</p>
                                          </div>
                                       </td>
                                       
                                       <td>
                                          <a href="" class="my-0 mt-1 tx-13">$5,545</a>
                                          <p class="tx-12 mb-0 tx-gray-500">Total Sales</p>
                                       </td>
                                       <td class="tx-right">
                                          <a href="" class="btn btn-sm btn-label-success">Contact</a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td class="d-flex align-items-center">
                                         
                                          <div class="d-block">
                                             <a href="" class="my-0 mt-1 tx-13">Jeffery M. Jensen</a>			
                                             <p class="tx-12 mg-0 tx-gray-500">New Jersey, UK</p>
                                          </div>
                                       </td>
                                       
                                       <td>
                                          <a href="" class="my-0 mt-1 tx-13">$1,545</a>
                                          <p class="tx-12 mb-0 tx-gray-500">Total Sales</p>
                                       </td>
                                       <td class="tx-right">
                                          <a href="" class="btn btn-sm btn-label-success">Contact</a>
                                       </td>
                                    </tr>
                              </table>
                           </div>
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