<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Section</title>
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





                <div class="p-3 mx-auto ">
                    <h1 class="text-secondary mx-auto ">Home Section</h1>
                    <form>
                      <div class="row d-flex justify-content-center ">
                        <div class="form-group col-md-12 col-xl-4">
                          <label for="image" class="text-secondary">Book Image: (Note:First image)</label>

                          <div class="custom-file">
                              <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
                              <label class="custom-file-label" for="exampleInputFile">Image 880*430 required ! </label>
                            </div> 
                       
                        </div>
                      </div>
                      <hr>
                      <div class="row d-flex justify-content-center">
                      <div class="col-md-6 col-xl-6">
                        <div class="form-group">
                        <label for="image" class="text-secondary">Book Image: (Note:image 2)</label>

                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
                            <label class="custom-file-label" for="exampleInputFile">Image 500*500 required ! </label>
                          
                          </div> 
                        </div>
                          
                        
                          <div class="form-group col-md-12 col-xl-12">
                            <label for="description" class="text-secondary"> Description:</label>
                            <textarea class="form-control" id="description"  placeholder="Enter Description"></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="form-group col-md-6 col-xl-6">
                    <label for="category" class="text-secondary">Category:</label>
                    <select class="form-control" id="category">
                      <option value="category1">Category 1</option>
                      <option value="category2">Category 2</option>
                      <option value="category3">Category 3</option>
                    </select>
                    
                  </div>     
                  <hr>
                  <div class="row d-flex justify-content-center">
                    <div class="col-md-6 col-xl-6">
                      <div class="form-group">
                      <label for="image" class="text-secondary">Book Image: (Note:image 3)</label>

                      <div class="custom-file">
                          <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
                          <label class="custom-file-label" for="exampleInputFile">Image 500*500 required ! </label>
                        
                        </div> 
                      </div>
                        
                      
                        <div class="form-group col-md-12 col-xl-12">
                          <label for="description" class="text-secondary"> Description:</label>
                          <textarea class="form-control" id="description"  placeholder="Enter Description"></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="form-group col-md-6 col-xl-6 ">
                  <label for="category" class="text-secondary">Category:</label>
                  <select class="form-control " id="category">
                    <option value="category1">Category 1</option>
                    <option value="category2">Category 2</option>
                    <option value="category3">Category 3</option>
                  </select>
                  
                </div>          
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