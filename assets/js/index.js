// Lightbox
Array.from(document.querySelectorAll("[data-lightbox]")).forEach(element => {
  element.onclick = (e) => {
    e.preventDefault();
    basicLightbox.create(`<img src="${element.href}">`).show();
  };
});

var grid = new Masonry( '.home-grid', {
  // set itemSelector so .grid-sizer is not used in layout
  itemSelector: '.grid-item',
  // use element for option
  columnWidth: '.grid-sizer',
  gutter: '.gutter-sizer',
  percentPosition: true,
  transitionDuration: '0.2s',
  horizontalOrder: true
})

// Look for .hamburger
var hamburger = document.querySelector(".hamburger");
var nav = document.querySelector(".menu-nav");
// On click
hamburger.addEventListener("click", function() {
  // Toggle class "is-active"
  hamburger.classList.toggle("is-active");
  if (nav.style.display === "block") {
    nav.style.display = "none";
  } else {
    nav.style.display = "block";
  }
});
