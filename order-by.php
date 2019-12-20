
<?php include("Session/chonhang.php")?> 
<!---------------------------------------------------------------------------------------------->
 <?php include("subpage/banner.php"); ?> 
<!---------------------------------------------------------------------------------------------->

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
    <!---------------------------------------------------------------------------------------------->
 <?php include("subpage/footer.php"); ?> 
<!---------------------------------------------------------------------------------------------->

</body>
<?php include("subpage/script.php"); ?> 


</html>
