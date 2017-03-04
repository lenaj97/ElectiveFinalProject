$(function() {
    $(document).ajaxStart(function() { Pace.restart(); });
    setTimeout(function() {
        $("#page-content").delay(300).fadeIn(200);
 		$("#loading").fadeOut(400);
        document.getElementById("page-content").style.display = "block";
    }, 3500);
    
    //File Tree
    $('.tree li:has(ul)').addClass('parent_li');

    //hide the child li elements
    $('.tree li ul > li').hide();
    $('.tree li.parent_li > a').on('click', function (e) {
        var children = $(this).parent('li.parent_li').find(' > ul > li');
        if (children.is(":visible")) {
            children.hide('fast');
            $(this).find('span > i').removeClass('fa fa-angle-down').addClass('fa fa-angle-left');
        } else {
            children.show('fast');
            $(this).find('span > i').removeClass('fa fa-angle-left').addClass('fa fa-angle-down');
        }
        e.stopPropagation();
    });
    
    //Toggle Thumbnail/List View
    $('#ThumbnailToggle').click(function(e) {
        "use strict"
        e.preventDefault();
        document.getElementById("thumbnail").style.display = "block";
        $("#thumbnail").delay(400).fadeIn(200);
        document.getElementById("list").style.display = "none";
        $("#list").fadeOut(300);

	});
    
    $('#ListToggle').click(function(e) {
        "use strict"
        e.preventDefault();          
        document.getElementById("list").style.display = "block";
        $("#list").delay(400).fadeIn(200);
        document.getElementById("thumbnail").style.display = "none";
        $("#thumbnail").fadeOut(300);
        
	});
    
});