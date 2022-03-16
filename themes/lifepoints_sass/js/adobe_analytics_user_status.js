(function ($, Drupal, drupalSettings, digitalData) {
  "use strict";
    // OP-6313 - LP Portal: Surface Variable for Adobe Analytics denoting if user is Signed In for Footer Content.
    var userLoginStatus = drupalSettings.userLoginStatus;
    // Data format for AA.
    window.digitalData = {
      "user": [{
        "loginInfo": [{
          "userLoginStatus": userLoginStatus,
        }]
      }]
    };
})(jQuery, Drupal, drupalSettings, window.digitalData);
