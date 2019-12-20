<?php include("configsever.php") ?>

 <?php include("subpage/banner.php"); ?> 
 <div class="container body-archive">
            <div class="col-xs-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><i class="fa fa-home"></i> <a href="#">Trang chủ</a></li>
                        <!-- <li class="breadcrumb-item">Blog</li> -->
                    </ol>
                </nav>
            </div>

<!--------------------------- Dua san pham vo --------------------->
      <?php
      include("Trangchu/cusac.php");
       include("Trangchu/daycapsac.php");
         include("Trangchu/loa.php");
           include("Trangchu/oplung.php");
        include("Trangchu/sacduphong.php");
      include("Trangchu/tainghe.php");
      ?>
    

<!---------------------------FOOTER ----------------------------------->
     <?php include("subpage/footer.php"); ?> 

        
</body>

<?php include("subpage/script.php"); ?> 

</html>