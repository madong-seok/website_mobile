<?php 
  include('connect.php');
  class data{
	  public function ins_user($us,$pass,$gend,$birthd,$addr){
		  global $conn;
		  $sql="insert into users(Username,Passwd,Gender,Birthday,Address) 
		  values ('$us','$pass','$gend','$birthd','$addr')";
		  $exec=mysqli_query($conn,$sql);
		  return $exec;
		  }
		  
		public function ins_prod($us,$pri,$br,$amou,$image,$info){
		  global $conn;
		  $sql="insert into products(NameProduct,Price,Brand,Amount,Image,Information) 
		  values ('$us','$pri','$br','$amou','$image','$info')";
		  $exec=mysqli_query($conn,$sql);
		  return $exec;
		  }
		  public function ins_acc($us,$pri,$br,$image){
		  global $conn;
		  $sql="insert into accessory(Name_Accessory,Price_Accessory,Brand_Accessory,Image_Accessory) 
		  values ('$us','$pri','$br','$image')";
		  $exec=mysqli_query($conn,$sql);
		  return $exec;
		  }
		public function se_product()
			{
				global $conn;
				$sql="select ID_Product, NameProduct, Price, Brand, Amount, Image, Information from products ";
				$exec=mysqli_query($conn,$sql);
				return $exec;
			}
			
			public function se_product_byid($id)
			{
				global $conn;
				$sql="select * from products where ID_Product = '$id'";
				$exec=mysqli_query($conn,$sql);
				return $exec;
			}
			
			public function search_product($name)
			{
				global $conn;
				$sql="select * from products where NameProduct like '%$name%'";
				$exec=mysqli_query($conn,$sql);
				return $exec;
			}	
			public function cart_product()
			{
				global $conn;
				$sql="select * from products where ID_Product in (1,2,3,4)";
				$exec=mysqli_query($conn,$sql);
				return $exec;
			}		
			public function se_product_ip()
			{
				global $conn;
				$sql="select ID_Product, NameProduct, Price, Brand, Amount, Image, Information from products where Brand='Iphone' ";
				$exec=mysqli_query($conn,$sql);
				return $exec;
			}
			public function se_product_ip_top8()
			{
				global $conn;
				$sql="select ID_Product, NameProduct, Price, Brand, Amount, Image, Information from products limit 8 ";
				$exec=mysqli_query($conn,$sql);
				return $exec;
			}
			public function se_product_top8()
			{
				global $conn;
				$sql="select ID_Product, NameProduct, Price, Brand, Amount, Image, Information from products where Brand='Tainghe' and NameProduct like '%Airpods%' or Brand='Capsac' and NameProduct like '%Apple%' ";
				$exec=mysqli_query($conn,$sql);
				return $exec;
			}
			public function se_product_ip_top3()
			{
				global $conn;
				$sql="select ID_Product, NameProduct, Price, Brand, Amount, Image, Information from products where Price < '300000' limit 3  ";
				$exec=mysqli_query($conn,$sql);
				return $exec;
			}
			public function se_product_ss_top3()
			{
				global $conn;
				$sql="select ID_Product, NameProduct, Price, Brand, Amount, Image, Information from products where Brand='Samsung' limit 3  ";
				$exec=mysqli_query($conn,$sql);
				return $exec;
			}
			public function se_product_top3_price()
			{
				global $conn;
				$sql="select ID_Product, NameProduct, Price, Brand, Amount, Image, Information from products where Price < '25000000' limit 3  ";
				$exec=mysqli_query($conn,$sql);
				return $exec;
			}

			public function se_product_ip_top5()
			{
				global $conn;
				$sql="select ID_Product, NameProduct, Price, Brand, Amount, Image, Information from products limit 5 ";
				$exec=mysqli_query($conn,$sql);
				return $exec;
			}
			public function se_product_vivo()
			{
				global $conn;
				$sql="select ID_Product, NameProduct, Price, Brand, Amount, Image, Information from products where Brand='Vivo' ";
				$exec=mysqli_query($conn,$sql);
				return $exec;
			}
			public function se_product_ss()
			{
				global $conn;
				$sql="select ID_Product, NameProduct, Price, Brand, Amount, Image, Information from products where Brand='Samsung' ";
				$exec=mysqli_query($conn,$sql);
				return $exec;
			}
			public function se_product_xiaomi()
			{
				global $conn;
				$sql="select ID_Product, NameProduct, Price, Brand, Amount, Image, Information from products where Brand='Xiaomi' ";
				$exec=mysqli_query($conn,$sql);
				return $exec;
			}
			public function se_product_oppo()
			{
				global $conn;
				$sql="select ID_Product, NameProduct, Price, Brand, Amount, Image, Information from products where Brand='Oppo' ";
				$exec=mysqli_query($conn,$sql);
				return $exec;
			}



	  public function count_user($us){		  
		  global $conn;
		  $sql="select * from users where Username='$us'";
		  $exec=mysqli_query($conn,$sql);
		  $count= mysqli_num_rows($exec);
		  return $count;
		  }
	  public function get_infor_user($id){	  
		  global $conn;
		  $sql="select * from users where ID_User='$id'";
		  $exec=mysqli_query($conn,$sql);
		  return $exec;
		  }
	  public function load_data(){
		  global $conn;
		  $sql= "select * from users";
		  $exec=mysqli_query($conn,$sql);
		  return $exec;
		  }
	  
	  
	  public function Login($us,$pass){
		  global $conn;
		  $sql= "select * from users where Username='$us' and Passwd='$pass'";
		  $exec=mysqli_query($conn,$sql);
		  $count= mysqli_num_rows($exec);
		  return $count;
		  }
		
	 public function ad_Login($us,$pass){
		  global $conn;
		  $sql= "select * from admin where Name='$us' and Pass='$pass'";
		  $exec=mysqli_query($conn,$sql);
		  $count= mysqli_num_rows($exec);
		  return $count;
		  }
	  
	  public function delete_user($id){
		  
		  global $conn;
		  $sql="delete from users where ID_User='$id'";
		  $exec=mysqli_query($conn,$sql);
		  return $exec;
		  }  
	  
	  public function update_user($us,$pass,$gend,$birthd,$addr,$id){
		  
		  global $conn;
		  $sql="update users set Username='$us',
		  Passwd='$pass',
		  Gender='$gend',
		  Birthday='$birthd',
		  Address='$addr'
		  where ID_User='$id'";
		  $exec=mysqli_query($conn,$sql);
		  return $exec;
		  }
		
		  public function ins_contact($us,$email,$sub,$content){
		  global $conn;
		  $sql="insert into contact(Name,Email,Subject,Content) 
		  values ('$us','$email','$sub','$content')";
		  $exec=mysqli_query($conn,$sql);
		  return $exec;
		  }

		 public function se_contact()
		{
			global $connect;
			$sql="select * from contact";
			$run=mysqli_query($connect,$sql);
			return $run;
    	} 
			public function id_contact($id)
		{
			global $connect;
			$sql="select * from contact where ID_contact='$id'";
			$run=mysqli_query($connect,$sql);
			return $run;
		}

		public function del_contact($id)
    	{
			global $connect;
			$sql="delete from contact where ID_contact=$id";
			$run=mysqli_query($connect,$sql);
			return $run;
    	}

		public function update_contact($name,$email,$sub,$content,$id)
    	{
			global $connect;
			$sql="update contact set name='$name',email='$email',subject='$sub',content='$content' 
			where ID_contact=$id";
			$run=mysqli_query($connect,$sql); 
			return $run;
    	}
		public function se_product_tn()
			{
				global $conn;
				$sql="select ID_Product, NameProduct, Price, Brand, Amount, Image, Information from products where Brand='Tainghe' ";
				$exec=mysqli_query($conn,$sql);
				return $exec;
			}
		public function se_product_sdp()
			{
				global $conn;
				$sql="select ID_Product, NameProduct, Price, Brand, Amount, Image, Information from products where Brand='Sacduphong' ";
				$exec=mysqli_query($conn,$sql);
				return $exec;
			}
		public function se_product_cs()
			{
				global $conn;
				$sql="select ID_Product, NameProduct, Price, Brand, Amount, Image, Information from products where Brand='Capsac' ";
				$exec=mysqli_query($conn,$sql);
				return $exec;
			}
		public function se_product_loa()
			{
				global $conn;
				$sql="select ID_Product, NameProduct, Price, Brand, Amount, Image, Information from products where Brand='Loa' ";
				$exec=mysqli_query($conn,$sql);
				return $exec;
			}
  }
?>
