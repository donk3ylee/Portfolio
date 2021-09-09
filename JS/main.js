// Typewriter effect for hero text 
var app = document.getElementById('type');

var typewriter = new Typewriter(app, {
 loop: true
});

typewriter.typeString('My Name is Nero.')
.pauseFor(800)
.deleteChars(5)
.pauseFor(300)
.typeString('Lee Whiting.<br>')
.pauseFor(1500)
.typeString('I\'m a Web Developer.')
.pauseFor(4000)
.start();
// Typewriter effect END



// form validation code below
const contactForm = document.querySelector("#contact-form");

contactForm.addEventListener('submit',function(e){
    let validationErrorsArray = [];

    // declare all the variables containing form elements into an array
    let formArray = [
        document.querySelector("#contact-form [name=firstName]"),
        document.querySelector("#contact-form [name=lastName]"),
        document.querySelector("#contact-form [name=emailAddress]"),
        document.querySelector("#contact-form [name=subject]"),
        document.querySelector("#contact-form [name=message]")
    ];

    function getField(i){
        switch(i){
            case 0:
                return "first name"       
                break;
            case 1:
                return "last name"
                break;
            case 2:
                return "email address"
                break;
            case 3:
                return "subject"
                break;
            case 4:
                return "message"
                break;
        }
    }

    // All form fields are mandatory so check each one isn't empty.
    for(let i=0;i<formArray.length;i++){
        if(formArray[i].value===""){
                 validationErrorsArray.push(`<li>The ${getField(i)} field is blank. This is a required Field.</li>\n`);
        }
    }
    // Check the email format is correct using a regex.
    const regex = new RegExp(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/);
    if(formArray[2].value!==""){
        if(!regex.test(formArray[2].value)){
            validationErrorsArray.push(`<li>The email address you supplied is not a valid email address. please fix this.</li>\n`);
        }
    }
    // If there are errors build and the validation error messages to be shown to the user
    if(validationErrorsArray.length > 0){
        let validationMessage = `
        <h2>There are ${validationErrorsArray.length} problems with your form</h2>\n
        <ul>
            ${validationErrorsArray.join('\n')}
        </ul>
        `;
        // Inject the html message into the DOM
        document.getElementById("formErrorMessages").innerHTML = validationMessage;
        document.getElementById('formErrorMessages').style.display = "block";
        e.preventDefault();
    }
    // Use the server side script to generate a "Thank you for sending your message" etc..... message.
});