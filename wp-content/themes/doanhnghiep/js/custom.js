jQuery(document).ready(function(){
				// SCROLL TO DIV
				jQuery(window).scroll(function(){
					if(jQuery(this).scrollTop()>500){
						jQuery('.scrolltop').addClass('go_scrolltop');
					}
					else{
						jQuery('.scrolltop').removeClass('go_scrolltop');
					}
				});
				jQuery('.scrolltop').click(function (e){
					jQuery('html, body').animate({
						scrollTop: jQuery("html").offset().top
					}, 1000);
					e.preventDefault();
				}); 
		jQuery('.search_header>i.fa').click(function(){
			jQuery('.search_header>form').toggle(300);
		});

		// STICKY NAVBAR
		// var sticky = document.querySelector('.sticky');
		// if (sticky.style.position !== 'sticky') {
		// 	var stickyTop = sticky.offsetTop;
		// 	document.addEventListener('scroll', function () {
		// 		window.scrollY >= stickyTop ?
		// 		sticky.classList.add('fixed_menu') :
		// 		sticky.classList.remove('fixed_menu');
		// 	});
		// }
		// MENU MOBILE
		jQuery(".icon_mobile_click").click(function(){
			jQuery(this).fadeOut(300);
			jQuery("#page_wrapper").addClass('page_wrapper_active');
			jQuery("#menu_mobile_full").addClass('menu_show').stop().animate({left: "0px"},260);
			jQuery(".close_menu, .bg_opacity").show();
		});
		jQuery(".close_menu").click(function(){
			jQuery(".icon_mobile_click").fadeIn(300);
			jQuery("#menu_mobile_full").animate({left: "-260px"},260).removeClass('menu_show');
			jQuery("#page_wrapper").removeClass('page_wrapper_active');
			jQuery(this).hide();
			jQuery('.bg_opacity').hide();
		});
		jQuery('.bg_opacity').click(function(){
			jQuery("#menu_mobile_full").animate({left: "-260px"},260).removeClass('menu_show');
			jQuery("#page_wrapper").removeClass('page_wrapper_active');
			jQuery('.close_menu').hide();
			jQuery(this).hide();
			jQuery('.icon_mobile_click').fadeIn(300);
		});
		jQuery("#menu_mobile_full ul li a").click(function(){
			jQuery(".icon_mobile_click").fadeIn(300);
			jQuery("#page_wrapper").removeClass('page_wrapper_active');
		});
		jQuery('.mobile-menu ul.menu').children().has('ul.sub-menu').click(function(){
			jQuery(this).children('ul').slideToggle();
			jQuery(this).siblings().has('ul.sub-menu').find('ul.sub-menu').slideUp();
		}).children('ul').children().click(function(event){event.stopPropagation()});
		jQuery('.mobile-menu ul.menu').children().find('ul.sub-menu').children().has('ul.sub-menu').click(function(){
			jQuery(this).find('ul.sub-menu').slideToggle();
		});
		jQuery('.mobile-menu ul.menu li').has('ul.sub-menu').click(function(event){
			jQuery(this).toggleClass('editBefore_mobile');
		});
		jQuery('.mobile-menu ul.menu').children().has('ul.sub-menu').addClass('menu-item-has-children');
		jQuery('.mobile-menu ul.menu li').click(function(){
			$(this).addClass('active').siblings().removeClass('active, editBefore_mobile');
		});
		// list_products_categories
		jQuery('.list_products_categories>ul').children().has('ul.sub_product_category').click(function(){
			jQuery(this).children('ul').slideToggle();
			jQuery('.list_products_categories>ul').children().not(this).has('ul.sub_product_category').find('ul.sub_product_category').slideUp();
		}).children('ul').children().click(function(event){event.stopPropagation()});
		jQuery('.list_products_categories>ul').children().find('ul.sub_product_category').children().has('ul.sub-menu').click(function(){
			jQuery(this).find('ul.sub-menu').slideToggle();
		});
		jQuery('.list_products_categories ul li').has('ul.sub_product_category').click(function(event){
			jQuery(this).toggleClass('editBefore_li_product');
			//event.preventDefault();
		});
		jQuery('.list_products_categories ul').children().has('ul.sub_product_category').addClass('menu-item-has-children');
		jQuery('.list_products_categories ul li').click(function(){
			jQuery(this).addClass('active').siblings().removeClass('active, editBefore_li_product ');
		});


		
			// SHOP POPUP
			jQuery(".order_now").click(function(e){
				e.preventDefault();
				jQuery('.popup_order').modal('show');
			});

			// SHOP POPUP
		// jQuery(" .social_ft p").click(function(e){
		// 	jQuery('.popup_map').stop(true,true).fadeIn('300').find('.close_popup').click(function(){jQuery('.popup_map').stop(true,true).fadeOut('300');
		// });
		// 	jQuery('.popup_map').find('.content_popup').show();
		// 	e.preventDefault();
		// });

			// jQuery(document).click(function(event) {
 		//  //if you click on anything except the modal itself or the "open modal" link, close the modal
 		//  if (!jQuery(event.target).closest(".content_popup, .social_ft p ").length) {
 		//  	jQuery("body").find(".content_popup").hide();
 		//  	jQuery(".popup").fadeOut(300);
 		//  }
 		// });


 		var width = jQuery(window).width();
 		if(width>1100){
 			jQuery(`#quangnguyen .container>.panel-layout>.panel-grid>.panel-grid-cell:nth-child(1),#product_home h3.widget-title, .list_post_news h2, .feeling_cus h3.title_widget,
 				.page-template-page-template-gioithieu .g_content .textwidget p
 				`)
 			.attr({"data-wow-delay" : "0.3s", "data-wow-duration" : "1s"}).addClass("wow animated fadeInUp ");
 			jQuery('.home .logo_site').attr({"data-wow-delay" : "0.3s", "data-wow-duration" : "1s"}).addClass("wow animated zoomIn ");
 			jQuery('#featured_product .panel-layout>.panel-grid:nth-child(2)>.panel-grid-cell>.so-panel')
 			.attr({"data-wow-delay" : "0.3s", "data-wow-duration" : "1s"}).addClass("wow animated fadeInUp ");
 			jQuery('#feedback .panel-layout>.panel-grid:nth-child(2)>.panel-grid-cell').attr({"data-wow-delay" : "0.3s", "data-wow-duration" : "1s"}).addClass("wow animated zoomIn ");
 			jQuery('.list_post_news .most-commented>li:nth-child(1)').attr({"data-wow-delay" : "0.3s", "data-wow-duration" : "1s"}).addClass("wow animated zoomIn ");
 			jQuery('.list_post_news .most-commented>li:nth-child(2)').attr({"data-wow-delay" : "0.45s", "data-wow-duration" : "1s"}).addClass("wow animated zoomIn ");
 			jQuery('.list_post_news .most-commented>li:nth-child(3)').attr({"data-wow-delay" : "0.6s", "data-wow-duration" : "1s"}).addClass("wow animated zoomIn ");
 			jQuery('.feeling_cus .row>.col-sm-6:nth-child(1) .wrap_feeling ').attr({"data-wow-delay" : "0.3s", "data-wow-duration" : "1s"}).addClass("wow animated fadeInLeft ");
 			jQuery('.feeling_cus .row>.col-sm-6:nth-child(2) .wrap_feeling ').attr({"data-wow-delay" : "0.3s", "data-wow-duration" : "1s"}).addClass("wow animated fadeInRight ");
 			new WOW().init();
 		}
 		$(".input-effect input").focusout(function(){
 			if($(this).val() != ""){
 				$(this).addClass("has-content");
 			}else{
 				$(this).removeClass("has-content");
 			}
 		})

 		$('.products_home').slick({
 			dots: false,
 			infinite: true,
 			speed: 300,
 			slidesToShow: 4,
 			slidesToScroll: 1,
 			arrows:true,
 			responsive: [
 			{
 				breakpoint: 1024,
 				settings: {
 					slidesToShow: 3,
 					slidesToScroll: 3,
 					infinite: true,
 					dots: true
 				}
 			},
 			{
 				breakpoint: 600,
 				settings: {
 					slidesToShow: 2,
 					slidesToScroll: 2
 				}
 			},
 			{
 				breakpoint: 480,
 				settings: {
 					slidesToShow: 1,
 					slidesToScroll: 1
 				}
 			}
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
    ]
});
 		$('.cus_slide ul').slick({
 			dots: false,
 			infinite: true,
 			speed: 300,
 			slidesToShow: 1,
 			slidesToScroll: 1,
 			arrows:true,
 			responsive: [
 			{
 				breakpoint: 1024,
 				settings: {
 					slidesToShow: 1,
 					slidesToScroll: 1,
 					infinite: true,
 					dots: true
 				}
 			},
 			{
 				breakpoint: 600,
 				settings: {
 					slidesToShow: 1,
 					slidesToScroll: 2
 				}
 			},
 			{
 				breakpoint: 480,
 				settings: {
 					slidesToShow: 1,
 					slidesToScroll: 1
 				}
 			}
    ]
});

 	});
