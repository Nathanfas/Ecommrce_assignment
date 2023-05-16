// Get the banner slider and slides
var slider = document.querySelector('.banner-slider');
var slides = slider.querySelectorAll('.slide');

// Get the dot navigation elements
var dots = [];
for (var i = 0; i < slides.length; i++) {
  var dot = document.createElement('span');
  dot.classList.add('dot');
  slider.appendChild(dot);
  dots.push(dot);
}

// Set the index of the active slide and dot
var index = 0;
dots[index].classList.add('active-dot');

// Set an interval to switch between slides
var interval = setInterval(function() {
  if (!slider.classList.contains('paused')) {
    slides[index].classList.remove('active-slide');
    dots[index].classList.remove('active-dot');
    index++;
    if (index >= slides.length) {
      index = 0;
    }
    slides[index].classList.add('active-slide');
    dots[index].classList.add('active-dot');
  }
}, 3000);

// Pause the slideshow on mouseover
slider.addEventListener('mouseover', function() {
  slider.classList.add('paused');
});

// Resume the slideshow on mouseout
slider.addEventListener('mouseout', function() {
  slider.classList.remove('paused');
});

// added to cart display
const button = document.getElementById("myButton");
const message = document.getElementById("message");
const closeBtn = document.getElementById("close-button");

// Hide the message by default
message.classList.add("hidden");

button.addEventListener("click", function() {
  // Hide the message before displaying it
  message.classList.add("hidden");

  // Wait for the message to be hidden before showing it
  setTimeout(function() {
    message.classList.remove("hidden");
    message.classList.add("show");
  }, 500);
});

closeBtn.addEventListener("click", function() {
  message.classList.remove("show");
  message.classList.add("hidden");
});