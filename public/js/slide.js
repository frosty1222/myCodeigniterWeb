
// slide 3
$(document).ready(function(){
  var autoload = setInterval(function(){
    $('.slick-prev').trigger('click');
  },4000);
  $('.slick-prev').click(function(event){
      var slide_sau = $('.slick-sliden').next();
      var vi_tri_hien_tai = $('.active_nut').index()+1;
      console.log(vi_tri_hien_tai);
        if(slide_sau.length !=0){
          $('.slick-sliden').addClass('bien-mat-ben-trai').one('webkitAnimationEnd', function(envent){
             $('.bien-mat-ben-trai').removeClass('bien-mat-ben-trai').removeClass('active');
            });
            slide_sau.addClass('active').addClass('di-vao-ben-phai').one('webkitAnimationEnd', function(event){
                $('.di-vao-ben-phai').removeClass('di-vao-ben-phai');
            });
            // xu ly nut
        }else{
            $('.slick-sliden').addClass('bien-mat-ben-trai').one('webkitAnimationEnd', function(event){
              $('.bien-mat-ben-trai').removeClass('bien-mat-ben-trai').removeClass('active');
            });
            $('.slick-sliden:first-child').addClass('active').addClass('di-vao-ben-phai').one('webkitAnimationEnd', function(event){
                $('.di-vao-ben-phai').removeClass('di-vao-ben-phai');
          });
     }
  });
  $('.slick-next').click(function(event){
      var slide_truoc =$('.slick-sliden').prev();
      var vi_tri_hien_tai = $('.active_nut').index()+1;
        if(slide_truoc.length =0){
          $('.slick-sliden').addClass('bien-mat-ben-phai').one('webkitAnimationEnd', function(envent){
             $('.bien-mat-ben-phai').removeClass('bien-mat-ben-phai').removeClass('active');
            });
            slide_truoc.addClass('active').addClass('di-vao-ben-trai').one('webkitAnimationEnd', function(event){
                $('.di-vao-ben-trai').removeClass('di-vao-ben-trai');
            });
            // xu ly nut
        }else{
            $('.slick-sliden').addClass('bien-mat-ben-phai').one('webkitAnimationEnd', function(event){
              $('.bien-mat-ben-phai').removeClass('bien-mat-ben-phai').removeClass('active');
            });
            $('.slick-sliden:last-child').addClass('active').addClass('di-vao-ben-trai').one('webkitAnimationEnd', function(event){
                $('.di-vao-ben-trai').removeClass('di-vao-ben-trai');
        });
        
     }
  });
  $('.slick-sliden a li').click(function(event) {
     var vi_tri_hien_tai = $('.active_nut').index()+1;
     var vi_tri_click = $(this).index()+1;
     $('.slick-sliden a li').removeClass('active_nut');
     $(this).addClass('active_nut');
       if(vi_tri_click > vi_tri_hien_tai) {
        $('.slick-sliden').addClass('bien-mat-ben-trai').one('webkitAnimationEnd', function(envent){
        $('.bien-mat-ben-trai').removeClass('bien-mat-ben-trai').removeClass('active');
      });
        $('.slick-sliden:nth-child('+vi_tri_click+')').addClass('active').addClass('di-vao-ben-phai').one('webkitAnimationEnd', function(event){
        $('.di-vao-ben-phai').removeClass('di-vao-ben-phai');
      });
    }
    if(vi_tri_click < vi_tri_hien_tai){
      $('.slick-sliden').addClass('bien-mat-ben-phai').one('webkitAnimationEnd', function(envent){
             $('.bien-mat-ben-phai').removeClass('bien-mat-ben-phai').removeClass('active');
            });
           $('.slick-sliden:nth-child('+vi_tri_click+')').addClass('active').addClass('di-vao-ben-trai').one('webkitAnimationEnd', function(event){
                $('.di-vao-ben-trai').removeClass('di-vao-ben-trai');
            });
    }
  });
});