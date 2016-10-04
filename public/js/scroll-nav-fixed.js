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
        }
        else {
                $('#header-bottom').removeClass('fixed');
        }
    }
    });
 });

