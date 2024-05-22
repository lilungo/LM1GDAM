$(document).ready(function() {
    // Store initial image size
    function setImageSize() {
      var imageSize = Math.floor($('.zooma-main img:first-child').height());    
      if(imageSize <= 0) {
        requestAnimationFrame(setImageSize);
      }
      else {
        $('.zooma-main').css({width: imageSize, height: imageSize });
        $('.zooma-main img').addClass('is-loaded');
      }
    }
    
    requestAnimationFrame(setImageSize);
    
    
    
    // Populate thumbnails
    $('.zooma-main').children().clone().appendTo('.zooma-thumbnail');
      
    // Set state for first image
    $('.product img:first-child').addClass('is-active');
    
    // Thumbnail hover event listener
    $('.zooma-thumbnail img').on('mouseenter', function() {
      $('.product img').removeClass('is-active is-zoomed-in').prop('style', '').off('mousemove');
      $('.product img:nth-child(' + ($(this).index()+1) + ')').addClass('is-active');   
    });
    
    // Main image click to zoom event listener
    $('.zooma-main img').on('click', function(e) {
      // Toggle zoom-out cursor and unset max-width
      $(this).toggleClass('is-zoomed-in');
      
      // Zoom in
      if ($(this).hasClass('is-zoomed-in')) {
        // Variables for calculating relative position
        var scale = e.target.naturalWidth / $(e.target).parent().width();
        var max = -(1 - 1/scale);
        
        // Adjust mouse scale to the full-size image, then redraw
        e.offsetX *= scale;
        e.offsetY *= scale;
        calculateZoom(e);
        
        // Mouse event listener
        $(this).on('mousemove', calculateZoom);
        
        function calculateZoom(e) {       
          var x = e.offsetX * max + 'px';
          var y = e.offsetY * max + 'px';
          $(e.target).css({left: x, top: y});
        }
      }
      // Zoom out
      else {
        $(this).off('mousemove').prop('style', '');
      }
    });
  });