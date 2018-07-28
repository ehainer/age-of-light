<?php
/**
 * Fires after the main content, before the footer is output.
 *
 * @since ??
 */
do_action( 'et_after_main_content' );

if ( 'on' == et_get_option( 'divi_back_to_top', 'false' ) ) : ?>

	<span class="et_pb_scroll_top et-pb-icon"></span>

<?php endif;

if ( ! is_page_template( 'page-template-blank.php' ) ) : ?>

			<footer id="main-footer">
				<?php get_sidebar( 'footer' ); ?>


		<?php
			if ( has_nav_menu( 'footer-menu' ) ) : ?>

				<div id="et-footer-nav">
					<div class="container">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'footer-menu',
								'depth'          => '1',
								'menu_class'     => 'bottom-nav',
								'container'      => '',
								'fallback_cb'    => '',
							) );
						?>
					</div>
				</div> <!-- #et-footer-nav -->

			<?php endif; ?>

			<div class="et_pb_section et_pb_section_4 bordered-bottom et_pb_with_background et_section_regular">
				<div class="et_pb_row et_pb_row_4 bordered-column">
					<div class="et_pb_column et_pb_column_4_4 et_pb_column_6    et_pb_css_mix_blend_mode_passthrough et-last-child">
						<ul class="et_pb_module et_pb_social_media_follow et_pb_social_media_follow_0 narrow-column clearfix et_pb_bg_layout_light ">
							<li><div class="connect-with"><span>Connect With Whitney:</span></div></li>
							<li class="et_pb_social_media_follow_network_0 et_pb_social_icon et_pb_social_network_link  et-social-facebook et_pb_social_media_follow_network_0">
								<a href="https://www.facebook.com/whitneyscharerwriter/" class="icon et_pb_with_border" title="Facebook" target="_blank">
									<span class="et_pb_social_media_follow_network_name">Facebook</span>
								</a>
							</li>
							<li class="et_pb_social_media_follow_network_1 et_pb_social_icon et_pb_social_network_link  et-social-twitter et_pb_social_media_follow_network_1">
								<a href="https://twitter.com/wscharer" class="icon et_pb_with_border" title="Twitter" target="_blank">
									<span class="et_pb_social_media_follow_network_name">Twitter</span>
								</a>
							</li>
							<li class="et_pb_social_media_follow_network_2 et_pb_social_icon et_pb_social_network_link  et-social-instagram et_pb_social_media_follow_network_2">
								<a href="https://www.instagram.com/wscharer/" class="icon et_pb_with_border" title="Instagram" target="_blank">
									<span class="et_pb_social_media_follow_network_name">Instagram</span>
								</a>
							</li>
							<li class="et_pb_social_media_follow_network_3 et_pb_social_icon et_pb_social_network_link  et-social-pinterest et_pb_social_media_follow_network_3">
								<a href="https://www.pinterest.com/wscharer/" class="icon et_pb_with_border" title="" target="_blank">
									<span class="et_pb_social_media_follow_network_name"></span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>

				<!--
				<div id="footer-bottom">
					<div class="container clearfix">
				<?php
					if ( false !== et_get_option( 'show_footer_social_icons', true ) ) {
						get_template_part( 'includes/social_icons', 'footer' );
					}

					echo et_get_footer_credits();
				?>
					</div>	<!-- .container --
				</div>
				-->
			</footer> <!-- #main-footer -->
		</div> <!-- #et-main-area -->

<?php endif; // ! is_page_template( 'page-template-blank.php' ) ?>

	</div> <!-- #page-container -->

	<?php wp_footer(); ?>
	<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
	<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
	<script>
	window.addEventListener("load", function(){
	window.cookieconsent.initialise({
	  "palette": {
	    "popup": {
	      "background": "#694230",
	      "text": "#ffffff"
	    },
	    "button": {
	      "background": "transparent",
	      "text": "#f2b54e",
	      "border": "#f2b55e"
	    }
	  },
	  "content": {
	    "href": "www.whitneyscharer.com/privacy"
	  }
	})});
	</script>
</body>
</html>
