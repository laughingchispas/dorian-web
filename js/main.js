jQuery(document).ready(function ($) {
    //open-close submenu on mobile
    $('.cd-main-nav').on('click', function (event) {
        if ($(event.target).is('.cd-main-nav')) $(this).children('ul').toggleClass('is-visible');
    });

    //Sweep the dom, find any tags with 'data-subscriber="true"' attributes
    //and use them to create subscriber objects that will handle it all from there.
    //See the Subscriber object for more.
    $('.subscriber').each(function () {
        new Subscriber($(this));
    });

    $('[data-switcher-content]').each(function() {
        var el = $(this);
        new DisplaySwitcher($(this), $(el.data('switcher-content')));
    })
});