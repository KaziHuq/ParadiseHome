<?php

    include("config.php");
   if (isset($_GET['Del'])) {

     $userId = $_GET['Del'];

     $query = "delete from mysubscribers where userid = '".$userId."'";
     $result = mysqli_query($conn,$query);

     if ($result) {

      header("Refresh:1; url=home.php");
     }

     else
     {
      echo "please, check your data";
     }



   }


?>
