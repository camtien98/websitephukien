<?php
include_once("../configsever.php");
echo "hello";

    $ngay_dat="17";
    // error_reporting(0);
    $query = "SELECT * FROM hoa_don where ngay_dat_hang={$ngay_dat}";
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
            $ngay_dat_mua=$row['ngay_dat_hang'];
            echo $ngay_dat_mua;
        }
    }

    else
    {
        echo "Không Nhận Được Dữ Liệu";
    }
?>
                        
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
                $tong_lon_duoc_dinh_dang=number_format($tong_lon,0,",",".");
							echo "<b>".$tong_lon_duoc_dinh_dang."</b>";
                {
                ?>
                
                    
                  
                    <?php
                }								
        }
    }
}
?>
