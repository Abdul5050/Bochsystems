<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Quest
 */

/**
 * Filter Footer container class
 */
$footer_container_cls = apply_filters( 'quest_footer_container_cls', 'container' );

?>

<?php if ( is_active_sidebar( 'footer-widget' ) ) : ?>
	<footer class="quest-row main-footer">
		<div class="<?php echo $footer_container_cls; ?>">
			<div class="row">
				<?php dynamic_sidebar( 'footer-widget' ); ?>
			</div>
		</div>
	</footer>
<?php endif; ?>

<footer id="colophon" style="background:#000;"class="copyright quest-row" role="contentinfo">
	<div class="<?php echo $footer_container_cls; ?>" >
		<div class="row">
			<div class="col-md-6 copyright-text"style="width:100%;text-align:center;font-size:12pt">
			<div>Copyright &copy Boch Systems. All rights reserved. Site by <a style="font-size:10pt;font-family:calibri"target="_blank"href="https://jacetechnologies.com.ng/">JACE Technologies</a><br/><a style="font-size:12pt"href="https://bochsystems.net/">Home</a> | <a style="font-size:12pt"href="https://bochsystems.net/who-we-are/">About</a> | <a style="font-size:12pt"href="https://bochsystems.net/contact/">Contact</a></div>	
			</div>

			<div class="col-md-6 social-icon-container clearfix">
				<ul>
					<?php quest_footer_social_icons(); ?>
				</ul>
			</div>

		</div>
		<!-- end row -->
	</div>
	<!-- end container -->
</footer> <!-- end quest-row -->

</div><!-- #page -->

<?php wp_footer(); ?>

<a href="#0" class="cd-top"><i class="fa fa-angle-up"></i></a>

</body>
</html>
