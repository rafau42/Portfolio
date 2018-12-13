(function($) {
  var card = $(".card");
  var cardfront = $(".card__side--front");
  var cardback = $(".card__side--back");
  cardFocus();
  var cardwrap = $(".projects__card-wrap");
  var image = $(".card__img");
  resizeCard();

  function cardFocus() {
    $(document).on("focus", ".card", function() {
      $(this)
        .find(cardfront)
        .addClass("rotate-180");
      $(this)
        .find(cardback)
        .addClass("rotate0");
    });

    card.focusout(function() {
      $(this)
        .find(cardfront)
        .removeClass("rotate-180");
      $(this)
        .find(cardback)
        .removeClass("rotate0");
    });
  }

  function resizeCard() {
    setTimeout(function() {
      resizeDiv();
    }, 1500);

    $(window).resize(function() {
      resizeDiv();
    });
  }

  function resizeDiv() {
    cardwrap.height(image.height());
  }
})(jQuery);
