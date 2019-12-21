
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NhuậnLinh</title>
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
                        SHOP NHUẬN LINH
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div cl ass="collapse navbar-collapse nav-right" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto ">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Trang Chủ
                                   
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
    <div class="banner-ar">
        <img src="img/bg-ar.jpg" alt="">

    </div>
    <div class="container body-archive">
        <div class="col-xs-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><i class="fa fa-home"></i> <a href="#">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="#">Blog</a></li>
                    <li class="breadcrumb-item">Tin Tức 24H</li>

                </ol>
            </nav>
        </div>

        <div class="col-xs-12">
            <h1 class="tl-new-des" align="center"> Tin Tức 24H </h1>
            <div class="time-new"><span><i class="fa fa-clock-o"></i> november 12, 2019 </span> - <span><i class="fa fa-user-circle"></i>NHUẬN LINH</span></div>
            <div class="body-text-new">
                
                
                <p>
               
               
                <?php 
    require("configsever.php");
  
            $id=$_GET['id'];
          $sql_s="SELECT * FROM tin_tuc where id=$id"; 
          $query_s=mysqli_query($conn, $sql_s);
          if (mysqli_num_rows($query_s) > 0)
          { 
            $data=mysqli_fetch_assoc($query_s);
              { echo "<div class='text-center'>";
                echo " <img class='card-fuild text-center' src='$data[hinhanh]' alt=''></a>";
                echo "</div>";
              
                echo "<h5 class='tl-new'>$data[ten] </a></h5>";
                echo "<p class='card-text'>$data[noidung] [...]</p>";
               
              }
        }
        else {
            echo "Chưa có tin tức nào";
         } 
        
  

?>
      
                </p>
            </div>

        </div>
    </div>

    <div class="container ">
        <h3>TIN TỨC TƯƠNG TỰ</h3>
        <span>------</span>
        <div class="col-xs-12">
            <div class="slider-related row">
                <div class="item-slider-related">
                    <a href=""><img src="img/57.jpg" alt=""></a>
                    <h5 class="tl-related"><a href="">Tin Tức HOT</a></h5>
                    <div class="time-new"><span><i class="fa fa-clock-o"></i> Lionel Messi phát biểu thẳng thắn trước thềm trận El Clasico giữa Real Madrid và Barca diễn ra rạng sáng 19/12 và có đề cập đến Ronaldo dù CR7 đã rời Tây Ban Nha.</span> - <span><i class="fa fa-user-circle"></i> SHOP NHUẬN LINH</span></div>
                </div>
                <div class="item-slider-related">
                    <a href=""><img src="img/58.jpg" alt=""></a>
                    <h5 class="tl-related"><a href="">Tin Tức HOT</a></h5>
                    <div class="time-new"><span><i class="fa fa-clock-o"></i> Anh ra mắt tạp chí Tiếng Anh dành cho tuổi teen</span> - <span><i class="fa fa-user-circle"></i> SHOP NHUẬN LINH</span></div>
                </div>
                <div class="item-slider-related">
                    <a href=""><img src="img/59.jpg" alt=""></a>
                    <h5 class="tl-related"><a href="">Tin Tức HOT</a></h5>
                    <div class="time-new"><span><i class="fa fa-clock-o"></i> Đoạn clip "Hãy trao cho anh" được trình chiếu tại Mỹ mang đến cho các Sky rất nhiều phấn khích.</span> - <span><i class="fa fa-user-circle"></i> SHOP NHUẬN LINH</span></div>
                </div>
                <div class="item-slider-related">
                    <a href=""><img src="img/60.jpg" alt=""></a>
                    <h5 class="tl-related"><a href="">Tin Tức HOT</a></h5>
                    <div class="time-new"><span><i class="fa fa-clock-o"></i>Sáng 7/6, học sinh ở Nghệ An làm bài môn Toán, kỳ thi tuyển sinh vào lớp 10. Nhiều em cho biết đề thi tương đối khó.</span> - <span><i class="fa fa-user-circle"></i> SHOP NHUẬN LINH</span></div>
                </div>
                <div class="item-slider-related">
                    <a href=""><img src="img/61.jpg" alt=""></a>
                    <h5 class="tl-related"><a href="">Tin Tức HOT</a></h5>
                    <div class="time-new"><span><i class="fa fa-clock-o"></i> Đưa Thừa Thiên Huế thành đô thị trực thuộc trung ương với đặc trưng văn hóa, di sản </span> - <span><i class="fa fa-user-circle"></i> SHOP NHUẬN LINH</span></div>
                </div>
                <div class="item-slider-related">
                    <a href=""><img src="img/62.jpg" alt=""></a>
                    <h5 class="tl-related"><a href="">Tin Tức HOT</a></h5>
                    <div class="time-new"><span><i class="fa fa-clock-o"></i>Về Hưng Yên, ngắm những cánh đồng cúc chi nở vàng rực rỡ bên sông Hồng </span> - <span><i class="fa fa-user-circle"></i> SHOP NHUẬN LINH</span></div>
                </div>
                <div class="item-slider-related">
                    <a href=""><img src="img/63.jpg" alt=""></a>
                    <h5 class="tl-related"><a href="">Tin Tức HOT</a></h5>
                    <div class="time-new"><span><i class="fa fa-clock-o"></i> Hầu hết đồ nhựa đều được tuyên bố là có thể tái chế, nhưng thực tế thì nó thường không thể hoặc được tái chế thành thứ khác có chất lượng kém hơn. </span> - <span><i class="fa fa-user-circle"></i> SHOP NHUẬN LINH</span></div>
                </div>
                <div class="item-slider-related">
                    <a href=""><img src="img/64.jpg" alt=""></a>
                    <h5 class="tl-related"><a href="">Tin Tức HOT</a></h5>
                    <div class="time-new"><span><i class="fa fa-clock-o"></i> 100% xã ở Đô Lương đạt tiêu chí số 13 về tổ chức sản xuất trong nông thôn mới </span> - <span><i class="fa fa-user-circle"></i> SHOP NHUẬN LINH</span></div>
                </div>
                <div class="item-slider-related">
                    <a href=""><img src="img/65.jpg" alt=""></a>
                    <h5 class="tl-related"><a href="">Tin Tức HOT</a></h5>
                    <div class="time-new"><span><i class="fa fa-clock-o"></i> Mô hình trông thanh long ruột đỏ mang lại hiệu quả kinh tế cao cho nhiều hộ gia đình tại Xã Xuân Sơn</span> - <span><i class="fa fa-user-circle"></i> SHOP NHUẬN LINH</span></div>
                </div>
            </div>
        </div>
    </div>
                            <div class="footer">
                <div class="container ft-top">
                    <div class="row">
                        <div class="col-md-3">
                            <h3 class="title_ft">SHOP NHUẬN LINH</h3>
                            <span class="border-span"></span>
                            <p>
                               👏👏NGƯỜI TA THƯỜNG NÓI NGƯỜI ĐẸP VÌ LỤA<br>
                                🌟 LÚA TỐT VÌ PHÂN<br>
                                🌟Là con gái đẹp thôi chưa đủ <br>
                                🌟Quan trọng là cách ăn mặc của mình<br>
                                🎋LÀ CON GÁI PHẢI XINH <br>
                                👉👉👉Cái khó là bạn chọn đúng trang phục phù hợp với mình <br>
                                🌸🌸MẶC LÀ ĐẸP<br>
                                🌸🌸HÃY ĐẾN VỚI SHOP NHUẬN LINH <br>
                            </p>
                        </div>
                        <div class="col-md-3">
                            <h3 class="title_ft">Sản phẩm</h3>
                            <span class="border-span"></span>
                            <p>
                                <a href="/">ĐẦM NỮ</a>
                            </p>
                            <p>
                                <a href="">ĐỒ NỮ STREETWEAR</a>
                            </p>
                            <p>
                                <a href="">SET</a>
                            </p>
                            <p>...</p>
                        </div>
                        <div class="col-md-3">
                            <h3 class="title_ft">Liên hệ</h3>
                            <span class="border-span"></span>
                            <p>
                                <i class="fa fa-map-marker"></i> 180 Cao Lỗ ,Phường 4 , Quận 8</p>
                            <p>
                                <i class="fa fa-phone-square"></i> 0943202538</p>
                            <p>
                                <i class="fa fa-envelope"></i> mainhuanlinh@gmail.com</p>
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
                            <iframe 
                                width="100%" height="200" style="border:none;overflow:hidden" scrolling="no"
                                frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                        </div>
                    </div>
                </div>
                <div class="ft_bottom">
                    <div class="container">
                        <div class="col-xs-12">
                            Copyright © 2019 NHUẬN LINH. All Rights Reserved
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
     <script type="text/javascript" src="http://demo.iwebs.vn/api/js/noel.js"></script>
    <script type="text/javascript" src="js/noel.js"></script> 
    </html>