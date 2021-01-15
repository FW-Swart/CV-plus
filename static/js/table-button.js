
// Buttons in tabler cv-make action
    $(document).ready(function() {

        $('.confirm-delete').one('click', function(e) {

            e.preventDefault();
            e.stopPropagation();
            e.stopImmediatePropagation();

            if (confirm ('Delete current record !')) {
                window.location.href = 'cv-make/delete'
            }
            
        })
        
    })




//     document.addEventListener("click", {once:true}) 
// $(this).off() 
//  e.currentTarget (); 

// $(this).attr('id') 

//  $('.confirm-delete').get.id 