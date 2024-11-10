var loader = document.getElementById("loader-wrapper");
window.addEventListener('load', () => {
    loader.style.opacity = '0';
    loader.addEventListener('transitionend', () => loader.remove());
});

const activePage = window.location.pathname;
var active = false;
document.querySelectorAll('.header-link').forEach(link => {
    if (activePage.includes(link.dataset.target)) {
        link.classList.add('header-active');
        active = true;
    }
});

if (!active) {
    document.getElementById("homeTag").classList.add('header-active');
    document.getElementById("homeTagSmall").classList.add('header-active');
}

function revealMenu() {

    const menu = document.getElementById("menu");

    if (menu.classList.contains('scale-y-0')) {
        menu.classList.remove('scale-y-0');
        menu.classList.add('scale-y-100');
        menu.classList.remove('opacity-0');
        menu.classList.add('opacity-100');
    } else {
        menu.classList.remove('scale-y-100');
        menu.classList.add('scale-y-0');
        menu.classList.remove('opacity-100');
        menu.classList.add('opacity-0');
    }
}

// Select all slides
const slides = document.querySelectorAll(".carousel-item");
var slideWidth;

// loop through slides and set each slides translateX

slides.forEach((slide, indx) => {
    slide.style.transform = `translateX(${indx * 110}%)`;

    var parent = slide.parentNode;
    var computedStyle = getComputedStyle(slide);
    parent.style.display = 'none';
    slideWidth = computedStyle.getPropertyValue("width");
    parent.style.removeProperty('display');

});

var slideCount = 1;

if (slideWidth == "384px") {
    var carouselWidth = screen.availWidth * 0.8;

    slideWidth = slideWidth.split("p");
    carouselWidth = Math.floor(carouselWidth);

    slideCount = carouselWidth / parseInt(slideWidth[0]);

    slideCount = Math.floor(slideCount);
}

// select next slide button
const nextSlide = document.querySelector(".btn-next");

// current slide counter
let curSlide = 0;
// maximum number of slides
let maxSlide = slides.length - slideCount;

// add event listener and navigation functionality
nextSlide.addEventListener("click", function () {
    // check if current slide is the last and reset current slide
    if (curSlide === maxSlide) {
        curSlide = 0;
    } else {
        curSlide++;
    }

    //   move slide by -110%
    slides.forEach((slide, indx) => {
        slide.style.transform = `translateX(${110 * (indx - curSlide)}%)`;
    });
});

// select next slide button
const prevSlide = document.querySelector(".btn-prev");

// add event listener and navigation functionality
prevSlide.addEventListener("click", function () {
    // check if current slide is the first and reset current slide to last
    if (curSlide === 0) {
        curSlide = maxSlide;
    } else {
        curSlide--;
    }

    //   move slide by 110%
    slides.forEach((slide, indx) => {
        slide.style.transform = `translateX(${110 * (indx - curSlide)}%)`;
    });
});

function sendMessage() {

    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var subject = document.getElementById("subject").value;
    var description = document.getElementById("description").value;

    var form = new FormData();
    form.append("name", name);
    form.append("email", email);
    form.append("subject", subject);
    form.append("description", description);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function () {
        if (r.readyState == 4 && r.status == 200) {
            if (r.responseText == "success") {
                alert("Message Sent Successfully!")
            } else {
                alert(r.responseText);
            }
        }
    };

    r.open("POST", "./backend/sendEmailProcess.php", true);
    r.send(form);

}