<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″/>
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
    <link rel="stylesheet" href="style.css">

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
                        <li><a href="#">Thanh Toán</a></li>                       
                        <li><a href="contact.php">Liên Hệ</a></li>
                         <li>
                            <div class="box">
                                <div class="container-1">
                                    <span class="icon"><i class="fa fa-search"></i></span>
                                    <input type="search" id="search" placeholder="Tìm kiếm" />
                                </div>
                            </div>
                        </li> 
                        <li>
                            <div class="btnTK">
                                <div class="hover">
                                    <input type="submit" id="button" value="Tìm kiếm" name="timkiem">
                                </div>
                            </div>  
                        </li>
                    </ul> 
                    </ul>
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area --> 
    
    <?php 
    include('control.php');
    $get_data = new data();
    ?>

<form method="post" action="admin_product.php" class="main" enctype="multipart/form-data">
<div class="title">Nhập sản phẩm</div>
<div><input class="inp" type="text" name="txt_uspro" placeholder="Nhập tên sản phẩm" /></div>
<div><input class="inp" type="text" name="txt_price" placeholder="Nhập giá sản phẩm" /></div>
<div><input class="inp" type="text" name="txt_brand" placeholder="Nhập hãng sản phẩm" /></div>
<div><input class="inp" type="text" name="txt_amount" placeholder="Nhập số lượng" /></div>
<div>
  <input type="file" name="image"/>
</div>
<div><textarea name="txt_info"></textarea></div>
<div class="button"><input type="submit" name="sub_dk" value="Nhập" />
</div>
</form>

<?php 

  if(isset($_POST['sub_dk'])){
	$img=move_uploaded_file($_FILES['image']['tmp_name'],
	"img/".$_FILES['image']['name']);
    
	$image="img/".$_FILES['image']['name'];
	

        $ins= $get_data -> ins_prod($_POST['txt_uspro'],$_POST['txt_price'],$_POST['txt_brand'],$_POST['txt_amount'],$_FILES['image']['name'],$_POST['txt_info']);
		
		
	    if($ins)
	    {echo "<script>alert('Insert Complete!')</script>";
		//header('location:login.php');
        }
	    else echo "<script>alert('Insert not Complete!')</script>"; 
	      }
		  else echo "";  
    
?>


    
    <div class="footer-top-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-about-us">
                        <p><img src="img/logo3ae.png"></p>
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