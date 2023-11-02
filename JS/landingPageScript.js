const buttons = document.querySelectorAll(".navButton");
const slides = document.querySelectorAll(".videoSlide");

const logoVideo = document.getElementById("logoVideo");

const exploreLink = document.getElementById("exploreLink");
const contents = document.querySelectorAll(".content");

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
}
buttons.forEach((btn, i) => {
    btn.addEventListener("click", () => {
        sliderNav(i);
    });
});

logoVideo.addEventListener("mouseenter", () => {
    logoVideo.play();
});

logoVideo.addEventListener("mouseleave", () => {
    logoVideo.stop();
});

exploreLink.addEventListener("click", (e) => {
    e.preventDefault();

    const currentActiveContent = document.querySelector(".content.active");
    const currentIndex = Array.from(contents).indexOf(currentActiveContent);

    if (currentIndex < contents.length - 1) {
        currentActiveContent.classList.remove("active");
        contents[currentIndex + 1].classList.add("active");
    }
});