<?php
   require('Config.php');
   class Search extends Config{

      public function showUsers($search){
         $con = $this->connect();
         $stmt = $con->prepare("SELECT * FROM `users` WHERE username LIKE '%$search%'");
         $stmt->execute();
         $users = $stmt->fetchAll();
         return $users;
      }
      public function getUserData($user){
         $con = $this->connect();
         $stmt = $con->prepare("SELECT * FROM `users` WHERE username = ?");
         $stmt->execute([$user]);
         $allData = $stmt->fetch();
         if(!$allData){
            header('location: ./');
         }else{
            return $allData;
         }
      }

   }
?>