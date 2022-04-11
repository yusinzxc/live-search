<?php

   require('Search.php');
   if(!empty($_POST['result'])){
      $search = new Search;
      $users = $search->showUsers($_POST['result']);

      foreach($users as $user){

         echo "<div class='user d-flex flex-row' style='gap: 5px; padding-bottom: 7px; border-bottom: 1px solid #cecece;'>
                  <div style='height: 35px; width: 35px; overflow:hidden;' class='rounded-circle'>
                     <img src='$user[image]' class='w-100'>
                  </div>
                  <div class='d-flex align-items-center'>
                     <span class='fw-bold'>$user[username]</span>
                  </div>
                  <a href='view.php?u=$user[username]' class='my-auto ms-auto btn btn-primary'>View</a>
               </div>";

      }

   }
?>