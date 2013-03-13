window.onload  = function () {
    var i, images, imageType;

    /**
     * Gets all the <img> tags in the DOM.
     */
    images = document.getElementsByTagName('img');

    /**
     * Image type is determined based on webp being supported.
     */
    imageType = (Modernizr.webp) ? '.webp' : '.png';

    /**
     * Loops through the images loaded via the <img> tag changing the src to load
     * a .png image that is supported by all browsers.
     */
    for(i = 0; i < images.length; i++) {
        if (images[i].hasAttribute('data-src')) {
            images[i].src = images[i].getAttribute('data-src') + imageType;
        }
    }
};
