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

                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li class="active">
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
                                Shop
                            </li>
                             </ul>
                        
                    </div><!--col-md-12 end-->
                    <div class="col-md-3"> <!--col-md-3 start-->
                        <?php
                            include("includes/sidebar.php");
                        ?>
                        
                    </div><!--col-md-3 end-->
       <div class="col-md-9">
        <div class="row" id="productmain">
            <div class="col-sm-6"><!--col-sm-6 slider start-->
                <div id="mainimage">
                    <div id="mycarousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                        <li data-target="mycarousel" data-slide-to="0" class="active"></li> 
                        <li data-target="mycarousel" data-slide-to="1"></li> 
                        <li data-target="mycarousel" data-slide-to="2"></li> 
                         </ol>
                         <div class="carousel-inner"><!--carousel-inner start-->
                            <div class="item active">
                                <center>
                                    <img src="admin_area/product_images/polo.png" class="img-responsive">
                                </center>
                                </div>
                    <div class="item">
                        <center>
                            <img src="admin_area/product_images/11.png" class="img-responsive">
                        </center>
                        </div>
                    <div class="item">
                        <center>
                            <img src="admin_area/product_images/12.png" class="img-responsive">
                        </center>
                        </div>

                         </div><!--carousel-inner end-->
                <a href="mycarousel" class="left carousel-control" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                 <a href="mycarousel" class="right carousel-control" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
                        
                    </div>
                    
                </div>
                
            </div><!--col-sm-6 slider end-->
            <div class="col-sm-6">
                <div class="box"><!--box start-->
                    <h1 class="text-center">Scott International Men's Regular Fit T-Shirt (Pack of 3)</h1>
                    <form action="details.php" method="post" class="form-horizontal"><!--form start-->
                        <div class="form-group"><!--form group start-->
                            <label class="col-md-5 control-lable">Product Quantity</label>
                            <div class="col-md-7"><!--col-md-7 start-->
                                <select name="product_qty" class="form-control">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div><!--col-md-7 end-->
                         </div><!--form group end-->
                        <div class="form-group">
                            <label class="col-md-5 control-lable">Product Size</label>
                            <div class="col-md-7">
                                <select name="product_size" class="form-control">
                                    <option>Select a Size</option>
                                    <option>Small</option>
                                    <option>Medium</option>
                                    <option>Large</option>
                                    <option>Extra-Large</option>
                                </select>
                            </div>
                        </div>
                        <p class="price">INR 500</p>
                        <p class="text-center buttons">
                            <button class="btn btn-primary" type="submit">
                            <i class="fa fa-shopping-cart"></i>Add to cart
                        </button>
                        </p>
                    </form><!--form end-->
                     </div><!--box end-->
                     <div class="col-xs-4">
                         <a href="#" class="thumb">
                            <img src="admin_area/product_images/10.png" class="img-responsive">
                             </a>
                     </div>
                      <div class="col-xs-4">
                         <a href="#" class="thumb">
                            <img src="admin_area/product_images/11.png" class="img-responsive">
                             </a>
                     </div>
                      <div class="col-xs-4">
                         <a href="#" class="thumb">
                            <img src="admin_area/product_images/12.png" class="img-responsive">
                             </a>
                     </div>

                
            </div>
            
        </div>
        <div class="box" id="details">
            <h4>Product Details</h4>
            <p>Care Instructions: Wash with mild detergent, do not bleach, dry in shade
Fit Type: regular fit
60% cotton and 40% polyester
Regular fit
Banded collar
Half sleeve
Wash with mild detergent, do not bleach, dry in shade
Made in India
Plus size available from size XXL onwards
Country of Origin: India
</p>
<h4>Size</h4>
<ul>
    <li>Small</li>
    <li>Medium</li>
    <li>Large</li>
    <li>Extra Large</li>
</ul>
            
        </div>
    <div id="row same-height-row"><!--row same-height-row start-->
        <div class="col-md-3 col-sm-6"><!--col-md-3 col-sm-6 start-->
            <div class="box same-height-headline"><!--box same-height-headline start-->
                <h3 class="text-center">Products related to this item</h3>
                
            </div><!--box same-height-headline end-->
        </div><!--col-md-3 col-sm-6 end-->
        <div class="center-responsive col-md-3"><!--center-responsive col-md-3 start-->
            <div class="product same-height">
                <a href="">
                    <img src="admin_area/product_images/3.png" class="img-responsive">
                </a>
                <div class="text">
                    <h3><a href="details.php">Scott International Men's Regular Fit T-Shirt (Pack of 3)</a></h3>
                    <p class="price">INR 500</p>
                     
                </div>
                
            </div>

        </div><!--center-responsive col-md-3 end-->
        <div class="center-responsive col-md-3"><!--center-responsive col-md-3 start-->
            <div class="product same-height">
                <a href="">
                    <img src="admin_area/product_images/3.png" class="img-responsive">
                </a>
                <div class="text">
                    <h3><a href="details.php">Scott International Men's Regular Fit T-Shirt (Pack of 3)</a></h3>
                    <p class="price">INR 500</p>
                     
                </div>
                
            </div>

        </div><!--center-responsive col-md-3 end-->
        <div class="center-responsive col-md-3"><!--center-responsive col-md-3 start-->
            <div class="product same-height">
                <a href="">
                    <img src="admin_area/product_images/3.png" class="img-responsive">
                </a>
                <div class="text">
                    <h3><a href="details.php">Scott International Men's Regular Fit T-Shirt (Pack of 3)</a></h3>
                    <p class="price">INR 500</p>
                     
                </div>
                
            </div>

        </div><!--center-responsive col-md-3 end-->
    </div><!--row same-height-row end-->
       </div>             
               
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