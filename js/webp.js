window.onload  = function () {
    /**
     * No need to change images to .png if webp is supported.
     */
    if (Modernizr.webp) {
        return;
    }

    /**
     * Gets all the <img> tags in the DOM.
     */
    var images = document.getElementsByTagName('img');

    /**
     * Loops through the images loaded via the <img> tag changing the src to load
     * a .png image that is supported by all browsers.
     */
    for(var i = 0; i < images.length; i++) {
        images[i].src = images[i].src.replace('.webp','.png');
    }
};
