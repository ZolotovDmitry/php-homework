/* Индекс слайда по умолчанию */
let slideIndex = 1;
showSlides(slideIndex);

/* Функция увеличивает индекс на 1, показывает следующй слайд*/
function plusSlide() {
    showSlides(slideIndex += 1);
}

/* Функция уменьшяет индекс на 1, показывает предыдущий слайд*/
function minusSlide() {
    showSlides(slideIndex -= 1);  
}

/* Устанавливает текущий слайд */
function currentSlide(n) {
    showSlides(slideIndex = n);
}

/* Основная функция сладера */
function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("item");
    let dots = document.getElementsByClassName("slider-dots_item");
    if (n > slides.length) {
      slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
}

//слайдер продукта(превью)
$(document).ready(function() {
    $('.product_item_slider').bxSlider({
        pagerCustom: '.product_item_colors',
        controls: false
    });

    // //слайдер страницы товара
        $('.js_product_view_slider').bxSlider({
            pagerCustom: '.js_product_view_pager',
            controls: false
        });
        //слайдер цвета
        $('.size-list li span').click(function () {
            $(this).siblings().removeClass('active');
            $(this).toggleClass('active');

        })
    });
// $(document).ready(function() {
//
//     //слайдер страницы товара
//     $('.js_product_view_slider').bxSlider({
//         pagerCustom: '.js_product_view_pager',
//         controls: false
//     });
// });
