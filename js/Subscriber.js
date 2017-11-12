/**
 * Creates a Subscriber object.
 * @param el    Should be a jQuery selection of one single subscriber 'form' element. When submission occurs, this form
 * will be replaced with the success message so don't put any elements that you don't want to go away outside the form
 * tag itself (or vice versa)
 *
 * REQUIRES JQUERY and there is NO checking for that.
 *
 * @constructor
 */
var Subscriber = function (el) {
    this.el = el;
    this.mobileToggle = el.find('.mobile-only.toggle');
    this.form = el.find('form');
    this.form.on('submit', this.onSubmit.bind(this));
    this.mobileToggle.on('click', this.onMobileToggleClick.bind(this));
};

Subscriber.prototype = {
    onSubmit: function(evt) {
        var that = this;

        evt.preventDefault();
        if (this.submitting) {
            return;
        }
        this.submitting = true;
        //You should VALIDATE the email as well, ideally - good exercise in regex.
        console.log(this.form.find('input[id="subscriber-email"]').val());
        $.post('api/v1/subscribe.php',
            {email: this.form.find('input[id="subscriber-email"]').val()},
            function() {
                that.submitting = false;
                that.onResponse(arguments);
            }
        );
        this.await();
    },

    await: function() {
        this.waitingEl = $('<span class="busy"></span>');
        this.el.append(this.waitingEl);
    },

    unwait: function() {
        this.waitingEl.remove();
    },

    onResponse: function(data, status) {
        this.unwait();

        //You should actually check status to fork logic if something goes wrong but hey, fuck it,
        //lets assume that it'll NEVER FAIL EVER! :) :) :) :) :) :)
        var replaceEl = $('<p></p>');
        replaceEl.text('Merci! Ton inscription a bien été prise en compte.');
        this.form.html(replaceEl);
        this.el.addClass('submitted');
    },

    onMobileToggleClick: function() {
        this.el.toggleClass('mobile-modal-active');
    }
};
