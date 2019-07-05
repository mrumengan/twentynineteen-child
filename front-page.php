<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

 wp_enqueue_script(
         'custom_script',
         get_stylesheet_directory_uri(). '/js/front-page.js',
         array( 'jquery' )
     );

get_header();
?>
<link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">

<style>
  body {
    color: white;
    font-family: 'Permanent Marker', cursive;
  }
  p {
    font-size: .9rem;
  }
	header#masthead, header.entry-header {
		display: none;
	}
  .entry .entry-content, .entry .entry-summary {
    max-width: 100%;
    margin: 0;
    padding: 0;
  }
  h2::before {
    background: none;
  }

  .wpb_button, .wpb_content_element, ul.wpb_thumbnails-fluid > li {
      margin-bottom: 10px;
  }

  span.title-bigger {
    font-size: 1.5em;
    font-family: AmsiProUltra;
  }

  #amplify-your-brand .notes {
    font-family: AnsiPro;
    font-size: .8em;
    font-family: AmsiProUltra;
  }
  #amplify-your-brand .narative-title {
    line-height: 1.2em;
    font-family: AmsiProUltra;
  }
  #amplify-your-brand .left-image img {
    margin-left: 20vw;
  }
  #amplify-your-brand #experiential-marketing {
    position: absolute;
    right: -2vw
  }
  #amplify-your-brand .right-image {
    margin-left: -3vw;
  }
  #amplify-your-brand #captivate-the-masses {
    position: absolute;
    left: 13%;
  }

  #lets-get-acquainted .stripe-from-right {
    position: absolute;
    height: 400px;
    right: 0;
    top: 10px;
  }
  #lets-get-acquainted .acquainted {
    position: absolute;
    height: 300px;
    right: 85px;
    top: 30px;
    z-index: 1;
  }

  #feel-good-vibes .svg1 svg {
    position: absolute;
    height: 465px;
    right: 407px;
    top: -405px;
    z-index: 0;
    fill: none;
  }
  #feel-good-vibes .svg1 svg path {
    fill: teal;
    stroke-width: 5px;
    stroke-color: #fff;
  }


  #open-for-business .bottom-right-stripe img {
    height: 50vh;
    position: absolute;
    right: 0;
    max-width: none;
    bottom: 0;
    width: auto;
  }
  #open-for-business .bottom-left-orange {
    position: absolute;
    left: 0;
    max-width: none;
    bottom: -10px;
    width: auto;
  }

  #lend-me-your-eyes .sub-title {

  }
  #lend-me-your-eyes .bottom-left-stripe {
    margin-left: -20px;
  }
  #lend-me-your-eyes .bus {
    position: absolute;
    bottom: 0;
    left: 0;
  }
  #lend-me-your-eyes .man {
    position: absolute;
    bottom: 0;
    left: 330px;
  }
  #lend-me-your-eyes .strawberry-on-spoon {
    position: absolute;
    bottom: 0;
    right: 0;
  }

  #carousel-portfolio {
    margin-top: 40px;
  }
  .vc_images_carousel .vc_carousel-control .icon-next, .vc_images_carousel .vc_carousel-control .icon-prev {
    padding: 8px 0 0;
    background: white;
    opacity: 1;
    border-radius: 15px;
  }

  #about-us {

  }

  #brand-activation {
  }
  #brand-activation .description, #brand-activation .image-carousel {
    margin-top: 20px;
  }

  #point-of-sales-marketing {
  }
  #point-of-sales-marketing .wpb_single_image.img-row figure {
    float: left;
  }
  #point-of-sales-marketing .wpb_single_image.img-row:first-child {
    margin-left: calc(100vw / 4 / 3);
  }
  #point-of-sales-marketing .wpb_single_image.img-row figure img {
    float: left;
    height: 200px;
    width: auto;
    margin-right: 20px;
  }


  #contact-detail {
    font-size: .8rem;
  }

  #thank-you h2 {
    font-size: 5em;
    line-height: 0.7em;
  }

  @media only screen and (min-width: 1168px) {
    .entry .entry-content > *, .entry .entry-summary > * {
      max-width: 100%;
    }
    .vc_images_carousel .vc_carousel-control .icon-next, .vc_images_carousel .vc_carousel-control .icon-prev {
      padding: 8px 0 0;
      background: white;
      opacity: 1;
      border-radius: 15px;
    }
  }
  @media only screen and (min-width: 768px) {
    .entry .entry-content > *, .entry .entry-summary > * {
      max-width: 100%;
    }
    .entry .entry-content > *, .entry .entry-summary > * {
      margin: 0;
    }
    .vc_images_carousel .vc_carousel-control .icon-next, .vc_images_carousel .vc_carousel-control .icon-prev {
      padding: 8px 0 0 !important;
      background: white;
      opacity: 1;
      border-radius: 15px;
    }
  }
</style>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) {

			// Load posts loop.
			while ( have_posts() ) {
				the_post();
				get_template_part( 'template-parts/content/content' );
			}

			// Previous/next page navigation.
			twentynineteen_the_posts_navigation();

		} else {

			// If no content, include the "No posts found" template.
			get_template_part( 'template-parts/content/content', 'none' );

		}
		?>

		</main><!-- .site-main -->
	</section><!-- .content-area -->

  <script>
  </script>
<?php
get_footer();
