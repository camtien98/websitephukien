
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
        {  session_start();
            include("../configsever.php");
            
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
          
            
            if (mysqli_query($conn, $sql)) {
               
               
                echo "Cẩm Ơn Bạn Đã Mua Hàng ";
                unset($_SESSION['giohang']);
                
            } else {
                echo "Vui Lòng Chọn Hàng Và Điền Đầy Đủ Thông Tin!! " . $sql . "<br>" . mysqli_error($conn);
            }
            
            mysqli_close($conn);
            
    
    
           
        }
}
?>