$(document).ready(function() {
    
    // main slider
    $("#slider").owlCarousel({
        items: 1,
        loop: true,
        nav: false,
        dots: true,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        autoplaySpeed: 1000,
        dotsSpeed: 1000
    });
    
    // feedback slider
    $("#feedback-slider").owlCarousel({
        margin: 20,
        loop: true,
        responsive : {
            0 : {
                items: 1,
            },
            736 : {
                items: 2,
            },
            1200 : {
                items: 2,
            }
        },
        nav: true,
        navText: ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
        dots: false,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        autoplaySpeed: 1000,
        dotsSpeed: 1000
    });
    
    // arrow top show/hide
    $(window).scroll(function() {
        if($(this).scrollTop() != 0) {
            $('#toTop').fadeIn();
        } else {
            $('#toTop').fadeOut();
        }
    });
    $('#toTop').click(function() {
    $('body,html').animate({scrollTop:0},800);
    });
    
    // 
    $(document).on('click', '.modal_btn', function(){
        $('#small-modal').arcticmodal();
    });
    
    // right sidebar sticky
    if($('.sidebar').size()) {
        var sideBar = $('.sidebar');
        var sideBarOffset = sideBar.offset();
        var sideBarTop = parseInt(sideBarOffset.top);
        var sideBarBottom = parseInt(sideBarTop + sideBar.height());
        var contentBlock = sideBar.parent("div").siblings(".8u");
        $(window).on("scroll resize", function() {
            var contentBlockOffset = contentBlock.offset();
            var wHeight = $(window).height();
            var vpTop = parseInt($(document).scrollTop());
            var vpBottom = parseInt(vpTop + $(window).height());
//            var footerOffset = $("#footer-wrapper").offset();
            var contentBlockBottom = contentBlockOffset.top + contentBlock.outerHeight(true);
//            var footerFromBottom = vpTop + wHeight - footerOffset.top;

            var fixedLeft = contentBlockOffset.left + contentBlock.outerWidth(true) + parseInt(sideBar.parent("div").css('padding-left'));
            var fixedTop = vpTop + sideBar.outerHeight(true) - contentBlockBottom;
//            var fixedTop = vpTop + sideBar.outerHeight(true) - footerOffset.top;

            // set fixed navigation
            if(sideBarTop < vpTop) {
                sideBar.addClass('fixed');
                sideBar.css('left',fixedLeft);
            } else {
                sideBar.removeClass('fixed');
            }
            if(fixedTop > 0) {
                sideBar.css('top',-fixedTop);
            } else {
                sideBar.css('top',10);
            }
        });
    }
    
}); //---$(document).ready


document.onmousemove = moveTip;
function moveTip(e) {
  floatTipStyle = document.getElementById("floatTip").style;
  w = 250; // Ширина подсказки

  // Для браузера IE6-8
  if (document.all)  { 
    x = event.clientX + document.body.scrollLeft; 
    y = event.clientY + document.body.scrollTop; 

  // Для остальных браузеров
  } else   { 
    x = e.pageX; // Координата X курсора
    y = e.pageY; // Координата Y курсора
  }

  // Показывать слой справа от курсора 
  if ((x + w + 10) < document.body.clientWidth) { 
    floatTipStyle.left = x + 'px';

  // Показывать слой слева от курсора
  } else { 
    floatTipStyle.left = x - w + 'px';
  }

  // Положение от  верхнего края окна браузера
  floatTipStyle.top = y + 20 + 'px';
}

function toolTip(msg) {
  floatTipStyle = document.getElementById("floatTip").style;
  if (msg) {
    // Выводим текст подсказки
    document.getElementById("floatTip").innerHTML = msg;
    // Показываем подсказку
    floatTipStyle.display = "block";
  } else { 
    // Прячем подсказку
    floatTipStyle.display = "none";
  } 
}