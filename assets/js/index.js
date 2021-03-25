// Lightbox
Array.from(document.querySelectorAll("[data-lightbox]")).forEach(element => {
  element.onclick = (e) => {
    e.preventDefault();
    basicLightbox.create(`<img src="${element.href}">`).show();
  };
});

//https://medium.com/@andybarefoot/a-masonry-style-layout-using-css-grid-8c663d355ebb
// resize individual grid items
function resizeGridItem(item){
   grid = document.getElementsByClassName("home-grid")[0];
   rowHeight = parseInt(window.getComputedStyle(grid).getPropertyValue('grid-auto-rows'));
   rowGap = parseInt(window.getComputedStyle(grid).getPropertyValue('grid-row-gap'));
   rowSpan = Math.ceil((item.querySelector('.content').getBoundingClientRect().height+rowGap)/(rowHeight+rowGap));
   item.style.gridRowEnd = "span "+rowSpan;
}
// resize all grid items
function resizeAllGridItems(){
   allItems = document.getElementsByClassName("item");
   for(x=0;x<allItems.length;x++){
      resizeGridItem(allItems[x]);
   }
}

// passes the individual grid item on to our already existing resizeGridItem function.
allItems = document.getElementsByClassName("item");
for(x=0;x<allItems.length;x++){
   imagesLoaded( allItems[x], resizeInstance);
}
// when all the images have finished loading within a grid item it is resized to ensure that the content is still fully displayed.
function resizeInstance(instance){
   item = instance.elements[0];
   resizeGridItem(item);
}
