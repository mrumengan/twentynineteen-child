jQuery(document).ready(function($) {

  function init() {
    // Fullpage handler
    var myFullpage = new fullpage('#fullpage', {
      // anchors: [
      //   'amplify-your-brand',
      //   'lets-get-acquainted',
      //   'feel-good-vibes',
      //   'open-for-business',
      //   'lend-me-your-eyes',
      //   'our-portfolio',
      //   'about-us',
      //   'brand-activation',
      //   'point-of-sales-marketing',
      //   'outdoor-mediaadvertising',
      //   'contact-us',
      //   'thankyou'
      // ],
      // sectionsColor: ['#C63D0F', '#1BBC9B', '#7E8F7C'],
      navigation: true,
      navigationPosition: 'right',
      navigationTooltips: [
        'Amplify your Brand',
        'Let\'s Get Acquainted',
        'Feel Good Vibes',
        'Open for Business',
        'Lend Me Your Eyes',
        'Our Portfolio',
        'About Us',
        'Brand Activation',
        'Point-of-sales Marketing',
        'Outdoor Media Advertising',
        'Contact Us',
        'Thankyou'
      ]
    });

    console.log('Init done!');
    
  }

  init();

  function animateTextLogo($textLogo, $triggerElement) {

    // init controller
    let controller = new ScrollMagic.Controller();

    // build tween
    let tween = TweenMax.from($textLogo, .3, {marginRight: '-300px', opacity: '0', ease: Linear.easeNone});

    // build scene
    let scene = new ScrollMagic.Scene({
							triggerElement: $triggerElement
						})
						.setTween(tween)
            // .addIndicators({name: '1 (duration:0)'})
            .addTo(controller);

  };

  function animateH2($h2, $triggerElement) {

    // init controller
    let controller = new ScrollMagic.Controller();

    let startMarginLeft = '-'+$h2.css('width');

    // build tween
    let tween = TweenMax.from($h2, .5, {
      marginLeft: startMarginLeft,
      opacity: '0',
      scale: '',
      ease: Linear.easeNone
    });

    // build scene
    let scene = new ScrollMagic.Scene({
      triggerElement: $triggerElement
    })
    .setTween(tween) // trigger a TweenMax.to tween
    .addTo(controller);

	};


  animateTextLogo($('#amplify-your-brand .text-logo-container'), '#amplify-your-brand');
  animateH2($('#amplify-your-brand h2'), '#amplify-your-brand');

  animateTextLogo($('#lets-get-acquainted .text-logo-container'), '#lets-get-acquainted');
  animateH2($('#lets-get-acquainted h2'), '#lets-get-acquainted');

  animateTextLogo($('#feel-good-vibes .text-logo-container'), '#feel-good-vibes');

  animateTextLogo($('#open-for-business .text-logo-container'), '#open-for-business');
  animateH2($('#open-for-business h2'), '#open-for-business');

  animateTextLogo($('#lend-me-your-eyes .text-logo-container'), '#lend-me-your-eyes');
  animateH2($('#lend-me-your-eyes h2'), '#lend-me-your-eyes');

  animateTextLogo($('#our-portfolio .text-logo-container'), '#our-portfolio');
  animateH2($('#our-portfolio h2'), '#our-portfolio');

  animateTextLogo($('#about-us .text-logo-container'), '#about-us');
  animateH2($('#about-us h2'), '#about-us');

  animateTextLogo($('#brand-activation .text-logo-container'), '#brand-activation');
  animateH2($('#brand-activation h2'), '#brand-activation');

  animateTextLogo($('#point-of-sales-marketing .text-logo-container'), '#point-of-sales-marketing');
  animateH2($('#point-of-sales-marketing h2'), '#point-of-sales-marketing');

  animateTextLogo($('#outdoor-media-advertising .text-logo-container'), '#outdoor-media-advertising');
  animateH2($('#outdoor-media-advertising h2'), '#outdoor-media-advertising');

  animateTextLogo($('#contact-us .text-logo-container'), '#contact-us');
  animateH2($('#contact-us h2'), '#contact-us');

  function animateLine($line, $triggerElement, duration, drawSpeed) {

    if(drawSpeed == undefined)
      drawSpeed = 1;

    console.log('Draw Speed: ', drawSpeed);
    // init controller
    let controller = new ScrollMagic.Controller();

    // build tween
    let tween = new TimelineMax()
      .add(TweenMax.to($line, drawSpeed, {strokeDashoffset: 20, ease: Linear.easeNone}));
      // .add(TweenMax.to("path", 1, {stroke: "white", ease:Linear.easeNone}), 0);

    // build scene
    let scene = new ScrollMagic.Scene({triggerElement: $triggerElement, duration: duration, tweenChanges: true})
            .setTween(tween)
            // .addIndicators() // add indicators (requires plugin)
            .addTo(controller);
  }

  function pathPrepare ($el) {
		var lineLength = $el[0].getTotalLength();
		$el.css("stroke-dasharray", lineLength);
		$el.css("stroke-dashoffset", lineLength);
	}

  var $line1 = $('.line1');
  pathPrepare($line1);
  animateLine($line1, '#right-stripe', 600);

  var $line2 = $('.line2');
  pathPrepare($line2);
  animateLine($line2, '#feel-good-vibes .description', 60, .1);

  var $line3 = $('.line3');
  pathPrepare($line3);
  animateLine($line3, '#feel-good-vibes #wave-trigger', 600);

  var $line4 = $('.line4');
  pathPrepare($line4);
  animateLine($line4, '#open-for-business h2', 300, .5);

  var $line5 = $('.line5');
  pathPrepare($line5);
  animateLine($line5, '#open-for-business h2', 600);

  var $line6 = $('.line6');
  pathPrepare($line6);
  animateLine($line6, '#lend-me-your-eyes #line6', 100, .5);

  var $line7 = $('.line7');
  pathPrepare($line7);
  animateLine($line7, '#lend-me-your-eyes .trigger-line7', 300);

  function playCarousel() {
    console.info('Playing Carousel');
    $('#carousel-portfolio').carousel();
    $('#carousel-brand-activation').carousel();

    $('#carousel-portfolio .fp-tableCell').css('height', 'auto');
    $('#carousel-brand-activation .fp-tableCell').css('height', 'auto');
  
    $('#outdoor-media-advertising .fp-tableCell').css('height', 'auto');
  }

  playCarousel();

  function animateAlpha(objAlpha, triggerElement) {

    // init controller
    let controller = new ScrollMagic.Controller();

    // build scene
    let scene = new ScrollMagic.Scene({
      triggerElement: triggerElement
    })
    .setTween(objAlpha, 0.5, {opacity: "1", ease: Linear.easeNone})
    .addTo(controller);

  };

  animateAlpha('#about-us .description', '#about-us');
  $( window ).resize(function() {
    // console.log($(this).innerWidth());
  });
});
