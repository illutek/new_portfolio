/**
 * Created by Stefan on 11/07/2017.
 */

    $(document).ready(function () {
        $('.menu').removeClass('menu-visible');
        $('.menu-show-btn').removeClass('hidden');

        $('.menu-show-btn').click(function(){
            $('.menu').addClass('menu-visible');
            $('.menu-show-btn').addClass('hidden');
        });

        $('.close-menu-btn').click(function(){
            $('.menu').removeClass('menu-visible');
            $('.menu-show-btn').removeClass('hidden');
        });

    });

