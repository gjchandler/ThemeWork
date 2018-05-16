//Add read more button to video section  1234512
jQuery('.vid-feed').append(
"<div class=\"read-more\"> <a href=\"/videos\">View more >></a></div>"
	);

//Initialize popover.js
jQuery(function(){
    jQuery("[data-toggle=popover]").popover({
        html : true,
        content: function() {
          var content = jQuery(this).attr("data-popover-content");
          return jQuery(content).children(".popover-body").html();
        },
        title: function() {
          var title = jQuery(this).attr("data-popover-content");
          return jQuery(title).children(".popover-heading").html();
        }
    });
});

//Removes those pesky red more and "..." things from the team grid
jQuery(".team-grid span, .team-grid p").each(function() {
    var text = jQuery(this).text();
    text = text.replace("[…]", "");
    jQuery(this).text(text);
});;

jQuery(".team-grid span, .team-grid p").each(function() {
    var text = jQuery(this).text();
    text = text.replace("Read More…", "");
    jQuery(this).text(text);
});;