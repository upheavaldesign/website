//if Web Project page
if ($("#web").length != 0) {

  $(window).bind("load", function () {

    var client = $('.screens').attr('data-client'),
      imgCount = $('.screens').attr('data-imgs'),
      imgNum = 1,
      dir = '/assets/web/screens/' + client + '-',
      screen = $(".screens .frame figure");

    //Screens Slider ----------------------------------------------------------------
    //console.log(imgCount);

    function loadSlider() {
      $(".screens .frame").empty();  //return;
      for (var i = 1; i <= imgCount; ++i) {
        console.log(i);
        var obj = screen.clone().appendTo(".screens .frame");
        $("img",  obj).attr('src', dir + i + '.png');
      }
     
      $(".screens figure img").bind('load', function () {
        console.log("loaded screen img");
        $(this).parent().addClass('loaded');
      });

      $(".screens figure img").bind('error', function () {
        console.log("error loading screen img");
        $("figcaption h5", this).html('Unable to Load');
        $(this).parent().addClass('notloaded');
      });
    }
    loadSlider();

    function openModal(p, slide) {
      if (slide == true) {
        window.history.pushState('Photo', 'Photo', '/photo/');
      }

      $('.modal').removeClass('loaded');
      $(".modal .photo figcaption h5").html('Fetching');
      //$('.modal .photo img').attr('src', '');
      //$('.modal .photo img').attr('src', '/assets/photo/' + p.slug + '.jpg');
      $('.modal .photo img').attr('alt', p.slug);
      var src = '/assets/photo/' + p.slug + '.jpg';
      //var srcIE = 'http://up.local/assets/photo/' + p.slug + '.jpg'+"?" + new Date().getTime();

      imgNum = p.count; //update current image number
      setArrows(p.count);

      if (routing) {
        window.history.pushState('Photo', 'Photo', p.slug);
        //ga('send', 'pageview', {'page': action});	
      }

      //add event listeners     
      $(".modal .photo img").one("load", function (e) {
        //console.log("openModal: image loaded");     
        scaleModal();
        $(".modal").addClass('loaded');
        $(this).off();
      }).attr('src', src);

      $(".modal .photo img").one('error', function () {
        //console.log("openModal: error loading modal image");
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
        var obj = $('.grid article#' + num + ' a');
        /*get photo details from element*/
        var p = [];
        p.slug = obj.attr('data-slug');
        p.count = obj.attr('data-count');
        openModal(p, true);
      }
    }



    //Click Events ----------------------------------------------------------------
    $(document).on("click", "a#prev", function (e) {
      e.preventDefault();
      e.stopPropagation();
      advPhoto(--imgNum);
      return false;
    });
    $(document).on("click", "a#next", function (e) {
      e.preventDefault();
      e.stopPropagation();
      advPhoto(++imgNum);
      return false;
    });

    $(document).on('keyup', function (e) {
      e.preventDefault();
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

    //    window.onresize = function (event) {
    //      scaleModal();
    //    }



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

  }); //end of doc ready

} // end of if Photo page
