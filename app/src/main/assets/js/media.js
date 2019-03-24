// add event handler realization
var addEvent = (function () {
  if (document.addEventListener) {
    return function (el, type, fn) {
      if (el && el.nodeName || el === window) {
        el.addEventListener(type, fn, false);
      } else if (el && el.length) {
        for (var i = 0; i < el.length; i++) {
          addEvent(el[i], type, fn);
        }
      }
    };
  } else {
    return function (el, type, fn) {
      if (el && el.nodeName || el === window) {
        el.attachEvent('on' + type, function () { return fn.call(el, window.event); });
      } else if (el && el.length) {
        for (var i = 0; i < el.length; i++) {
          addEvent(el[i], type, fn);
        }
      }
    };
  }
})();

// variables
var aLoops = []; // sound loops

// initialization
addEvent(window, 'load', function (event) {

    // load music files
    aLoops[0] = new Audio('Audio/background2.mp3');
    aLoops[0].volume = 0.15;
	aLoops[2] = new Audio('Audio/satunggal.mp3');
    aLoops[2].volume = 1.0;
	aLoops[3] = new Audio('Audio/kalih.MP3');
    aLoops[3].volume = 1.0;
	aLoops[4] = new Audio('Audio/tiga.MP3');
    aLoops[4].volume = 1.0;
	aLoops[5] = new Audio('Audio/sekawan.MP3');
    aLoops[5].volume = 1.0;
	aLoops[6] = new Audio('Audio/gangsal.MP3');
    aLoops[6].volume = 1.0;

	
    aLoops[0].addEventListener('ended', function() { // loop background sound
        this.currentTime = 0;
        this.play();
    }, false);
    aLoops[0].play();
});

// all the buttons
var aBtns = document.querySelectorAll('.btn-satunggal');

// onmouseover event handler

// onclick event handler
addEvent(aBtns, 'click', function (event) {
    aLoops[2].currentTime = 0;
    aLoops[2].play(); // play click sound
});

var aBtns = document.querySelectorAll('.btn-kalih');

// onmouseover event handler

// onclick event handler
addEvent(aBtns, 'click', function (event) {
    aLoops[3].currentTime = 0;
    aLoops[3].play(); // play click sound
});

var aBtns = document.querySelectorAll('.btn-tiga');

// onmouseover event handler

// onclick event handler
addEvent(aBtns, 'click', function (event) {
    aLoops[4].currentTime = 0;
    aLoops[4].play(); // play click sound
});

var aBtns = document.querySelectorAll('.btn-sekawan');

// onmouseover event handler

// onclick event handler
addEvent(aBtns, 'click', function (event) {
    aLoops[5].currentTime = 0;
    aLoops[5].play(); // play click sound
});

var aBtns = document.querySelectorAll('.btn-gangsal');

// onmouseover event handler

// onclick event handler
addEvent(aBtns, 'click', function (event) {
    aLoops[6].currentTime = 0;
    aLoops[6].play(); // play click sound
});

