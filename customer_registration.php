<!DOCTYPE html>
<html>
<head>
	<title>EZ</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="styles/style.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
	<div id="top"> <!--Top BAR Start-->
		<div class="container"> <!--container Start-->
			<div class="col-md-6 offer"> <!--col-md-6 offer start-->
				<a href="#" class="btn btn-success btn-sm">
					
					Welcome Guest
				</a>

				<a href="#">Shopping Cart Total Price: INR 100,Total items 2 </a>
				
			</div> <!--col-md-6 offer start-->

			<div class="col-md-6">
				<ul class="menu">
					<li>
						<a href="customer_registration.php">Register</a>
					</li>
					<li>
						<a href="checkout.php">My Account</a>
					</li>
					<li>
						<a href="cart.php">Go to Cart</a>
					</li>
					<li>
						<a href="login.php">Login</a>
					</li>
				</ul>
				

			</div>

			
		</div> <!--container End-->



	</div> <!--Top Bar End-->

	<div class=" navbar navbar-default " id="navbar" style="background: white;"> <!--navbar navbar-default start -->


    <div class="container">

        <div class="navbar-header"><!--navbar header start -->
            <a href="index.php" class="navbar-brand home">
                <img src="images/logo3.jpg" alt="EasyShopSite" class="hidden-xs" style="width: 100px; height: 80px; margin-top: -10% ; padding-bottom: 19%;">
                <img src="images/logo2.png" alt="EasyShopSite" class="visible-xs" style="width: 90px; height: 90px; margin-top:-15%;">
            </a>

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
            	<span class="sr-only"></span>
            	<i class="fa fa-align-justify"> </i>
            </button>

           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
           	    <span class="sr-only"></span>
           	    <i class="fa fa-search"></i>
           </button>
           </div><!--navbar-header start-->

           <div class="navbar-collapse collapse" id="navigation"> <!--navbar collapse collapse start -->

            <div class="padding-nav"> <!--padding-nav start -->
                <ul class="nav navbar-nav navbar-left">

                    <li class="active">
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="shop.php">Shop</a>
                    </li>
                   <li>
                        <a href="checkout.php">My Account</a>
                    </li>
                  <li>
                        <a href="cart.php">Shopping Cart</a>
                    </li>
                    <li>
                        <a href="about.php">About Us</a>
                    </li>
                    <li>
                        <a href="services.php">Services</a>
                    </li>
                    <li>
                        <a href="contactus.php">Contact Us</a>
                    </li>
                    </ul>

            </div> <!--padding-nav start -->
          
            <div class="navbar-collapse collapse right"> <!--navbar collapse collapse-right start-->
            	<button class="btn navbar-btn btn-primary" type="button" data-toggle="collapse" data-target="#search">
            		<span class="sr-only"> Toggle Search</span>
            		<i class="fa fa-search"></i>
            	</button>

            <a href="cart.php" class="btn btn-primary navbar-btn right">
            	<i class="fa fa-shopping-cart"></i>
            	<span>4 Items In Cart</span>
            </a>
            	

            </div><!--navbar collapse collapse-right start-->

            <div class="collapse clearfix" id="search">
            	<form class="navbar-form" method="get" action="result.php">
            		<div class="input-group">
            			<input type="text" name="user_query" placeholder="Search" class="form-control" required="">
           <span class="input-group-btn">
            <button type="submit" value="Search" name="Search" class="btn btn-primary">
            				<i class="fa fa-search"></i>
            				
   			</button>
            </span>			
            		</div>
            		
            	     </form>

            	
                     </div>
             
              </div><!--navbar collapse collapse end-->
                    
                    </div>

               </div><!--navbar navbar-default End -->

               <div id="content">
                <div class="container"> <!--container start-->
                    <div class="col-md-12"><!--col-md-12 start-->
                        <ul class="breadcrumb">
                            <li><a href="home.php">Home</a></li>
                            <li>
                                Registration
                            </li>
                             </ul>
                        
                    </div><!--col-md-12 end-->
                    <div class="col-md-3"> <!--col-md-3 start-->
                        <?php
                            include("includes/sidebar.php");
                        ?>
                        
                    </div><!--col-md-3 end-->
         <div class="col-md-9"><!--col-md-9 start-->
            <div class="box"><!--box start-->
              <div class="box-header"><!--box header start-->
                      <center>
                 <h2>Customer Registration</h2>
                      </center>
                 </div><!--box header end-->
                 <form action="customer_registration.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Customer Name</label>
                        <input type="text" name="c_name" required="" class="form-control">
                    </div>
                     <div class="form-group">
                        <label>Customer Email</label>
                        <input type="text" name="c_email" class="form-control" required="">
                     </div>
                     <div class="form-group">
                        <label>Customer Password</label>
                        <input type="Password" name="c_password" class="form-control" required="">
                     </div>
                     <div class="form-group">
                        <label>Country</label>
                        <input type="text" name="c_country" class="form-control" required="">
                     </div>

                     <div class="form-group">
                        <label>City</label>
                        <input type="text" name="c_city" class="form-control" required="">
                     </div>
                     <div class="form-group">
                        <label>Contact Number</label>
                        <input type="text" name="c_contact" class="form-control" required="">
                     </div>
                     <div class="form-group">
                        <label>Address</label>
                        <input type="text" name="c_address" class="form-control" required="">
                     </div>
                     <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="c_image" class="form-control" required="">
                     </div>
                     <div class="text-center">
                        <button type="submit" name="submit" class="btn btn-primary">
                            <i class="fa fa-user-md"></i>Register
                        </button>
                     </div>
                 </form>
                            
              </div><!--box end-->
                        
          </div><!--col-md-9 end-->






</div> <!--container end-->
                   
               </div> <!--content end-->




                <!--Footer Start-->
      <?php
      include("includes/footer.php");
      ?>



       <!--Footer end-->


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
</body>
</html>