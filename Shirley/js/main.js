$(document).ready(function(){
  $('.top').fadeOut();
       $('.in-search').focusin(function(){
              $('.searchbox').addClass('focus');
            });
            $('.in-search').focusout(function(){
              $('.searchbox').removeClass('focus');
            });
        var active = false;
        $('.s-label').on("click", function(){
          if($('.w-103').css('width','70%') && active == false){
            $('.searchbox').css("outline", "2px solid #74a2d8");
            
        $('input[type=search]').focus();
                $('.searchbox').css("box-shadow", "2px");
                $('.searchbox').css('display', 'flex');
                $('.searchbox').css('position', 'absolute');
                $('.searchbox').css('left', '3%');
                $('.searchbox').css('top', '-110%');
                $('.searchbox').css('width', '85%');
                $('.in-search').css('padding', '0rem');
                $('.brnd').css('position', 'absolute');
                $('.brnd').css('top', '94%');
                $('.s-label').css("outline", "none");
                $('.s-label').css("box-shadow", "none");
                active = true;
          }
          else if($('.w-103').css('width','70%') && active == true){
            $('.searchbox').removeAttr('style');
            $('.in-search').removeAttr('style');
            $('.brnd').removeAttr('style');
            active = false;
          }
        });
        $(".top").click(function() {
          $("html, body").animate({ scrollTop: 0 }, "slow");
          $('.top').fadeOut();
          return false;
        });
            $(window).scroll(function(){
              if($(window).scrollTop() > 2700) {
                $('.top').fadeIn();
              } 
              else if($(window).scrollTop() < 2700) {
                $('.top').fadeOut();
              }
            });
       // });
        // if($('.w-103').css('width','70%')){
        //   console.log("less or equal viewport");
        // }
        // else {
        //   console.log("on viewport");
        // }
});

// function responsiveness(x) {
//        if (x.matches) { 
//          $('.nv-c').removeClass("justify-content-end");
//          $('.lg-rg').addClass("justify-content-end");
//          $('.s-label').on("click", onMouseClick);
//        } else {
//               $('.nv-c').addClass("justify-content-end");
//               $('.lg-rg').removeClass("justify-content-end");
//        }

// }
     
//      var x = window.matchMedia("(max-width: 767px)");
//      responsiveness(x); 
//      x.addListener(responsiveness);

//      function responsiveness2(y) {
//               if (y.matches) { 
//                      $('.searchbox').css('top', '-145%');
//               } else {
//                      $('.searchbox').css('top', '-120%');
//               }

//        }
     
//      var y = window.matchMedia("(max-width: 575px)");
//      responsiveness2(y); 
//      y.addListener(responsiveness2);
     
              // var v=false;
      
              //        function onMouseClick(){
                            
              //               if(v==false) {
              //                      $('.searchbox').css("outline", "2px solid #74a2d8");
              //                      $('.searchbox').css("box-shadow", "2px");
              //                      $('.searchbox').css('display', 'flex');
              //                      $('.searchbox').css('position', 'absolute');
              //                      $('.searchbox').css('left', '2%');
              //                      $('.searchbox').css('top', '-120%');
              //                      $('.searchbox').css('width', '85%');
              //                      $('.in-search').css('padding', '0rem');
              //                      $('.brnd').css('position', 'absolute');
              //                      $('.brnd').css('top', '94%');
              //                      $('.s-label').css("outline", "none");
              //                      $('.s-label').css("box-shadow", "none");
              //                      v=true;
              //               }
              //               else{
              //                      $('.searchbox').css('display', 'none');
              //                      $('.searchbox').css('position', 'unset');
              //                      $('.searchbox').css('width', 'auto');
              //                      $('.brnd').css('position', 'unset');
              //                      $('.brnd').css('top', '0');
              //                      $('.searchbox').css("outline", "none");
              //                      $('.searchbox').css("box-shadow", "none");
              //                      $('.in-search').css('padding', '0.375rem 0.75rem');
              //                      v=false;
              //               }
              //        }
              