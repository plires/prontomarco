<!-- Newsletter -->
<section id="newsletter" class="newsletter container">

	<div class="row">
		<div class="col-md-12 text-center">

			<?php if ( isset($_GET['errors_newsletter']) ): ?>

				<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<ul>

						<?php foreach ($_GET['errors_newsletter'] as $error): ?>
							<li><?= $error; ?></li>
						<?php endforeach ?>

					</ul>

				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>

				</div>

			<?php endif ?>

			<?php if ( isset($_GET['errors']) ): ?>

				<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<ul>

						<li><?= $_GET['errors']; ?></li>

					</ul>

				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>

				</div>

			<?php endif ?>

			<?php if (isset($_GET['exito'])): ?>
				<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Suscripción <strong>exitosa!</strong>
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>
			<?php endif ?>

			<form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post" class="needs-validation" novalidate>

				<?php wp_nonce_field('graba_newsletter', 'newsletter_nonce'); ?>
				<input type="hidden" name="action" value="newsletter">

				<div class="row">
					<div class="col-lg-3">
						<p>
							Suscribite al NEWSLETTER y enterate de todas las novedades.
						</p>
					</div>

					<div class="col-lg-3 input-group">
						<input 
							type="text" 
							class="form-control" 
							name="name" 
							value="<?php echo ( isset($_GET['name']) ? $_GET['name'] : '' ); ?>" 
							placeholder="Nombre">

						<div class="invalid-feedback">
			        Por favor ingresá tu nombre
			      </div>

					</div>
					<div class="col-lg-3 input-group">
						<input 
							type="email" 
							class="form-control" 
							name="email" 
							value="<?php echo ( isset($_GET['email']) ? $_GET['email'] : '' ); ?>" 
							placeholder="Email">

						<div class="invalid-feedback">
			        Por favor ingresá tu email
			      </div>

					</div>
					<div class="col-lg-3">
						<button class="btn" type="submit">SUSCRIBIRSE</button>
					</div>
				</div>

			</form>

		</div>
	</div>

</section>
<!-- Newsletter end -->