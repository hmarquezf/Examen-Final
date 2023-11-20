document.addEventListener("DOMContentLoaded", function() {
    var slides = document.querySelectorAll(".slide");
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

    // Mostrar el primer slide al cargar la página
    showSlide(0);

    // Cambiar al siguiente slide cada 3 segundos (ajusta según tus necesidades)
    setInterval(nextSlide, 3000);
});
