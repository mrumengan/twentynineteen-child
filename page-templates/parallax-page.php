<?php
/*
 * Template Name: Custom Parallax
 * description: >-
  Page template without sidebar
 */

 function enqueue_parallax_style() {
   wp_enqueue_style( 'parallax-child-style',
       get_stylesheet_directory_uri() . '/parallax-style.css'
   );
 }

add_action( 'wp_enqueue_scripts', 'enqueue_parallax_style' );

function addScrollMagicIndicator() {
  wp_enqueue_script(
    'indicators',
    pluginS_url(). '/scroll_magic/assets/libs/scrollmagic/plugins/debug.addIndicators.min.js?ver=2.0.5',
    array( 'jquery' ),
    false,
    true
  );
}
add_action( 'wp_enqueue_scripts', 'addScrollMagicIndicator', 20, 1);

function addBootstrapJS() {
  wp_enqueue_script( 'bootstrap_js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js', array('jquery'), true);
}
add_action('wp_enqueue_scripts', 'addBootstrapJS', 19, 1);

function addDotNavbar() {
  // wp_enqueue_style('fullpage_css', get_stylesheet_directory_uri(). '/fullpage.css');

  wp_enqueue_script( 'modernizr_js', 'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js');
}
add_action('wp_enqueue_scripts', 'addDotNavbar', 21, 1);

function addMainScript() {
  wp_enqueue_script(
    'custom_script',
    get_stylesheet_directory_uri(). '/js/parallax-page.js',
    array( 'jquery' )
  );
}
add_action('wp_enqueue_scripts', 'addMainScript', 22, 1);

get_header(); ?>

<div id="primary" class="site-content">
   <div id="fullpage" role="main">


    <!-- section -->
		<div class="section screen-height" id="amplify-your-brand">
      <a name="amplify-your-brand"></a>
      <div class="content">
  			<div class="text-logo-container"><img src="https://gobblerfmcg.com/wp-content/uploads/2018/12/gobblerfmcg-white.png" class="text-logo" alt="" /></div>
        <h2 class="fc-white">AMPLIFY YOUR <span class="title-bigger fc-wheat">BRAND</span></h2>

        <div class="row">
          <div class="col-md-8">
            <div class="description">Shoppers are at the heart of what we do. We believe that crafting powerful brand
              experiences, vivid imagery, and unique storytelling will create emotional links that
              positively engage people, alter brand perception, and disrupt the purchasing journey.</div>
          </div>
        </div>

        <div class="row justify-content-md-center" id="choose-your-narative">
          <div class="col-md-3 text-center"><strong>Choose Your Narative</strong></div>
        </div>

        <div class="row justify-content-md-center">
          <div class="col-md-12">
            <div class="d-flex justify-content-center">
              <div class="narative-container">
                <img src="https://gobblerfmcg.com/wp-content/uploads/2018/11/experiential-marketing-300x249.png"><br />
                <div>experiential<br />marketing</div>
              </div>
              <div class="narative-container">
                <img src="https://gobblerfmcg.com/wp-content/uploads/2018/11/visual-merchandising-300x249.png">
                <div>visual<br />merchandising</div>
              </div>
              <div class="narative-container">
                <img src="https://gobblerfmcg.com/wp-content/uploads/2018/11/captivate-the-masses-300x249.png"><br />
                <div>captivate<br />the masses</div>
              </div>
            </div>
          </div>
        </div>

        <div class="scroll-down-container">
          Scroll down
          <div><i class="fas fa-chevron-down"></i></div>
        </div>

      </div>
    </div>

    <!-- section -->
    <div class="section fixed-height" id="lets-get-acquainted">
      <a name="lets-get-acquainted"></a>
      <div class="content">
  			<div class="text-logo-container"><img src="https://gobblerfmcg.com/wp-content/uploads/2018/12/gobblerfmcg-purple.png" class="text-logo" alt="" /></div>
        <h2 class="fc-purple">LET’S GET <span class="title-bigger fc-blue">ACQUAINTED</span></h2>

        <div class="row">
          <div class="col-md-8">
            <div class="description">We offer a complete suite of innovative marketing solutions for your FMCG products – from consultation,
              to on-the-ground campaigns to creative services in the interest of creating awareness and influencing brand preference among your
              target audience.<br />
            <button class="read-more">Read more</button></div>
          </div>
        </div>

          <img src="https://gobblerfmcg.com/wp-content/uploads/2018/11/acquinted-cereal-768x839.png" id="cereal" />
          <img src="https://gobblerfmcg.com/wp-content/uploads/2018/12/color-stripe-right.png" id="right-stripe" />
          <svg id="line1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 366.18 513.02" enable-background="new 0 0 1031 3544" xml:space="preserve">
            <path class="line1" fill="none" stroke="white" stroke-width="15" stroke-linecap="butt" stroke-miterlimit="0"
            d="M388.9,172.2c-24.8-30.8-47.6-54.1-64.5-70.1c-15.3-14.5-26.1-24.7-42.5-36.5C263.6,52.4,238.1,34,201,23.9
            	c-17.5-4.8-46-12.5-81.5-5c-15.6,3.3-56.7,12-83.2,50.7c-26.2,38.3-19.8,79.3-18.6,86.2c5.8,33.8,25.2,55.2,32.7,63.2
            	c14.2,15.2,34,25.2,73.3,44.7c39.7,19.7,44,18.2,64.3,31.6c17.4,11.5,35.7,23.5,51.3,46.6c20.9,31,23.4,61.6,23.8,69.5
            	c0.5,8.6,1.3,38-15.1,70.5c-16.2,31.9-40.1,49.1-51.2,56.1"/>
          </svg>
          <img src="https://gobblerfmcg.com/wp-content/uploads/2018/11/acquinted-768x466.png" id="men-handshake" />

          <div class="scroll-down-container">
            Scroll down
            <div><i class="fas fa-chevron-down"></i></div>
          </div>

      </div>
    </div>

    <!-- section -->
    <div class="section fixed-height" id="feel-good-vibes">
      <div class="content">
  			<div class="text-logo-container"><img src="https://gobblerfmcg.com/wp-content/uploads/2018/12/gobblerfmcg-white.png" class="text-logo" alt="" /></div>
        <h2 class="fc-purple">FEEL GOOD <span class="title-bigger fc-wheat">VIBES</span></h2>
        <div class="description">Experiential marketing with brand activation</div>
        <button class="read-more">Read more</button>

        <img src="https://gobblerfmcg.com/wp-content/uploads/2018/11/good_vibes-602x1024.png" id="good-vibes" />

        <svg version="1.1" id="line2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
        	 viewBox="-5 -5 55 155" xml:space="preserve">
           <path class="line2"
           fill="none" stroke="white" stroke-width="15" stroke-linecap="butt" stroke-miterlimit="0"
           d="M36,0.8c-4.2,3.8-30.1,28-30,67c0.1,45.2,35,70.9,38.5,73.4"/>
        </svg>

        <div class="wave-container">
          <img src="https://gobblerfmcg.com/wp-content/uploads/2018/12/brand-activation.png" /><br />
          <img src="https://gobblerfmcg.com/wp-content/uploads/2018/12/brand-activation-wave.png" id="wave-trigger" />
        </div>

        <svg version="1.1" id="line3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        	 viewBox="0 0 518.3 497" xml:space="preserve">
        <path class="line3" fill="none" stroke="white" stroke-width="15" stroke-linecap="butt" stroke-miterlimit="0"
          d="M345.8,6.8c20.6,8.8,36.7,17.4,47.6,23.6c30.6,17.3,59.5,34.1,84.5,65.7c15.1,19.1,21.4,34.2,22.8,37.9
          	c3.9,9.7,11,28.1,9.7,52.1c-0.4,7.3-2.6,45.8-33.4,72.9c-2.8,2.5-17.3,14.9-40.3,21c-21.8,5.8-39.7,2.7-53.7,0.1
          	c-18.8-3.5-32.1-9.2-60.6-22.9c-52.5-25.3-52.4-27.6-66.2-33.1c-63.4-25.4-127.4-2.1-133.5,0.2c-14.7,5.6-61.3,24.1-90.6,74.3
          	C11.6,333.5,9.2,367.6,9.5,386c0.9,55.8,29.1,94,38.8,106.1"/>
        </svg>

        <img src="https://gobblerfmcg.com/wp-content/uploads/2018/11/good-vibes-cup-768x619.png" id="good-vibes-cup" />

        <div class="scroll-down-container">
          Scroll down
          <div><i class="fas fa-chevron-down"></i></div>
        </div>

      </div>
    </div>

    <!-- section -->
    <div class="section fixed-height" id="open-for-business">
      <div class="content">
  			<div class="text-logo-container"><img src="https://gobblerfmcg.com/wp-content/uploads/2018/12/gobblerfmcg-purple.png" class="text-logo" alt="" /></div>
        <h2 class="fc-purple">OPEN FOR <span class="title-bigger fc-lavender">BUSINESS</span></h2>
        <div class="description fc-lavender">Visual merchandising for Point-of-Sales marketing</div>
        <button class="read-more">Read more</button>

        <div class="scroll-down-container">
          Scroll down
          <div><i class="fas fa-chevron-down"></i></div>
        </div>

        <svg version="1.1" id="line4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        	 viewBox="0 0 161.8 181.9" style="enable-background:new 0 0 161.8 181.9;" xml:space="preserve">
        <path class="line4"
          fill="none" stroke="#FFFFFF" stroke-width="12" stroke-linecap="butt" stroke-miterlimit="0"
          d="M8.3,9c2.4,4.5,6.7,11.2,13.9,17.2c5.4,4.5,11.1,7.5,22.6,11.7c16.4,6.1,29.4,9.1,31.4,9.7
        	c9.6,2.3,53.4,12.6,70.2,45.3c3.3,6.5,10.4,23.1,5.3,43.2c-5.7,22.4-22.8,34-27.2,36.8"/>
        </svg>
        <div class="trigger-line4"></div>

        <img src="https://gobblerfmcg.com/wp-content/uploads/2019/01/marketing_solutions_wave-300x167.png" id="marketing-solutions-wave" />

        <img src="https://gobblerfmcg.com/wp-content/uploads/2018/12/color-stripe-right.png" id="color-stripe-right-2" />

        <svg version="1.1" id="line5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        	 viewBox="-5 -5 522 460" xml:space="preserve">
        <path class="line5"
          fill="none" stroke="#FFFFFF" stroke-width="15" stroke-linecap="butt" stroke-miterlimit="0"
          d="M203.1,0.4c-12.6,5.4-31,13.5-52.9,24c-40.1,19.2-60.6,29.2-82.8,46.3c-30.9,23.8-44.6,45.9-48.4,52.2
        	C3.5,148.3,1.7,166.4,1.3,170.9c-1.2,14.9,1.5,26.8,3.1,33.4c2.3,9.5,5.5,23.2,16.1,37c10.5,13.5,22.4,20.1,28.1,23.1
        	c26,13.9,51,11.4,59.3,10.5c11-1.2,20-4.1,30.4-7.3c7.7-2.4,17.6-5.5,29.5-11.5c4.5-2.3,6.6-3.6,14-7.2c6.8-3.4,12.3-5.8,18-8.3
        	c13.7-6,26.8-11.4,30.8-13c65-25.4,118.4-21.7,118.4-21.7c19.5,1.4,64.6,5.1,105.7,36.8c10.9,8.4,28.1,22,40.3,46.4
        	c4.4,8.9,20.7,42.7,9.6,83.4c-14.2,52.1-61.6,73.3-67.9,76"/>
        </svg>
        <div class="trigger-line5"></div>

        <img src="https://gobblerfmcg.com/wp-content/uploads/2018/11/business-orange-768x999.png" id="business-orange" />
        <img src="https://gobblerfmcg.com/wp-content/uploads/2018/11/business-724x1024.png" id="business" />

      </div>
    </div>

    <div class="section fixed-height" id="lend-me-your-eyes">
      <div class="content">
  			<div class="text-logo-container"><img src="https://gobblerfmcg.com/wp-content/uploads/2018/12/gobblerfmcg-white.png" class="text-logo" alt="" /></div>
        <h2 class="fc-purple">LEND ME <span class="title-bigger fc-wheat">YOUR EYES</span></h2>
        <div class="description">Captivate the masses with outdoor media advertising</div>
        <button class="read-more">Read more</button>

        <img src="https://gobblerfmcg.com/wp-content/uploads/2018/12/color-stripe-left.png" id="color-stripe-left-2" />
        <img src="https://gobblerfmcg.com/wp-content/uploads/2018/12/FMCG_05-768x349.png" id="bus" />
        <img src="https://gobblerfmcg.com/wp-content/uploads/2018/11/media-534x1024.png" id="man-jump" />

        <svg id="line6" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="5 -5 345 205">
          <path class="line6"
          fill="none" stroke="#FFFFFF" stroke-width="12" stroke-linecap="butt" stroke-miterlimit="0"
          d="M28.2,2.7c-2.7,6.5-5.9,15.4-8.6,26.1c-1.9,7.6-5.1,20.2-5.5,36c-0.3,10.6-0.6,32.6,10.2,57.8
          	c6.6,15.3,14.9,26,19.8,31.7c5.1,5.9,13.6,15.8,27.6,23.9c23.6,13.7,46.7,13.4,55.5,13.2c15.1-0.4,25.6-3.9,46.7-10.8
          	c29.8-9.8,31.8-14.8,57.7-22.9c21.8-6.7,36-10.9,55-8.3c7.4,1,25.8,3.6,41.8,18c7.5,6.7,12,13.9,14.7,19" />
        </svg>
        <div class="trigger-line6"></div>

        <img src="https://gobblerfmcg.com/wp-content/uploads/2019/01/outdoor_media_advertising_wave-300x197.png" id="outdoor-media-advertising-wave"/>

        <div class="trigger-line7"></div>
        <svg version="1.1" id="line7" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        	 viewBox="5 -5 465 295" xml:space="preserve">
        <path class="line7"
          fill="none" stroke="#FFFFFF" stroke-width="17" stroke-linecap="butt" stroke-miterlimit="0"
          d="M380.6,0.7c12.5,9.9,29.5,25.4,45.4,47.9c6.5,9.2,17.8,25.3,25.6,47.2c5.7,16,16.7,48.2,7,87.1
        	c-3,12.1-10.1,33.2-27.4,53.6c-18.9,22.3-40,31.9-44.7,33.9c-6.7,2.9-26.5,10.9-52.9,10c-24.7-0.8-42.1-9-64.6-19.9
        	c-34.4-16.6-34.9-24.3-69.1-42.2c-30.1-15.8-46.6-24.4-70.5-25.8c-10.8-0.6-54.8-1.6-87.4,32.1c-21.4,22.1-27,47.9-28.7,58.5"/>
        </svg>

        <img src="https://gobblerfmcg.com/wp-content/uploads/2018/11/media-spoon-768x532.png" id="media-spoon"/>

        <div class="scroll-down-container">
          Scroll down
          <div><i class="fas fa-chevron-down"></i></div>
        </div>

      </div>
    </div>

    <div class="section screen-content" id="our-portfolio">
      <div class="content">
  			<div class="text-logo-container"><img src="https://gobblerfmcg.com/wp-content/uploads/2018/12/gobblerfmcg-yellow.png" class="text-logo" alt="" /></div>
        <h2 class="fc-purple">OUR <span class="title-bigger fc-wheat">PORTFOLIO</span></h2>

        <div id="carousel-portfolio" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carousel-portfolio" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-portfolio" data-slide-to="1"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="https://gobblerfmcg.com/wp-content/uploads/2018/11/2V7A1107.jpg" class="attachment-full" alt="" srcset="https://gobblerfmcg.com/wp-content/uploads/2018/11/2V7A1107.jpg 1280w, https://gobblerfmcg.com/wp-content/uploads/2018/11/2V7A1107-300x200.jpg 300w, https://gobblerfmcg.com/wp-content/uploads/2018/11/2V7A1107-768x512.jpg 768w, https://gobblerfmcg.com/wp-content/uploads/2018/11/2V7A1107-1024x682.jpg 1024w, https://gobblerfmcg.com/wp-content/uploads/2018/11/2V7A1107-800x533.jpg 800w">
            </div>
            <div class="carousel-item">
              <img src="https://gobblerfmcg.com/wp-content/uploads/2018/11/20171205_125349.jpg" class="attachment-full" alt="" srcset="https://gobblerfmcg.com/wp-content/uploads/2018/11/20171205_125349.jpg 1280w, https://gobblerfmcg.com/wp-content/uploads/2018/11/20171205_125349-300x225.jpg 300w, https://gobblerfmcg.com/wp-content/uploads/2018/11/20171205_125349-768x576.jpg 768w, https://gobblerfmcg.com/wp-content/uploads/2018/11/20171205_125349-1024x768.jpg 1024w, https://gobblerfmcg.com/wp-content/uploads/2018/11/20171205_125349-800x600.jpg 800w">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carousel-portfolio" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carousel-portfolio" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <div class="scroll-down-container">
          Scroll down
          <div><i class="fas fa-chevron-down"></i></div>
        </div>

      </div>
    </div>

    <div class="section screen-content" id="about-us">
      <div class="content">
  			<div class="text-logo-container"><img src="https://gobblerfmcg.com/wp-content/uploads/2018/12/gobblerfmcg-yellow.png" class="text-logo" alt="" /></div>
        <h2 class="fc-wheat"><span class="title-bigger">ABOUT US</span></h2>

        <div class="row">
          <div class="col-md-5 description"><span class="title-bigger">GobblerFMCG</span> aims to be Singapore’s go-to integrated marketing agency for Fast Moving Consumer Goods. We offer a complete
            suite of innovative marketing solutions for your FMCG products – from consultation, to on-the-ground campaigns to creative services.</div>
          <div class="col-md-5 description">Our track record of moving consumers into fans and turning experiential campaigns into sales is the result of our
            visionary thinking and innovation which translates into marketing solutions that get real results.</div>
        </div>
        <div class="row">
          <div class="col text-right"><img src="/wp-content/uploads/2018/12/FMCG_04.png" id="fmcg-04" /></div>
        </div>

        <div class="scroll-down-container">
          Scroll down
          <div><i class="fas fa-chevron-down"></i></div>
        </div>

      </div>
    </div>

    <div class="section screen-content" id="brand-activation">
      <div class="content">
  			<div class="text-logo-container"><img src="https://gobblerfmcg.com/wp-content/uploads/2018/12/gobblerfmcg-purple.png" class="text-logo" alt="" /></div>
        <h2 class="fc-lavender"><span class="title-bigger">BRAND ACTIVATION</span></h2>

        <div class="row">
          <div class="col fc-lavender"><div class="description">Hey you! *waves* Hello, have we caught your attention yet?Well, glad you’ve noticed us! You see, brand activation achieves
            that exactly. Rather than waiting for the consumer to come to us, we’ve got to take a step forward to reach out to them and capture their
            attention! Leverage on our *ahem* connections to conduct demonstrations and samplings of your products through <span class="title-bigger">In-Office Brand Activations</span>
            and <span class="title-bigger">In-Store Brand Activations</span>.</div></div>
        </div>

        <div id="carousel-brand-activation" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carousel-portfolio" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-portfolio" data-slide-to="1"></li>
            <li data-target="#carousel-portfolio" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="https://gobblerfmcg.com/wp-content/uploads/2018/11/20180403_120933.jpg" class="attachment-full" alt="" srcset="https://gobblerfmcg.com/wp-content/uploads/2018/11/20180403_120933.jpg 1280w, https://gobblerfmcg.com/wp-content/uploads/2018/11/20180403_120933-300x225.jpg 300w, https://gobblerfmcg.com/wp-content/uploads/2018/11/20180403_120933-768x576.jpg 768w, https://gobblerfmcg.com/wp-content/uploads/2018/11/20180403_120933-1024x768.jpg 1024w, https://gobblerfmcg.com/wp-content/uploads/2018/11/20180403_120933-800x600.jpg 800w" sizes="(max-width: 1280px) 100vw, 1280px" width="1280" height="960">
            </div>
            <div class="carousel-item">
              <img src="https://gobblerfmcg.com/wp-content/uploads/2018/11/20170825_115319.jpg" class="attachment-full" alt="" srcset="https://gobblerfmcg.com/wp-content/uploads/2018/11/20170825_115319.jpg 1280w, https://gobblerfmcg.com/wp-content/uploads/2018/11/20170825_115319-300x225.jpg 300w, https://gobblerfmcg.com/wp-content/uploads/2018/11/20170825_115319-768x576.jpg 768w, https://gobblerfmcg.com/wp-content/uploads/2018/11/20170825_115319-1024x768.jpg 1024w, https://gobblerfmcg.com/wp-content/uploads/2018/11/20170825_115319-800x600.jpg 800w" sizes="(max-width: 1280px) 100vw, 1280px" width="1280" height="960">
            </div>
            <div class="carousel-item">
              <img src="https://gobblerfmcg.com/wp-content/uploads/2018/11/2V7A9296.jpg" class="attachment-full" alt="" srcset="https://gobblerfmcg.com/wp-content/uploads/2018/11/2V7A9296.jpg 1280w, https://gobblerfmcg.com/wp-content/uploads/2018/11/2V7A9296-300x200.jpg 300w, https://gobblerfmcg.com/wp-content/uploads/2018/11/2V7A9296-768x512.jpg 768w, https://gobblerfmcg.com/wp-content/uploads/2018/11/2V7A9296-1024x682.jpg 1024w, https://gobblerfmcg.com/wp-content/uploads/2018/11/2V7A9296-800x533.jpg 800w" sizes="(max-width: 1280px) 100vw, 1280px" width="1280" height="853">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carousel-brand-activation" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carousel-brand-activation" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

      </div>
    </div>

    <div class="section screen-height" id="point-of-sales-marketing">
      <div class="content">
  			<div class="text-logo-container"><img src="https://gobblerfmcg.com/wp-content/uploads/2018/12/gobblerfmcg-white.png" class="text-logo" alt="" /></div>
        <h2 class="fc-wheat"><span class="title-bigger">POINT-OF-SALES MARKETING</span></h2>

        <div class="row">
          <div class="col"><div class="description">The main goal of every business is the same – profit. A tactic frequently used by FMCG retailers,
            Point-of-Sale Marketing (POSM) encourages customers to make last minute purchasing. These inexpensive items can be very
            attractive to price-sensitive buyers and encourages <span class="title-bigger">impulse purchases</span>.</div></div>
        </div>

        <div class="d-flex justify-content-center">
          <div class="">
            <div class="small-image"><img src="https://gobblerfmcg.com/wp-content/uploads/2018/11/58d480d8a08400ece042c647acba8895-1024x668.jpg" class="vc_single_image-img attachment-large" alt="" srcset="https://gobblerfmcg.com/wp-content/uploads/2018/11/58d480d8a08400ece042c647acba8895-1024x668.jpg 1024w, https://gobblerfmcg.com/wp-content/uploads/2018/11/58d480d8a08400ece042c647acba8895-300x196.jpg 300w, https://gobblerfmcg.com/wp-content/uploads/2018/11/58d480d8a08400ece042c647acba8895-768x501.jpg 768w, https://gobblerfmcg.com/wp-content/uploads/2018/11/58d480d8a08400ece042c647acba8895-800x522.jpg 800w, https://gobblerfmcg.com/wp-content/uploads/2018/11/58d480d8a08400ece042c647acba8895.jpg 1240w" sizes="(max-width: 640px) 100vw, 640px" width="640" height="418"></div>
          </div>
          <div class="">
            <div class="small-image"><img src="https://gobblerfmcg.com/wp-content/uploads/2018/11/d5348a0a40eac68ac90a1658955701f5-768x1024.jpg" class="vc_single_image-img attachment-large" alt="" srcset="https://gobblerfmcg.com/wp-content/uploads/2018/11/d5348a0a40eac68ac90a1658955701f5-768x1024.jpg 768w, https://gobblerfmcg.com/wp-content/uploads/2018/11/d5348a0a40eac68ac90a1658955701f5-225x300.jpg 225w, https://gobblerfmcg.com/wp-content/uploads/2018/11/d5348a0a40eac68ac90a1658955701f5-800x1067.jpg 800w, https://gobblerfmcg.com/wp-content/uploads/2018/11/d5348a0a40eac68ac90a1658955701f5.jpg 1400w" sizes="(max-width: 640px) 100vw, 640px" width="640" height="853"></div>
          </div>
          <div class="">
            <div class="small-image"><img src="https://gobblerfmcg.com/wp-content/uploads/2018/11/e3aa8f11155333.560f2b68b8039-1024x658.jpg" class="vc_single_image-img attachment-large" alt="" srcset="https://gobblerfmcg.com/wp-content/uploads/2018/11/e3aa8f11155333.560f2b68b8039-1024x658.jpg 1024w, https://gobblerfmcg.com/wp-content/uploads/2018/11/e3aa8f11155333.560f2b68b8039-300x193.jpg 300w, https://gobblerfmcg.com/wp-content/uploads/2018/11/e3aa8f11155333.560f2b68b8039-768x494.jpg 768w, https://gobblerfmcg.com/wp-content/uploads/2018/11/e3aa8f11155333.560f2b68b8039-800x514.jpg 800w, https://gobblerfmcg.com/wp-content/uploads/2018/11/e3aa8f11155333.560f2b68b8039.jpg 1400w" sizes="(max-width: 640px) 100vw, 640px" width="640" height="411"></div>
          </div>
          <div class="">
            <div class="small-image"><img src="https://gobblerfmcg.com/wp-content/uploads/2018/11/11601438_Θ¢Çσ╖óµîéµ₧╢-2-851x1024.jpeg" class="vc_single_image-img attachment-large" alt="" srcset="https://gobblerfmcg.com/wp-content/uploads/2018/11/11601438_Θ¢Çσ╖óµîéµ₧╢-2-851x1024.jpeg 851w, https://gobblerfmcg.com/wp-content/uploads/2018/11/11601438_Θ¢Çσ╖óµîéµ₧╢-2-249x300.jpeg 249w, https://gobblerfmcg.com/wp-content/uploads/2018/11/11601438_Θ¢Çσ╖óµîéµ₧╢-2-768x924.jpeg 768w, https://gobblerfmcg.com/wp-content/uploads/2018/11/11601438_Θ¢Çσ╖óµîéµ₧╢-2-800x963.jpeg 800w, https://gobblerfmcg.com/wp-content/uploads/2018/11/11601438_Θ¢Çσ╖óµîéµ₧╢-2.jpeg 1558w" sizes="(max-width: 640px) 100vw, 640px" width="640" height="770"></div>
          </div>
        </div>

        <div class="scroll-down-container">
          Scroll down
          <div><i class="fas fa-chevron-down"></i></div>
        </div>

      </div>
    </div>

    <div class="section screen-content" id="outdoor-media-advertising">
      <div class="content">
  			<div class="text-logo-container"><img src="https://gobblerfmcg.com/wp-content/uploads/2018/12/gobblerfmcg-white.png" class="text-logo" alt="" /></div>
        <h2 class="fc-lavender"><span class="title-bigger">OUTDOOR MEDIA ADVERTISING</span></h2>

        <div class="row">
          <div class="col fc-lavender"><div class="description">The high volume of people moving or waiting to get around in Singapore signals a perfect opportunity for your brand to directly captivate and engage the masses without intruding into their personal space. The majority of people tend to fixate on a moving</div></div>
          <div class="col fc-lavender"><div class="description">advertisement while bored of waiting or stuck in traffic. While people may come and go, your advertisement will be there in the public eye 24/7 and always in sight – day or night, rain or shine.</div></div>
        </div>

        <div id="carousel-outdoor-media-advertising" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carousel-outdoor-media-advertising" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-outdoor-media-advertising" data-slide-to="1"></li>
            <li data-target="#carousel-outdoor-media-advertising" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="https://gobblerfmcg.com/wp-content/uploads/2018/11/Screen-Shot-2017-12-04-at-3.15.43-PM.png" class="attachment-full" alt="" srcset="https://gobblerfmcg.com/wp-content/uploads/2018/11/Screen-Shot-2017-12-04-at-3.15.43-PM.png 1530w, https://gobblerfmcg.com/wp-content/uploads/2018/11/Screen-Shot-2017-12-04-at-3.15.43-PM-300x256.png 300w, https://gobblerfmcg.com/wp-content/uploads/2018/11/Screen-Shot-2017-12-04-at-3.15.43-PM-768x657.png 768w, https://gobblerfmcg.com/wp-content/uploads/2018/11/Screen-Shot-2017-12-04-at-3.15.43-PM-1024x875.png 1024w, https://gobblerfmcg.com/wp-content/uploads/2018/11/Screen-Shot-2017-12-04-at-3.15.43-PM-800x684.png 800w" sizes="(max-width: 1530px) 100vw, 1530px" width="1530" height="1308">
            </div>
            <div class="carousel-item">
              <img src="https://gobblerfmcg.com/wp-content/uploads/2018/11/Screen-Shot-2017-12-04-at-3.24.46-PM.png" class="attachment-full" alt="" srcset="https://gobblerfmcg.com/wp-content/uploads/2018/11/Screen-Shot-2017-12-04-at-3.24.46-PM.png 1280w, https://gobblerfmcg.com/wp-content/uploads/2018/11/Screen-Shot-2017-12-04-at-3.24.46-PM-300x258.png 300w, https://gobblerfmcg.com/wp-content/uploads/2018/11/Screen-Shot-2017-12-04-at-3.24.46-PM-768x659.png 768w, https://gobblerfmcg.com/wp-content/uploads/2018/11/Screen-Shot-2017-12-04-at-3.24.46-PM-1024x879.png 1024w, https://gobblerfmcg.com/wp-content/uploads/2018/11/Screen-Shot-2017-12-04-at-3.24.46-PM-800x687.png 800w" sizes="(max-width: 1280px) 100vw, 1280px" width="1280" height="1099">
            </div>
            <div class="carousel-item">
              <img src="https://gobblerfmcg.com/wp-content/uploads/2018/11/Screen-Shot-2017-12-04-at-5.00.30-PM.png" class="attachment-full" alt="" srcset="https://gobblerfmcg.com/wp-content/uploads/2018/11/Screen-Shot-2017-12-04-at-5.00.30-PM.png 1110w, https://gobblerfmcg.com/wp-content/uploads/2018/11/Screen-Shot-2017-12-04-at-5.00.30-PM-300x254.png 300w, https://gobblerfmcg.com/wp-content/uploads/2018/11/Screen-Shot-2017-12-04-at-5.00.30-PM-768x649.png 768w, https://gobblerfmcg.com/wp-content/uploads/2018/11/Screen-Shot-2017-12-04-at-5.00.30-PM-1024x865.png 1024w, https://gobblerfmcg.com/wp-content/uploads/2018/11/Screen-Shot-2017-12-04-at-5.00.30-PM-800x676.png 800w" sizes="(max-width: 1110px) 100vw, 1110px" width="1110" height="938">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carousel-outdoor-media-advertising" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carousel-outdoor-media-advertising" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <div class="spacer"></div>

        <div class="scroll-down-container">
          Scroll down
          <div><i class="fas fa-chevron-down"></i></div>
        </div>

      </div>
    </div>

    <div class="section screen-content" id="contact-us">
      <div class="content">
  			<div class="text-logo-container"><img src="https://gobblerfmcg.com/wp-content/uploads/2018/12/gobblerfmcg-white.png" class="text-logo" alt="" /></div>
        <h2 class="fc-wheat"><span class="title-bigger">CONTACT US</span></h2>

        <div class="row">
          <div class="col">

            <?= do_shortcode('[wpforms id="513"]'); ?>

          </div>

          <div class="col description">
            <p>Leave us a message and we’ll be in touch with you within 2 – 3 working days!</p>

            <p><span class="title-bigger fc-wheat">Operation Hours:</span><br />
            Monday – Friday (except public holidays)<br />
            8.30am to 5.30pm</p>

            <p><span class="title-bigger fc-wheat">Address:</span><br />
              600 Sin Ming Avenue<br />
              CityCab Building Level 2<br />
              Singapore 575733</p>

            <p><span class="title-bigger fc-wheat">Contact Persons:</span><br />
              Geraldine Tan<br />
              Tel: 6554 5075<br />
              Email: geraldine@gobblerco.com</p>

          </div>
        </div><br />

        <div class="scroll-down-container">
          Scroll down nih
          <div><i class="fas fa-chevron-down"></i></div>
        </div>

      </div>
    </div>

    <div class="section screen-height" id="thank-you">
      <div class="content">
  			<div class="text-logo-container"><img src="https://gobblerfmcg.com/wp-content/uploads/2018/12/gobblerfmcg-white.png" class="text-logo" alt="" /></div>
        <h2 class="fc-wheat thank"><span class="title-bigger">THANK</span></h2>
        <h2 class="fc-wheat you"><span class="title-bigger">YOU</span></h2>
      </div>
    </div>


   </div><!-- #content -->
 </div><!-- #primary -->

 <nav id="cd-vertical-nav">
  <ul>
    <li>
      <a href="#amplify-your-brand" data-number="1">
        <span class="cd-dot"></span>
        <span class="cd-label">Amplify Your Brand</span>
      </a>
    </li>
    <li>
      <a href="#lets-get-acquainted" data-number="2">
        <span class="cd-dot"></span>
        <span class="cd-label">Let's Get Acuquainted</span>
      </a>
    </li>
    <li>
      <a href="#feel-good-vibes" data-number="3">
        <span class="cd-dot"></span>
        <span class="cd-label">Feel Good Vibes</span>
      </a>
    </li>
    <li>
      <a href="#open-for-business" data-number="4">
        <span class="cd-dot"></span>
        <span class="cd-label">Open For Business</span>
      </a>
    </li>
    <li>
      <a href="#lend-me-your-eyes" data-number="5">
        <span class="cd-dot"></span>
        <span class="cd-label">Lend Me Your Eyes</span>
      </a>
    </li>
    <li>
      <a href="#our-portfolio" data-number="6">
        <span class="cd-dot"></span>
        <span class="cd-label">Our Portfolio</span>
      </a>
    </li>
    <li>
      <a href="#about-us" data-number="7">
        <span class="cd-dot"></span>
        <span class="cd-label">About Us</span>
      </a>
    </li>
    <li>
      <a href="#brand-activation" data-number="8">
        <span class="cd-dot"></span>
        <span class="cd-label">Brand Activation</span>
      </a>
    </li>
    <li>
      <a href="#point-of-sales-marketing" data-number="9">
        <span class="cd-dot"></span>
        <span class="cd-label">Point of Sales Marketing</span>
      </a>
    </li>
	</ul>
</nav>


 <script type='text/javascript' src='https://gobblerfmcg.com/wp-content/plugins/js_composer/assets/lib/vc_carousel/js/transition.min.js?ver=5.5.2'></script>
 <script type='text/javascript' src='https://gobblerfmcg.com/wp-content/plugins/js_composer/assets/lib/vc_carousel/js/vc_carousel.min.js?ver=5.5.2'></script>
 <script type='text/javascript' src='https://gobblerfmcg.com/wp-content/plugins/js_composer/assets/lib/prettyphoto/js/jquery.prettyPhoto.min.js?ver=5.5.2'></script>


 <?php get_footer(); ?>
