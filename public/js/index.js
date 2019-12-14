const srcs = [
// links to all images goes here
	'./assets/slide-images/0.jpeg',
	'./assets/slide-images/1.jpeg',
	'./assets/slide-images/2.jpg',
	'./assets/slide-images/3.jpg',
]
// This function adds images to the slideshow

function addToslide(srcs){
	const slideCont = document.querySelector('div.slideshow')
	srcs.forEach((src,i) => {
		const image = document.createElement('img');
		image.setAttribute('src',src);
		image.className = `image slide${i}`
		slideCont.appendChild(image);
	})
}

addToslide(srcs);

// ---------------------------slide show functionality using jquery--------------------------------------
(function ($) {
    "use strict";
    var slideshow = (function () {
        var counter = 0,
            i,
            j,
            slides =  $(".slideshow .image"),
            slidesLen = slides.length - 1;
        for (i = 0, j = 9999; i < slides.length; i += 1, j -= 1) {
            $(slides[i]).css("z-index", j);
        }
        return {
            startSlideshow: function () {
                window.setInterval(function () {
                    if (counter === 0) {
                        slides.eq(counter).fadeOut();
                        counter += 1;
                    } else if (counter === slidesLen) {
                        counter = 0;
                        slides.eq(counter).fadeIn(function () {
                            slides.fadeIn();
                        });
                    } else {
                        slides.eq(counter).fadeOut();
                        counter += 1;
                    }
                }, 2000);
            }
        };
    }());
    slideshow.startSlideshow();
}(jQuery));

// ----------------------------------------------------------------------------------------------------------------

// To highlight an active panel item *note: EXPERIMENTAL*
function highlight(e){
	let list = Array.from(ul.children)
	list.forEach((child,i)=>{
		let active = child === e.target ? 'active' : '';
		ul.children[i].className = active;
	})
}

const ul = document.querySelector('ul.panel-content');
ul.addEventListener('click', highlight)


// To set the body content of the selected panel list item using ajax ......fetch or axios