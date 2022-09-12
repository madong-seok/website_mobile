<!DOCTYPE html>
<!--
	ustora by freshdesignweb.com
	Twitter: https://twitter.com/freshdesignweb
	URL: https://www.freshdesignweb.com/ustora/
-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CỬA HÀNG DI ĐỘNG BA ANH EM</title>
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="style1.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
   
 <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>
                            <li>
                                <!-- Trigger/Open The Modal -->
                                <a id="myBtn" href="#"><i class="fa fa-user"></i>Đăng nhập</a>

                                <!-- The Modal -->
                                <div id="myModal" class="modal">

                                <!-- Modal content -->
                                <div class="modal-content wrapper">
                                    <span class="close">&times;</span>
                                    <form class="bg" >
                                        <label>Tài khoản : </label></br>
                                        <input class="form2" type="text"/></br>
                                        <label>Mật khẩu : </label></br>
                                        <input class="form2" type="password"/>
                                        
                                        <p></p>
                                        <input type="submit" name="dangnhap" value="Đăng Nhập">

                                        <a href="register.php">Đăng ký</a>
                                        <a href="#">Quên mật khẩu</a>
                                    </form>
                                    
                                </div>
                                </div>

                                <script>
                                    // Get the modal
                                    var modal = document.getElementById("myModal");
                                    
                                    // Get the button that opens the modal
                                    var btn = document.getElementById("myBtn");
                                    
                                    // Get the <span> element that closes the modal
                                    var span = document.getElementsByClassName("close")[0];
                                    
                                    // When the user clicks the button, open the modal 
                                    btn.onclick = function() {
                                      modal.style.display = "block";
                                    }
                                    
                                    // When the user clicks on <span> (x), close the modal
                                    span.onclick = function() {
                                      modal.style.display = "none";
                                    }
                                    
                                    // When the user clicks anywhere outside of the modal, close it
                                    window.onclick = function(event) {
                                      if (event.target == modal) {
                                        modal.style.display = "none";
                                      }
                                    }
                                    </script>

                            </li>                         
                            <li><a href="register.php">Đăng ký</a></li>
                            
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="header-right">
                        <ul class="list-unstyled list-inline">
                            <li class="dropdown dropdown-small">
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">Tiền tệ:</span><span class="value">VND </span><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">VND</a></li>
                                    <li><a href="#">USD</a></li>
                                    
                                </ul>
                            </li>

                            <li class="dropdown dropdown-small">
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">Ngôn ngữ:</span><span class="value">Tiếng Việt </span><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Tiếng Việt</a></li>
                                    <li><a href="#">English</a></li>
                                  
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End header area -->
    
    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <h1><a href="index.php"><img src="img/3ae_new.png"></a></h1>
                    </div>
                </div>
                
                <div class="col-sm-6">
                    <div class="shopping-item">
                        <a href="cart.php?action=select">Giỏ Hàng - <span class="cart-amunt">0 VND</span> <i class="fa fa-shopping-cart"></i> <span class="product-count">0</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End site branding area -->
    
    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                  
                </div> 
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                      <li ><a href="index.php">Trang Chủ</a></li>
                        <li class="dropdown">
                                <a href="#">Sản Phẩm</a> 
                                <div class="dropdown-content" >
                                    <h3>Điện thoại</h3></br>
                                    <a href="ip_product.php">Iphone</a>
                                    <a href="ss_product.php">Samsung</a>
                                    <a href="oppo_product.php">Oppo</a>
                                    <a href="vivo_product.php">Vivo</a>
                                    <a href="xiaomi_product.php">Xiaomi</a>
                                </br>
                                </br>
                                <div class="dropdown-content" >
                                    <h3>Phụ kiện</h3></br>
                                    <a href="tn_product.php">Tai nghe</a>
                                    <a href="sdp_product.php">Dây xạc</a>
                                    <a href="cs_product.php">Sạc dự phòng</a>    
                                    <a href="loa_product.php">Loa JBL</a>
                                  
                                </br>
                            </br>
                                </div>
           
                        </li>
                      
                        <li><a href="cart.php">Giỏ Hàng</a></li>
                        <li><a href="#">Thanh Toán</a></li>                       
                        <li><a href="contact.php">Liên Hệ</a></li>
                        <li>
                             <form method="POST" action="search_product.php">
                            <div class="box">
                                <div class="container-1">
                                    <span class="icon"><i class="fa fa-search"></i></span>
                                    <input type="search" id="search" placeholder="Tìm kiếm" name="search" />
                                </div>
                            </div>
                        </li> 
                        <li>
                            <div class="btnTK">
                                <div class="hover">
                                    <input type="submit" id="button" value="Tìm kiếm" name="submit">
                                </div>
                            </div>  
                            </form>
                        </li> 
                    </ul> 
                    </ul>
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area --> 
    
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Thông tin sản phẩm</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>  
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-sidebar">
                        <h2 class="sidebatr-title">Tìm kiếm sản phẩm khác</h2>
                        <form method="POST" action="search_product.php">
                            <input type="text" name="search" placeholder="Nhập tên sản phẩm...">
                            <input type="submit" name="submit" value="Tìm kiếm">
                             <p>.</p>
                        </form>
                       
                    </div>
                        <?php 
                        include 'control.php';
                        $get_data = new data();
                        $products = $get_data -> se_product_ip_top5();
                        $products1 = $get_data -> se_product_ip_top8();
                        $products2 = $get_data -> se_product_top8();
                        ?>
                    <div class="single-sidebar">
                        <br>
                        <h2 class="sidebar-title"></h2>

                        <?php
                         foreach($products as $pro) {
                        ?>

                        <div class="thubmnail-recent">
                            <img src="img/<?php echo $pro['Image'] ?>" class="recent-thumb" alt="">
                            <h2><a href="single_product.php?id=<?php echo $pro['ID_Product'] ?>"><?php echo $pro['NameProduct'] ?></a></h2>
                            <div class="product-sidebar-price">
                                <ins><?php echo number_format($pro['Price']) ?></ins><span>VND</span>
                            </div>                             
                        </div>
                        <?php } ?>
                    
                    </div>
                    
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Đề xuất</h2>
                        <ul>
                            <?php
                         foreach($products as $pro) {
                        ?>
                            <li><a href="single_product.php?id=<?php echo $pro['ID_Product'] ?>"><?php echo $pro['NameProduct'] ?></a></li>
                            <?php } ?>  
                        </ul>
                    </div>
                </div>
                            <?php 
                                
                                $select = $get_data -> se_product_byid($_GET['id']);
                                foreach($select as $se)
                            ?>
                <div class="col-md-8">
                    <div class="product-content-right">
                        <div class="product-breadcroumb">
                            <a href="index.php">Trang chủ</a>
                            <a href="#"><?php echo $se['Brand']?></a>
                            <a href="#"><?php echo $se['NameProduct']?></a>
                        </div>
                        
                            
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="product-images">
                                    <div class="product-main-img_single">
                                        <img src="img/<?php echo $se['Image'] ?>" alt="">
                                    </div>          
                                    <div class="product-gallery">
                                        <img src="img/sp/iphone13promax1.jpg" alt="">
                                       <img src="img/sp/iphone13promax2.jpg" alt="">
                                       <img src="img/sp/iphone13promax7.jpg" alt="">
                                       <img src="img/sp/iphone13promax8.jpg" alt="">
                                       <img src="img/sp/iphone13promax5.jpg" alt="">
                                       <img src="img/sp/iphone13promax6.jpg" alt="">
                                    </div>
                                </div>
                            </div> 
                            <div class="col-sm-6">
                                <div class="product-inner">
                                    <h2 class="product-name"><?php echo $se['NameProduct'] ?></h2>
                                    <div class="product-inner-price">
                                       <span>Giá sản phẩm:</span> <ins><?php echo number_format($se['Price']) ?></ins><span>VND</span>  
                                    </div>           
                                    <form action="cart.php?action=add" class="cart" method="POST">
                                        <div class="quantity">
                                            <input type="text" size="2" class="input-text qty text"  value="1" name="quantity[<?php echo $se['ID_Product']?>]">
                                        </div>
                                        <input class="add_to_cart_button" type="submit" value="Mua ngay">
                                    </form>                                      
                                    <div role="tabpanel">
                                       
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                                <h2>Thông số kỹ thuật:</h2> 
                                                <ul>
                                                    <li>Màn hình:IPS LCD6.1"Liquid Retina</li>
                                                    <li>Hệ điều hành:iOS 15</li>
                                                    <li>Camera sau:2 camera 12 MP </li>
                                                    <li>Camera trước:12 MP</li>
                                                    <li>Chip:Apple A13 Bionic</li>
                                                    <li>RAM:4 GB Bộ nhớ trong:64 GB </li>
                                                    <li>SIM:1 Nano SIM & 1 eSIM</li>
                                                    <li>Hỗ trợ 4G Pin, Sạc:3110 mAh18 W</li>
                                                </ul> 
                                                     
                                            </div>                                           
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="related-products-wrapper">
                            <h2 class="related-products-title">Phụ kiện đi kèm</h2>
                            <div class="related-products-carousel">
                                <?php
                         foreach($products2 as $pro2) {
                        ?>
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="img/<?php echo $pro2['Image'] ?>" alt="">
                                        <div class="product-hover">
                                            <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ</a>
                                            <a href="" class="view-details-link"><i class="fa fa-link"></i> Chi tiết</a>
                                        </div>
                                    </div>

                                    <h2><a href="single_product.php?id=<?php echo $pro2['ID_Product'] ?>"><?php echo $pro2['NameProduct'] ?></a></h2>

                                    <div class="product-carousel-price">
                                        <ins><?php echo number_format($pro2['Price']) ?></ins><span>VND</span>
                                    </div> 
                                </div>
                                <?php } ?>
                                                                    
                            </div>
                        </div>
                    </div>   
                    
                             <div class="related-products-wrapper">
                            <h2 class="related-products-title">Sản phẩm tương tự</h2>
                            <div class="related-products-carousel">
                                <?php
                         foreach($products1 as $pro1) {
                        ?>
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="img/<?php echo $pro1['Image'] ?>" alt="">
                                        <div class="product-hover">
                                            <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ</a>
                                            <a href="" class="view-details-link"><i class="fa fa-link"></i> Chi tiết</a>
                                        </div>
                                    </div>

                                    <h2><a href="single_product.php?id=<?php echo $pro1['ID_Product'] ?>"><?php echo $pro1['NameProduct'] ?></a></h2>

                                    <div class="product-carousel-price">
                                        <ins><?php echo number_format($pro1['Price']) ?></ins><span>VND</span>
                                    </div> 
                                </div>
                                <?php } ?>
                                                                    
                            </div>
                        </div>                 
                </div>
            </div>
        </div>


    </div>

     <div class="footer-top-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-about-us">
                        <p><img src="img/3ae_new2.png"></p>
                        <p style="font-size: 16px;">Cửa hàng điện thoại di động BA ANH EM tự hào cung cấp đến quý khách hàng những sản phẩm chất lượng tốt nhât. Dịch vụ chăm sóc hàng đầu, bảo hành nhanh chóng khuyễn mãi hấp dẫn. Cảm ơn quý khách hàng luôn tin tưởng và lựa chọn sản phẩm của chũng tôi !</p>
                        <div class="footer-social">
                            <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Người dùng </h2>
                        <ul>
                            <li><a href="#">Quản lý tài khoản</a></li>
                            <li><a href="#">Lịch sử mua hàng</a></li>
                            <li><a href="#">Địa chỉ thanh toán</a></li>
                            <li><a href="#">Liên hệ cửa hàng</a></li>
                            <li><a href="#">Mua sắm</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Danh mục</h2>
                        <ul>
                            <li><a href="#">Iphone</a></li>
                            <li><a href="#">Samsung</a></li>
                            <li><a href="#">Xiaomi</a></li>
                            <li><a href="#">Oppo</a></li>
                            <li><a href="#">Vivo</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-newsletter">
                        <h2 class="footer-wid-title">Tin tức</h2>
                        <p>Nhập địa chỉ Email để nhận được những thông tin mới nhất về các sản phẩm cảu cửa hàng !</p>
                        <div class="newsletter-form">
                            <form action="#">
                                <input type="email" placeholder="Nhập email của bạn">
                                <input type="submit" value="Đăng ký">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer top area -->
    
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright">
                        <p>&copy; 2022 Baanhem. All Rights Reserved.</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="footer-card-icon">
                        <i class="fa fa-cc-discover"></i>
                        <i class="fa fa-cc-mastercard"></i>
                        <i class="fa fa-cc-paypal"></i>
                        <i class="fa fa-cc-visa"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer bottom area -->
   
    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    
    <!-- jQuery easing -->
    <script src="js/jquery.easing.1.3.min.js"></script>
    
    <!-- Main Script -->
    <script src="js/main.js"></script>
    
    <!-- Slider -->
    <script type="text/javascript" src="js/bxslider.min.js"></script>
	<script type="text/javascript" src="js/script.slider.js"></script>
  </body>
</html>