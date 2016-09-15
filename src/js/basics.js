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
          console.log(count);
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
