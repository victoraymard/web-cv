// Globals
var prefixes         = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
var $container       = $('.container');
var $timeline        = $('.timeline');
var $timelineItem    = $('.timeline-item');
var $timelineContent = $('.timeline-content');
var $dropDown        = $('.dropdown');
var $hasHovered      = true;
var hideOnExit       = false;

// mouseenter event handler
$timelineItem.on('mouseenter', function(e) {

    var isSelected = $(this).hasClass('selected');

    if ( isSelected === false ) {

        var leftPos = $(this).position().left,
            left    = leftPos - 88,
            $that   = $(this);

        $timelineItem.removeClass('selected');
        $(this).addClass('selected');

        if ( $hasHovered === false ) {
            // Show Bounce

            // Set Flag
            $hasHovered = true;

            // Show DD Bounce
            showBounce(left);

            // Show DD content Bounce
            showContentBounce($that);

        } else {
            // Follow

            // Change pos of DD to follow
            dropDownFollow(left);

            // Hide previous dd content
            $timelineContent.removeClass('animated fadeIn bounceIn');

            // Show hovered dd content
            $that.find($timelineContent).addClass('animated fadeIn');
        }
    }

});

// mouseleave event handler
$timeline.on('mouseleave', function(e) {

    if (hideOnExit) {

        //   Set Flag
        $hasHovered = false;

        // Hide DD
        hideDropDown();

        // Hide DD content
        $timelineContent.removeClass('animated fadeIn');

    }

});

// Animation end event listener
$dropDown.on(prefixes, function(e) {

    if ( e.originalEvent.animationName === 'fadeOut' ) {
        $dropDown.removeAttr('style');
    }

});

/**
 * Private functions that do showing/hiding/animating
 */
function showContentBounce(that) {
    $hasBounced = true;
    that.find('.timeline-content').addClass('animated bounceIn');
}

function showBounce(pos) {
    $dropDown.css('left', pos + 'px').removeClass('fadeOut').addClass('animated bounceIn');
}

function dropDownFollow(pos) {
    $dropDown.css('left', pos + 'px');
}

function hideDropDown() {
    $timelineItem.removeClass('selected');
    $dropDown.removeClass('bounceIn').addClass('fadeOut');
}













(function() {

    'use strict';

    // define variables
    var items = document.querySelectorAll(".timeline li");

    // check if an element is in viewport
    // http://stackoverflow.com/questions/123999/how-to-tell-if-a-dom-element-is-visible-in-the-current-viewport
    function isElementInViewport(el) {
        var rect = el.getBoundingClientRect();
        return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
    }

    function callbackFunc() {
        for (var i = 0; i < items.length; i++) {
            if (isElementInViewport(items[i])) {
                items[i].classList.add("in-view");
            }
        }
    }


    // listen for events
    window.addEventListener("load", callbackFunc);
    window.addEventListener("resize", callbackFunc);
    window.addEventListener("scroll", callbackFunc);
})();
