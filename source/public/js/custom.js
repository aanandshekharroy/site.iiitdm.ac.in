$(document).ready(function() {
    
    if ($('.row_index').length != 0) {
        $('.row_index').owlCarousel({
            items: 5,
            nav: true,
            dots: true,
            navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>']
        }); 
    }
    $(function() {

        $('#thumbnail a').lightBox();

    });

});
