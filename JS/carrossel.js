const wrapper = document.getElementById("slides-wrapper");
const dots = document.querySelectorAll(".dot");
const nextBtn = document.getElementById("btn-next");
const prevBtn = document.getElementById("btn-prev");
const totalSlides = dots.length;
let index = 0;

function updateCarousel() {
  wrapper.style.transform = `translateX(-${index * 100}%)`;
  dots.forEach(dot => dot.classList.remove("bg-blue-500"));
  dots[index].classList.add("bg-blue-500");
}

prevBtn.addEventListener("click", () => {
  index = (index - 1 + totalSlides) % totalSlides;
  updateCarousel();
});

nextBtn.addEventListener("click", () => {
  index = (index + 1) % totalSlides;
  updateCarousel();
});

dots.forEach(dot => {
  dot.addEventListener("click", (e) => {
    index = parseInt(e.target.dataset.slide);
    updateCarousel();
  });
});

// Auto-play (opcional)
setInterval(() => {
  index = (index + 1) % totalSlides;
  updateCarousel();
}, 8000);

// Inicializa
updateCarousel();
