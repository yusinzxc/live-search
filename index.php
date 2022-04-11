<?php
   require_once 'components/htmlTag.php';
?> 

<?php startTag("Main") ?>
   <div class="container-fluid bg-primary vh-100 d-flex justify-content-center align-items-center">
      <div class="search-container" style="width: 300px;">
         <div class="search w-100">
            <input type="text" name="search" placeholder="Search..." class="form-control search-input">
         </div>
         <div class="user-wrapper bg-white mt-2 p-2 d-flex flex-column" style="gap: 15px; border-radius: 4px; opacity: 0;" id="wrapper">
            <!-- RESULT -->
         </div>
      </div>
   </div>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <script src="ajax/main.js"></script>
<?php endTag() ?>