
<?php
   session_start();
   
   if(session_destroy()) {
      header("Location: admlog.php");
   }
   //destroys a login session and re-directs everytime to index.php
?>