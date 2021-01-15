// Green marker animation in header

$(document).ready(function(){



  // var canvas = document.getElementById('canvas');
  // var ctx = canvas.getContext('2d');

    //marker comes in header left to right
    $('.navbar-main-img').animate({'left':'65%'},5000); 

    

    // check of this function is supported by browser
        // if (canvas.getContext){
        //   ctx.beginPath(50, 0);
        //   ctx.moveTo(0, 0); // start
        //   ctx.lineTo(200, 0); // einde lijn
        //   ctx.closePath();
        //   ctx.stroke();// CanvasRenderingContext2D { ... }
        //   ctx.strokeStyle = "#7fff00";
        //   ctx.lineWidth = 1;

        // }


    // mission shout appears from left to right
    $(function() {
        //get mission msg 
        var $all_msg = $('#mission_appear');
        //get a list of letters
        var $wordList = $('#mission_appear').text().split("");
        //clear tmission msg  msg
        $('#mission_appear').text("");
        //loop through the letters in array
        $.each($wordList, function(idx, elem) {
          //create a span for the letter and set opacity to 0
          var newEL = $("<span/>").text(elem).css({
            opacity: 0
          });
          //append it to mission msg 
          newEL.appendTo($all_msg);
          //set the delay on the animation for this element
          newEL.delay(idx * 80);
          //animate the opacity back to full 1
          newEL.animate({
            opacity: 1
          }, 1500);
        });

    });

  
  
    //click repeat marker left right animation 2x , making underline grow 1px thickness
    $('.navbar-main-img').click(function(){
       $(this).animate({'left':'30%'},200);
       $(this).animate({'left':'70%'},2000);
    });
  
});


