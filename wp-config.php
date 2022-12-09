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
define( 'DB_NAME', 'tpwordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '>H1v~~[Gr:odk=A`!DH|B2 ~UCSH>^VvpiJDl{I_Q:G2Q>riAqpb$o&38xex&@1G' );
define( 'SECURE_AUTH_KEY',  ';Gg[nOh q7O)?9mnNPE0Lx,,<)>NkF/x@pPTlh8*|a,{KuY/IQkI]ZgrPl07:cI^' );
define( 'LOGGED_IN_KEY',    'vq#beDdD4[%N,Y4zTlW@#Y%s+rw&=BV5#.zCRDVf#oY9sN78n:0E,%%yP;F+t%?l' );
define( 'NONCE_KEY',        'G9Gs5)Ff 6|N/,aqku9#_9i61YGs&d};Dzhk^bAe0Dp$rNhDa+%B)_ j>2;Q;JT2' );
define( 'AUTH_SALT',        'T`e`|$N+$=-6)0`-ALj2|> =aT<=mhbN$tVR#Mz}&.!R(7YC^k6??TB=yu_J0D|,' );
define( 'SECURE_AUTH_SALT', 'QY{|W2I%J]bgXz%uszX8F<QP5>B~!k!8jJ+qeZrx{xX}_wJ;qUyHHMg8=CP.nNo0' );
define( 'LOGGED_IN_SALT',   '2VvOSLPFb6GvshlAT4Eh/b2@1j TupFa!Hh.;~vA2~QM(918MXRBcQu+bgau[-cw' );
define( 'NONCE_SALT',       'Vh/[l]bc]LC.N%X_mO(17$W+k.4,9Tn`W<:WjDpT[@}5mt=z41v1%r^r5B}|KU3C' );
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
