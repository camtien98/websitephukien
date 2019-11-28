<link rel="stylesheet" href="admin/css/login.css">
<?php
// bật session
session_start();

$txtpass=$txtuser=NULL;
$loi=array();
$loi["username"]=$loi["userpass"]=$loi["login"]=NULL;
if(isset($_POST["ok"]))
{
if(empty($_POST["txtuser"]))
{
$loi["username"]="*Vui lòng nhập tên đăng nhập.<br />";
}
else
{
$txtuser=$_POST["txtuser"];
}
if(empty($_POST["txtpass"]))
{
$loi["userpass"]="*Vui lòng nhập mật khẩu.";
}
else
{
$txtpass=$_POST["txtpass"];
}
}
if($txtpass && $txtuser)
{ include("configsever.php");

mysqli_select_db($conn,"ban_hang");
$sqllogin="SELECT * FROM `tb_user` WHERE username='$txtuser' and userpass='$txtpass' ";

if(mysqli_num_rows(mysqli_query($conn,$sqllogin))==1)
{
$data=mysqli_fetch_assoc(mysqli_query($conn,$sqllogin));
$_SESSION["level"]=$data["level"];
if($_SESSION["level"]==1)
{
echo"hello";
header("location:admin/quanly.php");
exit();
}
else{
header("location:index.html");
exit();
}
}
else{
$loi["login"]="*Sai tên đăng nhập hoặc mặt khẩu.Vui lòng nhập lại.";
}
mysqli_close($conn);
}

?>
       
               
               
            </fieldset>
<form action="login.php" method="post">
<h1> &nbsp;&nbsp;&nbsp;Đăng Nhập</h1>
<input  placeholder="Username" name="txtuser" required="">
<input placeholder="Password" name="txtpass" required="">
<button name="ok">Đăng Nhập</button>
</form>
            <div style="color:#000 ;width:300px;height:170px;margin:10px auto ;text-align:center">
<?php
                        echo $loi["username"];
                        echo $loi["userpass"];
                        echo $loi["login"];
                    ?>
            </div>
       <?php
 
  ?>

     
