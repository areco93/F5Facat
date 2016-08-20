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
define('DB_NAME', 'f5facat');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY', '3,8 riXbe-kdWkZyf+wKfb]zN,vs%b+Nw?<EfnaXLe;;fE`h*a4:[v*v)D=?RBG|');
define('SECURE_AUTH_KEY', 'u}|~xp%bR#vxgrUN7Q5DQT0 ?+0v1_so~toB]s#P/zvQiYF?[euf8dKZM5<Nwxwb');
define('LOGGED_IN_KEY', 'w5;ox&~d6^i>?8x|J$[w}w9J8;t1L?!<l=^pK@s*aw)T1Z#RUtig({ql$xH.B-#o');
define('NONCE_KEY', 'L;r8hME{<Ia%HoEp%O0o+6U>3HkN.;Sou@Q!kwH#2|][DkBd,4q :)9sUNUJOVX0');
define('AUTH_SALT', ' 2Jsq)zp0w:#Ln_BLtOOj^o^m+LObPRPna{x$D}6E.m(V8v:vG9a0E>ZT%C a@K1');
define('SECURE_AUTH_SALT', ':#<3U4Rb.^JT308kKjmAy4]w~DUHCi@V9=Co-jfAR.EN~ARLgRy6$zY@eeEolCVe');
define('LOGGED_IN_SALT', 't/_KTha18mk2cTVkf~kHjXR.t?Z~&rk,>dNEwaiC.kyb*M(m@u|S@bSmFwA:ku_y');
define('NONCE_SALT', '&xfWP(qCWfgVClP#Y^xQLmC;$.QJ7szYTIacn`*-ToNy*,5s&O5n>ghWANr7Zy }');

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

