let lightboxes = document.getElementsByClassName("lightbox");

for (let el of lightboxes) {
  lightGallery(el, {
    plugins: [lgZoom, lgThumbnail],
    speed: 500,
    // ... other settings
  });
}
