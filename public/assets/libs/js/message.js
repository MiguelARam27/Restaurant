let message = document.getElementById("message");

function hideAlert() {
    setTimeout(() => {
        message.style.display = "none";
    }, 2500);
}

if (message) {
    window.onLoad(hideAlert());
}
