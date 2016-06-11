<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package unite
 */
?>
            </div><!-- row -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info container">
			<div class="row">
				<nav role="navigation" class="col-md-6">
					<?php unite_footer_links(); ?>
				</nav>

				<div class="copyright col-md-6">
				    <span><a href="ardentbeings.com">ArdentBeings.com</a> : </span>
					<span>proudly built on top of <a href="http://wordpress.org">Wordpress</a><a href="http://colorlib.com/wp/unite">Unite</a></span>
					
				</div>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<!--custom js added to include fitttext-->
<script>
 jQuery('h1').fitText(1.0 ,{ minFontSize: '10px', maxFontSize: '36px' });
 
 // Copyright 2014-2015 Twitter, Inc.
// Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
  var msViewportStyle = document.createElement('style')
  msViewportStyle.appendChild(
    document.createTextNode(
      '@-ms-viewport{width:auto!important}'
    )
  )
  document.querySelector('head').appendChild(msViewportStyle)
}
 
</script>
</body>
</html>