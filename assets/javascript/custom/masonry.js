var $grid = $('.masonry').masonry({
  itemSelector: '.masonry_item',
  percentPosition: true,
  columnWidth: '.masonry_sizer'
});
// layout Isotope after each image loads
$grid.imagesLoaded().progress( function() {
  $grid.masonry();
});  
