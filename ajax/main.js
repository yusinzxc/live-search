$(document).ready(function(){
   $('.search-input').keyup(function(){
      $.ajax({
         type: "POST",
         url: "result.php",
         data: {
            result: $('.search-input').val()
         },
         success: function (response) {
            $('.user-wrapper').html(response)
         }
      });
      if($('.search-input').val() == ""){
         $('#wrapper').css("opacity",'0')
      }else{
         $('#wrapper').css("opacity",'1')
      }
   })
})
