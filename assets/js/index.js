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
  //stagger: '0.03s'
})

$grid.imagesLoaded().progress( function() {
  $grid.masonry('layout');
});
