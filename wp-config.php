<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'ventesite' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '( .rjv<;D=;Gr6WYMI7ZhA>]#!+ks[Sq|TG3*i[|`Xt[A;`P;3C81E%W M(~EN&]' );
define( 'SECURE_AUTH_KEY',  '^|agaG5)f^39d5ohh8bt.GPmxs&iX&WR5;45lpR,^XG[GQ4M%/?8 @xXjEg~LT[S' );
define( 'LOGGED_IN_KEY',    'HI#M<v,=s9j.^]L%plbUPWGFz_g,#jc]!3M^GoYukIF>romm7W?4G;TWV3A3,mPk' );
define( 'NONCE_KEY',        '6P&o0k0nWOw?ihVZ1?vvV?]{XBVN!bwBw6JHCi8*XbD.n,,dfu>$>X_8 7Ok<WNs' );
define( 'AUTH_SALT',        'MBY@}x `G(aTcov6)O`d9MTHGy7M7XKOWPO9ghWpFOWodYitWV-L>NN,k7i/&#py' );
define( 'SECURE_AUTH_SALT', '6I/4icdRbc}RdK$t>m1Re%`i4Rlqv9rBEnMNa}mDybD}r&*g%Bb{O@Aju=;~:2Pb' );
define( 'LOGGED_IN_SALT',   'zg5o.O9}IEXdb!aj$2$wl y+_72@h2h<F8&f~X{:x2GufKLJ~c^:LB#K~!o(0-a$' );
define( 'NONCE_SALT',       ';5CuB6E@%AGu}B?CYCRy~UMP[,,XuT G?U- AV7/9ly,9m-@bC=68Xn.ec+$x@jv' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
