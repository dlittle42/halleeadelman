// ┌────────────────────────────────────────────────────────────────────┐ \\
// │ Author: Marvin Heilemann                                           │ \\
// │ Main Javascript for History theme                                  │ \\
// └────────────────────────────────────────────────────────────────────┘ \\

$(window).load(function(){

  /**
  * Init skrollr for parallax effects
  * only on desktop devices!
  * last edit: 07.04.16
  */
  if(!(/Android|iPhone|iPad|iPod|BlackBerry|Windows Phone/i).test(navigator.userAgent || navigator.vendor || window.opera)){
    skrollr.init({
      forceHeight: false
    });
  }


  /**
  * Play all videos with the autoplay attribute
  * last edit: 23.03.16
  */
  $('video[autoplay],video[autoplay="true"]').each(function(i,cb){
    $(this).get(0).play();
    /** Change statement for video modular */
    if ($(this).hasClass('modular'))
    $(this).parent()
    .find("play")
    .removeClass("visible")
    .find("icon")
    .removeClass("ion-play")
    .addClass("ion-pause");
  });


  /**
  * blinkParty - words animation effects
  * last edit: 21.03.16
  */
  var // the party
  blinkParty = function($this,effect) {
    var animation = $this.data('animation');
    $this.removeClass(animation);
    // Create a random time
    var random = Math.floor((Math.random() * 4) + 1) * 1000;
    // After the random time
    setTimeout(function(){
      $this.toggleClass(effect); // toggle the effect
      blinkParty($this,effect); // Start the function, again!
    }, random);
  },
  blinkPartyInit = function($words) {
    $words.each(function(){
      var $this = $(this);
      var effect = $this.data('effect');
      blinkParty($this,effect); // Start the party
    });
  };

  // Collect each word that want an animation
  // Set timeout, so it wan't kill reaveal animation
  setTimeout(function(){
    var $words = $('*[data-effect="blink"], *[data-effect="glow"], *[data-effect="glow-light"]');
    blinkPartyInit($words);
  }, 1100);


  /**
  * Init skillbar progress
  * last edit: 23.03.16
  */
  var skillbar = function(el) {
    $(el).find('.skillbar-bar').animate({
      width:$(el).attr('data-percent')
    },2200);
  };


  /**
  * Init counter
  * last edit: 23.03.16
  */
  var counter = function(el) {
    var $element = $(el).find('tweening-counter');
    var countTo = $element.text();
    var tweeningCounter = new TweeningCounter().duration(3700);
    $element.html(tweeningCounter.el);
    tweeningCounter.to(countTo).start();
  };


  /**
  * Init waypoints
  * last edit: 23.03.16
  */
  $('[waypoint]:not(".animated")').waypoint({
    handler: function(direction) {
      var $this = $(this.element);
      if (!$this.hasClass('animated')) {
        $this.addClass($this.data('animation'));
        $this.addClass('animated');
        if ($this.hasClass("skillbar")) skillbar($this);
        if ($this.hasClass("counter")) counter($this);
      }
    },
    offset: '85%'
  });

});
