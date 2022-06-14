//scroll up button
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("upArrID").style.display = "block";
    } else {
        document.getElementById("upArrID").style.display = "none";
    }
}
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
function bottomFunction() {
    window.scrollTo(0, document.body.scrollHeight);
}
