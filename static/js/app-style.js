// Green marker animation in header

$(document).ready(function(){
    //marker comes in header left to right
    $('.navbar-main-img').animate({'left':'70%'},3000); 
  
    //click repeat marker left right animation
    $('.navbar-main-img').click(function(){
       $(this).animate({'left':'30%'},200);
       $(this).animate({'left':'70%'},2000);
    });
  
});