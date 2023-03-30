








    if (window.matchMedia("(min-width:400px)").matches) {
    $(document).ready(function(){
      $(window).scroll(function() { // check if scroll event happened
        if ($(document).scrollTop() > 90 ) { // check if user scrolled more than 50 from top of the browser 
          // if yes, then change the color of class "navbar-fixed-top" to white (#f8f8f8)
            $(".menu-principal").addClass("change");







        } else {


              $(".menu-principal").removeClass("change");




        }
      });
    });}



//         if (window.matchMedia("(max-width:980px)").matches) {
//     $(document).ready(function(){
//       $(window).scroll(function() { // check if scroll event happened
//         if ($(document).scrollTop() > 390 ) { // check if user scrolled more than 50 from top of the browser 
//           // if yes, then change the color of class "navbar-fixed-top" to white (#f8f8f8)
// $(".logo-nav").addClass("mudar-logo");






//         } else {
// $(".logo-nav").removeClass("mudar-logo");




//         }
//       });
//     });}







// if (window.matchMedia("(min-width:1080px)").matches) {
// $(document).ready(function(){
//   $(window).scroll(function() { // check if scroll event happened
//     if ($(document).scrollTop() > 3080) { // check if user scrolled more than 50 from top of the browser 
//       // if yes, then change the color of class "navbar-fixed-top" to white (#f8f8f8)


//     } 
//   });
// });}




// $("#dropdown-menu").hover(
//   function () {
//     $('.drop').addClass('ativar');
//   }, 
//   function () {
//     $('.drop').removeClass("ativar");
//   }
// );



$('.botao a[href^="#"]').on('click', function(e) {
e.preventDefault();
var id = $(this).attr('href'),
    targetOffset = $(id).offset().top;
    
$('html, body').animate({ 
  scrollTop: targetOffset - 100
}, 500);
});   

 

$("#dropdown-menu").click(function(){
  $(".drop").toggleClass("ativar");
});


$("#fechar-curso").click(function(){
  $(".drop").removeClass("ativar");
});


$(".site").click(function(){
  $(".drop").removeClass("ativar");
});
