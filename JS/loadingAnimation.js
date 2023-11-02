var loader = document.getElementById("loadingAnimation");
loader.style.display = "block";

setTimeout(function () {
    loader.style.display = "none";
}, 1500);

// in html:

// just after body: <div id="loadingAnimation"></div>
// just before ending body: <script src="../JS/loadingAnimation.js"></script>


// in css:
// @import url('loadingAnimation.css');
