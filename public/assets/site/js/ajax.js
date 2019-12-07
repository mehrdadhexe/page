/**
 * profile page tabs action
 * get content of any tab by ajax on click.
 */
$(function(){
    $('[data-toggle="tabajax"]').click(function(e) {
        var $this = $(this),
            loadurl = $this.attr('href'),
            targ = $this.attr('data-target'),
            content = $('.tab-content');

        //check if another ajax is loading.
        if (!content.hasClass('loading')) {
            content.addClass('loading');
            $(targ).html('');
            $.get(loadurl, function(data) {
                $(targ).html(data);
                content.removeClass('loading');
                window.history.replaceState(null, null, targ);
                $(window).scrollTop(0);
                $('#nava').removeClass('affix').addClass('affix-top');
                $(window).scroll();
                appAjax();
            });

            $this.tab('show');
        }
        return false;
    });
    var hash = window.location.hash;
    setProfileTab();
    $('ul.dropdown-menu li a').click(function(e) {
        hash = $(this).data('tab');
        setProfileTab();
    });
    function setProfileTab(){
        if (hash.match("^#tab")) {
            $('a[data-target="' + hash + '"]').trigger('click');
        } else {
            var that = $('[data-toggle="tabajax"]:first');
            that.trigger('click');
            $(that.attr('data-target')).addClass('active');
		}
		$('body,html').animate({
			scrollTop: 0
		},0);
    }

});