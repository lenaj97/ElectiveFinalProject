$(function() {
    document.getElementById("page-content").innerHeight = "0";
    setTimeout(function() {
        $("#page-content").delay(300).fadeIn(200);
 		$("#loading").fadeOut(400);
        document.getElementById("page-content").style.display = "block";
    }, 3500);
});