<?php include("../configsever.php") ?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin Nhuận Linh</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- adminpro icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/adminpro-custon-icon.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="css/data-table/bootstrap-editable.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- charts CSS
		============================================ -->
    <link rel="stylesheet" href="css/c3.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Header top area start-->
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="admin-logo">
                        <a href="quanly.php"><img src="img/logo/log.png" alt="" />
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-0 col-xs-12">
                  
                </div>
                <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
                    <div class="header-right-info">
                        <ul class="nav navbar-nav mai-top-nav header-right-menu">
                            <li class="nav-item dropdown">
                              
                            <li class="nav-item">
                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                    <span class="adminpro-icon adminpro-user-rounded header-riht-inf"></span>
                                    <span class="admin-name">Mai Nhuận Linh</span>
                                    <span class="author-project-icon adminpro-icon adminpro-down-arrow"></span>
                                </a>
                                <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated flipInX">
                                     <li><a href="../login.php"><span class="adminpro-icon adminpro-locked author-log-ic"></span>Log Out</a>
                                    </li>
                                </ul>
                            </li>
                           
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header top area end-->
    <!-- Main Menu area start-->
    <div class="main-menu-area mg-tb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav nav-tabs custom-menu-wrap">
                        <li><a data-toggle="tab" href="#Home">Trang Chủ</a>
                        </li>
                        <li><a data-toggle="tab" href="#mailbox">Hộp Thư</a>
                        </li>
                         <li><a  href="danhsachsanpham.php">Danh Sách Sản Phẩm</a>
                        </li>
                         <li><a  href="danhsachtintuc.php">Danh Sách Tin Tức</a>
                        </li>
                      
                    </ul>
                    <div class="tab-content custom-menu-content">
                        <div id="Home" class="tab-pane tab-custon-menu-bg animated flipInX">
                            <ul class="main-menu-dropdown">
                                <li><a href="../index.php">Quay Trở Lại</a>
                                </li>
                               
                            </ul>
                        </div>
                        <div id="mailbox" class="tab-pane tab-custon-menu-bg animated flipInX">
                            <ul class="main-menu-dropdown">
                                <li><a href="gopykhachhang.php">Góp Ý Khách Hàng</a>
                                </li>
                               
                            </ul>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Menu area End-->
   
    <!-- Breadcome start-->
    <div class="breadcome-area mg-b-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                        <div class="breadcome-heading">
                            <h2>Hóa Đơn</h2>
                        </div>
                        <ul class="breadcome-menu">
                            <li><a href="../login.php">Login</a> <span class="bread-slash">/</span>
                            </li>
                            
                            <li><span class="bread-blod">Hóa Đơn</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--PHP-->


                   
    <!-- Breadcome End-->
    <!-- stockprice, feed area end-->
    <div class="admin-dashone-data-table-area mg-b-40">
        <div class="container">
<div class="col-md-6">
                <!-- <h2>Để lại lời nhắn cho chúng tôi</h2> -->
                <form acction="addsp.php" method="POST" enctype="multipart/form-data"
>
                    <div class="form-group">
                        <input type="name" class="form-control" placeholder="Tên Tin Tức" name="txtname">
                    </div>
                   
                    
                    <div class="form-group">

                       <input class="btn btn-success" type="file" name="fileupload" id="fileupload" >
                    </div>
                    <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea2" rows="3" placeholder="Nội Dung" name="txtnoidung"></textarea>
                    </div>
                    <div class="box_btn">
                        <button type="submit" class="btn btn-success" name="ok">Thêm Tin Tức</button>
                    </div>
                </form>
                <?php

	
	$txthoten=$txtsodienthoai=$txtemail=$txtnoidung=NULL;
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
           
            if($txthoten  )
            {  
          
          
            	//Thư mục bạn sẽ lưu file upload
$target_dir    = "img/";
//Vị trí file lưu tạm trong server
$target_file   = $target_dir . basename($_FILES["fileupload"]["name"]);
$allowUpload   = true;
//Lấy phần mở rộng của file
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$maxfilesize   = 800000; //(bytes)
////Những loại file được phép upload
$allowtypes    = array('jpg', 'png', 'jpeg', 'gif');


if(isset($_POST["ok"])) {
    //Kiểm tra xem có phải là ảnh
    $check = getimagesize($_FILES["fileupload"]["tmp_name"]);
    if($check !== false) {
        echo "Đây là file ảnh - " . $check["mime"] . ".";
        $allowUpload = true;
    } else {
        echo "Không phải file ảnh.";
        $allowUpload = false;
    }
}

// Kiểm tra nếu file đã tồn tại thì không cho phép ghi đè
if (file_exists($target_file)) {
    echo "File đã tồn tại.";
    $allowUpload = false;
}
// Kiểm tra kích thước file upload cho vượt quá giới hạn cho phép
if ($_FILES["fileupload"]["size"] > $maxfilesize)
{
    echo "Không được upload ảnh lớn hơn $maxfilesize (bytes).";
    $allowUpload = false;
}


// Kiểm tra kiểu file
if (!in_array($imageFileType,$allowtypes ))
{
    echo "<br>Chỉ được upload các định dạng JPG, PNG, JPEG, GIF";
    $allowUpload = false;
}

// Check if $uploadOk is set to 0 by an error
if ($allowUpload) {
    if (move_uploaded_file($_FILES["fileupload"]["tmp_name"], $target_file))
    {
        echo "<br>File ". basename( $_FILES["fileupload"]["name"]).
        "Đã upload thành công";
    }
    else
    {
        echo "<br>Có lỗi xảy ra khi upload file.";
    }
}
else
{
    echo "<br>Không upload được file!";
}	
	$txthinh=basename( $_FILES["fileupload"]["name"]);
               
                       $sql = "INSERT INTO tin_tuc (
                        id ,
                        ten
                        
                        ,hinhanh,
                        
                        noidung
                       )
                       VALUES 
                       ('',
                       N'$txthoten',
                      
                      'img/$txthinh',
                       N'$txtnoidung'
                       )";
                      
                    
                
                
                
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }
              
                
                if (mysqli_query($conn, $sql)) {
                   
			       
                    echo "<br>Thêm Tin Tức Không Thành Công";
                    
                    
                } else {
                    echo "<br>Vui Lòng Điền Đầy Đủ Thông Tin!! " . $sql . "<br>" . mysqli_error($conn);
                }
                
                mysqli_close($conn);
                
        
        
               
            }
	}
 ?>
</div>
</div>
            </div>
        </div>
    </div>
   <div class="footer-copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-copy-right">
                        <p>Copyright &#169; 2019 NHUẬN LINH All rights reserved. facebook <a href="https://www.facebook.com/Linhnhi.nhongnheo">Mai Nhuận Linh</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->
    <!-- Chat Box Start-->
    <div class="chat-list-wrap">
        <div class="chat-list-adminpro">
            <div class="chat-button">
                <span data-toggle="collapse" data-target="#chat" class="chat-icon-link"><i class="fa fa-comments"></i></span>
            </div>
            <div id="chat" class="collapse chat-box-wrap shadow-reset animated zoomInLeft">
                <div class="chat-main-list">
                    <div class="chat-heading">
                        <h2>Messanger</h2>
                    </div>
                    <div class="chat-content chat-scrollbar">
                        <div class="author-chat">
                            <h3>MAI NHUẬN LINH :)) <span class="chat-date">10:15 am</span></h3>
                            <p>CHÀO BẠN, shop rất vui được tư vấn cho bạn ạ,</p>
                        </div>
                        <div class="client-chat">
                            <h3>MAI NHUẬN LINH :)) <span class="chat-date">10:10 am</span></h3>
                            <p>Phong cách mà bạn thích là gì ạ</p>
                        </div>
                        <div class="author-chat">
                            <h3>MAI NHUẬN LINH :)) <span class="chat-date">10:05 am</span></h3>
                            <p>Bạn cho shop xin chiều cao, cân nặng để có thể tư vấn cho bạn rõ hơn được không ạ</p>
                        </div>
                        <div class="client-chat">
                            <h3>MAI NHUẬN LINH :)) <span class="chat-date">10:02 am</span></h3>
                            <p>Chúc bạn có một ngày tốt lành</p>
                        </div>
                    </div>
                    <div class="chat-send">
                        <input type="text" placeholder="Type..." />
                        <span><button type="submit">Send</button></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Chat Box End-->
    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="js/counterup/jquery.counterup.min.js"></script>
    <script src="js/counterup/waypoints.min.js"></script>
    <!-- peity JS
		============================================ -->
    <script src="js/peity/jquery.peity.min.js"></script>
    <script src="js/peity/peity-active.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
    <!-- map JS
		============================================ -->
    <script src="js/map/raphael.min.js"></script>
    <script src="js/map/jquery.mapael.js"></script>
    <script src="js/map/france_departments.js"></script>
    <script src="js/map/world_countries.js"></script>
    <script src="js/map/usa_states.js"></script>
    <script src="js/map/map-active.js"></script>
    <!-- data table JS
		============================================ -->
    <script src="js/data-table/bootstrap-table.js"></script>
    <script src="js/data-table/tableExport.js"></script>
    <script src="js/data-table/data-table-active.js"></script>
    <script src="js/data-table/bootstrap-table-editable.js"></script>
    <script src="js/data-table/bootstrap-editable.js"></script>
    <script src="js/data-table/bootstrap-table-resizable.js"></script>
    <script src="js/data-table/colResizable-1.5.source.js"></script>
    <script src="js/data-table/bootstrap-table-export.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
</body>

</html>