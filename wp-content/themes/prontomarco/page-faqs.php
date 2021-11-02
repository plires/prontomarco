<?php get_header(); ?>

<!-- FAQS -->
<section class="prontomarco_faqs">

	<!-- Header -->
	<section class="header container-fluid">
		<div class="row">
			<div class="col-md-12 text-center">
				<img class="img-fluid" 
					src="<?= esc_url( get_stylesheet_directory_uri() ) . '/img/faqs/header-faqs.jpg'; ?>" 
			      	alt="header faqs">
			</div>
		</div>
	</section>
	<!-- Header end -->

	<!-- Preguntas frecuentes -->
	<section class="faqs container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h1>PREGUNTAS FRECUENTES</h1>
				<img 
					class="img-fluid transition arrow" 
					src="<?= esc_url( get_stylesheet_directory_uri() ) . '/img/flecha-abajo.png'; ?>" 
			      	alt="flecha abajo categorias">
			</div>

			<div class="row">
				<div class="col-sm-12">
					<?php echo do_shortcode( ' [vc_accordion][vc_accordion_tab title="¿CÓMO COMPRAR?"][vc_column_text]Elegí el producto que querés comprar.No te olvides de elegir el tamaño y el color del marco en los menús desplegables dentro de cada producto. Si estas comprando un set de cuadros, el detalle de las medidas está en la descripción que está debajo del precio y de las opciones de entrega.Hacé clic en el botón de "agregar al carrito". Esto agregará el producto a tu carrito.Podés seguir agregando otros productos al carrito, o sino hacé clic en "iniciar compra".Completá tus datos de contacto y hacé clic en "continuar".Ingresa la dirección donde querés recibir el producto. Luego hacé clic en "continuar".Elegí el método de envío y hacé clic en "continuar". Elegí el medio de pago, puede ser cualquiera de las opciones que ofrece TodoPago, o bien efectivo mediante depósito o transferencia bancaria (los datos bancarios te van a aparecer al final del proceso de compra). Finalmente en la página de confirmación de compra podés revisar toda la información. Luego, hacé clic en "continuar".Ahí serás redirigido a otra pantalla para que completes los datos sobre la forma de pago elegida. Después de confirmar la compra recibirás un correo de nuestra parte con tu número de orden de compra. Si no recibis este mail, escribinos por mail, puede que haya habido un error en el proceso de compra.Una vez acreditado el pago y pasado el tiempo de producción (aproximadamente 10 dias habiles), haremos el envío correspondiente. Nosotros te vamos a contactar por mail para notificarte sobre la entrega o envío.[/vc_column_text][/vc_accordion_tab][vc_accordion_tab title="¿CÓMO SON LOS MARCOS DE NUESTROS CUADROS? (tipo, color, medidas)"][vc_column_text]Tenemos dos tipos de marcos, marco CHATO de 20 x 12 mm y marco BOX de 15 x 35 mm . Los colores son Blanco, Negro y Madera Natural. Nuestros marcos están fabricados en madera Kiry. Nuestras medidas son: 15x20 cm, 20x30 cm, 30x40 cm, 40x50 cm, 40x60 cm y 50x70 cm. Podes consultar por otros tipos de medidas via Mail o Whatsapp.[/vc_column_text][/vc_accordion_tab][vc_accordion_tab title="¿SE PUEDEN HACER MODIFICACIONES EN LOS DISEÑOS?"][vc_column_text] Si estás comprando un set y querés cambiar algunas láminas por otras que estén publicadas en nuestra tienda online, NO HAY PROBLEMA. Hace la compra del set elegido y después pasanos los cambios por mail, junto con tu nro de orden de compra.Si querés hacer un cambio de colores o estás buscando un diseño que no tenemos publicado, consultanos via Mail o Whatssap y te enviamos la cotización del trabajo.[/vc_column_text][/vc_accordion_tab][vc_accordion_tab title="¿CUÁL ES LA DEMORA DE PRODUCCIÓN DE NUESTROS PEDIDOS?"][vc_column_text] Demoramos entre 8 y 12 dias hábiles. Todos los trabajos son artesanales y los preparamos especialmente para vos.En el caso de que necesites la entrega para una fecha particular consultanos via Mail o Whatssap y te responderemos si podemos hacer el trabajo.[/vc_column_text][/vc_accordion_tab][vc_accordion_tab title="¿CUÁLES SON LAS FORMAS DE PAGO? ¿QUÉ PROMOS TENEMOS?"][vc_column_text] Podés pagar con tarjeta de crédito o débito a través de Todo Pago. O bien, en efectivo mediante depósito o transferencia bancaria. Todas estas opciones las vas a encontrar al momento de concretar la compra.En cuanto a los envios, si tu compra es superior a $10.000 pesos el envio es GRATIS.Ofrecemos 6 cuotas sin interés.[/vc_column_text][/vc_accordion_tab][vc_accordion_tab title="¿CUÁLES SON LAS OPCIONES DE ENTREGA / ENVÍO DE LOS PEDIDOS?"][vc_column_text] Nuestro punto de retiro se encuentra en San Isidro y funciona de lunes a viernes de 10 a 18 hs. La dirección es Blanco Encalada 43 (a 1 cuadra de Panamericana y Avenida Marquez)Ingresando la dirección de tu domicilio (o donde quieras recibir el producto) te va a figurar el costo del envio. Durante el proceso de compra vas a poder seleccionar si elegís pasar a retirar el producto o pedir que te lo enviemos a tu domicilio.[/vc_column_text][/vc_accordion_tab][vc_accordion_tab title="¿QUÉ PASA SI SE ROMPE UN CUADRO EN EL VIAJE?"][vc_column_text] Nuestros embalajes son de excelente calidad y hacemos nuestro trabajo lo mejor posible para que no sucedan este tipo de cosas pero en el caso de que se rompa un cuadro en el transcurso del viaje, nosotros nos hacemos cargo de enviarte uno nuevo en perfectas condiciones.[/vc_column_text][/vc_accordion_tab][vc_accordion_tab title="¿HACEN VENTAS POR MAYOR?"][vc_column_text] oSí, hacemos ventas por mayor a negocios, o profesionales del rubro deco como arquitectos/as y decoradores/as. Si te interesa, podes consultarnos via Mail o Whatssap para acceder a nuestros precios por mayor.[/vc_column_text][/vc_accordion_tab][vc_accordion_tab title="¿TU PREGUNTA NO ESTÁ ACÁ?"][vc_column_text] Podes consultar a través del Mail o Whatssap y te responderemos tu duda, muchas gracias![/vc_column_text][/vc_accordion_tab][/vc_accordion] ' ); ?>
				</div>
			</div>	

		</div>
	</section>
	<!-- Preguntas frecuentes end -->

	<?php include('inc/iconos.php'); ?>	

	<?php include('inc/newsletter.php'); ?>

</section>
<!-- FAQS end -->

<?php get_footer(); ?>