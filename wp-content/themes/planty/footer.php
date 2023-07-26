<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Blocksy
 */

blocksy_after_current_template();
do_action('blocksy:content:bottom');

?>
	</main>

	<footer id="footer" class="ct-footer" data-id="type-1" itemscope="" itemtype="https://schema.org/WPFooter" >
		<div data-row="middle" >
			<div class="ct-container-fluid" data-columns-divider="md:sm" >
				<div data-column="widget-area-1" data-link="none" >
					<div class="ct-widget widget_block widget_media_image" id="block-8">
					<figure class="wp-block-image size-large">
						<img class="ftr-img" decoding="async" loading="lazy" src="http://localhost/planty/wp-content/uploads/2023/07/footer-image-1-1024x88.png" alt="" srcset="http://localhost/planty/wp-content/uploads/2023/07/footer-image-1-1024x88.png 1024w, http://localhost/planty/wp-content/uploads/2023/07/footer-image-1-300x26.png 300w, http://localhost/planty/wp-content/uploads/2023/07/footer-image-1-768x66.png 768w, http://localhost/planty/wp-content/uploads/2023/07/footer-image-1.png 1489w" sizes="(max-width: 1024px) 100vw, 1024px" />
					</figure>
					</div>
				</div>
			</div>
		</div>
		<div data-row="bottom" >
			<div class="ct-container-fluid" data-columns-divider="md:sm" >
				<div data-column="copyright" >
					<div class="ct-footer-copyright" data-id="copyright" >
						<p>Mentions légales</p>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>


<?php wp_footer(); ?>

</body>
</html>
