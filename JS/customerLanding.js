const logoVideo = document.getElementById("logoVideo");

const searchForm = document.querySelector('.search-form');

document.querySelector('#search-btn').onclick = () => {
    searchForm.classList.toggle('active');
}

logoVideo.addEventListener("mouseenter", () => {
    logoVideo.play();
});

logoVideo.addEventListener("mouseleave", () => {
    logoVideo.stop();
});


window.onscroll = () => {

    searchForm.classList.remove('active');

    if (window.scrollY > 80) {
        document.querySelector('.header .header-2').classList.add('active');
    } else {
        document.querySelector('.header .header-2').classList.remove('active');
    }
}

window.onload = () => {

    if (window.scrollY > 80) {
        document.querySelector('.header .header-2').classList.add('active');
    } else {
        document.querySelector('.header .header-2').classList.remove('active');
    }

    fadeOut();
}
