var loader = document.getElementById("loadingAnimation");
function goBack() {
    loader.style.display = "block";

    setTimeout(function () {
        loader.style.display = "none";
        window.history.back();
    }, 1000);
}