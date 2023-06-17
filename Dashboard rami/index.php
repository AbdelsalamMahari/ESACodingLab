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
            
            <!--/ Page Header End -->
            <!--================================-->
            <!-- Page Inner Start -->
            <!--================================-->
            <div class="page-inner">
               <!-- Main Wrapper -->
               <div id="main-wrapper">
                  <!--================================-->
                  <!-- Breadcrumb Start -->
                  <!--================================-->
                  <div class="pageheader pd-t-25 pd-b-35">
                     <div class="pd-t-5 pd-b-5">
                        <h1 class="pd-0 mg-0 tx-20">Sales Monitoring</h1>
                     </div>
                   
                  </div>
                  <!--/ Breadcrumb End -->
                  <!--================================-->
                  <!-- Count Card Start -->
                  <!--================================-->
                  <div class="row row-xs clearfix">
                     <div class="col-sm-6 col-xl-3">
                        <div class="card mg-b-20">
                           <div class="card-body pd-y-0">
                              <div class="custom-fieldset mb-4">
                                 <div class="clearfix">
                                    <label>Orders</label>
                                 </div>
                                 <div class="d-flex align-items-center text-dark">
                                    <div class="wd-40 wd-md-50 ht-40 ht-md-50 mg-r-10 mg-md-r-10 d-flex align-items-center justify-content-center rounded card-icon-warning">
                                       <i class="icon-screen-desktop tx-warning tx-20"></i>
                                    </div>
                                    <div>
                                       <h2 class="tx-20 tx-sm-18 tx-md-24 mb-0 mt-2 mt-sm-0 tx-normal tx-rubik tx-dark">$<span class="counter">5,300</span><small class="tx-15">.50</small></h2>
                                       <div class="d-flex align-items-center tx-gray-500"><span class="text-success mr-2 d-flex align-items-center">  </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6 col-xl-3">
                        <div class="card mg-b-20">
                           <div class="card-body pd-y-0">
                              <div class="custom-fieldset mb-4">
                                 <div class="clearfix">
                                    <label>Rent</label>
                                 </div>
                                 <div class="d-flex align-items-center text-dark">
                                    <div class="wd-40 wd-md-50 ht-40 ht-md-50 mg-r-10 mg-md-r-10 d-flex align-items-center justify-content-center rounded card-icon-success">
                                       <i class="icon-diamond tx-success tx-20"></i>
                                    </div>
                                    <div>
                                       <h2 class="tx-20 tx-sm-18 tx-md-24 mb-0 mt-2 mt-sm-0 tx-normal tx-rubik tx-dark">$<span class="counter">1,500</span><small class="tx-15">.50</small></h2>
                                       <div class="d-flex align-items-center tx-gray-500"><span class="text-danger mr-2 d-flex align-items-center"></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6 col-xl-3">
                        <div class="card mg-b-20">
                           <div class="card-body pd-y-0">
                              <div class="custom-fieldset mb-4">
                                 <div class="clearfix">
                                    <label>Sold</label>
                                 </div>
                                 <div class="d-flex align-items-center text-dark">
                                    <div class="wd-40 wd-md-50 ht-40 ht-md-50 mg-r-10 mg-md-r-10 d-flex align-items-center justify-content-center rounded card-icon-primary">
                                       <i class="icon-handbag tx-primary tx-20"></i>
                                    </div>
                                    <div>
                                       <h2 class="tx-20 tx-sm-18 tx-md-24 mb-0 mt-2 mt-sm-0 tx-normal tx-rubik tx-dark">$<span class="counter">4,900</span><small class="tx-15">.50</small></h2>
                                       <div class="d-flex align-items-center tx-gray-500"><span class="text-success mr-2 d-flex align-items-center"></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6 col-xl-3">
                        <div class="card mg-b-20">
                           <div class="card-body pd-y-0">
                              <div class="custom-fieldset mb-4">
                                 <div class="clearfix">
                                    <label>Favorites</label>
                                 </div>
                                 <div class="d-flex align-items-center text-dark">
                                    <div class="wd-40 wd-md-50 ht-40 ht-md-50 mg-r-10 mg-md-r-10 d-flex align-items-center justify-content-center rounded card-icon-danger">
                                       <i class="icon-heart tx-danger tx-20"></i>
                                    </div>
                                    <div>
                                       <h2 class="tx-20 tx-sm-18 tx-md-24 mb-0 mt-2 mt-sm-0 tx-normal tx-rubik tx-dark">$<span class="counter">9,900</span><small class="tx-15">.50</small></h2>
                                       <div class="d-flex align-items-center tx-gray-500"><span class="text-danger mr-2 d-flex align-items-center"></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!--/ Count Card End -->
                  <div class="row row-xs clearfix">
                     <!--================================-->
                     <!--  Annual Report Start-->
                     <!--================================-->
                     <div class="col-lg-12 col-xl-8 col-12">
                        <div class="card mg-b-20">
                           <div class="card-header">
                              <h4 class="card-header-title">
                                 Reports
                              </h4>
                             
                           </div>
                           <div class="collapse show" id="annualReports">
                              <div class="card-body pd-t-0 pd-b-20">
                                 <div class="row clearfix">
                                    <div class="col-lg-4 col-md-4 col-sm-12 mg-y-20">
                                       <span class="tx-uppercase tx-10 mg-b-10">Sales Report</span>
                                       <h3 class="tx-20 tx-sm-18 tx-md-24 mg-b-0 tx-normal tx-rubik tx-dark">$<span class="counter">580,350</span><small class="tx-15">.50</small></h3>
                                       <div class="tx-11 d-flex tx-gray-500"><span class="text-success mr-2 d-flex align-items-center"></div>
                                       <p class="mg-t-10 mg-b-0 tx-12 tx-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore. <a href="">Learn More</a></p>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12 mg-y-20">
                                       <span class="tx-uppercase tx-10 mg-b-10">Annual Revenue</span>
                                       <h3 class="tx-20 tx-sm-18 tx-md-24 mg-b-0 tx-normal tx-rubik tx-dark">$<span class="counter">980,830</span><small class="tx-15">.50</small></h3>
                                       <div class="tx-11 d-flex tx-gray-500"><span class="text-success mr-2 d-flex align-items-center"></div>
                                       <p class="mg-t-10 mg-b-0 tx-12 tx-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore. <a href="">Learn More</a></p>
                                    </div>
                                    
                                 </div>
                                 <div class="d-block clearfix">
                                    <canvas id="annualReport"></canvas>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- / Annual Report End -->
                     <!--================================-->
                     <!-- Sales+Order+Revenue  Start -->
                     <!--================================-->
                     <div class="col-lg-12 col-xl-4">
                        <div class="row">
                           <div class="col-lg-6 col-xl-12">
                              <div class="card mg-b-20">
                                 <div class="card-body">
                                    <div id="sales_slider" class="carousel slide" data-ride="carousel" data-interval="4000">
                                       <div class="d-flex justify-content-between align-items-center mb-3">
                                          <span class="tx-10 tx-uppercase tx-gray-500">
                                          Sales
                                          </span>
                                          <div class="btn-group border-0">
                                             <div class="sw-carousel-slider-control">
                                                <a class="tx-dark carousel-control-prev" href="#sales_slider" data-slide="prev">
                                                <i class="fa fa-angle-left"></i>
                                                </a>
                                                <a class="tx-dark carousel-control-next" href="#sales_slider" data-slide="next">
                                                <i class="fa fa-angle-right"></i>
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="carousel-inner">
                                          <div class="carousel-item active">
                                             <div class="d-flex pd-b-20">
                                                <div class="mg-t-15">
                                                   <h3 class="tx-uppercase tx-11 tx-spacing-1 tx-semibold mg-b-0 tx-dark">Sales Report</h3>
                                                </div>
                                                <div class="mg-l-auto tx-right">
                                                   <span class="tx-10 tx-uppercase mg-b-0">Earning</span>
                                                   <h5 class="tx-dark tx-16 mg-b-0 tx-normal tx-rubik">$2,562</h5>
                                                </div>
                                             </div>
                                             <div class="clearfix">
                                                <div id="salesSpark1"></div>
                                             </div>
                                          </div>
                                          <div class="carousel-item ">
                                             <div class="d-flex pd-b-20">
                                                <div class="mg-t-15">
                                                   <h3 class="tx-uppercase tx-11 tx-spacing-1 tx-semibold mg-b-0 tx-dark">Annual Revenue</h3>
                                                </div>
                                                <div class="mg-l-auto tx-right">
                                                   <span class="tx-10 tx-uppercase mg-b-0">Earning</span>
                                                   <h5 class="tx-dark tx-16 mg-b-0 tx-normal tx-rubik">$4,562</h5>
                                                </div>
                                             </div>
                                             <div class="clearfix">
                                                <div id="salesSpark2"></div>
                                             </div>
                                          </div>
                                          
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-6 col-xl-12">
                              <div class="card mg-b-20">
                                 <div class="card-body">
                                    <div id="order_slider" class="carousel slide" data-ride="carousel" data-interval="5000">
                                       <div class="d-flex justify-content-between align-items-center mb-3">
                                          <span class="tx-10 tx-uppercase tx-gray-500">
                                          Order
                                          </span>
                                          <div class="btn-group border-0">
                                             <div class="sw-carousel-slider-control">
                                                <a class="tx-dark carousel-control-prev" href="#order_slider" data-slide="prev">
                                                <i class="fa fa-angle-left"></i>
                                                </a>
                                                <a class="tx-dark carousel-control-next" href="#order_slider" data-slide="next">
                                                <i class="fa fa-angle-right"></i>
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="carousel-inner">
                                          <div class="carousel-item active">
                                             <div class="d-flex pd-b-20">
                                                <div class="mg-t-15">
                                                   <h3 class="tx-uppercase tx-11 tx-spacing-1 tx-semibold mg-b-0 tx-dark">Sales Report</h3>
                                                </div>
                                                <div class="mg-l-auto tx-right">
                                                   <span class="tx-10 tx-uppercase mg-b-0">Earning</span>
                                                   <h5 class="tx-dark tx-16 mg-b-0 tx-normal tx-rubik">$6,562</h5>
                                                </div>
                                             </div>
                                             <div class="clearfix">
                                                <div id="orderSpark1"></div>
                                             </div>
                                          </div>
                                          <div class="carousel-item ">
                                             <div class="d-flex pd-b-20">
                                                <div class="mg-t-15">
                                                   <h3 class="tx-uppercase tx-11 tx-spacing-1 tx-semibold mg-b-0 tx-dark">Annual Revenue</h3>
                                                </div>
                                                <div class="mg-l-auto tx-right">
                                                   <span class="tx-10 tx-uppercase mg-b-0">Earning</span>
                                                   <h5 class="tx-dark tx-16 mg-b-0 tx-normal tx-rubik">$7,562</h5>
                                                </div>
                                             </div>
                                             
                                             <div class="clearfix">
                                                <div id="orderSpark2"></div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-6 col-xl-12 hidden-md">
                              <div class="card mg-b-20">
                                 <div class="card-body">
                                    <div id="revenue_slider" class="carousel slide" data-ride="carousel" data-interval="6000">
                                       <div class="d-flex justify-content-between align-items-center mb-3">
                                          <span class="tx-10 tx-uppercase tx-gray-500">
                                          Revenue
                                          </span>
                                          <div class="btn-group border-0">
                                             <div class="sw-carousel-slider-control">
                                                <a class="tx-dark carousel-control-prev" href="#revenue_slider" data-slide="prev">
                                                <i class="fa fa-angle-left"></i>
                                                </a>
                                                <a class="tx-dark carousel-control-next" href="#revenue_slider" data-slide="next">
                                                <i class="fa fa-angle-right"></i>
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="carousel-inner">
                                          <div class="carousel-item active">
                                             <div class="d-flex pd-b-20">
                                                <div class="mg-t-15">
                                                   <h3 class="tx-uppercase tx-11 tx-spacing-1 tx-semibold mg-b-0 tx-dark">Sales Report</h3>
                                                </div>
                                                <div class="mg-l-auto tx-right">
                                                   <span class="tx-10 tx-uppercase mg-b-0">Earning</span>
                                                   <h5 class="tx-dark tx-16 mg-b-0 tx-normal tx-rubik">$9,562</h5>
                                                </div>
                                             </div>
                                             <div class="clearfix">
                                                <div id="revenueSpark1"></div>
                                             </div>
                                          </div>
                                          <div class="carousel-item">
                                             <div class="d-flex pd-b-20">
                                                <div class="mg-t-15">
                                                   <h3 class="tx-uppercase tx-11 tx-spacing-1 tx-semibold mg-b-0 tx-dark">Annual Revenue</h3>
                                                </div>
                                                <div class="mg-l-auto tx-right">
                                                   <span class="tx-10 tx-uppercase mg-b-0">Earning</span>
                                                   <h5 class="tx-dark tx-16 mg-b-0 tx-normal tx-rubik">$7,562</h5>
                                                </div>
                                             </div>
                                            
                                             <div class="clearfix">
                                                <div id="revenueSpark3"></div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- / Sales+Order+Revenue  End -->
                  <!--================================-->
                  <!-- Transaction History Start -->
                  <!--================================--> 				  
                  <div class="row row-xs clearfix">
                     <div class="col-xl-12 ">
                        <div class="card mg-b-20">
                           <div class="card-header">
                              <h4 class="card-header-title">
                                 Transaction History
                              </h4>
                              
                           </div>
                           <div class="collapse show" id="transactionHistory">
                              <ul class="list-group list-group-flush tx-13">
                                 <li class="list-group-item d-flex pd-sm-x-20">
                                    <div class="d-none d-sm-block"><span class="wd-40 ht-40 mg-r-10 d-flex align-items-center justify-content-center rounded card-icon-success"><i class="icon ion-checkmark"></i></span></div>
                                    <div class="pd-sm-l-10">
                                       <p class="tx-dark mg-b-0">Payment from <a href="" class="tx-dark mg-b-0 tx-semibold">#985632</a></p>
                                       <span class="tx-12 mg-b-0 tx-gray-500">Customar ID: #857423</span>
                                    </div>
                                    <div class="mg-l-auto text-right">
                                       <p class="mg-b-0 tx-rubik tx-dark">+$450<small class="tx-10">.50</small></p>
                                       <span class="tx-12 tx-success mg-b-0">Completed</span>
                                    </div>
                                 </li>
                                 <li class="list-group-item d-flex pd-sm-x-20">
                                    <div class="d-none d-sm-block"><span class="wd-40 ht-40 mg-r-10 d-flex align-items-center justify-content-center rounded card-icon-success"><i class="icon ion-checkmark"></i></span></div>
                                    <div class="pd-sm-l-10">
                                       <p class="tx-dark mg-b-0">Process refund to <a href="" class="tx-dark mg-b-0 tx-semibold">#458762</a></p>
                                       <span class="tx-12 mg-b-0 tx-gray-500">Customar ID: #354155</span>
                                    </div>
                                    <div class="mg-l-auto text-right">
                                       <p class="mg-b-0 tx-rubik tx-dark">+$180<small class="tx-10">.50</small></p>
                                       <span class="tx-12 tx-success mg-b-0">Completed</span>
                                    </div>
                                 </li>
                                 <li class="list-group-item d-flex pd-sm-x-20">
                                    <div class="d-none d-sm-block"><span class="wd-40 ht-40 mg-r-10 d-flex align-items-center justify-content-center rounded card-icon-warning"><i class="icon ion-shuffle"></i></span></div>
                                    <div class="pd-sm-l-10">
                                       <p class="tx-dark mg-b-0">Process delivery to <a href="" class="tx-dark mg-b-0 tx-semibold">#698524</a></p>
                                       <span class="tx-12 mg-b-0 tx-gray-500">Customar ID: #452356</span>
                                    </div>
                                    <div class="mg-l-auto text-right">
                                       <p class="mg-b-0 tx-rubik tx-dark">5 Items</p>
                                       <span class="tx-12 tx-warning mg-b-0">For pickup</span>
                                    </div>
                                 </li>
                                 <li class="list-group-item d-flex pd-sm-x-20">
                                    <div class="d-none d-sm-block"><span class="wd-40 ht-40 mg-r-10 d-flex align-items-center justify-content-center rounded card-icon-success"><i class="icon ion-checkmark"></i></span></div>
                                    <div class="pd-sm-l-10">
                                       <p class="tx-dark mg-b-0">Payment from <a href="" class="tx-dark mg-b-0 tx-semibold">#365845</a></p>
                                       <span class="tx-12 mg-b-0 tx-gray-500">Customar ID: #748562</span>
                                    </div>
                                    <div class="mg-l-auto text-right">
                                       <p class="mg-b-0 tx-rubik tx-dark">+$129<small class="tx-10">.50</small></p>
                                       <span class="tx-12 tx-success mg-b-0">Completed</span>
                                    </div>
                                 </li>
                                 <li class="list-group-item d-flex pd-sm-x-20">
                                    <div class="d-none d-sm-block"><span class="wd-40 ht-40 mg-r-10 d-flex align-items-center justify-content-center rounded card-icon-danger"><i class="icon ion-close"></i></span></div>
                                    <div class="pd-sm-l-10">
                                       <p class="tx-dark mg-b-0">Payment failed from <a href="" class="tx-dark mg-b-0 tx-semibold">#475821</a></p>
                                       <span class="tx-12 mg-b-0 tx-gray-500">Customar ID: #457771</span>
                                    </div>
                                    <div class="mg-l-auto text-right">
                                       <p class="mg-b-0 tx-rubik tx-dark">-$150<small class="tx-10">.50</small></p>
                                       <span class="tx-12 tx-danger mg-b-0">Declined</span>
                                    </div>
                                 </li>
                                 <li class="list-group-item d-flex pd-sm-x-20">
                                    <div class="d-none d-sm-block"><span class="wd-40 ht-40 mg-r-10 d-flex align-items-center justify-content-center rounded card-icon-danger"><i class="icon ion-close"></i></span></div>
                                    <div class="pd-sm-l-10">
                                       <p class="tx-dark mg-b-0">Payment failed from <a href="" class="tx-dark mg-b-0 tx-semibold">#985324</a></p>
                                       <small class="tx-12 mg-b-0 tx-gray-500">Customar ID: #548596</small>
                                    </div>
                                    <div class="mg-l-auto text-right">
                                       <p class="mg-b-0 tx-rubik tx-dark">-$190<small class="tx-10">.50</small></p>
                                       <span class="tx-12 tx-danger mg-b-0">Declined</span>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     
                     </div>
                  </div>
                  <!-- Transaction History End -->
                  <div class="row row-xs crearfix">
                     <!--================================-->
                     <!-- Product Sales Details Start -->
                     <!--================================--> 
                     
                     <!--/ Product Sales Details Start -->
                     <!--================================-->
                     <!-- Sales/Revenue Details Start -->
                     <!--================================--> 
                     <div class="col-sm-12 col-xl-12">
                        <div class="card mg-b-20">
                           <div class="card-header">
                              <h4 class="card-header-title">
                                 Sales/Revenue Details
                              </h4>
                              
                           </div>
                           <div class="card-body pd-0 collapse show" id="salesRevenuDetails">
                              <div id="salesRevenueBarChart"></div>
                           </div>
                        </div>
                     </div>
                     <!-- Sales/Revenue Details End -->					 
                  </div>
                  <!--================================-->
                  <!-- Acquisition/Sessions Start -->
                  <!--================================--> 				  
                  <div class="row row-xs">
                     <div class="col-xl-4">
                     </div>
                     <!-- Acquisition/Sessions End -->
                     <!--================================-->
                     <!-- Customar Details Start -->
                     <!--================================--> 		
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
                                 </table>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <footer class="page-footer">
               <div class="pd-t-4 pd-b-0 pd-x-20">
                  <div class="tx-10 tx-uppercase">
                     <p class="pd-y-10 mb-0">  Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, suscipit.    </p>
                  </div>
               </div>
            </footer>
            <!--/ Page Footer End -->		
         </div>
         <!--/ Page Content End -->
      </div>

      

      <!-- Footer Script -->
      <!--================================-->
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