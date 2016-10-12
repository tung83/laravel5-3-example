/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//Home page
$(document).ready(function(){
    //Home page
    $(window).bind('scroll', function() {
    var navHeight = 725;
    if($(window).width() >= 992)
    {
        if ( $(window).scrollTop() > navHeight) {
                $('.home-page #header-bottom').addClass('fixed');
                $('.home-page #logo a').css({
                    'background-size'  : '80px 80px'
                });
                $('.home-page #logo').css({
                    'bottom'  : '-87px',                    
                    'right'  : '163px'
                });
        }
        else {
                $('.home-page #header-bottom').removeClass('fixed');
                $('.home-page #logo a').css({
                    'background-size'  : '180px 180px'
                });
                $('.home-page #logo').css({
                    'bottom'  : '0',                    
                    'right'  : '232px'
                });
        }
    }
    });
    
    $(window).scroll(function(){
            var scrollTop = $(window).scrollTop();
            if(scrollTop > 725 && !$('.news-page #header-bottom').is(":hover"))
                    $('.home-page #header-bottom').stop().animate({'opacity':'0.9'},725);
            else	
                    $('.home-page #header-bottom').stop().animate({'opacity':'1'},725);
    });

    $('.home-page #header-bottom').hover(
            function (e) {
                    var scrollTop = $(window).scrollTop();
                    $('.home-page #header-bottom').stop().animate({'opacity':'1'},725);
            },
            function (e) {
                    var scrollTop = $(window).scrollTop();
                    if(scrollTop > 725){
                            $('.home-page #header-bottom').stop().animate({'opacity':'0.9'},725);
                    }
            }
    );
    
    //Project Page
    $(window).bind('scroll', function() {
    var navHeight = 248;
    
    if($(window).width() >= 992)
    {
        if ( $(window).scrollTop() > navHeight) {
                $('.project-page #header-bottom').addClass('fixed');
                $('.project-page #logo a').css({
                    'background-size'  : '80px 80px'
                });
                $('.project-page #logo').css({
                    'bottom'  : '0',
                    'left' : '30px'
                            
                });
        }
        else {
                $('.project-page #header-bottom').removeClass('fixed');
                $('.project-page #logo a').css({
                    'background-size'  : '149px 149px'
                });
                $('.project-page #logo').css({
                    'bottom'  : '-25px', 
                    'left' : '5px'
                });
        }
    }
    });
    
    $(window).scroll(function(){
            var scrollTop = $(window).scrollTop();
            if(scrollTop > 248 && !$('.news-page #header-bottom').is(":hover"))
                    $('.project-page #header-bottom').stop().animate({'opacity':'0.9'},725);
            else	
                    $('.project-page #header-bottom').stop().animate({'opacity':'1'},725);
    });

    $('.project-page #header-bottom').hover(
            function (e) {
                    var scrollTop = $(window).scrollTop();
                    $('.project-page #header-bottom').stop().animate({'opacity':'1'},725);
            },
            function (e) {
                    var scrollTop = $(window).scrollTop();
                    if(scrollTop > 248){
                            $('.project-page #header-bottom').stop().animate({'opacity':'0.9'},725);
                    }
            }
    );
       
    
    //News Page
    $(window).bind('scroll', function() {
    var navHeight = 244;
    
    if($(window).width() >= 992)
    {
        if ( $(window).scrollTop() > navHeight) {
                $('.news-page #header-bottom').addClass('fixed');
                $('.news-page #logo a').css({
                    'background-size'  : '80px 80px'
                });
                $('.news-page #logo').css({
                    'bottom'  : '-10px'                            
                });
        }
        else {
                $('.news-page #header-bottom').removeClass('fixed');
                $('.news-page #logo a').css({
                    'background-size'  : '149px 149px'
                });
                $('.news-page #logo').css({
                    'bottom'  : '-25px'
                });
        }
    }
    });
    
    $(window).scroll(function(){
            var scrollTop = $(window).scrollTop();
            if(scrollTop > 244 && !$('.news-page #header-bottom').is(":hover"))
                    $('.news-page #header-bottom').stop().animate({'opacity':'0.9'},725);
            else	
                    $('.news-page #header-bottom').stop().animate({'opacity':'1'},725);
    });

    $('.news-page #header-bottom').hover(
            function (e) {
                    var scrollTop = $(window).scrollTop();
                    $('.news-page #header-bottom').stop().animate({'opacity':'1'},725);
            },
            function (e) {
                    var scrollTop = $(window).scrollTop();
                    if(scrollTop > 244){
                            $('.news-page #header-bottom').stop().animate({'opacity':'0.9'},725);
                    }
            }
    );
 });
 
        
$(function() {
        
});

