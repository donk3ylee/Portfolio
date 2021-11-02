// Sliding menu code start
const sliderTrigger = document.getElementById('slider-trigger');
const sliderCloser = document.getElementById('x');
const sliderContainer = document.getElementById('slider-container');


sliderTrigger.addEventListener("click", (e) => {
    // sliderContainer.classList.add('slider-active');
    console.log('trigger;')
    sliderContainer.style.display = "flex";
    sliderCloser.style.display = "flex";
    sliderTrigger.style.display = "none";
});

window.addEventListener("resize", (e) => {
    if(window.innerWidth > 771){
        sliderContainer.style.display = "none";
        sliderTrigger.style.display = "none";
    }
    else{
        sliderTrigger.style.display = "flex";
    }
});

sliderCloser.addEventListener("click", (e) => {
    sliderContainer.style.display = "none";
    sliderTrigger.style.display = "flex";
});