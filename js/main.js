// $(document).ready(function () {
//     // START
//
//     $('.hamburger').click(function () {
//         var clicks = $(this).data('clicks');
//         if (clicks) {
//             $(".mobile-nav").animate({
//                 opacity: 0,
//                 left: "-20em"
//             }, 250);
//             $(".overlay").animate({ opacity: "0" }, 250, function () {
//                 $(this).css("display", "none");
//             });
//         } else {
//             $(".mobile-nav").animate({
//                 opacity: 1,
//                 left: "0"
//             }, 250);
//             $(".overlay").css(
//                 "display", "block").animate({ opacity: "1" }, 250);
//         }
//     });
//
//     $(".overlay").click(function () {
//         $(".mobile-nav").animate({
//             opacity: 0,
//             left: "-20em"
//         }, 250);
//         $(".overlay").animate({
//             opacity: 0
//         }, 250, function () {
//             $(this).css("display", "none");
//         });
//     });
//
//     // END
// });
