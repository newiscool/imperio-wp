(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.8";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

$.fn.centralize = function () {
    var $element = $(this),
        $width = $element.width() /2,
        $height = $element.height() /2;
    $element.css('margin-left', - $width).css('margin-top', -$height);
};

$(document).ready(function(){

    // FECHA LIGHTBOX

    $('.lightbox-close').click(function () {
        $('.lightbox-wrapper.active').removeClass('active');
        $('body').removeClass('lightbox-active');
    });

    $('.lightbox-shadow').click(function () {
        var $this = $(this);
        $this.parent().removeClass('active');
        $('body').removeClass('lightbox-active');
    });

    // CENTRALIZA LIGHTBOX

    $('.lightbox-centralize').centralize();

    // LIGHTBOX COTAÇÃO NA PÁGINA DO PRODUTO

    $('.productpage-trigger').click(function () {
        var value = $('.product-infos .product-name').text();
        $('input[name="assunto"]').val(value).attr('readonly', 'readonly');
        $('.lightbox-centralize').centralize();
        $('#cotarProduto').addClass('active');
        $('body').addClass('lightbox-active');
    });

    // LIGHTBOX COTAÇÃO NO BANNER

    if($('.banner-trigger').length > 0){
        $('.banner-trigger').click(function () {
            var $this = $(this),
                value = $this.siblings('a').find('.banner-title').text();
            $('input[name="assunto"]').val(value).attr('readonly', 'readonly');
            $('.lightbox-centralize').centralize();
            $('#cotarProdutoBanner').addClass('active');
            $('body').addClass('lightbox-active');
        });
    }


    var $header = $('#main-header'),
        $headerHeight = $header.height();

    if ($(window).width() < 991) {
        $('.main-menu').css('top', $headerHeight);
    }

    // Busca

    var $searchtrigger  = $('.search-trigger'),
        $searchOver     = $('.search-overlay');
        $closeOverlay = $('#full-search span.close');

    $searchtrigger.click(function () {
        var $this = $(this);
        $this.toggleClass('open');
        $searchOver.toggleClass('active');
        $('#full-search').toggleClass('open');
        $('body').toggleClass('menu-active');
        $('#full-search input[type=text]').focus();
    });

    $searchOver.click(function () {
        var $this = $(this),
            $target = $('*.open');

        $('body').removeClass('menu-active');
        $this.removeClass('active');
        $target.removeClass('open');
    });

    $closeOverlay.click(function () {
        var $this = $(this),
            $target = $('*.open');

        $('body').removeClass('menu-active');
        $target.removeClass('open');
    });

    $('#main-menu-trigger').click(function () {
        var $header = $('#main-header'),
            $headerHeight = $header.height();
        var $this = $(this);
        $this.toggleClass('active');
        $('body').toggleClass('menu-active');
        $('.main-menu').css('top', $headerHeight);
        $('.main-menu').toggleClass('active');
    });

    // Menu Mobile

    var $mobTrigger = $('.main-menu .menu-item-has-children');
    $mobTrigger.append('<i class="icon-down"></i>');
    $mobTrigger.each(function (index) {
        var $this = $(this),
            $trigger = $this.find('> i');
        $trigger.on('click', function () {
            var $thisTr = $(this);
            $thisTr.toggleClass('active');
            $this.find('>.sub-menu').slideToggle();
        });
    });

    var $select = $('select');

    $select.each(function (index) {
        var $this = $(this);
        $this.wrapAll('<div class="fake-select"></div>');
        $('<i class="select-open"></i>').insertAfter($this);
    });


    if ($(window).width() < 768) {
        var $mode = 'inner'
    }else{
        var $mode = 'window'
    }

    $('ul.tabs li').click(function(){
        var tab_id = $(this).attr('data-tab');

        $('ul.tabs li').removeClass('current');
        $('.tab-content').removeClass('current');

        $(this).addClass('current');
        $("#"+tab_id).addClass('current');
    });

    $('#product-secondary-infos iframe').wrapAll('<div class="video-wrapper"></div>');
    $('.post-content iframe').wrapAll('<div class="video-wrapper"></div>');


    // ADICIONA SLUG COMO CLASSE NO BREADCRUMB

    // var $item = $('a.taxonomy');
    //
    // $item.each(function () {
    //     var $this = $(this);
    //     var $itemSrc= $this.children('span'),
    //         $itemVal= $itemSrc.text(),
    //         $itemValLow = $itemVal.toLowerCase().replace(/[_\s]/g, '-').normalize('NFD').replace(/[\u0300-\u036f]/g,"");
    //     $this.parent().addClass($itemValLow);
    // });

    var $itemSpan = $('span[property="name"]');

    $itemSpan.each(function () {
        var $this = $(this),
            $itemVal= $this.text(),
            $itemValLow = $itemVal.toLowerCase().replace(/[_\s]/g, '-').normalize('NFD').replace(/[\u0300-\u036f]/g,"");
        $this.addClass($itemValLow);
    });

    // TRANSFORMA SIDEBAR EM MENU MOBILE

    var $filtertrigger = $('.category-menu'),
        $filteroverlay = $('.filter-overlay'),
        $filterclose = $('.filter-close');
    $filtertrigger.click(function () {
        $('#secondary').addClass('open');
        $('body').addClass('menu-active');
        $filteroverlay.addClass('active');
    });

    $filteroverlay.click(function () {
        var $this = $(this);
        $this.removeClass('active');
        $('#secondary').removeClass('open');
        $('body').removeClass('menu-active');
    });

    $filterclose.click(function () {
        $('#secondary').removeClass('open');
        $('body').removeClass('menu-active');
        $filteroverlay.removeClass('active');
    });


    $('.banner_home').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      dots: true
    });

    $('ul.featured-products').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 8000,
      dots: true
    });





//backup para o texto das paginas internas
    $('.title_invert').each(function(){
    var me = $(this)
       , t = me.text().split(' ');
       me.html( '<strong>'+t.shift()+'</strong> '+t.join(' ') );
  });

  $("ul.content_tratamentos li .description_category").each(function(i){
      len=$(this).text().length;
      if(len>199)
      {
          $(this).text($(this).text().substr(0,199)+'...');
      }
});

  $(".description-content_category").each(function(i){
      len=$(this).text().length;
      if(len>199)
      {
          $(this).text($(this).text().substr(0,199)+'...');
      }
  });

});

$(window).resize(function () {

    if($('#gallery_01').length > 0){
        $('#gallery_01 > li:first-child > a').click();
    }

    if ($(window).width() < 768) {
        var $mode = 'inner'
    }else{
        var $mode = 'window'
    }
    $('#zoomImage').elevateZoom({
        gallery:'gallery_01',
        cursor: 'pointer',
        zoomType: $mode,
        imageCrossfade: false,
        responsive: true,
        galleryActiveClass: 'active',
    });

    var height = $("#zoomImage").css("height");
    var width = $("#zoomImage").css("width");
    $(".zoomContainer").css("height", height);
    $(".zoomContainer").css("width", width);
    $(".zoomWindowContainer").css("height", height);
    $(".zoomWindowContainer").css("width", width);

    $('.lightbox-centralize').centralize();

    var $header = $('#main-header'),
        $headerHeight = $header.height();

    if ($(window).width() < 991) {
        $('.main-menu').css('top', $headerHeight);
        $('.sub-menu').hide();
    }else{
        $('body').removeClass('menu-active');
        $('.main-menu').removeClass('active');
        $('.sub-menu').show();
        $('#main-menu-trigger').removeClass('active');
        $('.main-menu .icon-down').removeClass('active');
    }
});

// Hide Header on on scroll down
var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = $('.header-top').outerHeight();

$(window).scroll(function(event){
    var $header = $('#main-header'),
        $headerHeight = $header.height();

    if ($(window).width() < 991) {
        $('.main-menu').css('top', $headerHeight);
    }

    didScroll = true;
});

(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));


$(window).load(function(){
  $(window).scroll(function(){
      if($(window).scrollTop()>0){
          $('body').addClass("scroll");
      } else {
          $('body').removeClass("scroll");
      }
  });
});
