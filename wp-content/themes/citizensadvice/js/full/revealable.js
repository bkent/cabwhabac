/* jshint browser: true, undef: true */
/* global $: true */

$(function ($) {
    "use strict";

    // Used to generate ids
    var count = 0;

    // If true refocus to the hash
    var refocus = false;

    var namespace = 'revealable';

    // Generate an unique id
    function getId() {
        return namespace + '-' + (++count);
    }

    var w = window;
    var $w = $(w);

    var translate = w.cab && w.cab.translate;

    // Get translated labels
    var expandLabel = translate('Expand section');
    var contractLabel = translate('Hide section');
    var closeLabel = translate('Close');

    // Toggle the section
    function toggle($heading, $container, state) {

        if (state === undefined) {
            state = $heading.attr('aria-expanded') === 'false';
        }

        $heading.attr('aria-expanded', String(state));
        $heading.prop('title', state ? contractLabel : expandLabel);
        $container.attr('aria-expanded', String(state));
        $container.attr('aria-hidden', String(!state));

    }

    function refocusHash() {
        $w.scrollTop($(location.hash).offset().top);
    }


    function setup() {

        // jshint -W040
        var $this = $(this);

        // Check this hasn't already been setup
        if ($this.hasClass(namespace)) {
            return;
        }

        var $children = $this.children();
        var $heading = $children.first();

        // The first item needs to be a heading for this to work
        if (!$heading.is('h2,h3,h4')) {
            return;
        }

        // Mark as setup
        $this.addClass(namespace);

        // Wrap the bit that will be hidden
        var containerId = getId();
        var $container = $('<div class="' + namespace + '__content" id="' + containerId + '"/>');
        $heading.after($container.append($children.not($heading)));

        // Setup the heading
        $heading.addClass(namespace + '__heading');
        $heading.attr('aria-controls', containerId);
        $heading.attr('tabindex', 0);
        $heading.prepend('<i class="' + namespace + '__icon" aria-hidden="true"/>');

        // Setup the close link
        var $close = $('<a href="#" class="' + namespace + '__close"><i class="icon-chevron-up" aria-hidden="true"/>' + closeLabel + '</a>');
        $container.append($close);

        // Create a toogle function
        var toggleState = toggle.bind(null, $heading, $container);

        // If we focus into the collapsed area expand it
        $container
			.on('focus', function () {
			    toggleState(true);
			});

        // Toggle opening the collapsed area
        $heading
			.on('click', function (e) {
			    if (e.isDefaultPrevented()) {
			        return;
			    }
			    toggleState();
			});

        $close
            .on('click', function (e) {
                e.preventDefault();
                toggleState(false);
                $heading[0].focus();
            });

        // Check if the hash is in this section
        function checkHash() {
            if (location.hash && $this.find(location.hash).length) {
                toggleState(true);
                return true;
            }
        }

        // If someone presses a link to anywhere in the section expand it
        $w.on('hashchange', function () {
            if (checkHash()) {
                refocusHash();
            }
        });

        // If we are in the expanded area than expand
        if (checkHash($this)) {
            // Need to refocus as the opening and closing can confuse the browser
            refocus = true;
            return;
        }

        // Otherwise collapse
        toggleState(false);

    }

    // Setup
    $('section.js-' + namespace).each(setup);

    // Refocus if required
    if (refocus) {
        refocusHash();
    }


});