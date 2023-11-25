const buttons = document.querySelectorAll(".navButton");
const slides = document.querySelectorAll(".content");

const logoVideo = document.getElementById("logoVideo");

const exploreLink = document.getElementById("exploreLink");
const contents = document.querySelectorAll(".content");

logoVideo.addEventListener("mouseenter", () => {
    logoVideo.play();
});

logoVideo.addEventListener("mouseleave", () => {
    logoVideo.stop();
});

var sliderNav = function (manual) {
    buttons.forEach((btn) => {
        btn.classList.remove("active");
    });

    slides.forEach((slide) => {
        slide.classList.remove("active");
    });

    contents.forEach((content) => {
        content.classList.remove("active");
    });

    buttons[manual].classList.add("active");
    slides[manual].classList.add("active");
    contents[manual].classList.add("active");
    contents[manual].parentElement.querySelector('.text-container').classList.add("active");
}

buttons.forEach((btn, i) => {
    btn.addEventListener("click", () => {
        sliderNav(i);
    });
});

