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
                    <li>
                        <a href="shop.php">Shop</a>
                    </li>
                   <li>
                        <a href="checkout.php">My Account</a>
                    </li>
                  <li class="active">
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
                                Cart
                            </li>
                             </ul>
                        
                    </div><!--col-md-12 end-->
                    
        <div class="col-md-9" id="cart"><!--col md-9 start-->
            <div class="box">
                <form action="cart.php" method="post" enctype="multipart-form-data">
                    <h1>Shopping Cart</h1>
                    <p class="text-muted">Currently you have 3 item(s) in the cart</p>
                    <div class="table-responsive"><!--table-responsive start-->
                        <table class="table">
                            <thead>
                                <tr>
                                    <th colspan="2">Product</th>
                                    <th>Quantity</th>
                                    <th>Unit Price</th>
                                    <th>Size</th>
                                    <th colspan="1">Delete</th>
                                    <th colspan="1">Sub Total</th>
                                </tr>
                            </thead>
                        <tbody>
                            <tr>
                                <td><img src="admin_area/product_images/polo.png"></td>
                                <td>Scott International Men's Regular Fit T-Shirt (Pack of 3)</td>
                                <td>2</td>
                                <td>INR 500</td>
                                <td>Large</td>
                                <td><input type="checkbox" name="remove[]"></td>
                                <td>INR 1000</td>
                            </tr>
                            <tr>
                                <td><img src="admin_area/product_images/1.png"></td>
                                <td>Scott International Men's Regular Fit T-Shirt (Pack of 3)</td>
                                <td>2</td>
                                <td>INR 500</td>
                                <td>Large</td>
                                <td><input type="checkbox" name="remove[]"></td>
                                <td>INR 1000</td>
                            </tr>
                        </tbody>    
                        <tfoot>
                            <tr>
                                <th colspan="5">Total</th>
                                <th colspan="2">INR 2000</th>
                            </tr>
                        </tfoot>
                        </table>
                    </div> <!--table-responsive end-->
                    <div class="box-footer">
                    <div class="pull-left"><!--pull left start-->
                            <a href="index.php" class="btn btn-default">
                                <i class="fa fa-chevron-left"></i>Continue Shopping
                            </a>
                            </div><!--pull left end-->
                    <div class="pull-right">
                        <button class="btn btn-default" type="submit" name="update" value="Update Cart">
                            <i class="fa fa-refresh">Update Cart</i>
                        </button>
                        <a href="checkout.php" class="btn btn-primary">
                            Proceed to checkout<i class="fa fa-chevron-right"></i>
                        </a>
                        
                    </div>
                        
                    </div>
                </form>
                
            </div><!--box end-->
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
            
        </div><!--col md-9 end-->
        <div class="col-md-3"><!--col md-3-->
            <div class="box" id="order-summery">
            <div class="box-header">
                <h3>Order Summary</h3>
            </div> 
                <p class="text-muted">
                    Shipping and Taxes are calculated based on the products you have purchased.
                </p>
                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Order Subtotal</td>
                                <th>INR 2000</th>
                            </tr>
                            <tr>
                                <td>Shipping and handling</td>
                                <td>INR 0</td>
                            </tr>
                            <tr>
                                <td>Tax</td>
                                <td>INR 0</td>
                            </tr>
                            <tr class="total">
                            <td>Total</td>
                            <th>INR 2000</th> 
                                
                            </tr>
                        </tbody>
                        
                    </table>
                    
                </div>
            </div>
            
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

                    