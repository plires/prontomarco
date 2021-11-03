<?php

/**
 * Función para capturar los valores del
 * formulario de newsletter del website.
 *
 * Los datos son enviados por email a la tienda
 */
function procesar_formulario_newsletter() {

	global $wpdb;
	$url = $_SERVER['HTTP_REFERER'];
	$actual_url = explode("?", $url);
	$origin = 'Ecommerce - ' . $actual_url[0];

	// Verificamos el campo
	$errors_newsletter = checkTheFormNewsletter($_POST, $actual_url[0]);

	if (!$errors_newsletter) {

		/* Verificar si el email se encuentra en la tabla */
		$email_not_found_in_database = searchEmailInBDD($wpdb, 'lc_newsletters', $_POST['email']);

		if (!$email_not_found_in_database) {

			saveNewsletterInDatabase($wpdb, $_POST, $actual_url[0]); // Salvamos el registro en la tabla

			// AddEmailToPerfit($origin, $_POST['email']); // Alta en Sistema Perfit

			sendEmail('Cliente', 'Newsletter Cliente', $_POST, $actual_url[0]); // Enviar email Cliente
			sendEmail('Usuario', 'Newsletter Usuario', $_POST, $actual_url[0]); // Enviar email Usuario

			/* Redireccionar al usuario a la misma u a otra nueva página con una variable de éxito.	*/
			wp_redirect( $actual_url[0] . '?exito=1' . '#newsletter'); exit;

		} else {

		// Enviamos al usuario a la misma página con una variable GET de error.
			wp_redirect( add_query_arg( 
				array( 
					'errors_newsletter["repeat"]' => "Este email ya esta registrado", 
					'form_newsletter["name"]' => $_POST['name'],
					'form_newsletter["email"]' => $_POST['email']
				), 
				$actual_url[0] . '#newsletter') ); 
			exit;

		}
		
	} else {

		// Enviamos al usuario a la misma página con una variable GET de error.
		wp_redirect( add_query_arg( array( 
			'form_newsletter["name"]' => $_POST['name'] ,
			'form_newsletter["email"]' => $_POST['email'] ,
			'errors_newsletter["name"]' => $errors_newsletter['name'] ,
			'errors_newsletter["email"]' => $errors_newsletter['email'],
		), $actual_url[0] . '#newsletter') );

		exit;

	}
	
}

add_action('admin_post_nopriv_newsletter', 'procesar_formulario_newsletter');
add_action('admin_post_newsletter', 'procesar_formulario_newsletter');