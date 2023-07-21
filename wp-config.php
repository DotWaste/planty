<?php

// BEGIN iThemes Security - Ne modifiez pas ou ne supprimez pas cette ligne
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Désactivez l’éditeur de code - iThemes Security > Réglages > Ajustements WordPress > Éditeur de code
// END iThemes Security - Ne modifiez pas ou ne supprimez pas cette ligne

define( 'ITSEC_ENCRYPTION_KEY', 'S1peZCNiblZpclttVXwlaHhnJEVXTCNqO2sjP19iTGMweCRDR2RCNztSQnFZbW08cntyWGJLQ1g7IDg4NDUjRg==' );

/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '&{RH8*m`,DV-F>8`bllc.(p2qnBGdK>&k%Ap)z92)JkB1ee<BgqsY?9e~2pzuW!s' );
define( 'SECURE_AUTH_KEY',  'iSMC=Xk5ksC4CMw|YawCme;*CcFB@8Kdz$e1Bu$l`2g(+~z=Z(|.](sf>.R^Z#H>' );
define( 'LOGGED_IN_KEY',    'uwp6z u0z$WD(aJy<[#t&@r?/&hVL]f@JP24KK/,fvVbA!yfHtPRG1G(|v3Pbv<[' );
define( 'NONCE_KEY',        '([2bzQ<Wg$ZR6|c~5Ah)/CUpax%50!l#(KOS32KGhNTiS=}CP^wPOx5IFDWL*{Nh' );
define( 'AUTH_SALT',        'skUL9=fW-w9;LP*fy_:^vcGkyM*tO/0K?yA{$N~`RUuJM1mTBM?61IhZN.9XC7E(' );
define( 'SECURE_AUTH_SALT', '~^hl`V*Nb?mzmL?nU@fL6@hmmhTrIcjJ+#e[q1OsStrHDlfd:$|<iV*`n5+::)k$' );
define( 'LOGGED_IN_SALT',   'RD]ygA62mZzbHt6l$?KRMZDF^F+~:TpEDl6ng@3<(GGG`=**F``atF}Y|rbI@|UC' );
define( 'NONCE_SALT',       'vJKA3c-G3K<;9X ,OS?e:/qW0T44s~*bs$7)?=cPjr-c;7N%|2TI#R2]UDpjk^>{' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
