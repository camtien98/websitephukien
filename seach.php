<<<<<<< HEAD

<?php
function VndDot($strNum)
{
        $len = strlen($strNum);
        $counter = 3;
        $result = "";
        while ($len - $counter >= 0)
        {
            $con = substr($strNum, $len - $counter , 3);
            $result = '.'.$con.$result;
            $counter+= 3;
        }
        $con = substr($strNum, 0 , 3 - ($counter - $len) );
        $result = $con.$result;
        if(substr($result,0,1)=='.'){
            $result=substr($result,1,$len+1);   
        }
        return $result;
}


include("subpage/banner.php"); 
?> 

    <div class="container body-archive">
        <div class="col-xs-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <i class="fa fa-home"></i>
                        <a href="#">Trang chủ</a>
                    </li>
                    <li class="breadcrumb-item">Sản phẩm Tìm Kiếm </li>
                </ol>
            </nav>
        </div>
       
        <div>
                    <div>
                        
                        <div class='row'>
                            <!-- chỗ này là select bên sản phẩm -->
      
                    <?php require("configsever.php");?>
                    <?php 
                        // error_reporting(0);



                        $keyseach=$_GET['key'];
                        $query = "SELECT * FROM san_pham where ten LIKE '%$key%'";
                       
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
                                // echo "<div class='col-md-4 col-sm-6 new-box'>";
                            
                                echo "<div class='col-md-4 col-sm-6 new-box'>";
                                //chèn tên
                                // echo"<div class='hover01 column'>";
                                // echo "<div>";
                                // echo "<figure><img src='$img' /></figure>";
                                // echo"  <span>Hover</span>";
                                // echo"</div>";
                                // echo"<div>";
                                // echo" <figure><img src='https://picsum.photos/300/200?image=1024' /></figure>";
                                // echo"<span>Hover</span>";
                                // echo"</div>";
                                // echo"<div>";
                                echo "<h5 class='logo-text'><a href=blog-des.php>$name</a></h5>";
                                //chèn img
                                
                                echo " <a href='blog-des.php?page=products&action=add&id=$id'> <img class='card-img-top' src='$img' alt=''></a>";
                                //chèn nội dung
                               
                                //chèn giá
                                echo VndDot($gia)."<span> VNĐ</span> <br>";
                                // echo" <div class='box_btn'>";
                                // echo "<a href='product.php?page=products&action=add&id=$id class=''><button type='submit' class='btn btn_them'><img src='img/icon.png'/><span>Thêm Giỏ Hàng</span></button>";
                                // echo" </div>";
                                
                                // echo" <div class='box_btn'>";

                               


                                echo "<a href='order-by.php?action=add&themgiohang=1' class=''><button type='submit'class='btn btn-default-bg' name='add-to-cart' id='product_autocart' title='Thêm Vào Giỏ Hàng'><img src='img/icon.png'/><span>Đặt Hàng </span></button></a>";


                                echo " &nbsp &nbsp &nbsp &nbsp";

                               

                                echo "<a href='session.php?page=products&action=add&themgiohang=$id'  ><button type='submit' name='add-to-cart' value=$id ><img src='img/icon.png'/><span>Thêm Giỏ Hàng</span></button></a>";
                                //  echo" </div>";
                                

                                echo "</div>";
                            }
                        }
                        else
                        {
                            echo "<p class='text-danger'>Không tìm thấy sản phẩm</p>";
                        }
                        ?>       
                    </div>
                </div>
            </div>

            </div>
        </div>

  </div>
        
        </div>
    
       <?php include("subpage/footer.php"); ?> 
    </body>
<?php include("subpage/script.php"); ?> 

=======

<?php
function VndDot($strNum)
{
        $len = strlen($strNum);
        $counter = 3;
        $result = "";
        while ($len - $counter >= 0)
        {
            $con = substr($strNum, $len - $counter , 3);
            $result = '.'.$con.$result;
            $counter+= 3;
        }
        $con = substr($strNum, 0 , 3 - ($counter - $len) );
        $result = $con.$result;
        if(substr($result,0,1)=='.'){
            $result=substr($result,1,$len+1);   
        }
        return $result;
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
    <link rel="stylesheet" href="css/test.css">
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
                                <a class="nav-link" href="Trangchu.php">Trang Chủ
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="GioiThieusp.php">Giới Thiệu</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="SanPham.php">Sản Phẩm</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Lienhe.php">Liên Hệ</a>
                            </li>
                           <li class="nav-item">
                           <a href="session.php"><i class="fa fa-cart-plus" aria-hidden="true" ></i> Giỏ Hàng</a>
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
            <img src="img/1.jpg" alt="">
            <img src="img/2.jpg" alt="">

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
                        
                        <div class='row'>
                            <!-- chỗ này là select bên sản phẩm -->
      
                    <?php require("configsever.php");?>
                    <?php 
                        // error_reporting(0);
                        $keyseach=$_POST['key'];
                        $query = "SELECT * FROM san_pham where ten LIKE N'%$keyseach%'";
                       
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
                                // echo "<div class='col-md-4 col-sm-6 new-box'>";
                            
                                echo "<div class='col-md-4 col-sm-6 new-box'>";
                                //chèn tên
                                // echo"<div class='hover01 column'>";
                                // echo "<div>";
                                // echo "<figure><img src='$img' /></figure>";
                                // echo"  <span>Hover</span>";
                                // echo"</div>";
                                // echo"<div>";
                                // echo" <figure><img src='https://picsum.photos/300/200?image=1024' /></figure>";
                                // echo"<span>Hover</span>";
                                // echo"</div>";
                                // echo"<div>";
                                echo "<h5 class='logo-text'><a href=blog-des.php>$name</a></h5>";
                                //chèn img
                                
                                echo " <a href='blog-des.php?page=products&action=add&id=$id'> <img class='card-img-top' src='$img' alt=''></a>";
                                //chèn nội dung
                               
                                //chèn giá
                                echo VndDot($gia)."<span> VNĐ</span> <br>";
                                // echo" <div class='box_btn'>";
                                // echo "<a href='product.php?page=products&action=add&id=$id class=''><button type='submit' class='btn btn_them'><img src='img/icon.png'/><span>Thêm Giỏ Hàng</span></button>";
                                // echo" </div>";
                                
                                // echo" <div class='box_btn'>";
                                echo "<a href='order-by.php?action=add&themgiohang=1' class=''><button type='submit'class='btn btn-default-bg' name='add-to-cart' id='product_autocart' title='Thêm Vào Giỏ Hàng'><img src='img/icon.png'/><span>Đặt Hàng </span></button></a>";
                                echo " &nbsp &nbsp &nbsp &nbsp";
                                echo "<a href='session.php?page=products&action=add&themgiohang=$id'  ><button type='submit' name='add-to-cart' value=$id ><img src='img/icon.png'/><span>Thêm Giỏ Hàng</span></button></a>";
                                //  echo" </div>";
                                

                                echo "</div>";
                            }
                        }
                        else
                        {
                            echo "<p class='text-danger'>Không tìm thấy sản phẩm</p>";
                        }
                        ?>       
                    </div>
                </div>
            </div>

            </div>
        </div>

  </div>
        
        </div>
    
         <div class="footer">
                <div class="container ft-top">
                    <div class="row">
                        <div class="col-md-3">
                            <h3 class="title_ft"> Phụ Kiện Điện Tử TTShop</h3>
                            <span class="border-span"></span>
                            <p >
                                Phụ Kiện Điện Tử TTShop với nhiều mặt hàng chính hãng, mẫu mã đa dạng, đẹp, chất lượng cao bảo hành 1 năm 1 đổi 1 với nhiều khuyến mãi và giao hàng tận nơi trong 60 phút ở khu vực TPHCM
                            </p>
                        </div>
                        <div class="col-md-3">
                            <h3 class="title_ft">Sản phẩm</h3>
                            <span class="border-span"></span>
                            <p>
                                <a href="/">Sạc Dự Phòng</a>
                            </p>
                            <p>
                                <a href="">Loa</a>
                            </p>
                            <p>
                                <a href="">Tai Nghe</a>
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
                            Copyright © 2019 Tiên Tiên. All Rights Reserved
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
>>>>>>> c333148c23b785c2b2c4e782962a326041067d3b
    </html>