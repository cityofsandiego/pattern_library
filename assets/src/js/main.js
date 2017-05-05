requirejs(['modules/sandiego', 'modules/elevator', 'modules/offcanvas'],
function   (SD, EL, OC) {
    //jQuery, canvas and the app/sub module are all
    //loaded and can be used here now.
    SD.init();
    EL.init();
    // Mobile Nav UI
    OC.init(function(offcanvas) {
        if (window.addEventListener) {
            window.addEventListener('DOMContentLoaded', offcanvas.init, false)
        }
    })
});
