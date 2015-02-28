<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * UIKit theme
 *
 * @package    theme
 * @subpackage uikit
 * @author     Eduardo Ramos
 * @author     Based on code originally written by Julian (@moodleman) Ridden, G J Bernard, Mary Evans, Bas Brands, Stuart Lamour and David Scotson.
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$regionbsid = 'region-bs-main-and-pre';
$PAGE->requires->jquery();
echo $OUTPUT->doctype()
?>
<html <?php echo $OUTPUT->htmlattributes(); ?>>
    <head>
        <title><?php echo $OUTPUT->page_title(); ?></title>
        <link rel="shortcut icon" href="<?php echo $OUTPUT->favicon(); ?>" />
        <?php echo $OUTPUT->standard_head_html() ?>
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Google web fonts -->
		<?php require_once(dirname(__FILE__).'/includes/googlefonts.php'); ?>
        <!-- iOS Homescreen Icons -->
        <?php require_once(dirname(__FILE__) . '/includes/iosicons.php'); ?>

<link rel="stylesheet" type="text/css" href="<?php echo $CFG->httpswwwroot?>/theme/uikit/css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo $CFG->httpswwwroot?>/theme/uikit/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo $CFG->httpswwwroot?>/theme/uikit/css/bookblock.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo $CFG->httpswwwroot?>/theme/uikit/css/component.css" />
		<script src="<?php echo $CFG->httpswwwroot?>/theme/uikit/js/modernizr.custom.js"></script>

     <link rel="stylesheet" type="text/css" href="<?php echo $CFG->httpswwwroot?>/theme/uikit/style.css">

    </head>

    <body <?php echo $OUTPUT->body_attributes(); ?>>

        <?php echo $OUTPUT->standard_top_of_body_html() ?>

        <?php //require_once(dirname(__FILE__) . '/includes/header.php'); ?>

        <?php require_once(dirname(__FILE__) . '/includes/navbar.php'); ?>

        <div id="page">

<div id="scroll-wrap" class="container">

			<div class="main">
				<div id="bookshelf" class="bookshelf">
					<figure>
						<a href="http://bepaw.com/course/view.php?id=3"><div class="book" data-book="book-1"></div></a>
						<div class="buttons"><a href="http://bepaw.com/course/view.php?id=3"></a><a href="#">Details</a></div>
						<figcaption><h2>Bronze to Gold<span>Fluff</span></h2></figcaption>
						<div class="details">
							<ul>
								<li>A course for real bronze players with 20 APM. As a terran reach the Gold league and discover the Starcraft 2 fun.</li>
								<li><a href="http://bepaw.com/course/view.php?id=3">Enter course</a></li>
								<li>12 lessons</li>
								<li></li>
							</ul>
						</div>
					</figure>
				</div>
			</div><!-- /main -->

		</div><!-- /container -->

		<!-- Fullscreen BookBlock -->
		<!-- for demo purpose we repeat each bookblock -->
		<div class="bb-custom-wrapper" id="book-1">
			<div class="bb-bookblock">
				<div class="bb-item">
					<div class="bb-custom-side page-layout-3">
						<div>
							<h3>Portraits</h3>
							<p>Photography (1999 &ndash; 2013)</p>
						</div>
					</div>
					<div class="bb-custom-side page-layout-3">
					</div>
				</div>
				<div class="bb-item">
					<div class="bb-custom-side page-layout-1">
						<h3>
							Chapter 9 <span>Nomadic Lifestyle</span>
						</h3>
					</div>
					<div class="bb-custom-side page-layout-1">
						<p>Candy canes lollipop macaroon marshmallow gummi bears tiramisu. Dessert croissant cupcake candy canes. Bear claw faworki faworki lemon drops. Faworki marzipan sugar plum jelly-o marzipan cookie.</p>
					</div>
				</div>
				<div class="bb-item">
					<div class="bb-custom-side page-layout-2">
						<div>
							<h3>Aa</h3>
							<p>Faworki marzipan sugar plum jelly-o marzipan. Soufflé tootsie roll jelly beans. Sweet icing croissant dessert bear claw. Brownie dessert cheesecake danish jelly pudding bear claw soufflé.</p>
						</div>
						<div>
							<h3>Bb</h3>
							<p>Faworki marzipan sugar plum jelly-o marzipan. Soufflé tootsie roll jelly beans. Sweet icing croissant dessert bear claw. Brownie dessert cheesecake danish jelly pudding bear claw soufflé.</p>
						</div>
					</div>
					<div class="bb-custom-side page-layout-2">
						<div>
							<h3>Cc</h3>
							<p>Faworki marzipan sugar plum jelly-o marzipan. Soufflé tootsie roll jelly beans. Sweet icing croissant dessert bear claw. Brownie dessert cheesecake danish jelly pudding bear claw soufflé.</p>
						</div>
						<div>
							<h3>Dd</h3>
							<p>Faworki marzipan sugar plum jelly-o marzipan. Soufflé tootsie roll jelly beans. Sweet icing croissant dessert bear claw. Brownie dessert cheesecake danish jelly pudding bear claw soufflé.</p>
						</div>
					</div>
				</div>
			</div><!-- /bb-bookblock -->
			<nav>
				<a href="#" class="bb-nav-prev">Previous</a>
				<a href="#" class="bb-nav-next">Next</a>
				<a href="#" class="bb-nav-close">Close</a>
			</nav>
		</div>





			<div id="aditional-frontpage-content">
				<!-- Start Slideshow -->
				<?php require_once(dirname(__FILE__).'/includes/slideshow.php'); ?>
				<!-- End Slideshow -->

				<!-- Start Marketing Spots -->
				<?php require_once(dirname(__FILE__).'/includes/marketingspots.php'); ?>
				<!-- End Marketing Spots -->
			</div>
			
            <div id="page-content">
                <div id="<?php echo $regionbsid ?>">
                    <div id="pre-and-content" class="uk-grid">
                        <?php 
                                $sidePreClasses = 'uk-width-1-1 uk-width-medium-1-3 uk-width-large-1-4 mdl-width-xlarge-2-10';
                                $regionClasses = 'uk-width-1-1 uk-width-medium-2-3 uk-width-large-3-4 mdl-width-xlarge-8-10';
                                
                                $hassidepre = (empty($PAGE->layout_options['noblocks']) && $PAGE->blocks->region_has_content('side-pre', $OUTPUT));
                                
                                if(!$hassidepre && !$PAGE->user_is_editing()){
                                    $regionClasses = 'uk-width-1-1';
                                }
                        
                                if(empty($PAGE->theme->settings->frontpageblocks) || $PAGE->theme->settings->frontpageblocks === 'left'){
                                    require_once(dirname(__FILE__) . '/includes/frontpage-content.php');
                                    echo $OUTPUT->uikitblocks('side-pre', $sidePreClasses);
                                }else{
                                    echo $OUTPUT->uikitblocks('side-pre', $sidePreClasses);
                                    require_once(dirname(__FILE__) . '/includes/frontpage-content.php');
                                }
                            ?>
                    </div>
                </div>
                
                <?php require_once(dirname(__FILE__) . '/includes/hidden_blocks.php'); ?>
            </div>
        </div>


        <?php require_once(dirname(__FILE__) . '/includes/footer.php'); ?>

        <?php echo $OUTPUT->standard_footer_html(); ?>

        <?php echo $OUTPUT->standard_end_of_body_html() ?>
 
<script>

$('a').click(
    function() {
        if ($(this).attr('href').charAt(0) == '#') {
            console.log('internal link');
        } else {
            $('#navbar-uikit-theme-content .uk-navbar-toggle:not(.coursemenulabel)').addClass('spinme');
            $('#menu-offcanvas .uk-icon-home').addClass('spinme');
        }
     }
);

</script>
        <!-- Start Google Analytics -->
        <?php require_once(dirname(__FILE__).'/includes/analytics.php'); ?>
        <!-- End Google Analytics -->
                <script src="<?php echo $CFG->httpswwwroot?>/theme/uikit/js/bookblock.min.js"></script>
		<script src="<?php echo $CFG->httpswwwroot?>/theme/uikit/js/classie.js"></script>
		<script src="<?php echo $CFG->httpswwwroot?>/theme/uikit/js/bookshelf.js"></script>
    </body>
</html>
