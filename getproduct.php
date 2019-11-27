<?php 
    
    require("configsever.php"); 
    if(isset($_GET['page'])){ 
          
        $pages=array("san_pham"); 
          
        if(in_array($_GET['page'], $pages)) { 
              
            $_page=$_GET['page']; 
              
        }else{ 
              
            $_page="san_pham"; 
              
        } 
          
    }else{ 
          
        $_page="san_pham"; 
          
    } 
?>
