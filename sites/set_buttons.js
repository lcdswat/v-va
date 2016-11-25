$(document).ready(function() {
	var index = 0;
	var currentPage = location.pathname.substr(1);

	for (var i = 0; i < pages.length; i++) {
		if (pages[i] === currentPage) {
			index = i;
		}
	}

	if (index > 0) {
		$('#prev').show();
	}

	if (index < pages.length - 1) {
		$('#next').show();
	}

	$('#prev').click(function() {
		location.pathname = '/' + pages[--index];
	});

	$('#next').click(function() {
		location.pathname = '/' + pages[++index];
	});
});