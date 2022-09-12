<?php session_start(); ?>
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
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="css/responsive.css">

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
                        <a href="cart.php?action=select">Giỏ Hàng - <span class="cart-amunt">40.000.000 VND</span> <i class="fa fa-shopping-cart"></i> <span class="product-count">3</span></a>
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
                      
                        <li class="active"><a href="cart.php">Giỏ Hàng</a></li>
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
  
    
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Giỏ hàng</h2>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Page title area -->
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
               <div class="col-md-4">
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Tìm kiếm sản phẩm khác</h2>
                        <form method="POST" action="search_product.php">
                            <input type="text" name="search" placeholder="Nhập tên sản phẩm...">
                            <input type="submit" name="submit" value="Tìm kiếm">
                        </form>
                    </div>
                    <p>
                         .
                    </p>
                        <?php 
                        include 'control.php';
                        $get_data = new data();
                        $products = $get_data -> se_product_ip_top5();
                        $products2 = $get_data -> se_product_ip_top8();
                        ?>
                    <div class="single-sidebar">
                        <br>
                        <h2 class="sidebar-title"></h2>
                        <p>
                            
                        </p>
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
                
                <div class="col-md-8">
                    <div class="product-content-right">
                        <div class="woocommerce">
                            <?php 
                            include 'connect.php';
                            if(!isset($_SESSION["cart"])) {
                                $_SESSION["cart"] = array();
                            }
                            if(isset($_GET['action'])) {
                                switch ($_GET['action'] ) {
                                    case "add":
                                    foreach($_POST['quantity'] as $id => $quantity) {
                                        $_SESSION["cart"][$id] = $quantity;
                                    }                              
                                    break;
                                }
                            }
                            if(!empty($_SESSION["cart"])){
                               $text = implode(",", array_keys($_SESSION["cart"]));
                                $products = mysqli_query($conn, "SELECT * FROM `products` WHERE `ID_Product` IN (".$text.")");
                                
                            }
                            ?>
                            <form method="POST" action="cart.php?action=submit">
                                <table cellspacing="0" class="shop_table cart">
                                    <thead>
                                        <tr>
                                            <th class="product-remove">&nbsp;</th>
                                            <th class="product-thumbnail">&nbsp;</th>
                                            <th class="product-name">Tên sản phẩm</th>
                                            <th class="product-price">Giá</th>
                                            <th class="product-quantity">Số lượng</th>
                                            <th class="product-subtotal">Thành tiền</th>
                                        </tr>
                                        
                                    </thead>
                                    <tbody>
                                        <?php 
                                        while ($row = mysqli_fetch_array($products)) {
                                            
                                        ?>
                                        <tr class="cart_item">
                                            <td class="product-remove">
                                                <a title="Remove this item" class="remove" href="#">×</a> 
                                            </td>

                                            <td class="product-thumbnail">
                                                <a href="#"><img width="145" height="245" alt="" class="shop_thumbnail" src="img/<?=$row['Image'] ?>"></a>
                                            </td>

                                            <td class="product-name">
                                                <a href="#"><?=$row['NameProduct']  ?></a> 
                                            </td>

                                            <td class="product-price">
                                                <span class="amount"><?php echo number_format($pro['Price']) ?></span> 
                                            </td>

                                            <td class="product-quantity">
                                                <div class="quantity buttons_added">   
                                                   <!-- <input type="text" size="2" value="1" class="input-text qty text" name="quantity[<?=$row['id'] ?>]">   -->
                                                   <input type="text" value="<?=$_SESSION["cart"][$row['ID_Product']]?>" name="quantity[<?=$row['ID_Product']?>]" />
                                                </div>
                                            </td>

                                            <td class="product-subtotal">
                                                <span class="amount"><?php echo number_format($pro['Price']) ?></span> 
                                            </td>
                                        </tr>
                                            <?php 
                                                 }
                                            ?>
                                        <tr class="cart_item">
                                            <td class="product-remove">
                                                <a title="Remove this item" class="remove" href="#">×</a> 
                                            </td>

                                            <td class="product-thumbnail">
                                                <a href="#"><img width="145" height="245" alt="" class="shop_thumbnail" src="img/iphone-12-trang.jpg"></a>
                                            </td>

                                            <td class="product-name">
                                                <a href="#">Iphone 12 White</a> 
                                            </td>

                                            <td class="product-price">
                                                <span class="amount">32,000,000</span> 
                                            </td>

                                            <td class="product-quantity">
                                                <div class="quantity buttons_added">   
                                                    <input type="text" size="2" value="1" class="input-text qty text">   
                                                </div>
                                            </td>

                                            <td class="product-subtotal">
                                                <span class="amount">32,000,000</span> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="product-remove">&nbsp;</th>
                                            <th class="product-thumbnail">&nbsp;</th>
                                            <th class="product-name">Tổng thành tiền</th>
                                            <th class="product-price">&nbsp;</th>
                                            <th class="product-quantity">&nbsp;</th>
                                            <th class="product-subtotal"></th>
                                        </tr>
                                        <tr>
                                            <td class="actions" colspan="6">
                                                <div class="coupon">
                                                    <label for="coupon_code">Mã Voucher:</label>
                                                    <input type="text" placeholder="Nhập mã ..." value="" id="coupon_code" class="input-text" name="coupon_code">
                                                    
                                                    <input type="submit" value="Xác nhận" name="apply_coupon" class="button">
                                                </div>

                                                
                                            </td>
                                        </tr>
                                        <!--
                                        <tr>
                                            <td class="actions" colspan="6">
                                                
                                                <input style="margin: auto;"  type="submit" value="Update Cart" name="update_cart" class="button">
                                                
                                            </td>
                                        </tr>
                                                -->
                                        <tr>
                                            <td class="actions" colspan="6">
                                                <table cellspacing="0" class="shop_table cart">
                                                    <tr>
                                                        <td><label>Tên người nhận:</label></td>
                                                        <td><input class="in_cls" type="text" name="name"></td>
                                                    </tr>
                                                     <tr>
                                                        <td><label>Số điện thoại:</label></td>
                                                        <td><input class="in_cls" type="text" name="phone"></td>
                                                    </tr>
                                                     <tr>
                                                        <td><label>Địa chỉ nhận hàng::</label></td>
                                                        <td><input class="in_cls" type="text" name="address"></td>
                                                    </tr>
                                                </table>
                                                
                                                <div class="buy"><a href="checkout.php">Đặt hàng</a></div>
                                                
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <hr>
                                
                            </form>
                            <!-- Xử lỹ ở đây -->
                            <div class="cart-collaterals">

                           

                            </div>
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
  </body>
</html>