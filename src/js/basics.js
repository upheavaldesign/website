(function ($) {

  //Photo Modal ----------------------------------------------------------------
  // function scaleModal() {
  //   var gap = 20;
  //   var windowWidth = $(window).width(),
  //     windowHeight = $(window).height();
  //     console.log(windowWidth, windowHeight)
  //   if (windowWidth > 414) {
  //     gap = 60;
  //   } else if (windowWidth > 768) {
  //     gap = 100;
  //   }
  //   var maxWidth = parseInt(windowWidth - gap, 10),
  //     maxHeight = parseInt(windowHeight - gap, 10);

  //   var img = $('.modal .photo img');

  //   // Create new offscreen image to test
  //   var native = new Image();
  //   native.src = img.attr("src");

  //   // Get accurate measurements from that
  //   var imgWidth = native.width;
  //   var imgHeight = native.height;
  //   console.log(imgWidth, imgHeight)

  //   if ((imgWidth > maxWidth) || (imgHeight > maxHeight)) {
  //     if ((imgWidth / maxWidth) > (imgHeight / maxHeight)) {
  //       imgWidth = maxWidth;
  //       imgHeight = 'auto';
  //     } else {
  //       imgHeight = maxHeight;
  //       imgWidth = 'auto';
  //     }
  //   }

  //   $('.modal .photo img').css('height', imgHeight);
  //   $('.modal .photo img').css('width', imgWidth);
  // }

  // function deepLink(photo_slug) {
  //   /*find photo element by matching slug attr*/
  //   var obj = $('.btn-thumb[data-slug="' + photo_slug + '"]');
  //   /*get photo details from element*/
  //   var p = [];
  //   p.slug = photo_slug; // avoid doubling the url 
  //   p.count = obj.attr('data-count');
  //   openModal(p, true);

  //   var imgTag = $(".modal .photo img");
  //   imgTag.one("load", function () {
  //     //load thumb grid after modal is loaded
  //     loadGrid();
  //     imgTag.off(); // remove event handlers
  //   });
  //   imgTag.one('error', function () {
  //     //load thumb grid after modal failed
  //     loadGrid();
  //     imgTag.off(); // remove event handlers
  //   });
  // }

  // function loadGrid() {
  //   $('.btn-thumb').each(function (i) {
  //     var obj = $(this);
  //     /*get photo details from element*/
  //     var p = [];
  //     p.slug = obj.attr('data-slug');
  //     iPath = '/assets/' + pageSlug + '/' + p.slug + '-thumb.jpg';
  //     $('.frame', obj).append('<img class="lazyload" data-src="' + iPath + '" src="/assets/ui/pixel.png" alt="' + p.slug + '">');
  //   });
  //   $(".btn-thumb .frame img").one('error', function () {
  //     console.log("error loading thumb grid");
  //     $(this).parent().addClass('notloaded');
  //   });
  // }

  function openModal(obj) {
    obj.path = obj.attr('data-path');
    obj.slug = obj.attr('data-slug');
    obj.count = obj.attr('data-count');
    imgNum = obj.count; //update current image number
    var src = obj.path + obj.slug + '.jpg';

    $('.modal').removeClass('loaded');
    $(".modal .photo figcaption h5").html('Fetching');
    $('.modal .photo img').attr('alt', obj.slug);

    //var srcIE = 'http://up.local/assets/photo/' + p.slug + '.jpg'+"?" + new Date().getTime();

    setArrows(obj.count);

    // if (routing) {
    //   window.history.pushState(pageSlug, pageSlug, p.slug);
    //   //ga('send', 'pageview', {'page': action});	
    // }

    //add event listeners     
    $(".modal .photo img").one("load", function (e) {
      //scaleModal();
      $(".modal").addClass('loaded');
      $(this).off();
    }).attr('src', src);

    $(".modal .photo img").one('error', function () {
      $(".modal .panel .photo figcaption h5").html('Unable to Load');
      $(this).off();
    });

    $('.modal').addClass('view');
  }

  function setArrows(num) {
    var nav = $('.modal nav');
    $('#prev', nav).removeClass();
    $('#next', nav).removeClass();
    $(nav).attr('data-count', num);
    if (num == 1) {
      $('#prev', nav).addClass('hide');
    } else if (num == imgCount) {
      $('#next', nav).addClass('hide');
    }
  }

  function advPhoto(num) {
    if ($('.modal').hasClass('view')) {
      if (num < 1 || num > imgCount) {
        closeModal();
        return;
      }
      /*find photo element by matching id*/
      var obj = $('.thumb#' + num + ' .btn-thumb');
      openModal(obj);
    }
  }

  function closeModal() {
    if ($('.modal').hasClass('view')) {
      $('.modal').removeClass('view');
      $('.modal').removeClass('loaded');
      //window.history.pushState(pageSlug, pageSlug, '/' + pageSlug + '/');
    }
  }

  //if Photo page
  if ($(".modal").length != 0) {
    var imgCount = $('.btn-thumb').length;
    var imgNum = 1;
    //routing = false;
    //window.pageSlug = $('body').attr('class');
    //console.log(pageSlug); 

    /*Deep Linking ---------------------------------------------------------------*/
    //check .grid element for route error report
    // if ($('.grid').attr('data-error')) {
    //   console.log('route 404');
    // } else {
    //   /*check if pushState is supported*/
    //   if (typeof history.pushState !== 'undefined') {
    //     //var url = document.location.href; // get the url
    //     var url = document.location.href.split('/' + pageSlug + '/'); // get the url slug
    //     var slug = url[1].replace(/\//g, ''); // remove slashes
    //     routing = true;
    //     if (slug != '') {
    //       deepLink(slug);
    //     }
    //   }
    // }


    //Click Events ----------------------------------------------------------------
    $(document).on("click", ".btn-thumb", function (e) {
      e.preventDefault();
      e.stopPropagation();
      var obj = $(this);
      openModal(obj);
      $('.btn-thumb').removeClass('selected');
      $(this).addClass('selected');
    });

    $(document).on("click", ".modal button#prev", function (e) {
      e.preventDefault();
      e.stopPropagation();
      advPhoto(--imgNum);
      return false;
    });

    $(document).on("click", ".modal button#next", function (e) {
      e.preventDefault();
      e.stopPropagation();
      advPhoto(++imgNum);
      return false;
    });

    $(document).on("click", "button.close, .modal", function (e) {
      e.preventDefault();
      e.stopPropagation();
      closeModal();
      return false;
    });

    $(document).on('keyup', function (e) {
      e.preventDefault();
      if (e.keyCode == 27) {
        closeModal();
        return false;
      }
      switch (e.which) {
        case 37: // left
          advPhoto(--imgNum);
          break;
        case 39: // right
          advPhoto(++imgNum);
          break;
        default:
          return; // exit this handler for other keys
      }
    });    

    // window.onresize = function (event) {
    //   scaleModal();
    // };

    //Touch Events ----------------------------------------------------------------
    function handleTouchStart(evt) {
      xDown = evt.touches[0].clientX;
      yDown = evt.touches[0].clientY;
    }

    function handleTouchMove(evt) {
      if (!xDown || !yDown) {
        return;
      }

      var xUp = evt.touches[0].clientX;
      var yUp = evt.touches[0].clientY;

      var xDiff = xDown - xUp;
      var yDiff = yDown - yUp;

      if (Math.abs(xDiff) > Math.abs(yDiff)) {
        /*most significant*/
        if (xDiff > 0) {
          /* left swipe */
          advPhoto(++imgNum);
        } else {
          /* right swipe */
          advPhoto(--imgNum);
        }
      } else {
        if (yDiff > 0) {
          /* up swipe */
        } else {
          /* down swipe */
          closeModal();
        }
      }
      /* reset values */
      xDown = null;
      yDown = null;
    }
    document.addEventListener('touchstart', handleTouchStart, false);
    document.addEventListener('touchmove', handleTouchMove, false);

    var xDown = null;
    var yDown = null;
  }

  //Mobile Menu ----------------------------------------------------------------
  function toggleMenu() {
    $('#masthead').toggleClass('open');
  }

  $(document).on("click", "#nav-icon", function (e) {
    e.preventDefault();
    e.stopPropagation();
    toggleMenu();
    return false;
  });

  document.createElement("picture"); 
  svg4everybody();

  /* init Masonry */
  var $grid = $('.mason-grid').masonry({
    itemSelector: '.mason-item',
    columnWidth: '.mason-item'
  });

  //$grid.masonry('layout');

  $('.mason-item img').on('load', function (e) {
    //console.log('loaded');
    $grid.masonry('layout');
    $(this).parents('.mason-item').addClass('loaded');
  });

})(jQuery);