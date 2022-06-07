import './styles/app.scss';
// start the Stimulus application
import './bootstrap';

// Bootstrap JS
const $ = require('jquery');
require('bootstrap');

import Typewriter from 'typewriter-effect/dist/core';

// ------------- Js type writter
var app = document.getElementById('jstext');

var typewriter = new Typewriter(app, {
    loop: false
});

typewriter.typeString('<strong>rigoureux et motivé </strong>')
    .pauseFor(2000)
    .deleteAll().changeDeleteSpeed(1)
    // .typeString('<strong>motivé !</strong>')
    // .pauseFor(2000)
    .deleteAll().changeDeleteSpeed(1000)
    .typeString('<strong>qui a une belle et grosse moustache </strong>')
    .deleteAll()
    .typeString('<strong>curieux d\'apprendre :)</strong>')
    .pauseFor(2500)
    .start();
