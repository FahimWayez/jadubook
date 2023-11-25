ScrollReveal({
    //reset: true,
    distance: "60px",
    duration: 2500,
    delay: 400,
});

ScrollReveal().reveal(".mainTitle, .sectionTitle", {
    delay: 500,
    origin: "top",
});
ScrollReveal().reveal(".sec1 .image", { delay: 600, origin: "bottom" });
ScrollReveal().reveal(".textBox", { delay: 600, origin: "bottom" });
ScrollReveal().reveal(".goDown", { delay: 1500, origin: "bottom" });
ScrollReveal().reveal(".sec2 .image", { delay: 600, origin: "left" });
ScrollReveal().reveal(".sec2 .info", { delay: 2000 });
ScrollReveal().reveal(".sec3 .member .image", {
    delay: 600,
    origin: "top",
    interval: 200,
});
ScrollReveal().reveal(".sec3 .member .details", {
    delay: 2000,
    origin: "left",
    interval: 1000,
});
ScrollReveal().reveal(".mediaInfo", {
    delay: 500,
    origin: "left",
    interval: 1000,
});
ScrollReveal().reveal(".wrapper", {
    delay: 1000,
    origin: "bottom",
    interval: 1000,
});