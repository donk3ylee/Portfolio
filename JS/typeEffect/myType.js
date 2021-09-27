// Typewriter effect for hero text 
var app = document.getElementById('type');

var typewriter = new Typewriter(app, {
 loop: true
});

typewriter.typeString('My Name is Neo.')
.pauseFor(800)
.deleteChars(4)
.pauseFor(300)
.typeString('Lee Whiting.<br>')
.pauseFor(1500)
.typeString('I\'m a Web Developer.')
.pauseFor(4000)
.start();
// Typewriter effect END

