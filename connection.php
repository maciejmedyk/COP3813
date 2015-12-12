<?php 
          $con=mysql_connect('localhost','mmedyk','75QNrXUROmsEX');
          mysql_select_db('cop3813', $con);
          if(!$con)
          {
            echo "Database login failed! PLease try again";
            header("Location: login.php");
            return false;
          }
?>