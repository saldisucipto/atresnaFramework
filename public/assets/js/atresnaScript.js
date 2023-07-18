// Slider Function
let currentSlide = 1;

let slideElement = document.getElementById("slider");
let totalSlide = slideElement.childElementCount;

function next() {
    if (currentSlide < totalSlide) {
        currentSlide++;
        showSlide();
    } else {
        currentSlide = 1;
        showSlide();
    }
}

function prev() {
    console.log("kurentSlide =" + currentSlide);
    console.log("totalSlide =" + totalSlide);

    if (currentSlide <= 1) {
        currentSlide = totalSlide;
        showSlide();
    } else {
        currentSlide--;
        showSlide();
    }
}

function showSlide() {
    console.log("show slide function");
    slides = document.getElementById("slider").getElementsByTagName("li");
    for (let index = 0; index < totalSlide; index++) {
        const element = slides[index];
        if (currentSlide === index + 1) {
            element.classList.remove("hidden");
            element.classList.add("show");
        } else {
            element.classList.add("hidden");
        }
    }
}
// End Slider Function
