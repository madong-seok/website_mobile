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
    <link rel="stylesheet" href="style.css">

  </head>
  <body> 
    <div class="backgroud-res">
        <div class="logores">
            <h1><a href="index.html"><img style="margin-top: 20px;" class="images" src="img/3ae_new.png"></a></h1>
        </div>
    
        <div class="mainres">
            <?php 
            include('control.php');
            $get_data = new data();
            ?>
           <form method="POST" enctype="multipart/form-data">
            <div class="titleres">
                <h1>Đăng ký</span></h1>
                <p>Nhanh chóng và dễ dàng</p>
            </div>
                <p></p>
                <hr></hr>            
                <p></p>
                <input class="textres" type="text" placeholder="Số di động hoặc email" name="txt_usname"/>

            
                
                <input class="textres" type="password" placeholder="Mật khẩu " name="txt_passwd" />
                <input class="textres" type="password" placeholder="Nhập lại mật khẩu"  name="re_passwd"/>
                <p style="margin-left:10px; margin-top: 10px;">Giới tính</p>
                <div class="spanres"><input type="radio" name="gender" value="Nam">Nam</div>
                <div class="spanres"><input type="radio" name="gender"  value="Nữ">Nữ</div>
                <div class="spanres"><input type="radio" name="gender"  value="Khác">Khác</div>
                <p style="margin-left:10px; margin-top: 10px;">Ngày sinh</p>
                <input class="textres" type="date" name="birthday"  />
                <input class="textres" type="text" name="address" placeholder="Nhập địa chỉ">
                <p style="margin-left:10px; margin-top: 10px; font-size:7pt;">Bằng cách nhấp vào Đăng ký, bạn đồng ý với <a href="#">Điều khoản</a>, <a href="#">Chính sách dữ liệu</a> và <a href="#">Chính sách cooki</a>  của chúng tôi. Bạn có thể nhận được thông báo của chúng tôi qua SMS và hủy nhận bất kỳ lúc nào.</p>
                <input style="margin-bottom: 20px;" type="submit" name="sub_dk" class="submitres" value="Đăng ký"/>
                
                
           </form>
           <?php 
  
            if(isset($_POST['sub_dk'])){
                
                if(empty($_POST['txt_usname'])||empty($_POST['txt_passwd']))
                echo "Chưa nhập đủ dữ liệu!";
                else{  
                if($_POST['txt_passwd']!=$_POST['re_passwd'])
                echo "Mật khẩu nhập lại không đúng!";
                else{
                        
                    $ins= $get_data -> ins_user($_POST['txt_usname'],$_POST['txt_passwd'],$_POST['gender'],$_POST['birthday'],$_POST['address'])	;
                    
                    
                    if($ins == 1)
                    {echo "<script>alert('Insert Complete!')</script>";
                    header('location:index.php');}
                    else echo "<script>alert('Insert not Complete!')</script>"; 
                    }
                    
                    }
                }
                
            ?>
    
        </div>        
        
        
        <div class="footer-bottom-area-res">
            <div class="copyright-res">
                <p> 2022 Baanhem. All Rights Reserved.</p>
            </div>
        </div> <!-- End footer bottom area -->
        <div class="clr"></div>
    </div>

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