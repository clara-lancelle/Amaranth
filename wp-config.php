<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wp-market' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'art7h_adminMarket' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'aqwzsx9*A' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'R1-(bL ZT[1MQ`UN+;vTAr7?4Tu2AT32jdt(II#7-${(US[hvc_hW}@11K.srG{d' );
define( 'SECURE_AUTH_KEY',  '5*R>egmM9y1L|E&JkE7j>@FVps4~0oF*j+nJ+6[v_nhm?Tf%AYcyRnY56]ST;0E/' );
define( 'LOGGED_IN_KEY',    'I:YIgbeh|2r@POucxh$Dj #r.g1~%h}*Q.sX9iUKnQse#}:{?>RH?yFThp@Q]E(g' );
define( 'NONCE_KEY',        '1i7;KDlTmy^?/c6nVc-c1Yf.%Z>+le&)D.KH-gZMnijjggQzCM[OL6|&QVs1~.{p' );
define( 'AUTH_SALT',        '=Jrtvc=Idrs+efl`.T{Z(>.{VN};VFx>9}yx{^^IG]G-oO5DSOKnSTTa*zACed#`' );
define( 'SECURE_AUTH_SALT', '0Mi<9N=/.ARvPFX2[s9]#y=>VrdM(.F}<oU>lLc`N7As{IFpmLXY@vc1C{wZR?>P' );
define( 'LOGGED_IN_SALT',   '=g(S<m?T0fb[m|XTWCqXB[%o+J0X/8*#[1%s;{=@],> (BRY),$)ZW@K5!9K1sDx' );
define( 'NONCE_SALT',       'u6C|pe5SQB~OHSq_ruH>.f7|M|nPn5!jW<VEn]?@lO|r~]03:]QGL;9zCl)[Y,?R' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'art7h_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
