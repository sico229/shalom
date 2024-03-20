export function setCookie(name, value, days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + value + expires + "; path=/";
}

export function getCookie(name) {
    var nameEQ = name + "=";
    var cookies = document.cookie.split(";");
    for (var i = 0; i < cookies.length; i++) {
        var cookie = cookies[i];
        while (cookie.charAt(0) == " ") {
            cookie = cookie.substring(1, cookie.length);
        }
        if (cookie.indexOf(nameEQ) == 0) {
            return cookie.substring(nameEQ.length, cookie.length);
        }
    }
    return null;
}

export function Cookier() {
    const cookiContainer = document.getElementById("cookie");

    if (!getCookie("ShallomCookie")) {
        setTimeout(() => {
            cookiContainer.classList.add("ShowCookieNotification");
        }, 1000);
        clearInterval();
    }

    $(".dismissCookie").click(function () {
        setCookie("ShallomCookie", "accepted", 365);

        cookiContainer.style.display = "none";
    });
}
