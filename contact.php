
<?php include("Session/chonhang.php")?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Demo</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="slick/slick.css">
    <link rel="stylesheet" href="font/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=K2D:400,400i,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playball" rel="stylesheet">


</head>

<body>

    <header class="nav-top">

        <div class="container">
            <div class="row">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="#">
                        <!-- <img src="img/logo.png" class="logo" alt=""> -->
                        Mỹ Phẩm Thiên Vinh
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse nav-right" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto ">
                            <li class="nav-item">
                                <a class="nav-link" href="index.html">Trang Chủ
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about-us.php">Giới Thiệu</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="product.php">Sản Phẩm</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="contact.php">Liên Hệ</a>
                            </li>
                        </ul>
                        <form class="form-inline my-2 my-lg-0" style="margin-left:30px;">
                            <input class="form-control mr-sm-2" type="search" placeholder="Tìm kiếm" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </form>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <div class="banner">
        <div class="autoplay css_slider">
            <img src="img/img1.jpg" alt="">
            <img src="img/img2.jpg" alt="">
            <img src="img/img3.jpg" alt="">
            <img src="img/img4.jpg" alt="">
        </div>
    </div>
    <!--  -->
    <div class="container body-archive">
        <div class="col-xs-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <i class="fa fa-home"></i>
                        <a href="#">Trang chủ</a>
                    </li>
                    <li class="breadcrumb-item">Đặt Hàng</li>
                </ol>
            </nav>
        </div>
        <div class="row box_contact">
            <div class="col-md-6">
                <h2 class="title_h2">Đơn Đặt Hàng </h2>
                <h4 class="title_ct">Mỹ Phẩm Thiên Vinh</h4>
                <p>
                    <i class="fa fa-map-marker"></i>180 Cao Lỗ, Phường 4, Quận 8, HCM</p>
                <p>
                    <i class="fa fa-phone-square"></i>035.6581.777</p>
                <p>
                    <i class="fa fa-envelope"></i>thien.phamminhstu@gmail.com</p>
                <p>
                    <i class="fa fa-facebook-square"></i> facebook.com/myphamthienvinh.Stu</p>
                <p>
                    <i class="fa fa-instagram"></i> zalo/myphamthienvinh</p>

            </div>

            <div class="col-md-6">
                <!-- <h2>Để lại lời nhắn cho chúng tôi</h2> -->
                <form acction="" method="post">
                    <div class="form-group">
                        <input type="name" class="form-control" placeholder="Họ và Tên" name="txtname">
                    </div>
                    <div class="form-group">
                        <input type="phone" class="form-control" placeholder="Số điện thoại" name="txtphone">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email" name="txtemail">
                    </div>
                   
                    <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea2" rows="3" placeholder="Nội Dung" name="txtnoidung"></textarea>
                    </div>
                    <div class="box_btn">
                        <button type="submit" class="btn btn_contact" name="ok">Đặt Hàng</button>
                    </div>
                </form>
                <?php

	
	$txthoten=$txtsodienthoai=$txtemail=$txtnoidung=NULL;
	$loi=array();
	$loi["name"]=$loi["phone"]=$loi["email"]=$loi["noidung"]=NULL;
	if(isset($_POST["ok"]))
	{  
			if(empty($_POST["txtname"]))
			{
				$loi["name"]="*Vui lòng nhập Họ Và Tên.<br />";
			}
			else
			{
				$txthoten=trim($_POST['txtname']);
            }
            if(empty($_POST["txtnoidung"]))
			{
				$loi["noidung"]="*Vui lòng nhập Họ Và Tên.<br />";
			}
			else
			{
				$txtnoidung=nl2br($_POST['txtnoidung']);
			}
			if(empty($_POST["txtphone"]))
			{
				$loi["phone"]="*Vui lòng nhập Số Điện Thoại.";
			}
			else
			{
					$txtsodienthoai=trim($_POST["txtphone"]);
            }
            if(empty($_POST["txtemail"]))
			{
				$loi["email"]="*Vui lòng nhập Số Điện Thoại.";
			}
			else
			{
					$txtemail=trim($_POST["txtemail"]);
            }
          
            if($txthoten && $txtsodienthoai && $txtemail  )
            {  
               
                include_once("configsever.php");
                $soluong="";$id="";

                if ($conn)
                     {
                             
                    
                
                         $date=date("d/m/Y");
                         echo $date;
                       $sql = "INSERT INTO lien_he (
                      id,
                      	ten_nguoi_lien_he,
                          	email,
                              	dien_thoai,
                                  	noi_dung,
                                      	ngay_lien_he
                                                    )
                       VALUES 
                       ('',
                       N'$txthoten',
                       '$txtemail',
                
                       '$txtsodienthoai',
                       N'$txtnoidung',
                 
                       '$date')";
                      
                    
                }
                
                
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }
              
                
                if (mysqli_query($conn, $sql)) {
                   
			       
                    echo "Liên Hệ Admin Thành Công ";
             
                    
                } else {
                    echo "Vui Lòng Chọn Hàng Và Điền Đầy Đủ Thông Tin!! " . $sql . "<br>" . mysqli_error($conn);
                }
                
                mysqli_close($conn);
                
        
        
               
            }
	}
    ?>

            </div>
        </div>

        <div class="col-sx-12 box_map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.9551992264037!2d106.67572621530081!3d10.737936392347638!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752fad182844dd%3A0xe3099eb4c87f5610!2zMTgwIMSQxrDhu51uZyBDYW8gTOG7lywgUGjGsOG7nW5nIDQsIFF14bqtbiA4LCBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1540020353612"
                width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>

    <!-- footer -->
     <div class="footer">
            <div class="container ft-top">
                <div class="row">
                    <div class="col-md-3">
                        <h3 class="title_ft">Mỹ Phẩm Thiên Vinh</h3>
                        <span class="border-span"></span>
                        <p>
                            Mỹ Phẩm Thiên Vinh do chính VinhCice và Thienga sáng lập ,
                            với sự ấp ủ kế hoạch rất nhiều năm sử dụng và kiểm nghiệm
                             cùng nhiều chuyên gia nước ngoài đến nay Mỹ Phẩm Thiên Vinh
                             đã chính thức đưa ra  dòng sản phẩm mỹ phẩm cao cấp được nhiều người dùng tin dùng .
                        </p>
                    </div>
                    <div class="col-md-3">
                        <h3 class="title_ft">Sản phẩm</h3>
                        <span class="border-span"></span>
                        <p>
                            <a href="/">Nước Hoa</a>
                        </p>
                        <p>
                            <a href="">Son</a>
                        </p>
                        <p>
                            <a href="">Kem</a>
                        </p>
                        <p>...</p>
                    </div>
                    <div class="col-md-3">
                        <h3 class="title_ft">Liên hệ</h3>
                        <span class="border-span"></span>
                        <p>
                            <i class="fa fa-map-marker"></i> 180 Cao Lỗ ,Phường 4 , Quận 8</p>
                        <p>
                            <i class="fa fa-phone-square"></i> 03565.6581.777</p>
                        <p>
                            <i class="fa fa-envelope"></i> thien.phamminhstu@gmail.com</p>
                        <p>
                            <i class="fa fa-envelope"></i>
                            <i class="fa fa-envelope"></i>
                            <i class="fa fa-envelope"></i>
                            <i class="fa fa-envelope"></i>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <h3 class="title_ft">FanPage</h3>
                        <span class="border-span"></span>
                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FM%E1%BB%B9-Ph%E1%BA%A9m-Thi%C3%AAn-Vinh-340207426736206%2F%3Fmodal%3Dadmin_todo_tour&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="100%" height="200" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                    </div>
                </div>
            </div>
            <div class="ft_bottom">
                <div class="container">
                    <div class="col-xs-12">
                        Copyright © 2018 THIEN GA. All Rights Reserved
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a id="scroll-top" class='scroll-top' title="Back to top" href="#">
        <i class="fa fa-arrow-up"></i>
    </a>
</body>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="slick/slick.min.js"></script>
<script src="script.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>
