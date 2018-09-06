
(function($) {
$(function() {
 /*=============================
              MAIN MENU
  =============================
  */
  $('ul.main-pagi__list').on('click', 'li:not(.main-pagi__list-item--active)', function() {
    $(this)
      .addClass('main-pagi__list-item--active').siblings().removeClass('main-pagi__list-item--active');
      str = $(this).children('.main-pagi__link').attr("href");
      //alert(str);
      $(str).addClass('content-active').siblings().removeClass('content-active');
      $('.main-nav__list-item').removeClass('main-nav__list-item--active');
      $('.main-nav__list-item:not(.main-nav__list-item--active) a[href="'+str+'"').parent().addClass('main-nav__list-item--active').siblings().removeClass('main-nav__list-item--active');
      ht = $(str).height();
      $('.content-viewport__inner').height(ht);
  });

  $('ul.main-nav__list').on('click', 'li:not(.main-nav__list-item--active)', function() {
    $(this)
      .addClass('main-nav__list-item--active').siblings().removeClass('main-nav__list-item--active');
      str1 = $(this).children('.main-nav__link').attr("href");
      //alert(str);
      $(str1).addClass('content-active').siblings().removeClass('content-active');
      $('#main-content').removeClass('move-out');
	    $('#main-menu').removeClass('is-visible');
	    $('#overlay').removeClass('is-visible');
	    $('.main-pagi__list-item a[href="'+str1+'"').parent().addClass('main-pagi__list-item--active').siblings().removeClass('main-pagi__list-item--active');
      ht = $(str1).height();
      $('.content-viewport__inner').height(ht);
  });

 /*=============================
              PORTFOLIO TABS
  =============================
  */

    $('ul.portfolio__cat-names').on('click', 'li:not(.portfolio__cat-names-item--active)', function() {
    	$('.mCSB_dragger_bar').addClass('mCSB_dragger_bar--hide');
    $(this)
      .addClass('portfolio__cat-names-item--active').siblings().removeClass('portfolio__cat-names-item--active')
      .closest('div.portfolio__inner').find('div.portfolio__cat-block').removeClass('portfolio__cat-block--active').eq($(this).index()).addClass('portfolio__cat-block--active');
      setTimeout(function(){$('.mCSB_dragger_bar').removeClass('mCSB_dragger_bar--hide')}, 1500);
      
  });

});
})(jQuery);

 /*=============================
              PRELOADER
  =============================
  */


  jQuery(window).on('load', function () {
    var $preloader = jQuery('#preloader'),
        $preLogoTop   = $preloader.find('.preloader__logo-top');
    //$preLogo.fadeOut();
    $preLogoTop.delay(200).fadeOut();
    $preloader.delay(500).fadeOut('slow');
  });

jQuery(document).ready(function($){

	/*=============================
              FORM LABEL ACTIVE
  =============================
  */
  $('.contacts__form-control').on('keyup',function(){
		var id = $(this).attr('id');
  	$('#'+id).each(function(i, el){
	  if( $('#'+id).val() != '' ) {
	     $(el).siblings('label[for="'+id+'"]').css('transform', 'translateY(-210%)');
	  }

	  else {
	     $(el).siblings('label[for="'+id+'"]').css('transform', 'translateY(-50%)');
	  }
	});
});
	


	/*=============================
              HUMBURGER MENU
  =============================
  */

	$(".main-pagi__link").click(function(e){
  		e.preventDefault();
  });

  $(".main-nav__link").click(function(e){
  		e.preventDefault();
  });
  //open menu
  $('#menu-toggle').on('click', function(event){
    event.preventDefault();
    $('#main-content').addClass('move-out');
    $('#main-menu').addClass('is-visible');
    $('#overlay').addClass('is-visible');
  });
  //close menu
  $('.cd-close-menu').on('click', function(event){
    event.preventDefault();
    $('#main-content').removeClass('move-out');
    $('#main-menu').removeClass('is-visible');
    $('#overlay').removeClass('is-visible');
  });

  //clipped image - blur effect
  set_clip_property();
  $(window).on('resize', function(){
    set_clip_property();
  });


  function set_clip_property() {
    var $header_height = jQuery('.main-header').height(),
      $window_height = jQuery(window).height(),
      $header_top = $window_height - $header_height,
      $window_width = jQuery(window).width();
    jQuery('.cd-blurred-bg').css('clip', 'rect('+$header_top+'px, '+$window_width+'px, '+$window_height+'px, 0px)');
  }
});




 
