<?php get_header(); ?>

<!-- Contacto -->
<section class="prontomarco_contacto">

	<!-- Header -->
	<section class="header container-fluid">
		<div class="row">
			<div class="col-md-12 text-center">
				<img class="img-fluid" 
					src="<?= esc_url( get_stylesheet_directory_uri() ) . '/img/contacto/header-contacto.jpg'; ?>" 
			      	alt="header contacto">
			</div>
		</div>
	</section>
	<!-- Header end -->

	<!-- Formulario -->
	<section class="formulario container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h1>CONTACTANOS</h1>
				<img 
					class="img-fluid transition arrow" 
					src="<?= esc_url( get_stylesheet_directory_uri() ) . '/img/flecha-abajo.png'; ?>" 
			      	alt="flecha abajo categorias">
			</div>

			<div class="col-md-12">

				<form method="post">

					<!-- Nombre -->
					<div class="form-group">
						<label for="name">Nombre</label>
						<input type="text" class="form-control" name="name" placeholder="Ej: Juan Perez">
					</div>
					<!-- Nombre end -->

					<!-- Email -->
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" class="form-control" name="email" placeholder="ej: juanperez@gmail.com">
					</div>
					<!-- Email end -->

					<!-- Telefono -->
					<div class="form-group">
						<label for="phone">Teléfono</label>
						<input type="tel" class="form-control" name="phone" placeholder="ej: 11 5054 2415">
					</div>
					<!-- Telefono end -->

					<!-- Comentarios -->
					<div class="form-group">
						<label for="comments">Comentarios</label>
						<textarea class="form-control" name="comments" rows="5" placeholder="ej: Necesito información..."></textarea>
					</div>
					<!-- Comentarios end -->
					
					<button type="submit" class="btn btn-primary">ENVIAR</button>

				</form>

			</div>	
		</div>
	</section>
	<!-- Formulario end -->

	<!-- Mapa -->
	<section class="mapa container-fluid">
		<div class="row">
			<div class="col-md-12 text-center">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3288.3615368260157!2d-58.55373738477326!3d-34.493717580488166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb076560a8349%3A0x638ecb452b0b2a04!2sPronto%20Marco!5e0!3m2!1ses-419!2sar!4v1635272350599!5m2!1ses-419!2sar" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			</div>
		</div>
	</section>
	<!-- Mapa end -->

	<?php include('inc/iconos.php'); ?>	

	<?php include('inc/newsletter.php'); ?>

</section>
<!-- Contacto end -->

<?php get_footer(); ?>