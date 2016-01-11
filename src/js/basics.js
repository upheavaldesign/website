$(window).bind("load", function () {

  //Mobile Menu ----------------------------------------------------------------
  function toggleMenu() {
    if (!$('nav.main').hasClass('open')) {
      $('nav.main').toggleClass('open');
      $('#drop').toggleClass('open');
      $('nav.main li').each(function (i) {
        var t = $(this);
        setTimeout(function () {
          t.addClass('show');
        }, (i + 1) * 60);
      });
    } else {
      var items = $('nav.main ul li'),
        count = items.length;
      items.each(function (i) {
        var t = $(this);
        setTimeout(function () {
          t.removeClass('show');
          if (!--count) {
            console.log(count)
            $('nav.main').toggleClass('open');
            $('#drop').toggleClass('open');
          }
        }, (i + 1) * 30);
      });

    }
  }
  $(document).on("click", "#drop a", function (e) {
    e.preventDefault();
    e.stopPropagation();
    toggleMenu();
    return false;
  });

  //Photo Modal ----------------------------------------------------------------
  function scaleModal() {
    var gap = 20;
    var windowWidth = $(window).width();
    var windowHeight = $(window).height();
    if (windowWidth > 414) {
      gap = 60;
    } else if (windowWidth > 768) {
      gap = 100;
    }
    var maxWidth = parseInt(windowWidth - gap, 10);
    var maxHeight = parseInt(windowHeight - gap, 10);

    var img = $('.modal .photo img');

    // Create new offscreen image to test
    var native = new Image();
    native.src = img.attr("src");

    // Get accurate measurements from that
    var imgWidth = native.width;
    var imgHeight = native.height;

    if ((imgWidth > maxWidth) || (imgHeight > maxHeight)) {
      if ((imgWidth / maxWidth) > (imgHeight / maxHeight)) {
        imgWidth = maxWidth;
        imgHeight = 'auto';
      } else {
        imgHeight = maxHeight;
        imgWidth = 'auto';
      }
    }

    $('.modal .photo img').css('height', imgHeight);
    $('.modal .photo img').css('width', imgWidth);
  }

  function deepLink(photo_slug) {
    /*find photo element by matching slug attr*/
    var obj = $('a[data-slug="' + photo_slug + '"]');
    /*get photo details from element*/
    var p = [];
    p.slug = photo_slug; // avoid doubling the url 
    p.count = obj.attr('data-count');
    openModal(p, true);

    var imgTag = $(".modal .photo img");
    imgTag.one("load", function () {
      //load thumb grid after modal is loaded
      loadGrid();
      imgTag.off(); // remove event handlers
    });
    imgTag.one('error', function () {
      //load thumb grid after modal failed
      loadGrid();
      imgTag.off(); // remove event handlers
    });
  }

  function loadGrid() {
    $('.grid article.thumb a').each(function (i) {
      var obj = $(this);
      /*get photo details from element*/
      var p = [];
      p.slug = obj.attr('data-slug');
      iPath = '/assets/photo/' + p.slug + '_thumb.jpg';
      $('.frame', obj).append('<img class="lazyload" data-src="' + iPath + '" src="/assets/ui/pixel.png" alt="' + p.slug + '">');
    });
    $(".thumb a .frame img").one('error', function () {
      console.log("error loading thumb grid");
      $(this).parent().addClass('notloaded');
    });
  }

  function openModal(p, slide) {
    if (slide == true) {
      window.history.pushState('Photo', 'Photo', '/photo/');
    }

    $('.modal').removeClass('loaded');
    $(".modal .photo figcaption h5").html('Fetching');
    $('.modal .photo img').attr('src', '');
    //$('.modal .photo img').attr('src', '/assets/photo/' + p.slug + '.jpg');
    $('.modal .photo img').attr('alt', p.slug);
    var src = '/assets/photo/' + p.slug + '.jpg';

    imgNum = p.count; //update current image number
    setArrows(p.count);

    if (routing) {
      window.history.pushState('Photo', 'Photo', p.slug);
      //ga('send', 'pageview', {'page': action});	
    }

    //add event listeners
    $(".modal .photo img").one("load", function (e) {
      $(".modal").removeClass('notloaded');
      scaleModal();
      $(".modal").addClass('loaded');
      $(this).off();
    }).attr('src', src);

    $(".modal .photo img").one('error', function () {
      console.log("openModal: error loading modal image");
      $(".modal").addClass('notloaded');
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
      var obj = $('.grid article#' + num + ' a');
      /*get photo details from element*/
      var p = [];
      p.slug = obj.attr('data-slug');
      p.count = obj.attr('data-count');
      openModal(p, true);
    }
  }

  function closeModal() {
    if ($('.modal').hasClass('view')) {
      $('.modal').removeClass('view');
      $('.modal').removeClass('loaded');
      window.history.pushState('Photo', 'Photo', '/photo/');
    }
  }

  //if Photo page
  if ($("#photo").length != 0) {
    var imgCount = $('.grid article.thumb').length;
    var imgNum = 1;

    /*Deep Linking ---------------------------------------------------------------*/
    //check .grid element for route error report
    if ($('.grid').attr('data-error')) {
      console.log('route 404')
    } else {
      /*check if pushState is supported*/
      if (typeof history.pushState !== 'undefined') {
        //var url = document.location.href; // get the url
        var url = document.location.href.split(/photo/); // get the url slug
        var slug = url[1].replace(/\//g, '') // remove slashes
        var routing = true;
        if (slug != '') {
          deepLink(slug);
        }
      }
    }


    //Click Events ----------------------------------------------------------------
    $(document).on("click", ".thumb a", function (e) {
      e.preventDefault();
      e.stopPropagation();
      var p = [];
      p.slug = $(this).attr('data-slug');
      p.count = $(this).attr('data-count');

      openModal(p, false);

      $('.thumb a').removeClass('selected');
      $(this).addClass('selected');
    });
    $(document).on("click", ".modal nav a#prev", function (e) {
      e.preventDefault();
      e.stopPropagation();
      advPhoto(--imgNum);
      return false;
    });
    $(document).on("click", ".modal nav a#next", function (e) {
      e.preventDefault();
      e.stopPropagation();
      advPhoto(++imgNum);
      return false;
    });

    $(document).on("click", "a.close, .modal", function (e) {
      e.preventDefault();
      e.stopPropagation();
      closeModal();
      return false;
    });
    $(document).on('keyup', function (e) {
      e.preventDefault();
      if (e.keyCode == 27) {
        closeModal()
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


    $(".thumb a .frame img").bind('error', function () {
      console.log("error loading thumb");
      //$(".modal .photo figcaption h5").html('Unable to Load');
      $(this).parent().addClass('notloaded');
    });

    window.onresize = function (event) {
      scaleModal();
    }



    //Touch Events ----------------------------------------------------------------
    document.addEventListener('touchstart', handleTouchStart, false);
    document.addEventListener('touchmove', handleTouchMove, false);

    var xDown = null;
    var yDown = null;

    function handleTouchStart(evt) {
      xDown = evt.touches[0].clientX;
      yDown = evt.touches[0].clientY;
    };

    function handleTouchMove(evt) {
      if (!xDown || !yDown) {
        return;
      }

      var xUp = evt.touches[0].clientX;
      var yUp = evt.touches[0].clientY;

      var xDiff = xDown - xUp;
      var yDiff = yDown - yUp;

      if (Math.abs(xDiff) > Math.abs(yDiff)) { /*most significant*/
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
    };
  } // end of if Photo page


}); //end of doc ready
