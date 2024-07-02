document.addEventListener("DOMContentLoaded", () => {
  const gallery = document.querySelector(".galeri-protec");
  const images = gallery.querySelectorAll(".galeri");
  let index = 0;

  function showImage(indexToShow) {
    // Ocultar todas las imágenes
    images.forEach((image) => {
      image.style.display = "none";
    });

    // Mostrar la imagen deseada
    images[indexToShow].style.display = "block";
  }

  function nextImage() {
    index++;
    if (index >= images.length) {
      index = 0;
    }
    showImage(index);
  }

  // Mostrar la primera imagen al cargar la página
  showImage(index);

  // Cambiar de imagen cada 5 segundos
  setInterval(nextImage, 5000);
});

