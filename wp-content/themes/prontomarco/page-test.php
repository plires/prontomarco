<?php get_header(); ?>

<!-- Home -->
<section class="prontomarco_home">



	<!-- Productos -->
	<section class="mas_vistos container">

		<div class="row">
			<div class="col-md-12 text-center">
				<h2>LOS MÁS VISTOS</h2>
				<img 
		      	class="img-fluid arrow" 
		      	src="<?= esc_url( get_stylesheet_directory_uri() ) . '/img/flecha-abajo.png'; ?>" 
		      	alt="flecha abajo categorias">
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12">
				<?php echo do_shortcode( ' [porto_top_rated_products view="products-slider"] ' ); ?>
			</div>
		</div>

	</section>
	<!-- Productos end -->


</section>
<!-- Home end -->

<?php get_footer(); ?>