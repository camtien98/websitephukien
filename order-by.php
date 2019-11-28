
<?php include("Session/chonhang.php")?> 
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
                        </ul>
                       <li class="nav-link">
                                <form class="form-inline my-2 my-lg-0" style="margin-left:30px;" action="seach.php" method="POST">
                                 <input class="form-control mr-sm-2" type="search" placeholder="Tìm kiếm" aria-label="Search" name="timkiem">
                                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                                         <i class="fa fa-search" aria-hidden="true"></i>

                                      </button>
                              </form>
                              </li>
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
                <h4 class="title_ct">Phụ Kiện Điện Tử TTShop</h4>
                <p>
                    <i class="fa fa-map-marker"></i>180 Cao Lỗ, Phường 4, Quận 8, HCM</p>
                <p>
                    <i class="fa fa-phone-square"></i>0898.105.695</p>
                <p>
                    <i class="fa fa-envelope"></i>ntcamtien811@gmail.com</p>
                <p>
                    <i class="fa fa-facebook-square"></i> facebook: 0898105695</p>
                <p>
                    <i class="fa fa-instagram"></i> zalo/0898105695/phukiendientu TTShop</p>

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
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Địa Chỉ" name="txtdiachi"></textarea>
                    </div>
                    <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea2" rows="3" placeholder="Nội Dung" name="txtnoidung"></textarea>
                    </div>
                    <div class="box_btn">
                        <button type="submit" class="btn btn_contact" name="ok">Đặt Hàng</button>
                    </div>
                </form>
                <?php

    
    $txthoten=$txtsodienthoai=$txtemail=$txtdiachi=$txtnoidung=NULL;
    $loi=array();
    $loi["name"]=$loi["phone"]=$loi["email"]=$loi["diachi"]=$loi["noidung"]=NULL;
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
            if(empty($_POST["txtdiachi"]))
            {
                $loi["diachi"]="*Vui lòng nhập Địa Chỉ.";
            }
            else
            {
                    $txtdiachi=trim(nl2br($_POST['txtdiachi']));
            }
            if($txthoten && $txtsodienthoai && $txtemail && $txtdiachi )
            {  
               
                include_once("configsever.php");
                $soluong="";$id="";

                if (isset($_SESSION['giohang'])) {
                             
                    
                    $hang_duoc_mua="";
                    for($i=0;$i<count($_SESSION['giohang']);$i++)
                    {
         
                        $hang_duoc_mua=$hang_duoc_mua.$_SESSION['giohang'][$i]['id']."[|||]".$_SESSION['giohang'][$i]['soluong']."[|||||]";
                        
                    }   
                         $date=date("d/m/Y");
                         echo $date;
                       $sql = "INSERT INTO hoa_don (
                        id ,
                        ten_nguoi_mua
                        ,email
                        ,dia_chi,
                        dien_thoai,
                        noi_dung,
                        hang_duoc_mua
                        ,trang_thai,
                        ngay_dat_hang)
                       VALUES 
                       ('',
                       N'$txthoten',
                       '$txtemail',
                       N'$txtdiachi',
                       '$txtsodienthoai',
                       N'$txtnoidung',
                       '$hang_duoc_mua',
                       'Chưa Duyệt',
                       '$date')";
                      
                    
                }
                
                
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }
              
                
                if (mysqli_query($conn, $sql)) 
                {
                   
                   
                    echo "Cảm Ơn Bạn Đã Mua Hàng ";
                    unset($_SESSION['giohang']);
                    
                } else 
                {
                    echo "Vui Lòng Chọn Hàng Và Điền Đầy Đủ Thông Tin! " . $sql . "<br>" . mysqli_error($conn);
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
                        <h3 class="title_ft">Phụ Kiện Điện Tử TTShop </h3>
                        <span class="border-span"></span>
                        <p>
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
                            <p>
                                <a href="">Ốp Lưng</a>
                            </p>
                            <p>...</p>
                        </div>
                        <div class="col-md-3">
                            <h3 class="title_ft">Liên hệ</h3>
                            <span class="border-span"></span>
                            
                            <p>
                                <i class="fa fa-phone-square"></i>0898.105.695</p>
                            <p>
                                <i class="fa fa-envelope"></i> ntcamtien811@gmail.com</p>
                             <p>
                                <i class="fa fa-map-marker"></i> 180 Cao Lỗ ,Phường 4 , Quận 8</p>
                            <p>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.9551992264037!2d106.67572621530081!3d10.737936392347638!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752fad182844dd%3A0xe3099eb4c87f5610!2zMTgwIMSQxrDhu51uZyBDYW8gTOG7lywgUGjGsOG7nW5nIDQsIFF14bqtbiA4LCBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1540020353612"
                width="250" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
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
<script defer > window.onload = function(){ setTimeout(function(){var chatJsElement = document.createElement("script"); chatJsElement.src = "https://app.ohchat.net/clients/43772/code.php"; chatJsElement.setAttribute("defer", "defer"); document.getElementsByTagName("body")[0].appendChild(chatJsElement);}, 300) }; </script><script src="js/jquery-3.3.1.min.js"></script>
<script src="slick/slick.min.js"></script>
<script src="script.js"></script>
<script src="js/bootstrap.min.js"></script>

<script type='text/javascript'>
//<![CDATA[
document.write('<style type="text/css">body{background:#f5465a;padding-bottom:150px}</style><img style="position:fixed;z-index:9999;top:0;left:0" src="https://lh6.googleusercontent.com/-c8CoUvCourw/UMcWWTeBE-I/AAAAAAAABcU/q-j9X7733zw/s150/top-left.png"/><img style="position:fixed;z-index:9999;top:0;right:0" src="https://lh5.googleusercontent.com/-JABklf9ModU/UMcWWzSSJ4I/AAAAAAAABcY/g4sZMhrgjXU/s150/top-right.png"/><div style="position:fixed;z-index:9999;bottom:0;left:0;width:100%;height:104px;background:url(https://smartbb.googlecode.com/svn/trunk/dgm-footer.png) repeat-x bottom left;"></div><img style="position:fixed;z-index:9999;bottom:30px;left:30px" src="https://lh4.googleusercontent.com/-mEgGUg-ou4k/UMcz0qy2NhI/AAAAAAAABc0/gF1uW4iE6y0/s180/bottom-left.png"/>');var no=100;var hidesnowtime=0;var snowdistance='pageheight';var ie4up=(document.all)?1:0;var ns6up=(document.getElementById&&!document.all)?1:0;function iecompattest(){return(document.compatMode&&document.compatMode!='BackCompat')?document.documentElement:document.body}var dx,xp,yp;var am,stx,sty;var i,doc_width=800,doc_height=600;if(ns6up){doc_width=self.innerWidth;doc_height=self.innerHeight}else if(ie4up){doc_width=iecompattest().clientWidth;doc_height=iecompattest().clientHeight}dx=new Array();xp=new Array();yp=new Array();am=new Array();stx=new Array();sty=new Array();for(i=0;i<no;++i){dx[i]=0;xp[i]=Math.random()*(doc_width-50);yp[i]=Math.random()*doc_height;am[i]=Math.random()*20;stx[i]=0.02+Math.random()/10; sty[i]=0.7+Math.random();if(ie4up||ns6up){document.write('<div id="dot'+i+'" style="POSITION:absolute;Z-INDEX:'+i+';VISIBILITY:visible;TOP:15px;LEFT:15px;"><span style="font-size:18px;color:#fff">*</span></div>')}}function snowIE_NS6(){doc_width=ns6up?window.innerWidth-10:iecompattest().clientWidth-10;doc_height=(window.innerHeight&&snowdistance=='windowheight')?window.innerHeight:(ie4up&&snowdistance=='windowheight')?iecompattest().clientHeight:(ie4up&&!window.opera&&snowdistance=='pageheight')?iecompattest().scrollHeight:iecompattest().offsetHeight;for(i=0;i<no;++i){yp[i]+=sty[i];if(yp[i]>doc_height-50){xp[i]=Math.random()*(doc_width-am[i]-30);yp[i]=0;stx[i]=0.02+Math.random()/10;sty[i]=0.7+Math.random()}dx[i]+=stx[i];document.getElementById('dot'+i).style.top=yp[i]+'px';document.getElementById('dot'+i).style.left=xp[i]+am[i]*Math.sin(dx[i])+'px'}snowtimer=setTimeout('snowIE_NS6()',10)}function hidesnow(){if(window.snowtimer){clearTimeout(snowtimer)}for(i=0;i<no;i++)document.getElementById('dot'+i).style.visibility='hidden'}if(ie4up||ns6up){snowIE_NS6();if(hidesnowtime>0)setTimeout('hidesnow()',hidesnowtime*1000)}
//]]>
</script>

<script type='text/javascript' src='http://hoangluyen.com/demo/js/snow.mini.js'></script>
<script type="text/javascript" src="https://itexpress.vn/js/noel.js"></script>

</html>
