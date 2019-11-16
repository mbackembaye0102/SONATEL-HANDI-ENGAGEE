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
define( 'DB_NAME', 'sonatelhandiengage' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '1lovem@ty' );

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
define( 'AUTH_KEY',         '/1s/iKR45AZsLySZz {f<apG4]!C<JJL|(&=izrn&wkynq9CjW?<b5mQ+b.RTS5?' );
define( 'SECURE_AUTH_KEY',  '5Mq^=Gzx8=s8nhT|>@75Bw%A,P!+>>vq5!ViakxRc}ogJ^6KLWZ4N*GKg{B<-!{(' );
define( 'LOGGED_IN_KEY',    'ip%uWHn-+6mqZOB:C~A|iMCN}i9H/X>uHK#]C1_|wWA*hHsMig30~ADicX;DcK}@' );
define( 'NONCE_KEY',        '2,swl1bt-OTG85CD(@>JG=;IQ`L{4*(-pEc-8YN{H:!o` tY0_v*ZrF1`A]0z@Q{' );
define( 'AUTH_SALT',        ' MFnE+1Z|il%|6,Sh98+R^DaW85OJf3E})sc:0ia[M;3an|<zJEYo#gU!TYO3YjA' );
define( 'SECURE_AUTH_SALT', 'uUC8>*xT5bIZ7K!in|{<$?yQep+upNm$0`$n7aj8isETJWHXstM;ds$|+G,mUx5>' );
define( 'LOGGED_IN_SALT',   'RRv{lQ?e|i?!c7.Ky1gs0~C?{L]}DN.V{$+(*wzkf:HSa$?49c@W0aJ@OPe=&sT&' );
define( 'NONCE_SALT',       '>z?2vUr_f%ILPu2>9jrkuZD.}X]#EaH,]5R=%F5Uk0B9`N<VD~>[oAk0:nHJ7_;2' );
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

define('FS_METHOD', 'direct');
