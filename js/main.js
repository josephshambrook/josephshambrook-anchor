/* jshint browser:true */

/** Parallax effect **/

(function () {
	var rq = window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || window.msRequestAnimationFrame || function (callback) { return setTimeout(callback, 1000/60); };
	var intro = document.querySelector('.intro.three-d');
	var introTxt = intro.querySelector('.intro_text');
	var globalID;

	function onScroll () {
		// var scrollTop = document.body.scrollTop;
		var scrollTop = document.documentElement.scrollTop || document.body.scrollTop;

		/* Parallax effect */
	  var newTrans = scrollTop / 2;
	  var transStyle = 'translate3d(0, -' + newTrans + 'px,0)';

	  intro.style['-webkit-transform'] = transStyle;
	  intro.style['-ms-transform'] = transStyle;
	  intro.style.transform = transStyle;

	  /* Gradually fade out */
	  var scrollOpacity = scrollTop / 180;
	  // no prefix required
	  introTxt.style.opacity = 1 - scrollOpacity;
	}

	document.addEventListener('scroll', function () {
	  globalID = rq(onScroll);
	});
}());


/** data-toggle **/
(function() {
	var dataToggles = document.querySelectorAll('[data-toggle]');

	var toggle = function (e) {
		e.preventDefault();

		var target = this.getAttribute('data-toggle');
		var targetElm = document.querySelector(target);

		if (!!targetElm) {
			if (targetElm.classList.contains('hide')) {
				targetElm.classList.remove('hide');
			} else {
				targetElm.classList.add('hide');
			}
		}

		this.classList.add('hide');
	};

	// choosing only to support classList
	// if not supported, then remove the links and hidden content
	for (var i = 0, len = dataToggles.length; i < len; i += 1) {
		var dt = dataToggles[i];

		if (!!dt.classList) {
			dt.addEventListener('click', toggle);
		} else {
			dt.parentNode.removeChild(dt);

			var target = dt.getAttribute('data-toggle');
			var targetElm = document.querySelector(target);

			targetElm.parentNode.removeChild(targetElm);
		}
	}
}());