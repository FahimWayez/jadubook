const buttons = document.querySelectorAll(".navButton");
const slides = document.querySelectorAll("videoSlide");
const contents = document.querySelectorAll(".content");

var sliderNav = function (manual) {
    buttons.forEach((btn) => { btn.classList.remove("active"); });

    slides.forEach((slide) => {
        slide.classList.remove("active");
    });

    contents.forEach((content) => {
        slide.classList.remove("active");
    });
}
buttons.forEach((btn, i) => {
    btn.addEventListener("click", () => {
        sliderNav(i);
    });
});