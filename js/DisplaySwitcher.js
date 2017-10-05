/**
 * Component to switch what's currently being displayed in a display area. Very rudimentary but
 * it'll get the job done.
 * Runs on the following assumptions:
 *
 * - There are 2 content groups on the page: one is a set of thumbs that you click (the control group, basically) and
 * the other is the actual content set. The first group needs to have a parent container with a data attribute of
 * 'data-switcher-content=".switcher-content"' where '.switcher-content' is the class name of our target
 * parent content element.
 *
 * - The 'control' element contains 'triggers'. Triggers are any HTML construct wrapped in an element with the
 * data attribute "data-switcher-target", which is set to a CSS selector of the content element that should appear when
 * it is clicked (in the content element).
 * E.g.: <div class="switcher-trigger" data-switcher-target="#sT-easy-pieces">
 *          This trigger will show the element inside of the content element with an id of '#sT-easy-pieces'
 *
 *  - The parent content element contains all of the 'switchable' items as first-child descendents with no other content.
 *
 *  - Each 'item' in the content div is tagged with the selector (preferably ID) that the corresponding trigger is targeting.
 *
 * @constructor
 */
var DisplaySwitcher = function(ctrlParent, contentParent) {
    this.contentParent = contentParent;
    this.triggers = ctrlParent.find('[data-switcher-target]');
    this.activeTrigger = null;
    this.classes = {
        active: 'active'
    };
    this.first = true;

    if(!this.contentParent || !this.contentParent.length) {
        throw new Error('No target parent element found for DisplaySwitcher. Make sure you specify a valid "data-switcher-content" selector on the parent control element HTML tag. For example: <div data-switcher-content=".switcher-content">')
    }
    if(!this.triggers || !this.triggers.length) {
        console.warn('No triggers found for DisplaySwitcher component. Make sure you specified the "data-switcher-target" attribute on the triggers in the DisplaySwitcher main control div, and that they point to valid targets in the target container.');
        return;
    }

    this.triggers.on('click', this.onTriggerClick.bind(this));
    this.triggers.eq(0).trigger('click');
};

DisplaySwitcher.prototype = {
    onTriggerClick: function(evt) {
        var el = $(evt.currentTarget);

        if (this.activeTrigger) {
            this.activeTrigger.removeClass(this.classes.active);
        }
        this.activeTrigger = el;
        this.activeTrigger.addClass(this.classes.active);

        this.contentParent.children().hide();
        this.contentParent.find(el.data('switcher-target')).show();
        //Bullshit way of doing this but whatevz. Keeps page load from scrolling.
        if (this.first) {
            this.first = false;
            return;
        }
        $('html, body').animate({scrollTop: this.contentParent.offset().top}, 500);
    }
};