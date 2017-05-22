// ┌────────────────────────────────────────────────────────────────────┐ \\
// │ Author: Marvin Heilemann                                           │ \\
// │ Last edit: 08.03.16                                                │ \\
// └────────────────────────────────────────────────────────────────────┘ \\
$(function() {

  /**
   * Navigation
  */
  // Default variables
  var
    offsetLarge = 300, // Offset on desktop when sticky header appears
    offsetSmall = 150, // Offset on mobile when sticky header appears
    scrollOffset= 50, // Scroll to element offset
    mobileWidth = 992, // Mobile Width
    $header     = $('header'), // Header element
    $trigger    = $('trigger'), // Trigger element
    $navigation = $('header menu nav'), // Navigation elements
    $navItems   = $('header menu nav ul li a'), // Navigation items
    $root       = $('html, body'), // Root
    $sections   = $('main section'), // Sections
    mobile      = false, // Set mobile false
    onepage     = false, // Set onepage false
    sticky      = false; // Set sticky false

  var navInit = function() {
    var winWidth = $(window).width();

    // Check the window resolution
    if (winWidth <= mobileWidth) {
      // If its under the default mobile width
      mobile = true; // Set mobile to true
    } else {
      // If not
      mobile = false; // Set mobile to false
      $trigger.removeClass('active'); // Close trigger
      $navigation.removeClass('extended'); // Close mobile menu
    }

    // Check if we set a onepage
    var hash = $navigation.data('page');
    (hash) ? onepage = true : onepage = false; // set onepage
  };

  var stickyNavigation = function() {
    var windowOffsetTop = $(window).scrollTop();

    // Check if we have a fixed Header
    // if so, return false
    if (!$('header.fixed')) return false;

    // Check for mobile
    if (mobile) {
      // Check if sticky is active
      if (sticky) {
        // Check the offset
        if (windowOffsetTop < offsetSmall) {
          $header.removeClass('animate-in'); // cancel animate header in
          $header.addClass('animate-out'); // animate header out
          $header.removeClass('sticky'); // remove sticky
          $trigger.removeClass('active'); // remove active
          $navigation.removeClass('extended'); // close navigation
          sticky = false; // set sticky to false
        }
      } else {
        // Check the offset
        if (windowOffsetTop >= offsetSmall) {
          $header.removeClass('animate-out'); // cancel animate header out
          $header.addClass('animate-in'); // animate header in
          $header.addClass('sticky'); // add sticky
          sticky = true; // set sticky to true
        }
      }
    }
    // no mobile
    else {
      // Check if sticky is active
      if (sticky) {
        // Check the offset
        if (windowOffsetTop < offsetLarge) {
          $header.removeClass('animate-in'); // cancel animate header in
          $header.addClass('animate-out'); // animate header out
          $header.removeClass('sticky'); // remove sticky
          sticky = false; // set sticky to false
        }
      } else {
        // Check the offset
        if (windowOffsetTop >= offsetLarge) {
          $header.removeClass('animate-out');
          $header.addClass('animate-in'); // animate header in
          $header.addClass('sticky'); // add sticky
          sticky = true; // set sticky to true
        }
      }
    }
  };

  var onepageNavigation = function(){
    // Check each section if we are inside them
		$sections.each(function(){
			var $this = $(this);
			var activeSection = $('header menu nav ul li a[href="#'+$this.attr('id')+'"]').data('number') - 1;

      // Check the offset before and after the section if we are inside them
			if ( ( $this.offset().top - 200 < $(window).scrollTop() ) && ( $this.offset().top + $this.outerHeight() - 200 > $(window).scrollTop() ) ) {
				$navItems.eq(activeSection).addClass('active');
			} else {
				$navItems.eq(activeSection).removeClass('active');
			}
		});
  };

  var mobileNavigationHeight = function() {
    var $windowHeight       = $(window).height(),

        $navHeight          = $navigation.outerHeight(),
        $navOffsetTop       = $navigation.position().top,

        $childs             = $navigation.find('li'),
        $childsLength       = $childs.length,
        $childsOuterHeight  = $childs.outerHeight(),
        $childsHeight       = $childsOuterHeight * $childsLength,

        calc = $childsHeight + $navOffsetTop;

    // If mobile
    if (mobile) {
      // When the window height is lower
      if ( $windowHeight <= calc ) {
        // Create height
        $navigation.height( $windowHeight - $navOffsetTop - 5 );
      } else {
        // Set normal height
        $navigation.height( $childsHeight + 15 );
      }
    } else {
      $navigation.height( 'auto' );
    }
  };

  $(window).resize(function(){
    pageload = false;
    mobileNavigationHeight();
    navInit();
  });
  mobileNavigationHeight();
  navInit();

  $(window).on('scroll', function(){
    pageload = false;
    stickyNavigation();
    onepageNavigation();
  });
  stickyNavigation();
  onepageNavigation();

  $('menu nav a').click(function(event){
    // Scroll to section if onepage is enabled
    if (onepage) {
      event.preventDefault();
      $trigger.removeClass('active');
      $navigation.removeClass('extended');
      if (mobile) scrollOffset = 80;
      else scrollOffset = 110;
      $root.animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top - scrollOffset
      }, 700);
    }
  });

  $trigger.click(function(){
    // If mobile trigger the trigger
    if (mobile) {
      $trigger.toggleClass('active');
      $navigation.toggleClass('extended');
      mobileNavigationHeight();
    }
  });

});
