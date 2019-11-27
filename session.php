<?php include("Session/giohang.php");?>
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
    <link rel="stylesheet" type="text/css" href="css/set1.css" />

</head>

<body>
    <header class="nav-top head">
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
       
        
       <div class="col-xs-12 box_contact">
       <h2 class="text-center">Giỏ Hàng</h2>
<div class="container"> 
 <table id="cart" class="table table-hover table-condensed"> 
  <thead> 
   <tr> 
    <th style="width:48%">&nbsp; &nbsp; &nbsp;Sản phẩm</th> 
    <th style="width:10%">Giá</th> 
    <th style="width:10%">Số lượng</th> 
    <th style="width:22%" class="text-center">Thành tiền</th> 
    <th style="width:10%"> </th> 
   </tr> 
  </thead> 
 
  
      <?php
                              $tongtien = 0;
                              $soluong=0;
                              $thanhtien=0;
                              if (isset($_SESSION['giohang'])) {
                                
                                 for ($i = 0; $i < count($_SESSION['giohang']); $i++) {
                                    $query = "SELECT * FROM san_pham where id=". $_SESSION['giohang'][$i]['id'];
                                    $result = mysqli_query($conn, $query);
                                    while ($row = mysqli_fetch_assoc($result)) 
                                    {
                                    $soluong=$_SESSION['giohang'][$i]['soluong'];
                                    $tongtien = $tongtien + ($row['gia'] * $_SESSION['giohang'][$i]['soluong']);
                                    $thanhtien=$soluong*($row['gia']);
                                    $id=$row['id'];
                                    $name=$row['ten'];
                                    $gia=$row['gia'];
                                    $img=$row['hinhanh'];
                                    $content=$row['noidung'];
                                    
                                    echo"<tbody><tr> ";
                                    echo"<td data-th='Product'>";
                                    echo"<div class='col-xs-12 box_contact'>";
                                    echo" <div class='col-sm-2 hidden-xs'><img src='$img' alt='Sản phẩm 1' class='img-responsive' width='100'>";
                                    echo"</div>";
                                    echo"<div class='col-sm-10'>" ;
                                    echo"<h4 class='nomargin'>$name</h4>"; 
                                    echo"<p>$content</p>"; 
                                    echo"</div>"; 
                                    echo"</div>"; 
                                    echo"</td>"; 
                                    echo"<td data-th='Price'>$gia</td>"; 
                                    echo"<td data-th='Quantity' >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$soluong";
                                    echo"</td>"; 
                                    echo"<td data-th='Subtotal' class='text-center'>$thanhtien</td> ";
                                    echo"<td class='action' data-th=''>";
                                    // echo"<button class='btn btn-info btn-sm'  value=$id><i class='fa fa-edit'></i>";
                                    echo"</button>";
                                    
                                    echo"<a href='Session/xoaidgiohang.php?action=add&xoagiohang=$id'  ><button class='btn btn-danger btn-sm'><span>Xóa Giỏ Hàng</span><i class='fa fa-trash-o'></i>";
                                    echo"</button></a> ";
                                    echo" </td> ";
                                    echo"  </tr> ";
                                    echo"</tbody><tfoot> ";
                                    
                                    }
                                 }
                              } else 
                              {
                                    
                              }
                              ?>
                           
   <tr class="visible-xs"> 
    <td class="text-center"><strong></strong>
    </td> 
   </tr> 
   <tr> 
    <td><a href="index.html" class="btn btn-warning"><i class="fa fa-angle-left"></i> Trở Về Trang Chủ</a>
    </td> 
    <td colspan="2" class="hidden-xs"><a href="Session/xoatatcagiohang.php"class="btn btn-warning"><strong>Xóa Tất Cả</strong> </a></td> 
    <td class="hidden-xs text-center"><strong><?php echo "Tổng Tiền : ".$tongtien."&nbsp VNĐ"; ?></strong>
    </td> 
    <?php echo $id ?>
    <td><a href="order-by.php?action=add&themgiohang=<?php echo $id?>" class="btn btn-success btn-block">Thanh toán <i class="fa fa-angle-right"></i></a>
    </td> 
   </tr> 
  </tfoot> 
 </table>
</div>
              </div>
                   </div> 
              <div class="footer">
                <div class="container ft-top">
                    <div class="row">
                        <div class="col-md-3">
                            <h3 class="title_ft">Phụ Kiện Điện Tử TTShop</h3>
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
                            Copyright © 2019. All Rights Reserved
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a id="scroll-top" class='scroll-top' title="Back to top" href="#">
            <i class="fa fa-arrow-up"></i>
        </a>
    </body>
<script defer > window.onload = function(){ setTimeout(function(){var chatJsElement = document.createElement("script"); chatJsElement.src = "https://app.ohchat.net/clients/43772/code.php"; chatJsElement.setAttribute("defer", "defer"); document.getElementsByTagName("body")[0].appendChild(chatJsElement);}, 300) }; </script>    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="slick/slick.min.js"></script>
    <script src="script.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- <script type="text/javascript" src="http://demo.iwebs.vn/api/js/noel.js"></script> -->
    <!-- <script type="text/javascript" src="js/noel.js"></script> -->


    </html>