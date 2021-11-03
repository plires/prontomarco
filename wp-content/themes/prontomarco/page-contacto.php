<?php get_header(); ?>

<?php
	$name = isset($_GET['form']['name']) ? $_GET['form']['name'] : '';
	$email = isset($_GET['form']['email']) ? $_GET['form']['email'] : '';
	$phone = isset($_GET['form']['phone']) ? $_GET['form']['phone'] : '';
	$comments = isset($_GET['form']['comments']) ? $_GET['form']['comments'] : '';
?>

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
	<section id="contacto" class="formulario container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h1>CONTACTANOS</h1>
				<img 
					class="img-fluid transition arrow" 
					src="<?= esc_url( get_stylesheet_directory_uri() ) . '/img/flecha-abajo.png'; ?>" 
			      	alt="flecha abajo categorias">
			</div>

			<div class="col-md-12">

				<?php if (isset($_GET['errors_contact'])): ?>

					<div style="width: 100%;" class="alert alert-danger alert-dismissible fade show" role="alert">
					  <ul>
								
							<?php foreach ($_GET["errors_contact"] as $error): ?>
								<li><?= $error; ?></li>
							<?php endforeach ?>
							 
						</ul>
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>

				<?php endif ?>

				<?php if (isset($_GET['exito_form_contacto'])): ?>
					<div style="width: 100%;" class="alert alert-success alert-dismissible fade show" role="alert">
					  Formulario enviado con éxito!
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>
				<?php endif ?>

				<form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post" class="needs-validation" novalidate>

					<input type="hidden" name="action" value="contacto">
					<?php wp_nonce_field('graba_contacto', 'contacto_nonce'); ?>

					<!-- Nombre -->
					<div class="form-group">

						<label for="name">Nombre</label>

						<input 
							required 
							type="text" 
							class="form-control" 
							name="name" 
							value="<?= $name ?>" 
							placeholder="Ej: Juan Perez">

						<div class="invalid-feedback">
			        Ingresá tu nombre
			      </div>

					</div>
					<!-- Nombre end -->

					<!-- Email -->
					<div class="form-group">

						<label for="email">Email</label>
						<input 
							required 
							type="email" 
							class="form-control" 
							name="email" 
							value="<?= $email ?>" 
							placeholder="ej: juanperez@gmail.com">

						<div class="invalid-feedback">
			        Ingresá tu email
			      </div>

					</div>
					<!-- Email end -->

					<!-- Telefono -->
					<div class="form-group">

						<label for="phone">Teléfono</label>
						<input 
							type="tel" 
							class="form-control" 
							name="phone" 
							value="<?= $phone ?>" 
							placeholder="ej: 11 5054 2415">

					</div>
					<!-- Telefono end -->

					<!-- Comentarios -->
					<div class="form-group">

						<label for="comments">Comentarios</label>
						<textarea 
							required 
							class="form-control" 
							name="comments" rows="5" 
							placeholder="ej: Necesito información..."><?= $comments ?></textarea>

						<div class="invalid-feedback">
			        Ingresá tus comentarios
			      </div>

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