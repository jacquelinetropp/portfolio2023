( function( $ ) {
	$('#toggleButton').on('click', function() {
		$('#hiddenProjects').toggleClass('projects__shown');
        var buttonText = $('#hiddenProjects').hasClass('projects__shown') ? 'Show Less' : 'Show More';
        $(this).text(buttonText);
	})
}(jQuery));