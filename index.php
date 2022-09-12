<?php
    session_start();
?>  
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CỬA HÀNG DI ĐỘNG BA ANH EM</title>
    
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">  
    <link rel="stylesheet" href="css/responsive.css"> 
    <link rel="stylesheet"  href="style.css">
    <link rel="stylesheet"  href="style1.css">

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
                                    
                                    <form  method="POST" class="bg" >
                                        <label>Tài khoản : </label></br>
                                        <input class="form2" type="text" name="txt_usname"/></br>
                                        <label>Mật khẩu : </label></br>
                                        <input class="form2" type="password" name="txt_passwd"/>
                                        
                                        <p></p>
                                        <input type="submit"  name="bt_ok" value="Đăng Nhập">

                                        <a href="register.php">Đăng ký</a>
                                        <a href="#">Quên mật khẩu</a>
                                    </form>
                                    <?php 
                                        include('control.php') ;
                                        $get_data = new data() ;
                                        // kiểm tra xem nút submit chưa
                                        if(isset($_POST['bt_ok'])){
                                            if(empty($_POST['txt_usname']) || empty($_POST['txt_passwd'])) {
                                                echo "<script>alert('Chưa nhập đủ thông tin')</script>" ;
                                            }

                                            // đặt điều kiện là phải login mới vào đc trang select
                                            else{
                                                $check = $get_data -> ad_Login($_POST['txt_usname'] , $_POST['txt_passwd']) ;
                                                if($check == 1){
                                                    $_SESSION['admin'] = $_POST['txt_usname'] ; // user
                                                    header('location:admin.php') ;
                                                }
                                                else{
                                                    $check2 = $get_data -> Login($_POST['txt_usname'] , $_POST['txt_passwd']) ;
                                                if($check2 == 1){
                                                    $_SESSION['username'] = $_POST['txt_usname'] ; // user
                                                    header('location:login_index.php') ;
                                                }
                                                }
                                            }
                                        }
                                    
                                    ?>
                                    
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
                      <li class="active"><a href="index.php">Trang Chủ</a></li>
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
                        <li><a href="checkout.php">Thanh Toán</a></li>                       
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
    
    <div class="slider-area">
        	<!-- Slider -->
			<div class="block-slider block-slider4">
				<ul class="" id="bxslider-home4">
					<li>
						<img src="img/Quangcao9.png" alt="Slide">
						<div class="caption-group">
							<h2 class="caption title">
								<span class="primary"><strong></strong></span>
							</h2>
							<h4 class="caption subtitle"></h4>                          
						</div>
					</li>
					<li><img src="img/Quangcao5.png" alt="Slide">
						<div class="caption-group">
							<h2 class="caption title">
							<span class="primary"> <strong></strong></span>
							</h2>
							<h4 class="caption subtitle"></h4>
			
						</div>
					</li>
					<li><img src="img/Quangcao1.gif" alt="Slide">
						<div class="caption-group">
							<h2 class="caption title">
								<span class="primary"><strong></strong></span>
							</h2>
							<h4 class="caption subtitle"></h4>
					
						</div>
					</li>
					<li><img src="img/Quangcao4.png" alt="Slide">
						<div class="caption-group">
						  <h2 class="caption title">
								 <span class="primary"> <strong></strong></span>
						</h2>
							<h4 class="caption subtitle"></h4>
					
						</div>
					</li>
				</ul>
			</div>
			<!-- ./Slider -->
    </div> <!-- End slider area -->
    
    <div class="promo-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo1">
                        <i class="fa fa-refresh"></i>
                        <p>Đổi trả trong 30 ngày</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo2">
                        <i class="fa fa-truck"></i>
                        <p>Miễn phí giao hàng</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo3">
                        <i class="fa fa-lock"></i>
                        <p>bảo mật thông tin</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo4">
                        <i class="fa fa-gift"></i>
                        <p>Sản phẩm đa dạng</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End promo area -->
     <?php 
   
    $products = $get_data -> se_product_vivo();
    $products2 = $get_data -> se_product_ip_top8();
    $products3 = $get_data -> se_product_ss();
    ?>
    <div class="content-vivo">
        <br>
        <div>
            <h2 class="section-title-vivo">TUẦN LỄ VÀNG VIVO</h2>
        </div>
        <br>
        <div class="images-1">
                <img  src="img/vivo_banner/Desktop380x200-380x200-7.png">
                <img  src="img/vivo_banner/Desktop380x200-1-380x200-7.png">
                <img src="img/vivo_banner/Desktop380x200-2-380x200-4.png">
                
        </div>
      
       <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                         
                    <div class="latest-product">
                        
                        <div class="product-carousel">

                        <?php
                         foreach($products as $pro) {
                        ?>
                            <div class="back_vivo">
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img  src="img/<?php echo $pro['Image'] ?>" alt="">
                                    <div class="product-hover">
                                        
                                        <a href="cart.php" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ</a>
                                        <a href="single_product.php?id=<?php echo $pro['ID_Product'] ?>" class="view-details-link"><i class="fa fa-link"></i> Xem chi tiết</a>
                                    </div>
                                </div>
                                
                                <h2><a href="single_product.php?id=<?php echo $pro['ID_Product'] ?>"><?php echo $pro['NameProduct'] ?></a></h2>
                                
                                <div class="product-carousel-price">
                                    <span>Giá:</span> <ins><?php echo number_format($pro['Price']) ?></ins><span>VND</span> 
                                </div> 
                            </div>
                            </div>
                        <?php } ?>

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 

        <div class="clear_bot"></div>
        <br>

        <div>
          <a href="vivo_product.php"> <h3 class="section-footer-vivo">Xem tất cả sản phẩm</h3> </a> 
        </div>
        <br>
         
    </div>
    <br>
    <div class="img-1">
       <a href="ip_product.php"><img width="100%" src="img/detail/slider_3.webp"></a> 
        
    </div>
    <br><br>
   

    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                         
                    <div class="latest-product">
                      
                        <div class="product-carousel">

                        <?php
                         foreach($products2 as $pro2) {
                        ?>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="img/<?php echo $pro2['Image'] ?>" alt="">
                                    <div class="product-hover">
                                        <a href="cart.php?" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ</a>
                                        <a href="single_product.php?id=<?php echo $pro2['ID_Product'] ?>" class="view-details-link"><i class="fa fa-link"></i> Xem chi tiết</a>
                                    </div>
                                </div>
                                
                                <h2><a href="single_product.php?id=<?php echo $pro2['ID_Product'] ?>"><?php echo $pro2['NameProduct'] ?></a></h2>
                                
                                <div class="product-carousel-price">
                                    <span>Giá:</span> <ins><?php echo number_format($pro2['Price']) ?></ins><span>VND</span> 
                                </div> 
                            </div>
                        <?php } ?>

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End main content area -->
    <div class="img-1">
       <a href="ss_product.php"><img src="img/vivo_banner/qc3.jpg"></a> 
    </div>
    <br><br>
   <div class="content-phukien">
        <br>
       
        <br>
        <div class="single-product-area">
        <div class="zigzag-bottom">  </div>        
        <div class="container">            
            <div class="row">
                
               <?php
                foreach($products3 as $pro3) {
                ?>
                    <div class="col-md-3 col-sm-6">
                    <div class="single-shop-product">
                        <div class="product-upper">
                           <a href="single_product.php?id=<?php echo $pro3['ID_Product']?>"><img src="img/<?php echo $pro3['Image'] ?>" alt=""></a> 
                        </div>
                        <h2><a href="single_product.php?id=<?php echo $pro3['ID_Product'] ?>"><?php echo $pro3['NameProduct'] ?></a></h2>
                        <div class="product-carousel-price">
                            <span>Giá sản phẩm:</span> <ins><?php echo number_format($pro3['Price']) ?></ins><span>VND</span>  
                        </div>  
                        
                                            
                    </div>
                </div>
                <?php } ?>

            
                
            </div>  
                          
        </div>      
    </div>
     
    </div>

    <div class="brands-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brand-wrapper">
                        <div class="brand-list">
                            <img src="img/xiaomi_lo.png" alt="">
                            <img src="img/oppolo.png" alt="">
                            <img src="img/brand3.png" alt="">
                            <img src="img/brand4.png" alt="">
                            <img src="img/brand5.png" alt="">
                            <img src="img/brand6.png" alt="">
                            <img src="img/xiaomi_lo.png" alt="">
                            <img src="img/oppolo.png" alt="">                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End brands area -->
    
    <div class="product-widget-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <?php 
                    $makret = $get_data -> se_product_top3_price();
                    $makret1 = $get_data -> se_product_ss_top3();
                    $makret2 = $get_data -> se_product_ip_top3();
                    ?>
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Sản phẩm bán chạy</h2>
                        <?php 
                            foreach($makret as $ma) {
                        ?>
                        <div class="single-wid-product">
                            <a href="single_product.php?id=<?php echo $ma['ID_Product'] ?>"><img src="img/<?php echo $ma['Image'] ?>" alt="" class="product-thumb"></a>
                            <h2><a href="single_product.php?id=<?php echo $ma['ID_Product'] ?>"><?php echo $ma['NameProduct'] ?></a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                               <span>Giá sản phẩm:</span> <ins><?php echo number_format($ma['Price']) ?></ins><span>VND</span> 
                            </div>                            
                        </div>
                        <?php } ?>

                        
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Lượt xem cao nhất</h2>
                       <?php 
                            foreach($makret1 as $ma) {
                        ?>
                        <div class="single-wid-product">
                            <a href="single_product.php?id=<?php echo $ma['ID_Product'] ?>"><img src="img/<?php echo $ma['Image'] ?>" alt="" class="product-thumb"></a>
                            <h2><a href="single_product.php?id=<?php echo $ma['ID_Product'] ?>"><?php echo $ma['NameProduct'] ?></a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                               <span>Giá sản phẩm:</span> <ins><?php echo number_format($ma['Price']) ?></ins><span>VND</span> 
                            </div>                            
                        </div>
                        <?php } ?>
                       
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Sản phẩm siêu ưu đãi</h2>
                        
                        <?php 
                            
                            foreach($makret2 as $ma) {
                        ?>
                        <div class="single-wid-product">
                            <a href="single_product.php?id=<?php echo $ma['ID_Product'] ?>"><img src="img/<?php echo $ma['Image'] ?>" alt="" class="product-thumb"></a>
                            <h2><a href="single_product.php?id=<?php echo $ma['ID_Product'] ?>"><?php echo $ma['NameProduct'] ?></a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                               <span>Giá sản phẩm:</span> <ins><?php echo number_format($ma['Price']) ?></ins><span>VND</span> 
                            </div>                            
                        </div>
                        <?php } ?>
                       
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End product widget area -->
    
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
                        <p>&copy; 2021 Baanhem. All Rights Reserved.</p>
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