// met onderstaande functie wordt er een shadow effect toegevoegd wanneer je met de muis over de image hovert
$(document).ready(function() {
    // executes when HTML-Document is loaded and DOM is ready
    // console.log("document is ready");

    $(".card").hover(
        function() {
            $(this).addClass('shadow').css('cursor', 'pointer');
        }, function() {
            $(this).removeClass('shadow');
        }
    );

    // document ready
});