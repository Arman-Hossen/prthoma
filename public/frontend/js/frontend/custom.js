jQuery(document).ready(function(){jQuery('#quick-view #main-slider').slick({slidesToShow:1,slidesToScroll:1,arrows:false,fade:true,asNavFor:'#carousel-slider'});jQuery('#quick-view #carousel-slider').slick({vertical:true,slidesToShow:4,slidesToScroll:1,asNavFor:'#main-slider',dots:false,centerMode:false,focusOnSelect:true});jQuery('#quick-view').on('shown.bs.modal',function(e){jQuery('#quick-view #main-slider').resize();jQuery('#quick-view #carousel-slider').resize();})})
jQuery(document).on('ready',function(){jQuery(document).on('click','.sort_list li a',function(){if(jQuery('body').hasClass('tab-open')){}else{jQuery('body').addClass('tab-open');jQuery('#back_overlay').addClass('open');}})
jQuery('.sort-list li a.filter-by').click(function(e){e.preventDefault();jQuery(this).parent().toggleClass("active");jQuery('.sortby-option').removeClass('in');jQuery('.sidebar.responsive').toggleClass('in');jQuery('.sort-list li a.sort-by').parent().removeClass('active');jQuery('.content').toggleClass('in');jQuery('.footer').toggleClass('in');jQuery('.content').removeClass('bg');jQuery('.footer').removeClass('bg');})
jQuery(document).on('click','#back_overlay',function(){jQuery('#sory-by').removeClass('active');jQuery('#sort-by-mobile').removeClass('active');jQuery('body').removeClass('tab-open');jQuery('#back_overlay').removeClass('open');})
jQuery(document).on('click','#cencel_tab',function(){event.preventDefault();if(jQuery('body').hasClass('tab-open')){jQuery('body').removeClass('tab-open');}
jQuery('#back_overlay').removeClass('open');jQuery('#filter-by').removeClass('active');jQuery('#filter-by-mobile').removeClass('active');})
var windowHeight=jQuery(window).height();var headerHeight=jQuery('.header').outerHeight();var breadHeight=jQuery('.breadcrumb').outerHeight();var sliderHegiht=windowHeight-(headerHeight+breadHeight);jQuery('#main-slider').slick({slidesToShow:1,slidesToScroll:1,arrows:false,fade:true,asNavFor:'#carousel-slider'});jQuery('#carousel-slider').slick({vertical:true,slidesToShow:4,slidesToScroll:1,asNavFor:'#main-slider',dots:false,centerMode:false,focusOnSelect:true});jQuery('.detail-slider').css({"max-height":sliderHegiht,"overflow":"hidden"});jQuery('#carousel-slider .slick-list').css({"max-height":sliderHegiht-96,"overflow":"hidden"});jQuery('#carousel-slider .slick-slide img').css({"max-height":(sliderHegiht-150)/4});});jQuery(document).ready(function(){jQuery('#bidding-carousel').owlCarousel({loop:true,margin:15,responsiveClass:true,autoplay:true,nav:false,responsive:{0:{items:1,},480:{items:2,margin:15},600:{items:1,margin:15},640:{items:3,margin:15},768:{items:2,},992:{items:3,},1000:{items:3,},1200:{items:3,}}})
jQuery('#related-carosel').owlCarousel({loop:true,margin:30,responsiveClass:true,autoplay:true,nav:true,responsive:{0:{items:1,},480:{items:2,margin:20},600:{items:3,margin:20},640:{items:4,margin:20},1000:{items:5},1200:{items:6}}})
jQuery('#popular-carosel').owlCarousel({loop:true,margin:30,responsiveClass:true,autoplay:true,nav:true,responsive:{0:{items:1,},480:{items:2,margin:20},600:{items:2,margin:20},640:{items:3,margin:20},1000:{items:4},1200:{items:4}}})
jQuery('.owl-carousel').owlCarousel({loop:true,margin:2,responsiveClass:true,autoplay:true,nav:true,autoplayHoverPause:true,responsive:{0:{items:2,},480:{items:2,margin:2},640:{items:2,margin:3},768:{items:3,margin:3},992:{items:3,margin:3},1200:{items:5,nav:true},1400:{items:6,nav:true}}})
jQuery(document).on('hidden.bs.modal',function(event){if(jQuery('.modal:visible').length){jQuery('body').addClass('modal-open');}});$(".scroll_block").mCustomScrollbar({axis:"y",theme:"dark-thick",});$("input.date").datepicker({todayBtn:"linked",keyboardNavigation:false,forceParse:false,calendarWeeks:true,autoclose:true,format:'yyyy-mm-dd'});$('.header .dropdown').hover(function(){$(this).addClass('open');},function(){$(this).removeClass('open');});$(document).on('change','.cartInputQuantity',function(e){console.log('ok');$('.table-responsive').append('<div class="loader_block" id="loader_block_cart"><div class="loader-container"><div class="loader-spinner"></div></div></div>');var val=$(this).val();var cart=$(this).closest('span').find('input[name=rowid]').val();let wrapperExists=$('#gift_wrapper');let wrapperChecked=0;if(wrapperExists.length==1){if($('#gift_wrapper').prop('checked')==true){wrapperChecked=1;}}
$.ajaxSetup({headers:{'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')}});$.ajax({type:"POST",data:{rowid:cart,quantity:val,wrapperChecked:wrapperChecked},url:"/carts/update-quantity",success:function(response){var obj=response;if(obj.message!=""){Toast.fire({icon:'error',title:obj.message});}
$('#loader_block_cart').remove();$(".cartupdate").html($("<div/>").html(obj.cart).text());$(".dropdown.shopping-bag.layoutcart").html($("<div/>").html(obj.layout).text());}});});$(document).on('click','.plus-cart',function(e){$('.table-responsive').append('<div class="loader_block" id="loader_block_cart"><div class="loader-container"><div class="loader-spinner"></div></div></div>');var val=parseInt(jQuery(this).prev('input').val());var cart=$(this).closest('span').find('input[name=rowid]').val();$(this).prev('input').val(val+1);let wrapperExists=$('#gift_wrapper');let wrapperChecked=0;if(wrapperExists.length==1){if($('#gift_wrapper').prop('checked')==true){wrapperChecked=1;}}
$.ajaxSetup({headers:{'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')}});$.ajax({type:"POST",data:{rowid:cart,quantity:val+1,wrapperChecked:wrapperChecked},url:"/carts/add-quantity",success:function(response){var obj=response;if(obj.message!=""){Toast.fire({icon:'error',title:obj.message});}
$('#loader_block_cart').remove();$(".cartupdate").html($("<div/>").html(obj.cart).text());$(".dropdown.shopping-bag.layoutcart").html($("<div/>").html(obj.layout).text());}});});$(document).on('click','.minus-cart',function(e){var val=parseInt(jQuery(this).next('input').val());var cart=$(this).closest('span').find('input[name=rowid]').val();if(val!==1){$('.table-responsive').append('<div class="loader_block" id="loader_block_cart"><div class="loader-container"><div class="loader-spinner"></div></div></div>');$(this).next('input').val(val-1);let wrapperExists=$('#gift_wrapper');let wrapperChecked=0;if(wrapperExists.length==1){if($('#gift_wrapper').prop('checked')==true){wrapperChecked=1;}}
$.ajaxSetup({headers:{'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')}});$.ajax({type:"POST",data:{rowid:cart,quantity:val-1,wrapperChecked:wrapperChecked},url:"/carts/remove-quantity",success:function(response){var obj=response;$('#loader_block_cart').remove();$(".cartupdate").html($("<div/>").html(obj.cart).text());$(".dropdown.shopping-bag.layoutcart").html($("<div/>").html(obj.layout).text());}});}});$(document).on('click','#select_all',function(event){if($(this).prop("checked")==true){$('.cart-check').prop("checked",true);}else{$('.cart-check').prop("checked",false);}
let checked=0;if(jQuery(this).is(':checked')){checked=1}
$('.table-responsive').append('<div class="loader_block" id="loader_block_cart"><div class="loader-container"><div class="loader-spinner"></div></div></div>');let wrapperExists=$('#gift_wrapper');let wrapperChecked=0;if(wrapperExists.length==1){if($('#gift_wrapper').prop('checked')==true){wrapperChecked=1;}}
$.ajaxSetup({headers:{'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')}});$.ajax({type:"POST",data:{checked:checked,wrapperChecked:wrapperChecked},url:"/carts/check-uncheck-all-items",success:function(response){var obj=response;$('#loader_block_cart').remove();$(".cartupdate").html($("<div/>").html(obj.cart).text());$(".dropdown.shopping-bag.layoutcart").html($("<div/>").html(obj.layout).text());}});});$(document).on('click','.cart-check',function(e){if($('.cart-check').filter(':checked').length==$('.cart-check').length){$('#select_all').prop("checked",true);}else{$('#select_all').prop("checked",false);}
let rowId=jQuery(this).val();let checked=0;if(jQuery(this).is(':checked')){checked=1
console.log("Checkbox Is checked");}
if(rowId){$('.table-responsive').append('<div class="loader_block" id="loader_block_cart"><div class="loader-container"><div class="loader-spinner"></div></div></div>');let wrapperExists=$('#gift_wrapper');let wrapperChecked=0;if(wrapperExists.length==1){if($('#gift_wrapper').prop('checked')==true){wrapperChecked=1;}}
$.ajaxSetup({headers:{'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')}});$.ajax({type:"POST",data:{rowid:rowId,checked:checked,wrapperChecked:wrapperChecked},url:"/carts/check-uncheck-item",success:function(response){var obj=response;$('#loader_block_cart').remove();$(".cartupdate").html($("<div/>").html(obj.cart).text());$(".dropdown.shopping-bag.layoutcart").html($("<div/>").html(obj.layout).text());}});}});$('.wish-list-item li').responsiveEqualHeightGrid();$('.cl_top').responsiveEqualHeightGrid();$('.partner_icon_single').responsiveEqualHeightGrid();$('.sm_height_1').responsiveEqualHeightGrid();$('.product_single').responsiveEqualHeightGrid();$('.category_list_single_block a').responsiveEqualHeightGrid();$('.category_list_single_name').responsiveEqualHeightGrid();$('.category_sc').responsiveEqualHeightGrid();$('.mb40 .category_single,.pr_category .product_info').responsiveEqualHeightGrid();$('.category_single.product-collection').responsiveEqualHeightGrid();$('.product_content_same_height').responsiveEqualHeightGrid();jQuery('input[name!="payment_method"]','input[name!="rating"]').iCheck({checkboxClass:'icheckbox_square',radioClass:'iradio_flat'});jQuery('[data-toggle="tooltip"]').tooltip()
jQuery('.block-section.login input[name="guest"]').on('ifChecked',function(event){jQuery(".block-section.login").fadeOut(10);jQuery(".block-section.guest").fadeIn(10);});jQuery('.block-section.guest input[name="guest"]').on('ifUnchecked',function(event){jQuery(".block-section.login").fadeIn(10);jQuery(".block-section.guest").fadeOut(10);});jQuery('.select-size label').click(function(){jQuery('.select-size label').removeClass("active");jQuery(this).addClass("active");})
jQuery('.content-left a.forgot').click(function(e){e.preventDefault();jQuery(".block-section.login").fadeOut(10);jQuery(".block-section.forgot-block").fadeIn(10);})
jQuery('.default-address-block a.add').click(function(e){e.preventDefault();jQuery(".default-address-block").fadeOut(10);jQuery(".new-address-block").fadeIn(10);})
function centerModals($element){var $modals;if($element.length){$modals=$element;}else{$modals=jQuery('.modal-vcenter:visible');}
$modals.each(function(i){var $clone=jQuery(this).clone().css('display','block').appendTo('body');var top=Math.round(($clone.height()-$clone.find('.modal-content').height())/2);top=top>0?top:0;$clone.remove();jQuery(this).find('.modal-content').css("margin-top",top);});}
jQuery('.modal-vcenter').on('show.bs.modal',function(e){centerModals($(this));});jQuery(window).on('resize',centerModals);jQuery('.dropdown-menu li.new-arrival > ul > li').mouseenter(function(){jQuery('.dropdown-menu li.new-arrival > ul > li').removeClass('active');});jQuery('.dropdown-menu li.new-arrival > ul > li:first-child').mouseenter(function(){jQuery('.submenu-content ul').removeClass('newactive');});jQuery('.dropdown-menu li.new-arrival > ul > li:first-child').mouseleave(function(){jQuery('.submenu-content ul.active_list').addClass('newactive');});jQuery('.dropdown_container .dropdown-menu').mouseleave(function(){jQuery('.dropdown-menu li.new-arrival > ul > li').removeClass('active');jQuery('.dropdown-menu li.new-arrival > ul > li').removeClass('newactive');jQuery('.dropdown-menu li.new-arrival.menu_1 > ul > li.active_list').addClass('active');jQuery('.dropdown-menu li.new-arrival.menu_2 > ul > li.active_list').addClass('active');jQuery('.dropdown-menu li.new-arrival.menu_3 > ul > li.active_list').addClass('active');jQuery('.dropdown-menu li.new-arrival.menu_4 > ul > li.active_list').addClass('active');jQuery('.dropdown-menu li.new-arrival.menu_5 > ul > li.active_list').addClass('active');jQuery('.dropdown-menu li.new-arrival.menu_6 > ul > li.active_list').addClass('active');jQuery('.dropdown-menu li.new-arrival.menu_7 > ul > li.active_list').addClass('active');jQuery('.submenu-content ul.active_list').addClass('newactive');jQuery('.submenu-content ul:not(.active_list)').removeClass('newactive');});jQuery('.dropdown-menu li.new-arrival').mouseleave(function(){jQuery('.dropdown-menu li.new-arrival > ul > li').removeClass('active');});var $menu=jQuery(".new-arrival ul");$menu.menuAim({activate:activateSubmenu,deactivate:deactivateSubmenu});function activateSubmenu(row){var $row=$(row);jQuery('.new-arrival ul li').removeClass('newactive');jQuery('.submenu-content ul').removeClass('newactive');$row.addClass("newactive");var active_menu=$row.find("a").attr('id');jQuery("#submenu_"+active_menu).addClass('newactive');}
function deactivateSubmenu(row){var $row=$(row);$row.removeClass("newactive");var active_menu=$row.find("a").attr('id');jQuery("#submenu_"+active_menu).removeClass('newactive');}
jQuery('[data-toggle="tooltip"]').tooltip();jQuery("#navbar > ul > li").hover(function(){jQuery("#navbar > ul > li").removeClass('current_page_item');jQuery(this).addClass('current_page_item');})
var $el,leftPos,newWidth;jQuery(".nav.navbar-nav.navbar-left").append("<li id='magic-line'></li>");var $magicLine=jQuery("#magic-line");var windowWidth=jQuery(window).width();if(windowWidth>767){$magicLine.width(0).data("origLeft",$magicLine.position().left).data("origWidth",0);}
jQuery("#navbar > ul.navbar-left > li + .dropdown-menu").hover(function(){$el=jQuery(this).prev('li');leftPos=$el.position().left;newWidth=$el.children().width();$magicLine.stop().animate({left:leftPos,width:newWidth});},function(){$magicLine.stop().animate({left:$magicLine.data("origLeft"),width:$magicLine.data("origWidth")});});var $menu2=jQuery(".nav.navbar-nav.navbar-left");$menu2.menuAim({activate:activateSubmenu2,deactivate:deactivateSubmenu2,});function activateSubmenu2(row){var $row=$(row);var active_menu=$row.attr('id');jQuery("#menu_"+active_menu).show();$row.find("a").addClass('menu_active');jQuery('.overlay-menu').addClass('active');leftPos=jQuery("#"+active_menu).position().left;newWidth=jQuery("#"+active_menu).width();$magicLine.stop().animate({left:leftPos,width:newWidth});}
function deactivateSubmenu2(row){var $row=$(row);$row.removeClass("newactive");var active_menu=$row.attr('id');jQuery("#menu_"+active_menu).hide();$row.find("a").removeClass('menu_active');jQuery('.overlay-menu').removeClass('active');$magicLine.stop().animate({left:$magicLine.data("origLeft"),width:$magicLine.data("origWidth")});}
var $menu3=jQuery(".nav.navbar-nav.navbar-right");$menu3.menuAim({activate:activateSubmenu3,deactivate:deactivateSubmenu3,});function activateSubmenu3(row){var $row=$(row);var active_menu=$row.attr('id');jQuery("#menu_"+active_menu).show();}
function deactivateSubmenu3(row){}
jQuery(".dropdown-menu, .header-bottom").mouseleave(function(){jQuery('.dropdown-menu').hide();jQuery('.dropdown > a').removeClass('menu_active');jQuery('.overlay-menu').removeClass('active');$magicLine.stop().animate({left:$magicLine.data("origLeft"),width:$magicLine.data("origWidth")});});jQuery(".navbar-nav,.dropdown-menu").mouseleave(function(){jQuery('.dropdown-menu').removeClass('active');jQuery('.dropdown a').removeClass('active');});jQuery('.dropdown-menu li.new-arrival > ul > li').mouseenter(function(){jQuery('.dropdown-menu li.new-arrival > ul > li').removeClass('active');jQuery(this).addClass('active');jQuery('.header-inner .dropdown-menu li.submenu-content > ul').removeClass('active');var menu_container=jQuery(this).attr('id');jQuery("#submenu_"+menu_container).addClass('active');});});jQuery(window).load(function(){jQuery('.grid').masonry({itemSelector:'.grid-item',percentPosition:true,columnWidth:'.grid-item'});})