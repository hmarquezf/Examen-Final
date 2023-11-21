document.addEventListener("DOMContentLoaded", function() {
    var slides = document.querySelectorAll(".slider");
    var currentSlide = 0;

    function showSlide(index) {
        slides[currentSlide].classList.remove("active");
        slides[index].classList.add("active");
        currentSlide = index;
    }

    function nextSlide() {
        var nextIndex = (currentSlide + 1) % slides.length;
        showSlide(nextIndex);
    }

    showSlide(0);

    setInterval(nextSlide, 3000);
});
