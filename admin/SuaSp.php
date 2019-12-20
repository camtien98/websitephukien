<?php include("../configsever.php") ?>
<!--?php 
    $idt=$_GET['id'];
    $que="select * from san_pham where id=$idt";

    $rowdb=mysqli_query($conn,$que);
    $item=mysqli_fetch_assoc($rowdb);
?-->
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin Tiên Tiên</title>
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
                                    <span class="admin-name">Tiên Tiên</span>
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
                        <li><a class="nav-link" href="quanly.php">Đơn Hàng</a>
                        </li>
                        <li><a class="nav-link" href="gopykhachhang.php">Hộp Thư</a></li> 
                        <li><a  href="danhsachsanpham.php">Danh Sách Sản Phẩm</a> </li>                    
                    </ul>
                   
   
    <!-- Breadcome start-->
    <div class="breadcome-area mg-b-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                        <div class="breadcome-heading">
                            <h2>Cập Nhật Sản Phẩm</h2>
                        </div>
                        <ul class="breadcome-menu">
                            <li><a href="../login.php">Login</a> <span class="bread-slash">/</span>
                            </li>
                            
                            <li><span class="bread-blod"> Cập Nhật</span>
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
                        <input type="name" class="form-control" placeholder="Tên Sản Phẩm" name="txtname" value="<?php echo $item['ten']; ?>">
                    </div>
                    <div class="form-group">
                        <input type="phone" class="form-control" placeholder="Giá Sản Phẩm" name="txtphone" min="1">  <!--value="<?php echo $item['gia']; ?>"-->
                    </div>
                    
                    <div class="form-group">

                       <input class="btn btn-success" type="file" name="fileupload" id="fileupload" >
                    </div>
                    <!--?php
                        if(isset($item['hinhanh']))
                        {
                            $hinh =$item['hinhanh'];
                                 echo " <img src='../$hinh' width='50%'>";
                       
                        }
                    ?-->
                       
                    <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea2" rows="3" placeholder="Nội Dung" name="txtnoidung"> </textarea> <!--?php echo $item['noidung'];?--> 
                    </div>
                    </div>
                    <div class="form-group">
                    Loại:
                    <select name="loaisp">
                        
                    <?php 
                    $sql_type="SELECT * FROM loaisp"; 
                    $query_type=mysqli_query($conn, $sql_type);

                    while($loai=$query_type->fetch_assoc())
                    {
                        $id=$loai['idloai'];
                        $name=$loai['tenloai'];?>
                    
                        <option name="" value="<?php echo $id ?>"><?php echo $name;?></option>
                    <?php }?>
                        
                    </select>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="form-control" name="ok">Cập Nhật Sản Phẩm</button>
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
            if($_POST["loaisp"]){
                   $loai=$_POST["loaisp"];
            }
           
            if($txthoten && $txtsodienthoai )
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
   else{
    echo "";
   }
}
else
{
    echo "<br>Không upload được file!";
}   
    $txthinh=basename( $_FILES["fileupload"]["name"]);
        //hung gia tri loai san pham
    //if($txtsodienthoai <0)
    //{
    //    echo " nhap sai gia ";
    //    exit();
   // }
    
       $idloaisp=$_REQUEST['loaisp'];
                echo "<hr>";
                       $sql = "UPDATE san_pham 
                       SET
                       
                      ten= N'$txthoten',
                      gia='$txtsodienthoai',
                      hinhanh='img/$txthinh',
                       noidung=N'$txtnoidung',
                        idloai= '$idloaisp'
                      where id='$id'
                       ";
                      
                    
                
                
                
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }
              
                
                if (mysqli_query($conn, $sql)) {
                   
                   
                    echo "<br>Thêm Sản Phẩm Thành Công";
                    
                    
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
                        <p>Copyright &#169; 2019 </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->
   
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