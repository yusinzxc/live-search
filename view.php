<?php
   require_once 'components/htmlTag.php';
   require_once 'Search.php';
   $search = new Search;
   $data = $search->getUserData($_GET['u']);
?> 

<?php startTag("View") ?>
   <div class="container-fluid vh-100 bg-primary d-flex justify-content-center align-items-center">
      <div style="width: 300px;" class="bg-white p-5 rounded-2">
         <div class="w-100 rounded-circle">
            <img src="<?php echo $data['image']?>" class="w-100" style='overflow:hidden;'>
         </div>
         <hr>
         <div>
            <center>
               <h3 class="fw-bold"><?php echo $data['username'] ?></h3>
            </center>
         </div>
      </div>
   </div>
<?php endTag() ?>