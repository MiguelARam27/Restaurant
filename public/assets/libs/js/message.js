function hideAlert() {
    console.log(document.getElementById("message"));
    setTimeout(() => {
        document.getElementById("message").style.display = "none";
    }, 2500);
}

window.onLoad(hideAlert());
