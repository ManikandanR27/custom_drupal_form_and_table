(function ($, Drupal, drupalSettings) {
  "use strict";

  // If user clicks back button on register/confirm page, force browser to refresh the page.
  // To avoid multiple submission of challenge question by going backward.
  var pathname = window.location.pathname;
  if (pathname == drupalSettings.registerConfirmUrl) {
    if (performance.navigation.type == 2) {
      location.reload(true);
    }
  }

  $(document).ready(function () {
    // Body class for registration
    if ($('.registration_page').length) {
      var signup_bg = (drupalSettings.non_organic_reg) ? 'non-organic-signup-bg' : 'organic-signup-bg';
      $('body').addClass("no-padding " + signup_bg);
    }
    // add background image to login page
    if ($('.path-login').length) {
      $('body').addClass("no-padding signin-bg");
      $('header, .footer, .main-footer, .region-page-copyright').hide();
    }
    // add background image to forgotpassword page
    if ($('.path-forget-password').length) {
      $('.main-container').addClass('container-fluid');
      $('body').addClass("no-padding signin-bg");
      $('header, .footer, .main-footer, .region-page-copyright').hide();
    }
    // add background image to path-forget-password-confirm page
    if ($('.path-forget-password-confirm').length) {
      $('.main-container').addClass('container-fluid');
      $('body').addClass("no-padding signin-bg");
      $('header, .footer, .main-footer, .region-page-copyright').hide();
    }
    // add background image to reset password page
    if ($('.resetpasswordpage').length) {
      $('body').addClass("no-padding signin-bg");
      $('header, .footer, .main-footer, .region-page-copyright').hide();
    }
    // Body class for unsubscribe email page
    if ($('.unsubscribeemail_page').length) {
      $('body').addClass("no-padding unsubscribe");
      $('header').hide();
      $('.secondary-footer').hide();
      $('.main-footer').hide();
      $('.region-page-copyright').hide();
      $('.col-sm-12 .content').removeClass('col-sm-12');
      $("section").each(function () {
        if ($(this).hasClass("col-sm-12")) {
          $(this).removeClass("col-sm-12");
        }
      });
    }
    $('.resenddoiemail-box').click(function () {
      $('.resend-doi-email-errors').hide();
      $('.resend-doi-email-success').hide();
      $('.alert-danger .close').trigger('click');
      if ($('.registredEmailId').length) {
        $('.lp-resend-doi-form input[name=email_address]').val($('.registredEmailId').html());
      }
      $('body').addClass("no-padding");
    });

    if ($('.path-registration-onhold').length || $('.path-login-onhold').length || $('.maintenance-page').length) {
      $('body').addClass("path-registration");
      $('body').css('background', 'white');
      $('.region-header').hide();
      $('.highlighted').hide();
      $('header, .footer, .main-footer, .region-page-copyright').hide();
    }

    if ($('.path-challenge-question-retry').length) {
      $('body').addClass("path-register");
    }
    // For Login Form
    // Remove the white space from email text field
    $('.lp-login-form #edit-contact-email').focusout(function (e) {
      var dateLength = $(this).val().length;
      $(this).val(function (_, v) {
        return v.replace(/\s+/g, '');
      });
    });
    // Resend DOI Email
    $('#lp-resend-doi-form').submit(function (e) {
      // hiding both error and success message on submission.
      $('.resend-doi-email-errors').hide();
      $('.resend-doi-email-success').hide();
      $('.page-loading-box').show();
      e.preventDefault();
      e.returnValue = false;
      var form = $(this);
      var formdata = $(this).serialize();
      var url = Drupal.url('verifydoiemail');
      $.ajax({
        type: 'post',
        url: url,
        dataType: "json",
        data: formdata,
        success: function (resultData) {
          if (resultData.errorStatus == true) {
            var errorResult = [];
            errorResult[0] = resultData.message;
            errorResult[1] = resultData.emailError;
            $('.page-loading-box').hide();
            $('.resend-doi-email-errors').show();
            $('.resend-doi-email-errors').html(ajaxValidationDoiStrings(errorResult));
            $('.resend-doi-email-success').hide();
          } else {
            $('.resend-doi-email-errors').hide();
            $('.resend-doi-email-success').hide();
            var successMsg = [];
            successMsg[0] = resultData.message;
            successMsg[1] = resultData.emailSuccess;
            $('#lp-resend-doi-form')[0].reset();
            $('#resenddoiemail-box').modal('toggle');
            $('#resendEmailConfirmation').modal('toggle');

          }

        },
        error: function (resultData) {
          $('.page-loading-box').hide();
          return false;
        },
        complete: function (resultData) {
          $('.page-loading-box').hide();
        }

      });
    });

    // login modal script

    $('.loginmodal').click(function () {
      $('.community-banner').css({ "padding-top": "50px", "margin-top": "0px" });
      $('.highlighted').css({ "padding-top": "50px", "margin-top": "0px", "z-index": "9" });
      $('.page-loading-box').show();
      // login form html
      $.ajax({
        url: Drupal.url('loginhtml'),
        type: "POST",
        //contentType:"application/json; charset=utf-8",
        dataType: "json",
        success: function (response) {
          // open login modal script
          $('#login-box').modal({ show: true });
          $('.loginhtmldata').html(response);
          // removing btn-default calss
          $('.login-btn').removeClass('btn-default');
          $('.closeaccount-btn').removeClass('btn-default');
          // login button removing glyphicon
          $('.login-btn .glyphicon-log-in').hide();
          $('.page-loading-box').hide();

        }
      });
    });

    if ($('.resetpasswordconfirmpage').length) {
      // OP-7240 - Triggers the click event on signin_link id.
      setTimeout(function () {
        $('#signin_link').trigger('click');
      }, 5000);
    }

    // redirect to login page.
    $('#signin_link').click(function () {
      if (window.opener) {
        var goBack = window.open('', 'parent');
        window.opener.location.reload();
        goBack.focus();
        window.close();
      }
      else {
        window.location.href = $('#signin_link').attr('href');
      }
    });

    // removing btn-default calss
    $('.login-btn').removeClass('btn-default');
    $('.closeaccount-btn').removeClass('btn-default');


    // change password and change email collapse
    var $myGroup = $('#securityGroup');
    $myGroup.on('show.bs.collapse', '.collapse', function () {
      $myGroup.find('.collapse.in').collapse('hide');
    });

    // login button removing glyphicon
    $('.login-btn .glyphicon-log-in').hide();
    if ($('.server_timeout').length) {
      setTimeout(function () {
        $('.alert-danger .close').trigger('click');
      }, 10000);
    }

    // display only latest message
    var alterCount = $(".alert-dismissible").length;
    if (alterCount > 1) {
      var domCount = 1;
      $(".alert-dismissible").each(function (index) {
        if (alterCount == domCount) {
          var classVal = $(this).attr('class');
          var dangerPosition = classVal.indexOf("alert-danger");
          var successPosition = classVal.indexOf("alert-success");
          if (dangerPosition > successPosition) {
            $(this).removeClass('alert-success');
          }
          if (successPosition > dangerPosition) {
            $(this).removeClass('alert-danger');
          }
        } else {
          $(this).hide();
        }
        domCount = domCount + 1;
      });
    }
    // Prevent login button for multiple form submit.
    $(document).on('submit', '.lp-login-form', function (e) {
      if ($(this).hasClass('form-submitted')) {
        e.preventDefault();
        return;
      }
      $(this).addClass('form-submitted');
      $('.login-btn').attr('disabled', true);
      $('.page-loading-box').show();
    });

    // hidding menu country not qualified
    if ($('.country_not_qualified').length) {
      $('.navbar-fixed-top .menu').hide();
    }

    // hide joinNowMenu after login mobile menu
    if (drupalSettings.userLoginStatus) {
      $('.joinNowMenu').hide();
    } else {
      $('.dashboardMenu').hide();
      $('.footer-menu').hide();
    }

    // unsubscribe confirmation model box
    if ($('#unsubscribeconfirmation-box').length) {
      $('#unsubscribeconfirmation-box').modal({ backdrop: 'static', keyboard: false }, 'show');

      $('#emailunsubscribesubmitconfirm').click(function () {
        var emailunsubscribesubmitconfirmurl = $(location).attr('href');
        window.location.href = emailunsubscribesubmitconfirmurl + '&c=t';
      });
    }

    // ajax validation error messages
    function ajaxValidationDoiStrings($field) {
      switch ($field[0]) {
        case 'email_invalid':
          return Drupal.t($field[1]);
        case 'email_long':
          return Drupal.t($field[1]);
        case 'resend_activated_mail_error':
          return Drupal.t($field[1]);
        case 'email_notfound':
          return Drupal.t($field[1]);
        case 'activation_mail_sent_submit':
          return Drupal.t($field[1]);
        default:
      }
    }

    // hidding menu country not qualified
    if ($('.country_not_qualified').length) {
      $('.navbar-fixed-top .menu').hide();
    }

    // unsubscribe confirmation model box
    if ($('#unsubscribeconfirmation-box').length) {
      $('#unsubscribeconfirmation-box').modal({ backdrop: 'static', keyboard: false }, 'show');

      $('#emailunsubscribesubmitconfirm').click(function () {
        var emailunsubscribesubmitconfirmurl = $(location).attr('href');
        window.location.href = emailunsubscribesubmitconfirmurl + '&c=t';
      });
    }


    // Detect web cam available or not

    DetectRTC.load(function () {
      $('.page-loading-box').show();
      var webcamstatus = 2;
      if (DetectRTC.hasWebcam && DetectRTC.videoInputDevices.length >= 1) {
        var webcamstatus = 1;
      }
      if (drupalSettings.panelistSystemWebCamStatus == webcamstatus) {
        $('.page-loading-box').hide();
      } else {
        var pagerefresh = drupalSettings.webcamCheckPageRefresh;
        $.ajax({
          type: 'POST',
          url: drupalSettings.base_url + "/webcamstatus",
          dataType: "text",
          data: { webcamstatus: webcamstatus },
          success: function (resultData) {
            if (pagerefresh) {
              location.reload();
            }
            $('.page-loading-box').hide();
          }
        });
      }
    });

    if ($('.non-org-owl').length) {
      //Owl Carousel for non-org Page
      $('.non-org-owl').owlCarousel({
        items: 2,
        loop: false,
        margin: 10,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          1000: {
            items: 1,
          },
          700: {
            items: 1
          },
          600: {
            items: 1
          },
          480: {
            items: 1,
            nav: false
          },
        }
      })
    }


    // OP-7206 - Carousel for Our Members Community Peek
    if ($('#ourmembers-category-items').length) {

      var $homeSlider = $("#ourmembers-category-items");
      $(window).resize(function () {
        showHomeSlider();
      });

      function showHomeSlider() {
        if ($homeSlider.data("owlCarousel") !== "undefined") {
          if (window.matchMedia('(max-width: 767px)').matches) {
            initialHomeSlider();
          } else {
            destroyHomeSlider();
          }
        }
      }

      function initialHomeSlider() {
        $homeSlider.addClass("owl-carousel").owlCarousel({
          items: 3,
          center: false,
          loop: false,
          autoWidth: true,
          margin: 20,
          nav: false,
          dots: false
        });
      }


      showHomeSlider();
      function destroyHomeSlider() {
        $homeSlider.trigger("destroy.owl.carousel").removeClass("owl-carousel");
      }
    }



    // If login page no modal box need for login menu link
    if (drupalSettings.loginLinkNoModal) {
      $('.loginmodal').removeAttr('data-toggle');
      $('.loginmodal').attr('href', '/login');
    }
    $(document).on('click', '.submit-forgotpasswordform-data', function () {
      $('.lp-forget-password-form').submit();
    });

    // adding status icon to error message header title.
    $('.alert-msg .alert-msg-original-title:first').appendTo('.alert-msg .alert-msg-title');
    $('.alert-msg .alert-msg-original-title').not(':first').hide();

    // OP-7299 blog
    if ($('.path-community').length) {
      if ($('.filter_community').length) {
        var blogCategoryLink = drupalSettings.blogCategoryLink;
        if (blogCategoryLink !== undefined) {
          $('.filter_community').append('<li>' + blogCategoryLink + '</li>');
        }
      }
    }

    if ($('.path-blog').length) {
      $(".communityItemList").each(function () {
        $(this).find('.views-field-title, .views-field-created').wrapAll('<div class="overlay"> </div>');
      });
    }

    // OP-7629 Mobile web view App Banner
    if ($('.webviewappbanner-close').length) {
      $('.webviewappbanner-close').click(function () {
        $('#block-webviewappbanner').hide();
      });
    }
    //OP-7741- App icon display in sitemap
    var appIconDisplayCheck = drupalSettings.appIconDisplay;
    if (appIconDisplayCheck == true) {
      $('.page-node-type-page .sitemap .card .lifepoints-app').show();
    }

  });

  // Highlighting TOC items when scrolling on Cookie Policy Page
  if ($('.page-node-type-lp-cookie-policy-page').length) {

    $('#tableofContents ul li a').first().addClass('active');

    $(window).scroll(function () {
      var position = $(this).scrollTop() + 100;

      $('h4.black-text').each(function () {
        var target = $(this).offset().top;
        var id = $(this).attr('id');

        if (position >= target) {
          $('#tableofContents ul li div a').removeClass('active');
          $('#tableofContents ul li div a[href=\\#' + id + ']').addClass('active');
        } else if (position == 100) {
          $('#tableofContents ul li div a').removeClass('active');
          $('#tableofContents ul li a').first().addClass('active');
        }
      });
    });
  }


  // OP-5351 - Community page, filter data when select category from list
  Drupal.behaviors.exposedfilter_buttons = {
    attach: function (context, settings) {
      if ($("#views-exposed-form-community-search-page-page-1").length == 1 || $("#views-exposed-form-community-search-page-page-2").length == 1) {
        $('#views-exposed-form-community-search-page-page-1 .form-submit').hide();
        $('#views-exposed-form-community-search-page-page-2 .form-submit').hide();
        $('.page-loading-box').hide();

        $(".communityItemList").each(function () {
          $(this).find('.views-field-title, .views-field-created').wrapAll('<div class="overlay"> </div>');
        });

        // OP-5951 - Back button Community content page return user to the row/slot position of community card
        if ($('ul.pagination').find('li.active').length != 0) {
          var page_href = $('ul.pagination').find('li.active').children('a').attr('href');
          $('.card a').each(function (index, element) {
            var newAttr = $(element).attr('href') + page_href;
            $(element).attr('href', newAttr);
            $(element).attr('id', 'slotid' + $(element).attr('rel'));
          });
          // For node id when node title alias not available
          $('.field-content').find('a[href^="/node/"]').each(function (ind, ele) {
            var nodeAttr = $(ele).attr('href') + page_href;
            $(ele).attr('href', nodeAttr);
            $(ele).attr('id', 'slotid' + $(ele).attr('rel'));
          });
        }
        else {
          var flcategoryid = $("select[name=category_tid]").val();
          $('.card a').each(function (index, element) {
            var newAttr = $(element).attr('href') + "?category_tid=" + flcategoryid;
            $(element).attr('href', newAttr);
            $(element).attr('id', 'slotid' + $(element).attr('rel'));
          });
          // For node id when node title alias not available
          $('.field-content').find('a[href^="/node/"]').each(function (ind, ele) {
            var nodeAttr = $(ele).attr('href') + "?category_tid=" + flcategoryid;
            $(ele).attr('href', nodeAttr);
            $(ele).attr('id', 'slotid' + $(ele).attr('rel'));
          });
        }

        // After clicking on Back button set row/slot position on Community list
        if (window.location.hash) {
          if ($(window.location.hash).length) {
            $('html, body').animate({
              scrollTop: $(window.location.hash).offset().top - 300
            }, 500);
          }
        }

        /** Getting filter options to UI LI for design : Start */
        $('.view-header').html('<div class="col-sm-8">' + $('.view-header').html() + '</div>')
        $('.view-header').append('<div class="col-sm-4"><div class="dropdown pull-right"><a href="#!" class="dropdown-toggle" id="filter_community" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"></a><ul class="dropdown-menu dropdown-menu-right filter_community" aria-labelledby="filter_community"></ul></div></div>');
        $('#filter_community').html($("select[name=category_tid] option:selected").text() + '<span class="caret"></span>');
        var $cfiltering = $("select[name=category_tid]");
        $cfiltering.find("option").map(function () {
          var $this = $(this);
          return $("<li>").attr("value", $this.attr("value")).html('<a href="#">' + $this.text() + '</a>').get();
        }).appendTo($(".filter_community"));

        $(document).on('click', '.filter_community li', function () {
          var selectedOption = $(this).attr("value");
          $("select[name=category_tid]").val(selectedOption).change();
          $('#filter_community').html($("select[name=category_tid] option:selected").text() + '<span class="caret"></span>');
        });

        // Add slideDown animation to Bootstrap dropdown when expanding.
        $('.dropdown').on('show.bs.dropdown', function () {
          $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
        });

        // Add slideUp animation to Bootstrap dropdown when collapsing.
        $('.dropdown').on('hide.bs.dropdown', function () {
          $(this).find('.dropdown-menu').first().stop(true, true).slideUp();
        });
        /** Getting filter options to UI LI for design : End */

        if ($("#views-exposed-form-community-search-page-page-1").length == 1) {
          $('select[data-drupal-selector="edit-category-tid"]', context).change(function () {
            $('#views-exposed-form-community-search-page-page-1 .form-submit').trigger('click');
            $('.page-loading-box').show();
          });
        }

        if ($("#views-exposed-form-community-search-page-page-2").length == 1) {
          $('select[data-drupal-selector="edit-category-tid"]', context).change(function () {
            if ($("select[name=category_tid]").val() == 'All') {
              window.location.href = drupalSettings.communityPath;
            } else {
              $('#views-exposed-form-community-search-page-page-2 .form-submit').trigger('click');
              $('.page-loading-box').show();
            }
          });
        }

        // showing loading icon when clicking on page number(pagining)
        Drupal.Ajax.prototype.setProgressIndicatorFullscreen = function () {
          $('.page-loading-box').show();
          // OP-6548 - Set scrolltop
          $("html, body").animate({ scrollTop: 0 }, "slow");
        };

        // OP-5951 - Override beforeSend to clean up the Ajax submission URL.
        var beforeSend = Drupal.Ajax.prototype.beforeSend;
        Drupal.Ajax.prototype.beforeSend = function (xmlhttprequest, options) {
          options.url = drupalSettings.views.ajax_path + '?' + Drupal.ajax.WRAPPER_FORMAT + '=drupal_ajax';
          beforeSend.apply(this, arguments);
        };

      }
    }
  };

  // OP-6639 - Back to Community changes related to SEO
  $('#btnBackCommunity').click(function (e) {
    var urlParams = new URLSearchParams(window.location.search);
    var categorytidParam = urlParams.get('category_tid');
    var pageParam = urlParams.get('page');
    var slotidParam = $('#newsid').val();
    e.preventDefault();
    $('.page-loading-box').show();
    $.ajax({
      url: Drupal.url('community/getCategoryPage'),
      type: "POST",
      dataType: "json",
      data: { categorytid: categorytidParam, page: pageParam },
      success: function (response) {
        if (response == 1) {
          window.location.href = drupalSettings.communityPath + '#slotid' + slotidParam;
        }
      }
    });
  });

  /**OP-7289 */
  /*Scroll to top when arrow up clicked BEGIN*/
  $(window).scroll(function () {
    var height = $(window).scrollTop();
    if (height > 600) {
      $('#back2Top').fadeIn();
    } else {
      $('#back2Top').fadeOut();
    }
  });
  $(document).ready(function () {
    $("#back2Top").click(function (event) {
      event.preventDefault();
      $("html, body").animate({ scrollTop: 0 }, "slow");
      return false;
    });
    // OP-7724 append device parameter for mobile device
    addParam();
    //hide the mobile banner when web page open in iframe
    iniFrame();

    // OP-7730 preloader on before page load
    $('.page-loading-box').hide();
  });
  /*Scroll to top when arrow up clicked END*/
  // OP-7724 append device parameter if previous url have device =app
  function addParam() {
    var referrer = document.referrer;
    if (referrer) {
      var newUrl = new URL(referrer);
      const urlParams = new URLSearchParams(newUrl.search);
      // check device parameter
      var url = new URL(window.location.href);
      var search_params = url.searchParams;
      if (urlParams.has('device') === true && urlParams.get('device') === 'app' && search_params.has('device') === false && search_params.get('device') !== 'app') {
        //append url if divice parameter appear
        // add "device" parameter
        search_params.set('device', urlParams.get('device'));
        url.search_params;
        //  url.search = search_params.toString();
        window.location.href = url.href
      }
    }
  }

  function iniFrame() {
    if (window.location !== window.parent.location) {

      // The page is in an iFrames
      //hide the mobile banner if webpage load in iframe
      $('#block-webviewappbanner').css('display', 'none');

    }
  }

// OP-7730 preloader on before page load  
$(window).on("beforeunload", function () {
  $('.page-loading-box').show();
});


})(jQuery, Drupal, drupalSettings);
