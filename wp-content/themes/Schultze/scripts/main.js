
$( document ).ready(function() {
    console.log( "ready!" );
    $(".burger-mobile").on("click", function(){
        console.log('masinga');
        $(this).toggleClass("actives");
        $("#menu").toggleClass("open");
        $(".content").toggleClass("shift");
        
        
    })
});