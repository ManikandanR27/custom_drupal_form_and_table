(function ($, Drupal, drupalSettings) {

  //Animate On Scroll Library object initialise
  AOS.init();

  // OP-5586 - Carousel for homepage Reward section
  $('#featured_rewards').owlCarousel({
    center: true,
    items: 3,
    loop: true,
    margin: 30,
    responsive: {
      0: {
        items: 1,
        nav: false
      },
      1000: {
        items: 3,
      },
      700: {
        items: 2
      },
      600: {
        items: 1
      },
      480: {
        items: 1,
        nav: false
      },
    }
  });

  // OP-5587 - Carousel for homepage testimonials
  $('.homepage-owl-carousel').owlCarousel({
    items: 6,
    center: false,
    loop: true,
    margin: 20,
    responsive: {
      0: {
        items: 1,
        nav: false
      },
      1000: {
        items: 3
      },
      700: {
        items: 2
      },
      600: {
        items: 1
      },
      480: {
        items: 1,
        nav: false
      }
    }
  });

  $(".homepage_testimonials_view_items").each(function () {
    $(this).find('.views-field').wrapAll('<div class="card-content"> </div>');
  });
  $('<div class="review-bg1">background1</div>').insertBefore(".views-field-field-title");
  $('<div class="review-bg2">background2</div>').insertAfter(".views-field-field-country");
  /* End - OP-5587 - Home page testimonials */

  // Top Menu scroll

    $(window).scroll(function(){
      $('.navbar-default').toggleClass('scrolled', $(this).scrollTop() > 200);

			if ($(this).scrollTop() > 200) {
				$('.topmenu-join-now').css("display","block");
			} else
			{
				$('.topmenu-join-now').hide();
			}

    });

    // OP-5605 - Homepage Hero clicking on arrow down to scroll down
    $(document).on('click', '.fab-wrapper', function (event) {
      event.preventDefault();

      $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top - 100
      }, 500);
    });

})(jQuery, Drupal, drupalSettings);
