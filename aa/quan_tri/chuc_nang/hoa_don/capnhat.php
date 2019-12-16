<?php 
						
						if(isset($_POST['ok']))
						{
							$tt=0;
							if(isset($_POST['dxn'])){
								$tt=$_POST['dxn'];
								$cc="update hoa_don set tinh_trang='Đã xác nhận' where id=$id";
								mysqli_query($conn,$cc);
							}
							if(isset($_POST['dg'])){
								$tt=$_POST['dg'];
								$cc="update hoa_don set tinh_trang='Đã giao' where id=$id";
								mysqli_query($conn,$cc);
							}
							if(isset($_POST['hh'])){
								$tt=$_POST['hh'];
								$cc="update hoa_don set tinh_trang='Hết hàng' where id=$id";
								mysqli_query($conn,$cc);
							}


						}
						
						 ?>