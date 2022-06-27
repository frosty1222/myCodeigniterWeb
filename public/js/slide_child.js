$(function() {
     $('#readmore') .click(function(){
       a =$('#center') .toggle(1000);
       t = $('#sumary') .show();
       if(t){
           b =$('#readmore') .hide();
       }
     })
});
$(function() {
     $('#sumary') .click(function(){
       a =$('#center') .hide();
       $('#readmore') .show();
       $('#sumary') .hide();
     })
});
