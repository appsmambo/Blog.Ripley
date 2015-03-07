<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'blogripley');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '5%%}]kK!ubN{/)s*|vzKk(x|%MyN&D8HhOsQpcw+kUaW5kvVRDDvyAy;Q<;hWFG^');
define('SECURE_AUTH_KEY', '!?KULWs.E1L o!5r=@Q][snZ?aT:Ral12~RWZ]4S6!w}MX_+V.UTG1JZuzk?vc%C');
define('LOGGED_IN_KEY', '35E9-Wc-!kHCca?MbZ&J@$+GpLUKjKec+s&dOt<-dzgpyt9fdWzW11s:|a6/LLU-');
define('NONCE_KEY', '{Kb1Kg~l~%2LS#=n-uS3cqtw?KyuPrGPzgl6fQ+0]6d9~hz(}JP0oGW~/Y%|onI<');
define('AUTH_SALT', 'w&,]Kk;tM]L8pL{:gZu$6`? ,g g!4-{=@H.x%j8;37kVyFwJ@l;T57TGH ^uB[h');
define('SECURE_AUTH_SALT', 'wP|]$61H/X IN<$sk_>8ZStR!|ovn-*Y((.mHeC-n#tPG^!WIp2#v{f$bZ->6f q');
define('LOGGED_IN_SALT', ',YJ!<ZNOJA<A..u|NH+v3p]=+:DFD<zaA?BG-{(m+5:>&oi)4(}ViRB M*Z|ON*&');
define('NONCE_SALT', '+{n0qGxBq5dbts1ki}yEk>`VFEoMfW2@t:#.]M`KLJqs=J/u8+ME;doeBYO *c]]');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

