<?php include("Session/giohang.php");?>
<?php include("subpage/banner.php"); ?> 
<!------------------------------------------------------------------------------------->

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
       
        
       <div class="col-xs-12 box_contact">
       <h2 class="text-center">Giỏ Hàng</h2>
<div class="container"> 
 <table id="cart" class="table table-hover table-condensed"> 
  <thead> 
   <tr> 
    <th style="width:48%">&nbsp; &nbsp; &nbsp;Sản phẩm</th> 
    <th style="width:10%">Giá</th> 
    <th style="width:10%">Số lượng</th> 
    <th style="width:22%" class="text-center">Thành tiền</th> 
    <th style="width:10%"> </th> 
   </tr> 
  </thead> 
 
  
      <?php
                              $tongtien = 0;
                              $soluong=0;
                              $thanhtien=0;
                              if (isset($_SESSION['giohang'])) {
                                
                                 for ($i = 0; $i < count($_SESSION['giohang']); $i++) {
                                    $query = "SELECT * FROM san_pham where id=". $_SESSION['giohang'][$i]['id'];
                                    $result = mysqli_query($conn, $query);
                                    while ($row = mysqli_fetch_assoc($result)) 
                                    {
                                    $soluong=$_SESSION['giohang'][$i]['soluong'];
                                    $tongtien = $tongtien + ($row['gia'] * $_SESSION['giohang'][$i]['soluong']);
                                    $thanhtien=$soluong*($row['gia']);
                                    $id=$row['id'];
                                    $name=$row['ten'];
                                    $gia=$row['gia'];
                                    $img=$row['hinhanh'];
                                    $content=$row['noidung'];
                                    
                                    echo"<tbody><tr> ";
                                    echo"<td data-th='Product'>";
                                    echo"<div class='col-xs-12 box_contact'>";
                                    echo" <div class='col-sm-2 hidden-xs'><img src='$img' alt='Sản phẩm 1' class='img-responsive' width='100'>";
                                    echo"</div>";
                                    echo"<div class='col-sm-10'>" ;
                                    echo"<h4 class='nomargin'>$name</h4>"; 
                                    echo"<p>$content</p>"; 
                                    echo"</div>"; 
                                    echo"</div>"; 
                                    echo"</td>"; 
                                    echo"<td data-th='Price'>$gia</td>"; 
                                    echo"<td data-th='Quantity' ><input type='number' value='$soluong' />";
                                    echo"</td>"; 
                                    echo"<td data-th='Subtotal' class='text-center'>$thanhtien</td> ";
                                    echo"<td class='action' data-th=''>";
                                    // echo"<button class='btn btn-info btn-sm'  value=$id><i class='fa fa-edit'></i>";
                                    echo"</button>";
                                    
                                    echo"<a href='Session/xoaidgiohang.php?action=add&xoagiohang=$id'  ><button class='btn btn-danger btn-sm'><span>Xóa Giỏ Hàng</span><i class='fa fa-trash-o'></i>";
                                    echo"</button></a> ";
                                    echo" </td> ";
                                    echo"  </tr> ";
                                    echo"</tbody><tfoot> ";
                                    
                                    }
                                 }
                              } else 
                              {
                                    
                              }
                              ?>
                           
   <tr class="visible-xs"> 
    <td class="text-center"><strong></strong>
    </td> 
   </tr> 
   <tr> 
    <td><a href="Trangchu.php" class="btn btn-warning"><i class="fa fa-angle-left"></i> Trở Về Trang Chủ</a>
    </td> 
    <td colspan="2" class="hidden-xs"><a href="Session/xoatatcagiohang.php"class="btn btn-warning"><strong>Xóa Tất Cả</strong> </a></td> 
    <td class="hidden-xs text-center"><strong><?php echo "Tổng Tiền : ".$tongtien."&nbsp VNĐ"; ?></strong>
    </td> 
    <?php echo $id ?>
    <td><a href="order-by.php?action=add&themgiohang=<?php echo $id?>" class="btn btn-success btn-block">Thanh toán <i class="fa fa-angle-right"></i></a>
    </td> 
   </tr> 
  </tfoot> 
 </table>
</div>
</div>
</div> 
<!-------------------------------------------------------------------------------------------------->
             <?php include("subpage/footer.php"); ?> 

 <!-------------------------------------------------------------------------------------------------->

    </body>

<?php include("subpage/script.php"); ?> 

    </html>