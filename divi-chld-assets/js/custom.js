(function ($) {
    $(document).ready(function () {


        $(".custom_dv_client_slider").owlCarousel({
            items: 1,
            loop: true,
            autoplay: true,
            nav: true,
            navText: [
                '<img src="https://shm.studio/wp-content/uploads/2021/01/arrow-left-long-2.png" alt="">',
                '<img src="https://shm.studio/wp-content/uploads/2021/01/arrow-right-long-2.png" alt="">',
            ],
        });


        // init Isotope
        var $grid = $('.grid_items').isotope({
           
        });
        // filter items on button click
        $('.menu_box').on('click', 'li', function () {
            var filterValue = $(this).attr('data-filter');
            $grid.isotope({ filter: filterValue });
        });
        
        
      
      
      

        var check_window_width = $(window).width();

        if(check_window_width < 800){
            $(".scroll_up").on('click', function () {
                $('html').animate({ scrollTop: 700 }, 10);
            });
    
        }
        
        
      
        if((check_window_width > 1100) && (check_window_width < 1700)){
            $(".scroll_up").on('click', function () {
                $('html, body').animate({ scrollTop: 600 }, 10);
            });
    
        }
        
        if( check_window_width > 1700){
            $(".scroll_up").on('click', function () {
                $('html, body').animate({ scrollTop: 800 }, 10);
            });
        }

      
      
      
      

    });
})(jQuery)