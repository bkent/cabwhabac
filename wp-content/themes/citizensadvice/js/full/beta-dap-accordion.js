jQuery(function($){

    var openClass = '-open';

    function open($li) {
        $li.children('ul').slideDown(200, function () {
            $li.addClass(openClass);
        });
    }

    function close($li) {
        $li.children('ul').slideUp(200, function () {
            $li.removeClass(openClass);
        });
    }

	$('#beta-dap-menu-accordion li.has-sub>a').on('click', function(e){
	    e.preventDefault();
	    var $li = $(this).parent('li');
		if ($li.hasClass(openClass)) {
		    ga('send', 'event', 'Accordion', location.href, 'Close: ' + $(this).text());
		    close($li)
		} else {
		    ga('send', 'event', 'Accordion', location.href, 'Open: ' + $(this).text());
		    open($li);
		    $li.siblings('li').each(function () {
		        close($(this));
		    });
		}
	});
	
});
