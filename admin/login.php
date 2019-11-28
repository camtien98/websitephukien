login.php source
<link rel="stylesheet" href="css/login.css">
<?php
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
{ include("../configsever.php");

mysqli_select_db($conn,"db_doan");
$sqllogin="SELECT * FROM `tb_user` WHERE username='$txtuser' and userpass='$txtpass' ";

if(mysqli_num_rows(mysqli_query($conn,$sqllogin))==1)
{
$data=mysqli_fetch_assoc(mysqli_query($conn,$sqllogin));
$_SESSION["level"]=$data["level"];
if($_SESSION["level"]==1)
{
echo"hello";
header("location:quanly.php");
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
        <fieldset style="width:290px;height:120px;margin:140px auto 170px;">
            <legend style="margin-left:10px" align="center">Login </legend>
                <form action="login.php" method="post">
                <table align="center">
                    <tr>
                        <td>UserName :</td>
                            <td><input type="text" name="txtuser"  /></td>
                         </tr>
                         <tr>
                          <td>Password :</td>
                            <td><input type="password" name="txtpass" /></td>
                         </tr>
                         <tr>
                          <td></td>
                            <td></td>
                         </tr>
                    </table>
                </form>
               
               
            </fieldset>
<form action="login.php" method="post">
<h1>Đăng Nhập</h1>
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
     