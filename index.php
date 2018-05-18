<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Quickly a Blogging Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Quickly Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css" rel="stylesheet">
<link href="<?php bloginfo('template_directory'); ?>/css/style.css" rel="stylesheet">
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
</head>
	
<body>



   
    <div class="col-sm-12 blog-main">
		<?php get_header(); ?>
        <?php if ( have_posts() ) : while ( have_posts() ) :
            the_post(); get_template_part( 'content', get_post_format() );
        endwhile;
    ?>
        <nav>
            <ul class="pager">
                <li><?php next_posts_link( 'Précédent' ); ?></li>
                <li><?php previous_posts_link( 'Suivant' ); ?></li>
            </ul>
            <?php next_posts_link( 'Older posts' ); ?>
<?php previous_posts_link( 'Newer posts' ); ?>s
        <?php   endif; ?> </div> <!-- /.blog-main -->

				<?php get_footer(); ?>

		</div>



</body>
</html>