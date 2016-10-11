/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function(){
    $(window).bind('scroll', function() {
    var navHeight = 725;
    if($(window).width() >= 992)
    {
        if ( $(window).scrollTop() > navHeight) {
                $('#header-bottom').addClass('fixed');
                $('#logo a').css({
                    'background-size'  : '80px 80px'
                });
                $('#logo').css({
                    'bottom'  : '-87px',                    
                    'right'  : '163px'
                });
        }
        else {
                $('#header-bottom').removeClass('fixed');
                $('#logo a').css({
                    'background-size'  : '180px 180px'
                });
                $('#logo').css({
                    'bottom'  : '0',                    
                    'right'  : '232px'
                });
        }
    }
    });
 });
 
        
$(function() {
        $(window).scroll(function(){
                var scrollTop = $(window).scrollTop();
                if(scrollTop != 0)
                        $('#header-bottom').stop().animate({'opacity':'0.9'},725);
                else	
                        $('#header-bottom').stop().animate({'opacity':'1'},725);
        });

        $('#header-bottom').hover(
                function (e) {
                        var scrollTop = $(window).scrollTop();
                        if(scrollTop != 0){
                                $('#header-bottom').stop().animate({'opacity':'1'},725);
                        }
                },
                function (e) {
                        var scrollTop = $(window).scrollTop();
                        if(scrollTop != 0){
                                $('#header-bottom').stop().animate({'opacity':'0.9'},725);
                        }
                }
        );
});

