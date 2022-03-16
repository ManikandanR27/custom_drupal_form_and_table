/**
 * @file
 */

(function ($, Drupal, drupalSettings) {
  "use strict";

  $(document).ready(function () {
    // hide login nav in login pages
    $('.navbar-toggle').hide();
    // Logout if user inactive START
    // Set timeout variables.
    var timoutWarning = drupalSettings.Session_Warning_Timeout; // Display warning in 14 Mins.
    var timoutNow = drupalSettings.Session_Timeout; // Timeout in 15 mins.
    // OP-6643 - SEO URL updated using routing for auto session timeout for IdleTimeout.
    var logoutUrl = drupalSettings.login.logoutUrl + '?error=session_timeout'; // URL to logout page.
    var warningTimer;
    var timeoutTimer;

    // Show idle timeout warning dialog.
    function IdleWarning() {

    }
    // Logout the user.
    function IdleTimeout() {
      window.location.href = logoutUrl;
    }

    // Start timers.
    function StartTimers() {
      warningTimer = setTimeout(function () { IdleWarning(); }, timoutWarning);
      timeoutTimer = setTimeout(function () { IdleTimeout(); }, timoutNow);
    }

    // Reset timers.
    function ResetTimers() {
      clearTimeout(warningTimer);
      clearTimeout(timeoutTimer);
      StartTimers();
    }

    StartTimers();
    $('body').mousemove(function () {
      ResetTimers();
    });

    // Logout if user inactive END.
    var pointesEarnder = drupalSettings.pointsEarned;
    var rewardpointsMenuHtml = $('.menu-rewardpoints').html();
    $('.menu-rewardpoints').html('<strong class="menu-points">' + pointesEarnder + '</strong><br><span class="font12">' + rewardpointsMenuHtml + '</span>');

    // Hidding  country not qualified error after login.
    if ($('.country_not_qualified').length) {
      $('.alert-danger .close').trigger('click');
    }
    /** adding close button to mobile top menu */
    $('<p><a class="close menu-close" style="padding: 0px 12px;"><span class="material_icon icon_close"></span></a></p>').insertBefore($('.region-navigation-mobile'));
    $(document).on("click", ".menu-close, .sidebar-blocker", function () {
      $('.sidebar-collapse').css("width","0");
      $('.sidebar-blocker').remove();
    });

    /** Hide footer for all login pages */
    $('.main-footer').addClass('hidden-xs');
    $('.main-footer').before('<div class="padding-tb30 visible-xs"></div>');

    /** Add div structure for mobile top menu items which have icons */
    if ($('#block-usracctmenumobtop .menu').length) {
      $('#block-usracctmenumobtop .menu li a').each(function () {
        if ($(this).is('.my-profile, .privacy-settings, .data-usage, .cancel-membership')) {
          var menuItem = $(this).html();
          $(this).html('<div class="row"><div class="col-xs-2 menuicon"></div><div class="col-xs-10 menutext">' + menuItem + '</div></div>');
        }
      });
    }

    /** Adding class for block-copyright to hide in mobile view*/
    if ($('#block-copyright').length) {
      $('#block-copyright').addClass('hidden-xs');
    }

    /* Adding CSS Class For Member Pages */
    $('body').addClass('memberlogin');

    /** Hide Mobile bottom Menu for mobile app */
    if(drupalSettings.isMobileApp){
      $('#block-usracctmenumobbot').hide();
    }

    /** Mobile sidebar top menu */
    $('.dashboardMenu').click(function(){
      $('.sidebar-collapse').css("width","80%");
      $('<div class="sidebar-blocker"></div>').appendTo('body');
    });

    /** Remove blue footer for logged in pages */
    $('.main-footer-blue').removeClass('main-footer-blue');
    $('.main-footer-copyright').removeClass('havelock-blue');
    $('.main-footer-copyright').addClass('blue-grey');

    /** Hide join now button for about-us pages */
    $('.joinnowbtn').hide();
    $('#block-aboutweeklywinners .signupbtn').hide();
    $('.page-node-type-lp-about-us .region-page-homeletsgo').hide();

    /** Hiding Lifepoints app button */
    $('#block-aboutus .menu--about-us .lifepoints-app').hide();

  });
})(jQuery, Drupal, drupalSettings);
