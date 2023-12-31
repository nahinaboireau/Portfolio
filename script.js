document.addEventListener("DOMContentLoaded", function () {
  const slider = document.querySelector(".slider");
  const slides = document.querySelectorAll(".slide");
  let counter = 0;

  function updateSlider() {
    const slideWidth = slides[0].offsetWidth; // Get the width of a single slide
    const transformValue = -counter * slideWidth;
    slider.style.transform = `translateX(${transformValue}px)`;
  }

  function nextSlide() {
    counter++;
    if (counter === slides.length) {
      counter = 0;
    }
    updateSlider();
  }

  setInterval(nextSlide, 3000); // transition 3sec
});




function scrollDown() {
  // Utiliser la fonction scrollTo pour faire défiler vers le bas
  window.scrollTo({
      top: window.innerHeight,
      behavior: 'smooth'
  });
}



