$(document).ready(function () {
    $(".filter .ft").click(function () {
        $(this).children("div").slideToggle();
    });
    $('header .fa-navicon').click(function () {
        $('.mobile-menu').slideToggle();
    });
    $(".filter-box").click(function () {
        $('.filter-content').slideToggle();
    });

    // price range 
    $("#ex2").slider({});

    var slider = new Slider('#ex2', {});
    /*-----------------------------------*/
});

const slideValue = document.querySelector("span");
    const inputSlider = document.querySelector("input");
    inputSlider.oninput = (() => {
        let value = inputSlider.value;
    slideValue.textContent = value;
    slideValue.style.left = (value / 2) + "%";
    slideValue.classList.add("show");
    })
    ;
    inputSlider.onblur = (() => {
        slideValue.classList.remove("show");
    })
    ;