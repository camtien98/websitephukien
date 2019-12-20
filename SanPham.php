
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
<!---------------------------------------------------------------------------------------------->
 <?php include("subpage/banner.php"); ?> 
<!---------------------------------------------------------------------------------------------->

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
                        $query = "SELECT * FROM san_pham";
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
                               
                                //  echo" </div>";
                                 echo "<a href='order-by.php?action=add&themgiohang=1' class=''><img src='img/icon.png'/><span>MUA NGAY </span></a>";
                                echo "<a href='session.php?page=products&action=add&themgiohang=$id'  ><img src='img/icon.png'/><span>Thêm Giỏ Hàng</span></button></a>";
                                
                                echo "</div>";
                            }
                        }
                        else
                        {
                            echo "DISCONNECT";
                        }
                        ?>       
                    </div>
                </div>
            </div>

            </div>
        </div>

  </div>
        
        </div>
 <!---------------------------------------------------------------------------------------------------->
    <?php include("splienquan.php");?>
<!-------------------------------------------------------------------------------------------------->
    <?php include("subpage/footer.php"); ?> 

<!---------------------------------------------------------------------------------------------->

      
 </body>
<?php include("subpage/script.php"); ?> 

    </html>