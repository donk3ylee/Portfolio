// START - Sliding menu
const sliderTrigger = document.getElementById('slider-trigger');
const sliderCloser = document.getElementById('x');
const sliderContainer = document.getElementById('slider-container');


sliderTrigger.addEventListener("click", (e) => {
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
// END - Sliding menu


// START - Accordion for coding_examples page.
const accordionItem = document.querySelectorAll('.accordion');
const accordionTitle = document.querySelectorAll('.accordion .accordion-title');
const accordionBody = document.querySelectorAll('.accordion .accordion-body');
const accordionFooter = document.querySelectorAll('.accordion .accordion-footer');
const accordionInstructions = document.querySelectorAll('.accordion .accordion-instructions');


for (i = 0; i < accordionItem.length; i++) {
    const title = accordionTitle[i]
    const body = accordionBody[i]
    const footer = accordionFooter[i]
    const instruct = accordionInstructions[i]
    title.addEventListener('click',() => {
        body.classList.toggle('active')
        footer.classList.toggle('active')
        instruct.classList.toggle('contract-instructions')
    })
    footer.addEventListener('click',() => {
        body.classList.toggle('active')
        footer.classList.toggle('active')
        instruct.classList.toggle('contract-instructions')
    })
}
//  END - Accordion