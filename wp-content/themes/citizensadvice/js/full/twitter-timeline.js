/**
 *  If anything is using the twitter timeline than load the Twitter widget js
 */
jQuery(function ($) {
    if ($('.twitter-timeline,.twitter-follow-button,.twitter-video,.twitter-tweet,.twitter-share-button').length) {
        !function (document, s, id) {
            var js;
            var firstJS = document.getElementsByTagName(s)[0];
            if (!document.getElementById(id)) {
                js = document.createElement(s);
                js.id = id;
                js.src = "https://platform.twitter.com/widgets.js";
                firstJS.parentNode.insertBefore(js, firstJS);
            }
        }(document, "script", "twitter-wjs");
    }
});