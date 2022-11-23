<?php

function Auth(){
    if(isset($_SESSION['Admin'])=='abdo'){

    }
    else{
    
      
      header('location: /ssd/sess3/admin/loginAdmin.php');
      // die();
    }
    
}

?>