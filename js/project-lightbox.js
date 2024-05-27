window.addEventListener("load", function () {
  const images = document.querySelectorAll(".lightbox-image");
  const lightbox = document.getElementById("lightbox");
  const lightboxImage = document.querySelector(".lightbox-image-box");
  const closeBtn = document.querySelector(".close");

  images.forEach(function (image) {
    image.addEventListener("click", function () {
      const src = this.querySelector("img").src;
      lightboxImage.src = src;
      lightbox.style.display = "flex";
      document.body.style.overflowY = "hidden"; // Disable scrolling
    });
  });

  function closeLightbox() {
    lightbox.style.display = "none";
    document.body.style.overflowY = "auto"; // Enable scrolling
  }

  closeBtn.addEventListener("click", function () {
    closeLightbox();
  });

  lightbox.addEventListener("click", function (event) {
    if (event.target === lightbox) {
      closeLightbox();
    }
  });

  document.addEventListener("keydown", function (event) {
    if (event.key === "Escape") {
      closeLightbox();
    }
  });
});
