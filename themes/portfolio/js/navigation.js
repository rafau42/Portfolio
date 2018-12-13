(function($) {
  var navigation = $('.navigation');
  var navigation_toggle = $(".navigation__toggle");
  var navigation_list = $(".navigation__list");
  var navigation_icon = $(".navigation__icon");
  var heading = $(".header__heading");
  toggleNav();
  navigationScroll();
  fixedNav();

  function toggleNav() {
    navigation_toggle.click(function() {
      navigation_list.slideToggle(600);
      navigation_icon.toggleClass("fa-window-close", "fa-bars");
      heading.fadeToggle(600);
      navigation_toggle.toggleAttrVal("aria-expanded", "true", "false");
      navigation_toggle.find(".sr-only").toggleText("Close Menu", "Open Menu");
    });
  }

  function navigationScroll() {
    $(function() {
      $("a[href*=#]:not([href=#])").click(function() {
        if (
          location.pathname.replace(/^\//, "") ==
            this.pathname.replace(/^\//, "") &&
          location.hostname == this.hostname
        ) {
          var target = $(this.hash);
          target = target.length
            ? target
            : $("[name=" + this.hash.slice(1) + "]");
          if (target.length) {
            $("html,body").animate(
              {
                scrollTop: target.offset().top
              },
              1500
            );
            return false;
          }
        }
      });
    });
  }

  function fixedNav() {
    $(".js--header__text").waypoint(
      function(direction) {
        if (direction == "down") {
          navigation.addClass("sticky");
        } else {
          navigation.removeClass("sticky");
        }
      },
      {
        offset: "20px"
      }
    );
  }
})(jQuery);
