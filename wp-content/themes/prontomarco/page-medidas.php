<?php get_header(); ?>

<!-- Pop Up -->
<div id="pop_up_overlay"></div>
<?php include('template-parts/pop-up-newsletter.php'); ?>

<!-- Medidas -->
<section class="prontomarco_home prontomarco_medidas">

	<!-- Header -->
	<section class="header container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<img 
	      	class="img-fluid header_medidas" 
	      	src="<?= esc_url( get_stylesheet_directory_uri() ) . '/img/medidas/header-medidas.jpg'; ?>" 
	      	alt="header medidas cuadros">
			</div>
		</div>
	</section>
	<!-- Header end -->

	<!-- Guia de Medidas -->
	<section class="guia_medidas container">

		<div data-aos="fade-up" class="row">
			<div class="col-md-12 text-center">
				<h2>GUÍA DE MEDIDAS</h2>
				<img 
					class="img-fluid transition arrow" 
					src="<?= esc_url( get_stylesheet_directory_uri() ) . '/img/flecha-abajo.png'; ?>" 
			      	alt="flecha abajo categorias">
			</div>
		</div>

		<div data-aos="fade-up" class="row">

			<div class="col-12 image col-sm-8">
				<img 
	      	class="img-fluid" 
	      	src="<?= esc_url( get_stylesheet_directory_uri() ) . '/img/medidas/medidas-un-cuadro.jpg'; ?>" 
	      	alt="medidas aproximadas sofa un cuadro">
			</div>

			<div class="col-12 col-sm-4">
				<div class="datos bg_turquesa">
					<p class="titulo_medida">60x90</p>
					<div class="content">
						<img 
			      	class="img-fluid flecha_izquierda" 
			      	src="<?= esc_url( get_stylesheet_directory_uri() ) . '/img/medidas/flecha-izquierda.png'; ?>" 
			      	alt="flecha izquierda 1">
			      	<p>
			      		sillón de<br>
			      		2 metros<br>
			    	  	aprox.
			    		</p>
					</div>
				</div>
			</div>

		</div>

		<div data-aos="fade-up" class="row">

			<div class="col-12 col-sm-4">
				<div class="datos bg_gold">
					<p class="titulo_medida">50x70</p>
					<div class="content">
						<img 
			      	class="img-fluid flecha_derecha" 
			      	src="<?= esc_url( get_stylesheet_directory_uri() ) . '/img/medidas/flecha-derecha.png'; ?>" 
			      	alt="flecha derecha 1">
			      	<p>
			      		sillón de<br>
								2 metros<br>
								aprox.
			    		</p>
					</div>
				</div>
			</div>

			<div class="col-12 col-sm-8 image">
				<img 
	      	class="img-fluid" 
	      	src="<?= esc_url( get_stylesheet_directory_uri() ) . '/img/medidas/medidas-dos-cuadros.jpg'; ?>" 
	      	alt="medidas aproximadas sofa dos cuadros">
			</div>

		</div>

		<div data-aos="fade-up" class="row">

			<div class="col-12 col-sm-8 image">
				<img 
	      	class="img-fluid" 
	      	src="<?= esc_url( get_stylesheet_directory_uri() ) . '/img/medidas/medidas-tres-cuadros.jpg'; ?>" 
	      	alt="medidas aproximadas sofa tres cuadros">
			</div>

			<div class="col-12 col-sm-4">
				<div class="datos bg_lila">
					<p class="titulo_medida">40x50</p>
					<div class="content">
						<img 
			      	class="img-fluid flecha_izquierda" 
			      	src="<?= esc_url( get_stylesheet_directory_uri() ) . '/img/medidas/flecha-izquierda.png'; ?>" 
			      	alt="flecha izquierda 1">
			      	<p>
			      		sillón de<br>
								2 metros<br>
								aprox.
			    		</p>
					</div>
				</div>
			</div>

		</div>

		<div data-aos="fade-up" class="row">

			<div class="col-12 col-sm-4">
				<div class="datos bg_gris">
					<p class="titulo_medida set_cuadros">SET DE CUADROS</p>
					<div class="content">
						<img 
			      	class="img-fluid flecha_derecha" 
			      	src="<?= esc_url( get_stylesheet_directory_uri() ) . '/img/medidas/flecha-derecha.png'; ?>" 
			      	alt="flecha derecha 1">
			      	<p>
			      		sillón de <br>
								2,5 metros <br>
								aprox.
			    		</p>
					</div>
				</div>
			</div>

			<div class="col-12 col-sm-8 image">
				<img 
	      	class="img-fluid" 
	      	src="<?= esc_url( get_stylesheet_directory_uri() ) . '/img/medidas/medidas-tres-cuadros-bis.jpg'; ?>" 
	      	alt="medidas aproximadas sofa tres cuadros bis">
			</div>

		</div>

	</section>
	<!-- Guia de Medidas end -->

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
				<?php echo do_shortcode( ' [porto_products view="products-slider"] ' ); ?>
			</div>
		</div>

	</section>
	<!-- Productos end -->

	<!-- Ofertas -->
	<section class="ofertas container">

		<div class="row">
			<div class="col-md-12 text-center">
				<h2>DESTACADOS</h2>
				<img 
		      	class="img-fluid arrow" 
		      	src="<?= esc_url( get_stylesheet_directory_uri() ) . '/img/flecha-abajo.png'; ?>" 
		      	alt="flecha abajo ofertas">
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12">
				<?php echo do_shortcode( ' [porto_top_rated_products view="products-slider"] ' ); ?>
			</div>
		</div>

	</section>
	<!-- Ofertas end -->

	<?php include('inc/iconos.php'); ?>	

	<?php include('inc/newsletter.php'); ?>

</section>
<!-- Medidas end -->

<script>
	AOS.init({
    once: true
  });
</script>

<?php get_footer(); ?>