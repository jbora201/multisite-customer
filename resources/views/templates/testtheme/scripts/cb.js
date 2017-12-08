jQuery(document).ready(function ($) {
    $("#contentarea").contentbuilder({
        zoom: 0.85, 
        // snippetFile: 'assets/default/snippets.html'
    });

    $( ".view-html").on( 'click', function(e) {
    	var sHTML = $('#contentarea').data('contentbuilder').viewHtml();
    });

	$( ".save-html").on( 'click', function(e) {
		alert( " You can add custom code here " );
    });    
});