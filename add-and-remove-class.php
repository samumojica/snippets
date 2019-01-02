(function($) {
    var $window = $(window),
        $html = $('.aesta');

    $window.resize(function resize() {
        if ($window.width() < 991) {
            return $html.addClass('noustar');
        }

        $html.removeClass('noustar');
    }).trigger('resize');
})(jQuery);
