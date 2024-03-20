export const Scroller = () => {
    window.onscroll = function () {
        fixLowerbar();
    };

    var lowerbar = document.getElementById("lowerbar");

    function fixLowerbar() {
        if (window.scrollY > 0) {
            lowerbar.classList.add("fixed");
        } else {
            lowerbar.classList.remove("fixed");
        }
    }
};
