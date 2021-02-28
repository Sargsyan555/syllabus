$(document).ready(function() {
    $(document).ready(function(){

        $(".slide-image").each(function(){
            var bg = $(this).data("bg");
            var pos = $(this).data("kenburn-start");
            $(this).css({
                "background-image":"url("+bg+")",
                "transform-origin":pos
            });
            $('.slider').flexslider({
                slideshow:true,
                slideshowSpeed: 10000,
                animationSpeed: 5000,
                controlNav:false,
            })
        })
    })

})
