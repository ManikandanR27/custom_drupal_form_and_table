(function ($, Drupal, drupalSettings) {

  //Animate On Scroll Library object initialise
  AOS.init();

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

    if ($("#block-howtogetpaidtotakesurveys").length) {
      $('.fab-wrapper').attr('href','#block-howtogetpaidtotakesurveys');
    }
    if ($("#block-thelifepointscommunity").length) {
      $('.fab-wrapper').attr('href','#block-thelifepointscommunity');
    }
    if ($("#block-ourhistory").length) {
      $('.fab-wrapper').attr('href','#block-ourhistory');
    }

    $(".page-node-type-lp-about-us #block-downloadapp-hero").appendTo(".page-node-type-lp-about-us .region-page-herotop .container .col-md-6:nth-of-type(1)");
    // Added JS for flex properties.
    $("#block-dataprivacy, #block-diversity, #block-socialresponsibility, #block-makeadonation").wrapAll("<section class='columns-block'></section>").addClass('outlinebox aos-init');
    $("#block-dataprivacy").attr('data-aos', 'flip-left');
    $("#block-diversity").attr('data-aos', 'flip-up');
    $("#block-socialresponsibility").attr('data-aos', 'flip-right');
    $("#block-makeadonation").attr('data-aos', 'flip-up');

    // OP-7291 Who we are page country list on mobile view
    if ($('.who-we-are-country-list').length) {
      var $list = $('.who-we-are-country-list .list-unstyled');
      $searchList = '';
      $list.children('li').each(function (index) {
        $searchList += '<a>' + $(this).html() + '</a>';
      });
      $('.who-we-are-country-search').after('<div class="search-field-icon toggle-search"></div><div class="who-we-are-country-search-list">' + $searchList + '</div>');

     // Who we are page country serach 
      $('.who-we-are-country-search').on('keyup',function(){
        var input, filter, ul, li, a, i;
        input = document.getElementById("who-we-are-country-search");
        filter = input.value.toUpperCase();
        div = document.getElementById("who-we-are-country-search-dropdown");
        a = div.getElementsByTagName("a");
        for (i = 0; i < a.length; i++) {
          txtValue = a[i].textContent || a[i].innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            a[i].style.display = "";
          } else {
            a[i].style.display = "none";
          }
        }
      });

      $('.countrylist-dropbtn').on('click', function(){
        $('#who-we-are-country-search-dropdown').toggle();
        $('.toggle-countrylist-dropdown').toggleClass('toggle-countrylist-arrowup');
        
      });
      }
    
})(jQuery, Drupal, drupalSettings);
