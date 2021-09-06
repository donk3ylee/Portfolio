// import Typewriter from 'JS/typeEffect/core.js';


var app = document.getElementById('type');

// var typewriter = new Typewriter(app, {
//   loop: false,
//   cursor: "",
//   delay: 50
// });

// typewriter.typeString('<h1>My Name is Adam Pearson</h1>')
//   .pauseFor(750)
//   .typeString('<h2 class="strapline">I\'m a Web Developer')
//   .start();

// (function (arr) {
//   arr.forEach(function (item) {
//     if (item.hasOwnProperty('remove')) {
//       return;
//     }
//     Object.defineProperty(item, 'remove', {
//       configurable: true,
//       enumerable: true,
//       writable: true,
//       value: function remove() {
//         this.parentNode && this.parentNode.removeChild(this);
//       }
//     });
//   });
// })([Element.prototype, CharacterData.prototype, DocumentType.prototype].filter(Boolean));


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