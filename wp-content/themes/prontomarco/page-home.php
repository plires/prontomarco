<?php get_header(); ?>

<!-- Pop Up -->
<div id="pop_up_overlay"></div>
<?php include('template-parts/pop-up-newsletter.php'); ?>

<!-- Home -->
<section class="prontomarco_home">

	<!-- Slide -->
	<section class="slide_home container-fluid">
		<div class="row">
			<div class="col-sm-12">

				<div id="carouselIndicators" class="carousel slide" data-ride="carousel">

				  <ol class="carousel-indicators">
				    <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
				    <li data-target="#carouselIndicators" data-slide-to="1"></li>
				    <li data-target="#carouselIndicators" data-slide-to="2"></li>
				    <li data-target="#carouselIndicators" data-slide-to="3"></li>
				    <li data-target="#carouselIndicators" data-slide-to="4"></li>
				  </ol>

				  <div class="carousel-inner">

				    <div class="carousel-item active">
				      <img
				      	id="slide_a"  
				      	class="d-block w-100" 
				      	src="#" 
				      	alt="cuadros tiendacuadros a">
				    </div>

				    <div class="carousel-item">
				      <img 
				      	id="slide_b"  
				      	class="d-block w-100" 
				      	src="#" 
				      	alt="cuadros tiendacuadros b">
				    </div>

				    <div class="carousel-item">
				      <img 
				      	id="slide_c"  
				      	class="d-block w-100" 
				      	src="#" 
				      	alt="cuadros tiendacuadros c">
				    </div>

				    <div class="carousel-item">
				      <img 
				      	id="slide_d"  
				      	class="d-block w-100" 
				      	src="#" 
				      	alt="cuadros tiendacuadros d">
				    </div>

				    <div class="carousel-item">
				      <img 
				      	id="slide_e"  
				      	class="d-block w-100" 
				      	src="#" 
				      	alt="cuadros tiendacuadros e">
				    </div>

				  </div>

				  <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Anterior</span>
				  </a>

				  <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Próxima</span>
				  </a>

				</div>
				
			</div>
		</div>
	</section>
	<!-- Slide end -->

	<!-- Categorias -->
	<section class="categorias container">

		<div data-aos="fade-up" class="row">
			<div class="col-md-12 text-center">
				<h2>NUESTRAS CATEGORÍAS</h2>
				<img 
					class="img-fluid transition arrow" 
					src="<?= esc_url( get_stylesheet_directory_uri() ) . '/img/flecha-abajo.png'; ?>" 
			      	alt="flecha abajo categorias">
			</div>
		</div>

		<div data-aos="fade-up" class="row">

			<div class="col-12 col-sm-4">
				<a href="<?php echo esc_url( get_category_link( ID_CATEGORY_ABSTRACTOS ) ); ?>">
					<div class="home_overlay transition"></div>
						<img 
				      	class="img-fluid" 
				      	src="<?= esc_url( get_stylesheet_directory_uri() ) . '/img/home/abstracto.jpg'; ?>" 
				      	alt="cuadros categorias abstractos">
				    <div class="content_title transition">
				    	<h3>ABSTRACTO</h3>
				    </div>
				</a>
			</div>

			<div class="col-12 col-sm-8">
				<a href="<?php echo esc_url( get_category_link( ID_CATEGORY_ANIMALES_PLANTAS ) ); ?>">
					<div class="home_overlay transition"></div>
						<img 
					      	class="img-fluid img_category_mobile" 
					      	src="<?= esc_url( get_stylesheet_directory_uri() ) . '/img/home/animales-mobile.jpg'; ?>" 
					      	alt="cuadros categorias abstractos mobile">
					    <img 
					      	class="img-fluid img_category_desktop" 
					      	src="<?= esc_url( get_stylesheet_directory_uri() ) . '/img/home/animales-desktop.jpg'; ?>" 
					      	alt="cuadros categorias abstractos">
				    <div class="content_title transition">
				    	<h3>ANIMALES & PLANTAS</h3>
				    </div>
				</a>
			</div>

		</div>

		<div data-aos="fade-up" class="row">

			<div class="col-12 col-sm-8">
				<a href="<?php echo esc_url( get_category_link( ID_CATEGORY_BIKES ) ); ?>">
					<div class="home_overlay transition"></div>
						<img 
					      	class="img-fluid img_category_mobile" 
					      	src="<?= esc_url( get_stylesheet_directory_uri() ) . '/img/home/bikes-mobile.jpg'; ?>" 
					      	alt="cuadros categorias bikes mobile">
					    <img 
					      	class="img-fluid img_category_desktop" 
					      	src="<?= esc_url( get_stylesheet_directory_uri() ) . '/img/home/bikes-desktop.jpg'; ?>" 
					      	alt="cuadros categorias bikes">
				    <div class="content_title transition">
				    	<h3>BIKES</h3>
				    </div>
				</a>
			</div>

			<div class="col-12 col-sm-4">
				<a href="<?php echo esc_url( get_category_link( ID_CATEGORY_BLANCO_NEGRO ) ); ?>">
					<div class="home_overlay transition"></div>
						<img 
				      	class="img-fluid" 
				      	src="<?= esc_url( get_stylesheet_directory_uri() ) . '/img/home/byn.jpg'; ?>" 
				      	alt="cuadros categorias blanco y negro">
				    <div class="content_title transition">
				    	<h3>BLANCO & <br>NEGRO</h3>
				    </div>
				</a>
			</div>

		</div>

		<div data-aos="fade-up" class="row">

			<div class="col-12 col-sm-4">
				<a href="<?php echo esc_url( get_category_link( ID_CATEGORY_CONCEPTO ) ); ?>">
					<div class="home_overlay transition"></div>
						<img 
				      	class="img-fluid" 
				      	src="<?= esc_url( get_stylesheet_directory_uri() ) . '/img/home/concepto.jpg'; ?>" 
				      	alt="cuadros categorias concepto">
				    <div class="content_title transition">
				    	<h3>CONCEPTO</h3>
				    </div>
				</a>
			</div>

			<div class="col-12 col-sm-8">
				<a href="<?php echo esc_url( get_category_link( ID_CATEGORY_ILUSTRACION ) ); ?>">
					<div class="home_overlay transition"></div>
						<img 
					      	class="img-fluid img_category_mobile" 
					      	src="<?= esc_url( get_stylesheet_directory_uri() ) . '/img/home/ilustracion-mobile.jpg'; ?>" 
					      	alt="cuadros categorias ilustracion mobile">
					    <img 
					      	class="img-fluid img_category_desktop" 
					      	src="<?= esc_url( get_stylesheet_directory_uri() ) . '/img/home/ilustracion-desktop.jpg'; ?>" 
					      	alt="cuadros categorias ilustracion">
				    <div class="content_title transition">
				    	<h3>ILUSTRACIÓN</h3>
				    </div>
				</a>
			</div>

		</div>

	</section>
	<!-- Categorias end -->

	<!-- Productos -->
	<section data-aos="fade-up" class="mas_vistos container">

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
	<section data-aos="fade-up" class="ofertas container">

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
<!-- Home end -->

<script>
	AOS.init();
</script>

<?php get_footer(); ?>