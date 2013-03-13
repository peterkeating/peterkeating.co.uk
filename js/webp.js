window.onload  = function () {
    /**
     * Gets all the <img> tags in the DOM.
     */
    var images = document.getElementsByTagName('img');

    /**
     * Image type is determined based on webp being supported.
     */
    var imageType = (Modernizr.webp) ? '.webp' : '.png';

    /**
     * Loops through the images loaded via the <img> tag changing the src to load
     * a .png image that is supported by all browsers.
     */
    for(var i = 0; i < images.length; i++) {
        if (images[i].hasAttribute('data-src')) {
            images[i].src = images[i].getAttribute('data-src') + imageType;
        }
    }
};
