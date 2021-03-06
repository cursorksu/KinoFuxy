
if($('#BgEacDeJ > *').length){
    $('.page-collections').addClass('add-block-is-active');
    $('body:not(.front) .mm-page .main').addClass('add-block-is-active');
}else{
    $('.page-collections').removeClass('add-block-is-active');
    $('body:not(.front) .mm-page .main').removeClass('add-block-is-active');
}

if($('.page-collections .js-scroll-track').length) {

    if(window.matchMedia('(min-width: 1280px)').matches) {
        $('body.page-collections.add-block-is-active #BgEacDeJ').css('margin-top', '60px');
    }
    if (window.matchMedia('(max-width: 1279px)').matches) {
        $('body.page-collections main.main ').css('padding-top', '160px');
        $('body.page-collections.add-block-is-active main.main ').css('padding-top', '0');
        $('body.page-collections.add-block-is-active #BgEacDeJ').css('margin-top', '160px');
    }
    if (window.matchMedia('(max-width: 799px)').matches) {
        $('body.page-collections main.main ').css('padding-top', '86px');
        $('body.page-collections.add-block-is-active main.main ').css('padding-top', '0');
        $('body.page-collections.add-block-is-active #BgEacDeJ').css('margin-top', '136px');
    }
    if (window.matchMedia('(max-width: 767px)').matches) {
        $('body.page-collections main.main ').css('padding-top', '0');
        $('body.page-collections.add-block-is-active #BgEacDeJ').css('margin-top', '60px');
    }
}
function setHeightSliderOnMain(wrapper, slider) {
    var heightTreck = slider.height()+10;
    wrapper.css('padding-top', `${heightTreck}px`);

}

function sliderArrowPosition(sliderName, slideHeight){
    var arrowPrev = $(`${sliderName} .c-slider__prev`);
    var arrowNext = $(`${sliderName} .c-slider__next`);
    var arrowPosirionTop = slideHeight / 2 + 67;
    arrowPrev.css('top', `${arrowPosirionTop}px` );
    arrowNext.css('top', `${arrowPosirionTop}px` );
}


$(window).load(function () {
    if($('.c-tabs').length) {
        sliderArrowPosition('.c-tabs .c-slider', $('.c-tabs .c-slider .c-preview__set').height());
        $('.c-tabs .quality-filter a').click(function (e) {
            e.preventDefault();
            const tabsId =  $(this).parent('.c-tabs__item')[0].dataset.action;
            const tabActive = document.getElementById(tabsId);
            const tabs = $('.c-tab');
            tabs.removeClass('tab-active')
            tabActive.classList.add('tab-active');
            setHeightSliderOnMain($('.c-tabs .c-tabs__wrapper'), $('.c-tabs .tab-active .c-slider__wrapper'));
        });
        setHeightSliderOnMain($('.c-tabs .c-tabs__wrapper'), $('.c-tabs .tab-active .c-slider__wrapper'));

    }
});



$(window).resize(function() {
    if($('.c-tabs').length) {
        sliderArrowPosition('.c-tabs .c-slider', $('.c-tabs .c-slider .c-preview__set').height());
        setHeightSliderOnMain($('.c-tabs .c-tabs__wrapper'), $('.c-tabs .tab-active .c-slider__wrapper'));
    }
    if($('.page-collections .js-scroll-track').length){
        if(window.matchMedia('(min-width: 1280px)').matches) {
            $('body.page-collections.add-block-is-active #BgEacDeJ').css('margin-top', '60px');
        }
        if(window.matchMedia('(max-width: 1279px)').matches) {
            $('body.page-collections main.main ').css('padding-top', '160px');
            $('body.page-collections.add-block-is-active main.main ').css('padding-top', '0');
            $('body.page-collections.add-block-is-active #BgEacDeJ').css('margin-top', '160px');
        }
        if(window.matchMedia('(max-width: 799px)').matches) {
            $('body.page-collections main.main ').css('padding-top', '86px');
            $('body.page-collections.add-block-is-active main.main ').css('padding-top', '0');
            $('body.page-collections.add-block-is-active #BgEacDeJ').css('margin-top', '136px');
        }
        if(window.matchMedia('(max-width: 767px)').matches ){
            $('body.page-collections main.main ').css('padding-top', '0');
            $('body.page-collections.add-block-is-active #BgEacDeJ').css('margin-top', '60px');
        }
    }
});
$(window).resize();


