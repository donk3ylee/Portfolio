// Sliding menu code start
const sliderTrigger = document.getElementById('slider-trigger');
const sliderCloser = document.getElementById('x');

sliderTrigger.addEventListener("click", function(e){
    // document.getElementById("slider-container").classList.add('slider-active');
    document.getElementById("slider-container").style.display = "flex";
    document.getElementById("x").style.display = "flex";
    document.getElementById('slider-trigger').style.display = "none";
});

window.addEventListener("resize", function(e){
    if(window.innerWidth > 771){
        document.getElementById("slider-container").style.display = "none";
        document.getElementById("slider-trigger").style.display = "none";
    }
    else{
        document.getElementById("slider-trigger").style.display = "flex";
    }
});

sliderCloser.addEventListener("click", function(e){
    document.getElementById("slider-container").style.display = "none";
    document.getElementById('slider-trigger').style.display = "flex";
});