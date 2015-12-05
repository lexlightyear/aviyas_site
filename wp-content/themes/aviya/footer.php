<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Toolbox
 * @since Toolbox 0.1
 */
?>
		</div>
  		<div id="footer" class="clearfix">
            <div class="fltrt">
                &copy; <?php echo date("Y"); ?> Aviya Kushner. All Rights Reserved. Site by <a href="http://www.goodspark.com" target="_blank">goodspark*</a><br />
                This website is partially supported by a grant from the <a href="http://www.arts.illinois.gov" target="_blank">Illinois Arts Council</a>, a state agency.
            </div>

            <a href="https://www.facebook.com/aviya.kushner" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-fb.png" alt="Facebook" /></a> <a href="https://twitter.com/AviyaKushner" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-tw.png" alt="Twitter" /></a>
   	  </div>
    </div>    
<?php wp_footer(); ?>

</body>
</html>