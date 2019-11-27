<?php 
    
    include("configsever.php"); 
    if(isset($_GET['page'])){ 
          
        $pages=array("san_pham", "cart"); 
          
        if(in_array($_GET['page'], $pages)) { 
              
            $_page=$_GET['page']; 
              
        }else{ 
              
            $_page="san_pham"; 
              
        } 
          
    }else{ 
          
        $_page="san_pham"; 
          
    } 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TTShop</title>
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
                        Phụ Kiện Điện Tử TTShop
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
    <div class="banner-ar">
        <img src="img/bg-ar.jpg" alt="">
    </div>
    <div class="container body-archive">
        <div class="col-xs-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><i class="fa fa-home"></i> <a href="#">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="">Blog</a></li>
                    <li class="breadcrumb-item">Giới Thiệu Sản Phẩm</li>

                </ol>
            </nav>
        </div>

        <div class="col-xs-12">
            <h1 class="tl-new-des">Giới Thiệu Sản Phẩm</h1>
            <div class="time-new"><span><i class="fa fa-clock-o"></i> Noember 11,2019 </span> - <span><i class="fa fa-user-circle"></i> Nguyễn Thị Cẩm Tiên </span></div>
            <div class="body-text-new">
                <p>
               
                <?php 
  
  if(isset($_GET['action']) && $_GET['action']=="add"){ 
        
      $id=intval($_GET['id']); 
        
      if(isset($_SESSION['cart'][$id])){ 
            
          $_SESSION['cart'][$id]['quantity']++; 
            
      }else{ 
            
          $sql_s="SELECT * FROM san_pham
              WHERE id={$id}"; 
          $query_s=mysqli_query($conn, $sql_s);
          if (mysqli_num_rows($query_s) > 0)
          { 
            $data=mysqli_fetch_assoc($query_s);
              {
                echo " <img class='img-fuild' width='200px' height='300px' src='$data[hinhanh]' alt=''></a>";
                echo "<h5 class='tl-new'>$data[ten] </a></h5>";
                echo "<p class='card-text'>$data[noidung] [...]</p>";
               
              }
                

          }else{ 
                
              $message="Tạm hết hàng"; 
                
          } 
            
      } 
        
  } 

?>
      
                </p>
            </div>

        </div>
    </div>

    <!-- post liên quan -->
    <div class="container ">
        <h3>Sản Phẩm liên quan</h3>
        <span>------</span>
        <div class="col-xs-12">
            <div class="slider-related row">
                <div class="item-slider-related">
                    <a href=""><img src="img/img10.jpg" alt=""></a>
                    <h5 class="tl-related"><a href="">Các Sản Phẩm Còn Lại</a></h5>
                    <div class="time-new"><span><i class="fa fa-clock-o"></i> jul 12, 2018 </span> - <span><i class="fa fa-user-circle"></i>Tiên Tiên - Thi Thi</span></div>
                </div>
                <div class="item-slider-related">
                    <a href=""><img src="img/img11.jpg" alt=""></a>
                    <h5 class="tl-related"><a href="">Các Sản Phẩm Còn Lại</a></h5>
                    <div class="time-new"><span><i class="fa fa-clock-o"></i> jul 12, 2018 </span> - <span><i class="fa fa-user-circle"></i> Tiên Tiên - Thi Thi</span></div>
                </div>
                <div class="item-slider-related">
                    <a href=""><img src="img/img15.jpg" alt=""></a>
                    <h5 class="tl-related"><a href="">Các Sản Phẩm Còn Lại</a></h5>
                    <div class="time-new"><span><i class="fa fa-clock-o"></i> jul 12, 2018 </span> - <span><i class="fa fa-user-circle"></i> Tiên Tiên - Thi Thi</span></div>
                </div>
                <div class="item-slider-related">
                    <a href=""><img src="img/img16.jpg" alt=""></a>
                    <h5 class="tl-related"><a href="">Các Sản Phẩm Còn Lại</a></h5>
                    <div class="time-new"><span><i class="fa fa-clock-o"></i> jul 12, 2018 </span> - <span><i class="fa fa-user-circle"></i> Tiên Tiên - Thi Thi</span></div>
                </div>
                <div class="item-slider-related">
                    <a href=""><img src="img/img17.jpg" alt=""></a>
                    <h5 class="tl-related"><a href="">Các Sản Phẩm Còn Lại</a></h5>
                    <div class="time-new"><span><i class="fa fa-clock-o"></i> Nov 12, 2019 </span> - <span><i class="fa fa-user-circle"></i> Tiên Tiên - Thi Thi</span></div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    <div class="footer">
        <div class="container ft-top">
            <div class="row">
                <div class="col-md-3">
                    
                    <!-- <span class="border-span"></span> -->
                    <span class="border-span"></span>
                        <p>
                            Phụ Kiện Điện Tử TTShop với nhiều mặt hàng chính hãng, mẫu mã đa dạng, đẹp, chất lượng cao bảo hành 1 năm 1 đổi 1 với nhiều khuyến mãi và giao hàng tận nơi trong 60 phút ở khu vực TPHCM
                        </p>
                    </div>
                    <div class="col-md-3">
                        <h3 class="title_ft">Sản phẩm</h3>
                        <span class="border-span"></span>
                        <p>
                            <a href="/">Sạc dự phòng</a>
                        </p>
                        <p>
                            <a href="">Loa</a>
                        </p>
                        <p>
                            <a href="">Tai nghe</a>
                        </p>
                        <p>...</p>
                    </div>
                    <div class="col-md-3">
                        <h3 class="title_ft">Liên hệ</h3>
                        <span class="border-span"></span>
                        <p>
                            <i class="fa fa-map-marker"></i> 180 Cao Lỗ ,Phường 4 , Quận 8</p>
                        <p>
                            <i class="fa fa-phone-square"></i> 0898.105.695</p>
                        <p>
                            <i class="fa fa-envelope"></i> ntcamtien811@gmail.com</p>
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
<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FTTShop-495128960896483%2F&tabs=timeline&width=400&height=300&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="300" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                    </div>
                </div>
            </div>
            <div class="ft_bottom">
                <div class="container">
                    <div class="col-xs-12">
                        Copyright © 2019 TIÊN TIÊN. All Rights Reserved
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a id="scroll-top" class='scroll-top' title="Back to top" href="#">
        <i class="fa fa-arrow-up"></i>
    </a>
</body>
<script defer > window.onload = function(){ setTimeout(function(){var chatJsElement = document.createElement("script"); chatJsElement.src = "https://app.ohchat.net/clients/43772/code.php"; chatJsElement.setAttribute("defer", "defer"); document.getElementsByTagName("body")[0].appendChild(chatJsElement);}, 300) }; </script><script src="js/jquery-3.3.1.min.js"></script>
<script src="slick/slick.min.js"></script>
<script src="script.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>