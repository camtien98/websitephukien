<?php 
    
    include("configsever.php"); 

    if(isset($_GET['page'])){ 
          
        $pages=array("san_pham", "cart"); 
          
        if(in_array($_GET['page'], $pages)) { 
              
            $_page=$_GET['page']; 
              
        }else{ 
              
            $_page="san_pham"; 
              
        } 
          
    }else{ 
          
        $_page="san_pham"; 
          
    } 
?>
<!---------------------------------------------------------------------------------------------->
 <?php include("subpage/banner.php"); ?> 
<!---------------------------------------------------------------------------------------------->

    <div class="banner-ar">
        <img src="img/bg-ar.jpg" alt="">
    </div>
    <div class="container body-archive">
        <div class="col-xs-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><i class="fa fa-home"></i> <a href="#">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="">Blog</a></li>
                    <li class="breadcrumb-item">Giới Thiệu Sản Phẩm</li>

                </ol>
            </nav>
        </div>

        <div class="col-xs-12">
            <h1 class="tl-new-des" align="center">Giới Thiệu Sản Phẩm</h1>
            <div class="body-text-new">
                <p>
               
                <?php 
  
  if(isset($_GET['action']) && $_GET['action']=="add"){ 
        
      $id=intval($_GET['id']); 
        
      if(isset($_SESSION['cart'][$id])){ 
            
          $_SESSION['cart'][$id]['quantity']++; 
            
      }else{ 
            
          $sql_s="SELECT * FROM san_pham
              WHERE id={$id}"; 
          $query_s=mysqli_query($conn, $sql_s);
          if (mysqli_num_rows($query_s) > 0)
          { 
            $data=mysqli_fetch_assoc($query_s);
              {
                echo "<div class='text-center'>";
                echo " <img class='card-fuild text-center'  src='$data[hinhanh]' alt=''></a>";
                echo "</div>";

                echo "<h5 class='tl-new'>$data[ten] </a></h5>";
                echo "<p class='card-text'>$data[noidung] [...]</p>";
               
              }
                

          }else{ 
                
              $message="Tạm hết hàng"; 
                
          } 
            
      } 
        
  } 

?>
      
                </p>
            </div>

        </div>
    </div>
 <!---------------------------------------------------------------------------------------------------->
    <?php include("splienquan.php");?>
<!-------------------------------------------------------------------------------------------------->
    <?php include("subpage/footer.php"); ?> 

<!---------------------------------------------------------------------------------------------->
    
</body>
 <!------------------------------------------------------------------------------------------->
<?php include("subpage/script.php"); ?> 
</html>