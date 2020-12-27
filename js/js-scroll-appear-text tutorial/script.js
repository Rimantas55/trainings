function scrollAppear() {
    var introText = document.querySelector(".intro-text");
    var introPosition = introText.getBoundingClientRect().top; // get where is this text reletive to the window
    // console.log(introPosition);
    var screenHeight = window.innerHeight / 2; // 2 means in the middle of screen center appear
    console.log("introposition" + introPosition);

    if (introPosition < screenHeight) {
        introText.classList.add("intro-appear");
    }
}

window.addEventListener("scroll", scrollAppear);
