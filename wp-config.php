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
define( 'DB_NAME', 'sql2381381' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'sql2381381' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'rZ6*pC2!' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'sql2.freesqldatabase.com' );

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
define( 'AUTH_KEY',         '-S.&F0+Ro5bEU*J}4RExPW;M4OjT~MijxxLM*wQyL}$Ep[&hw+1?a;g4%C*@jD14' );
define( 'SECURE_AUTH_KEY',  '+vzP20hs-`Qtp?&2Ej8q[mE;?tyjs<l!;@I;l@|OU+3zL4fX&9WB*I;STA1?m*%`' );
define( 'LOGGED_IN_KEY',    'G6M0Te,RI-+a:0[)051tyt_LntnGRSgvG0#rVUPjhc1d0(K^S}nv4WU7AcP/X4wz' );
define( 'NONCE_KEY',        'l*d3)CGldv`iwbA`<H/./n})l_KyYqZ.vjWHZ =MPV8~Y!V[fP#G|c?,UmaiOaGo' );
define( 'AUTH_SALT',        'V#UI5n/LR?AV=:&H%h{l<%}vC.K>oNgeF)~V^y*vH:DW.6t2f616h;my=f9qb&*S' );
define( 'SECURE_AUTH_SALT', '8hs13^q{w](^6HL]!5,C9+//z[>0Y7&yqxK%.Ij)jyt,R%R{b@Q[hc=:da5cMr=F' );
define( 'LOGGED_IN_SALT',   'Cz|<|orb$2OSNwP%P+Zuly*2)E&Aq8uVD2]7nSUqW~,5@k`FjcUv+cM>ybO=s|iw' );
define( 'NONCE_SALT',       'Yq+02cCR<p>.ex8+fWyiArS3aTZ---c?pXiW_;feeA/p.OtB]BX xbQO{}HR(u6?' );
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
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
