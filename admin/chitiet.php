 <?php require("../configsever.php");?>
    <?php
    @session_start();

    if (isset($_SESSION['error'])) {
    echo "<script>alert('{$_SESSION['error']}');</script>";
    unset($_SESSION['error']);
    }
    ?>

                        <?php
                        if (isset($_GET['id']))
                        {
                            $stt=$_GET['id'];
                            // error_reporting(0);
                        $query = "SELECT * FROM hoa_don WHERE id={$stt}";
                        $huy="SELECT * FROM hoa_don WHERE trang_thai='Hủy Đơn'";
                            $result = mysqli_query($conn, $query);

                            if (mysqli_num_rows($result) > 0)
                            {
                                while ($row = mysqli_fetch_assoc($result))
                                {
                                   
                                    $id=$row['id'];
                                    $ten_nguoi_mua=$row['ten_nguoi_mua'];
                                    $email=$row['email'];
                                    $dia_chi=$row['dia_chi'];
                                    $dien_thoai=$row['dien_thoai'];
                                    $noi_dung=$row['noi_dung'];
                                    $hang_duoc_mua=$row['hang_duoc_mua'];
                                }
                            }
                        }
                        else
                        {
                            echo "Không Nhận Được Dữ Liệu";
                        }
                            ?>







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
                                     <li><a href="../login.php"><span class="adminpro-icon adminpro-locked author-log-ic"></span>Log Out</a> </li>
                                </ul>
                            </li>
                           
                            

                                         
                                    
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
                        <li><a class="nav-link" href="quanly.php">Trang chủ</a>
                        </li>
                        <li><a class="nav-link" href="gopykhachhang.php">Hộp Thư</a>
                        </li>                    
                    </ul>
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
                            <h2>Danh Sách Đặt Hàng</h2>
                        </div>
                        <ul class="breadcome-menu">
                            <li><a href="../login.php">Login</a> <span class="bread-slash">/</span>
                            </li>
                           
                         
                            <li><a href="quanly.php">Danh Sách Đặt Hàng </a> <span class="bread-slash">/</span>
                           
                            </li>
                            <li><span class="bread-blod">Chi Tiết Đơn Đặt Hàng</span>
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
            <div class="row">
                <div class="col-lg-12">
                    <div class="sparkline8-list shadow-reset">
                        <div class="sparkline8-hd">
                            <div class="main-sparkline8-hd">
                                <h1>Chi Tiết Đơn Hàng</h1>
                                <div class="sparkline8-outline-icon">
                                    <span class="sparkline8-collapse-link"><i class="fa fa-chevron-up">Thu Gọn</i></span>
                               
                                </div>
                            </div>
                        </div>
                        <div class="sparkline8-graph">
                            <div class="datatable-dashv1-list custom-datatable-overright">
                                <div id="toolbar">
                                   
                                </div>
                                <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                    <thead>
                                        <tr>
                                         
                                            <th data-field="id">STT SẢN PHẨM</th>
                                           
                                            <th data-field="name" data-editable="true">Sản Phẩm Đặt Hàng</th>
                                            <th data-field="company" data-editable="true">Đơn Giá</th>
                                            <th data-field="complete">Số Lượng</th>
                                            <th data-field="task" data-editable="true">Tổng Cộng </th>
                                         
                                        </tr>
                                    </thead>
                            <tbody>
                           
                                        <?php
                       
                        $m=explode("[|||||]",$hang_duoc_mua);
                        $tong_lon=0;
                        for($i=0;$i<count($m);$i++)
                        {
                            if(isset($m[$i]))
                            {
                                if($m[$i]!="")
                                {
                                    $stt=$i+1;
                                    $m_2=explode("[|||]",$m[$i]);
                                    $id_sp=$m_2[0];
                                    $sl_sp=$m_2[1];
                                    $tv_sp="SELECT * FROM san_pham
                                    WHERE id={$id_sp}";
                               
                                    $tv_sp_1=mysqli_query($conn,$tv_sp);
                                   
                                    $tv_sp_2=mysqli_fetch_assoc($tv_sp_1);
                                    $ten=$tv_sp_2['ten'];
                                    $gia=$tv_sp_2['gia'];
                                    $gia_duoc_dinh_dang=number_format($gia,0,",",".");
                                    $tong=$gia*$sl_sp;
                                    $tong_duoc_dinh_dang=number_format($tong,0,",",".");
                                    $tong_lon=$tong_lon+$tong;
                                    if($sl_sp!=0)
                                    {
                                    ?>
                                   
                                       
                                        <tr>
                                            <td><?php echo $stt; ?></td>
                                            <td><?php echo $ten; ?></td>
                                            <td><?php echo $gia_duoc_dinh_dang; ?></td>
                                            <td><?php echo $sl_sp; ?></td>
                                        </td>
                                        <td>
                                            <?php echo $tong_duoc_dinh_dang; ?></td>
                                        </tr>
                                        <?php
   }
}
}
}
?>


                                      </tbody>
                       
                                </table>
                                <div>
                                <td>Tổng Cộng Đơn Hàng Trên  <?php
$tong_lon_duoc_dinh_dang=number_format($tong_lon,0,",",".");
echo "<b>".$tong_lon_duoc_dinh_dang."</b>";
?></td>
                        </div>
                                <td>
                                <?php
                      if (isset($_GET['id']))
                        {  
                            $stt=$_GET['id'];
                            // error_reporting(0);
                        $huy = "SELECT * FROM hoa_don WHERE id={$stt} and trang_thai='Hủy Đơn'";
                       
                            $result = mysqli_query($conn, $huy);

                            if (mysqli_num_rows($result) > 0)
                            {
                                while ($row = mysqli_fetch_assoc($huy))
                                {  
                                   
                                   
                                }
                            }
                            else
                            {
                                 echo"   <div class='btn-group project-list-ad'>";
                               echo" <a href='../session_admin/duyetdonhang.php?action=add&duyet=$id'><button class='btn btn-white btn-xs'><i class='fa fa-get-pocket'></i> Xác Nhận Đơn Hàng</button></a>";
                               
                              echo"  </div>";
                            }
                        }

                                 ?>

                                 

                                <div class='btn-group project-list-action'>
                                <a href='quanly.php'><button class='btn btn-white btn-xs'><i class='fa fa-folder'></i> Quay Trở Lại</button></a>

                                 <?php echo "<a href='../session_admin/xoadonhang.php?action=add&delete=$id'><button class='btn btn-white btn-xs'><i class='fa fa-times'></i> Xóa Đơn Hàng</button></a>"?>
                                 <div class='btn-group project-list-ad'>
                                <a href='../session_admin/duyetdonhang.php?action=add&huy=<?php echo $id?>'><button class='btn btn-white btn-xs'><i class='fa fa-get-pocket'></i> Đơn Hàng Bị Lỗi</button></a>
                               
                                </div>
                                </div>
                                </td>                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Start-->
    <div class="footer-copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-copy-right">
                        <p>Copyright &#169; 2019 All rights reserved. facebook <a href=https://www.facebook.com/tien.cam.7549185>Tiên Tiên </a>.</p>
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