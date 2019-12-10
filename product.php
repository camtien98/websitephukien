
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Demo</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/test.css">
    <link rel="stylesheet" href="slick/slick.css">
    <link rel="stylesheet" href="css/product.css">
    <link rel="stylesheet" href="font/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=K2D:400,400i,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playball" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/set1.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"><script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
  

</head>

<body>
    <header class="nav-top head">
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
                           <li class="nav-item">
                           <a class="nav-link"href="session.php"><i class="fa fa-cart-plus" aria-hidden="true" ></i>Giỏ Hàng</a>
                           </li>
                      </div>
                        </ul>
                        
                         
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
    <div class="container body-archive">
        <div class="col-xs-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <i class="fa fa-home"></i>
                        <a href="#">Trang chủ</a>
                    </li>
                    <li class="breadcrumb-item">Sản phẩm</li>
                </ol>
            </nav>
        </div>
       
        <div>
     
                    <div>
                    <h2 align="center">Sản Phẩm Bán Chạy</h2>
                <div class="container"> 
                <div class="row"> 
                <?php require("configsever.php");?>
                    <?php 
                        // error_reporting(0);
                        $query = "SELECT * FROM san_pham";
                        $result = mysqli_query($conn, $query);

                        if (mysqli_num_rows($result) > 0)
                        {
                            while ($row = mysqli_fetch_assoc($result)) 
                            {	
                                
                                $id=$row['id'];
                                $name=$row['ten'];
                                $gia=$row['gia'];
                                $img=$row['hinhanh'];
                                $content=$row['noidung'];
                                echo "<div class='col-md-4 col-sm-6 new-box'> ";
                                echo "<div class='products'> <img class='card-img-top' 100%' src='$img' alt=''> ";
                                echo "  <div class='products-details animate'> ";
                                echo "   <div class='products-header'> ";
                                echo "   <h1>  $name  </h1> ";
                                echo "  <h3> Giá: $gia </h3> ";
                                echo "  </div> ";
                                echo "    <div class='products-detail'> ";
                                echo "   <p>$content</p> ";
                                echo "   <div class='social'> <a href='https://www.facebook.com/Mỹ-Phẩm-Thiên-Vinh-340207426736206/' class='social-icon facebook animate'><span class='fa fa-facebook'></span></a> <a href='https://twitter.com/thinphm34098405' class='social-icon twitter animate'><span class='fa fa-twitter'></span></a> <br> <br>";
                                echo "<a href='order-by.php?action=add&chonhang=$id' class=''><img src='img/icon.png'/><span>Chọn Đặt Hàng </span></a>";
                                echo "<a href='session.php?page=products&action=add&themgiohang=$id'  ><img src='img/icon.png'/><span>Thêm Giỏ Hàng</span></button></a>";

                                echo "  </div> ";
                                echo "  </div> ";
                                echo " </div> ";
                                echo " </div> ";
                                echo " </div> ";
                            }
                        }
                  ?>
             
                </div> 
                </div> 
  <!-- <div class="col-sm-6 col-md-4"> 
   <div class="products"> <img style="width: 100%" src="http://hocwebgiare.com/thiet_ke_web_chuan_demo/product_display_2/images/036.jpg" alt=""> 
    <div class="products-details animate"> 
     <div class="products-header"> 
      <h1> Sản phẩm 2 </h1> 
      <h3> Giá: 600.000 đ </h3> 
     </div> 
     <div class="products-detail"> 
      <p>hocwebgiare.com nơi đào tạo thiết kế web chuyên sâu với chất lượng được cam kết cụ thể.</p> 
      <div class="social"> <a href="https://www.facebook.com/hocwebgiare" class="social-icon facebook animate"><span class="fa fa-facebook"></span></a> <a href="https://twitter.com/123hocweb" class="social-icon twitter animate"><span class="fa fa-twitter"></span></a> <a href="https://www.google.com/+NguyenPhatTai" class="social-icon google-plus animate"><span class="fa fa-google-plus"></span></a> 
      </div> 
     </div> 
    </div> 
   </div> 
  </div> 
  <div class="col-sm-6 col-md-4"> 
   <div class="products"> <img style="width: 100%" src="http://hocwebgiare.com/thiet_ke_web_chuan_demo/product_display_2/images/168.jpg" alt=""> 
    <div class="products-details animate"> 
     <div class="products-header"> 
      <h1> Sản phẩm 3 </h1> 
      <h3> Giá: 600.000 đ </h3> 
     </div> 
     <div class="products-detail"> 
      <p>hocwebgiare.com nơi đào tạo thiết kế web chuyên sâu với chất lượng được cam kết cụ thể.</p> 
      <div class="social"> <a href="https://www.facebook.com/hocwebgiare" class="social-icon facebook animate"><span class="fa fa-facebook"></span></a> <a href="https://twitter.com/123hocweb" class="social-icon twitter animate"><span class="fa fa-twitter"></span></a> <a href="https://www.google.com/+NguyenPhatTai" class="social-icon google-plus animate"><span class="fa fa-google-plus"></span></a> 
      </div> 
     </div> 
    </div> 
   </div> 
  </div> 
  <div class="col-sm-6 col-md-4"> 
   <div class="products"> <img style="width: 100%" src="http://hocwebgiare.com/thiet_ke_web_chuan_demo/product_display_2/images/174.jpg" alt=""> 
    <div class="products-details animate"> 
     <div class="products-header"> 
      <h1> Sản phẩm 4 </h1> 
      <h3> Giá: 600.000 đ </h3> 
     </div> 
     <div class="products-detail"> 
      <p>hocwebgiare.com nơi đào tạo thiết kế web chuyên sâu với chất lượng được cam kết cụ thể.</p> 
      <div class="social"> <a href="https://www.facebook.com/hocwebgiare" class="social-icon facebook animate"><span class="fa fa-facebook"></span></a> <a href="https://twitter.com/123hocweb" class="social-icon twitter animate"><span class="fa fa-twitter"></span></a> <a href="https://www.google.com/+NguyenPhatTai" class="social-icon google-plus animate"><span class="fa fa-google-plus"></span></a> 
      </div> 
     </div> 
    </div> 
   </div> 
  </div> 
  <div class="col-sm-6 col-md-4"> 
   <div class="products"> <img style="width: 100%" src="http://hocwebgiare.com/thiet_ke_web_chuan_demo/product_display_2/images/176.jpg" alt=""> 
    <div class="products-details animate"> 
     <div class="products-header"> 
      <h1> Sản phẩm 5 </h1> 
      <h3> Giá: 600.000 đ </h3> 
     </div> 
     <div class="products-detail"> 
      <p>hocwebgiare.com nơi đào tạo thiết kế web chuyên sâu với chất lượng được cam kết cụ thể.</p> 
      <div class="social"> <a href="https://www.facebook.com/hocwebgiare" class="social-icon facebook animate"><span class="fa fa-facebook"></span></a> <a href="https://twitter.com/123hocweb" class="social-icon twitter animate"><span class="fa fa-twitter"></span></a> <a href="https://www.google.com/+NguyenPhatTai" class="social-icon google-plus animate"><span class="fa fa-google-plus"></span></a> 
      </div> 
     </div> 
    </div> 
   </div> 
  </div> 
  <div class="col-sm-6 col-md-4"> 
   <div class="products"> <img style="width: 100%" src="http://hocwebgiare.com/thiet_ke_web_chuan_demo/product_display_2/images/178.jpg" alt=""> 
    <div class="products-details animate"> 
     <div class="products-header"> 
      <h1> Sản phẩm 6 </h1> 
      <h3> Giá: 600.000 đ </h3> 
     </div> 
     <div class="products-detail"> 
      <p>hocwebgiare.com nơi đào tạo thiết kế web chuyên sâu với chất lượng được cam kết cụ thể.</p> 
      <div class="social"> <a href="https://www.facebook.com/hocwebgiare" class="social-icon facebook animate"><span class="fa fa-facebook"></span></a> <a href="https://twitter.com/123hocweb" class="social-icon twitter animate"><span class="fa fa-twitter"></span></a> <a href="https://www.google.com/+NguyenPhatTai" class="social-icon google-plus animate"><span class="fa fa-google-plus"></span></a> 
      </div> 
     </div> 
    </div> 
   </div> 
  </div> 
 </div>
</div>
                            -->
                        
                            
                    </div>
                    </div>
                    </div>
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
                                đã chính thức đưa ra dòng sản phẩm mỹ phẩm cao cấp được nhiều người dùng tin dùng .
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
                                <i class="fa fa-phone-square"></i> 0356.581.777</p>
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
                            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FM%E1%BB%B9-Ph%E1%BA%A9m-Thi%C3%AAn-Vinh-340207426736206%2F%3Fmodal%3Dadmin_todo_tour&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                                width="100%" height="200" style="border:none;overflow:hidden" scrolling="no"
                                frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
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
    <script src="js/jquery-1.11.1.min.js"></script>
    <!-- <script type="text/javascript" src="http://demo.iwebs.vn/api/js/noel.js"></script> -->
    <!-- <script type="text/javascript" src="js/noel.js"></script> -->
	</html>