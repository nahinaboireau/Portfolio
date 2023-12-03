document.addEventListener("DOMContentLoaded", function() {
    const slider = document.querySelector(".slider");
    const slides = document.querySelectorAll(".slide");
    let counter = 0;
  
    function nextSlide() {
      slides.forEach((slide, index) => {
        if (index === counter) {
          slide.style.opacity = 1;
        } else {
          slide.style.opacity = 0;
        }
      });
  
      counter++;
      if (counter === 3) {
        counter = 0;
      }
    }
  
    setInterval(nextSlide, 3000); // Auto transition every 3 seconds
  });
  