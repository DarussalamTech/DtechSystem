<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'darussal_wor0232');

/** MySQL database username */
define('DB_USER', 'darussal_wor0232');

/** MySQL database password */
define('DB_PASSWORD', '03b7TKz8');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', ';-VL@%{I;NmReFEeir}WnD_[lIJrcXEt@MYb>}[IcWDY)J/VlacjaLBgSqMO*TF|*UrJP_E{GhKxT$YYKnnWhm<cOeBsH+qI/=Www/}eFQ_Stw}(fAEOoylY?APv$C!A');
define('SECURE_AUTH_KEY', 'NFDMkfmmS_xw+uQ<R-d]N&{Oiyjy@jP$(Ds?u^Fw*zj/wrHVBl!br</}ufiS>kRqkEAb}/pIuOboXPw}mXxvKdlZ-Eeg|gegU(e$<riQ*x>]nZKc{S-Kr)>gZP!wKT]T');
define('LOGGED_IN_KEY', 'NkR}/VN[Vk$=eMNo|unEGoqcjdF<^V%/TDcq;cAOB%CMxgkzewk+tOH+QBPXvu_I?UEF/Gp&;uCr]$lvqKNRbfZ?dig%WSA}?x>N^_HM<tVqAHzFkwyj@dJ?tW-|Vpo<');
define('NONCE_KEY', ';O&Oanrt>)}^JShyKUbA(yWMMOFbUNo|S>^&Yt<RKzNu)*p%_a=Z-TdFDGgG))<r*z]%f(n<nbcRg*]oVz(RB&qiOE&F$S(VQ+zhrs&LaV>t*kwVy]XVasROSltJVVzP');
define('AUTH_SALT', 'c){O+/-<EqjnK;hxj}+KCamHf)Gvq<|ok><lecnv]L!+{W/b!TOfi(ZI>xVB*HajJtA}ex^OxX>By@rrz]I{=XX[E^teZbQ[>JXKllbw$maEoyUd|g*fvjXcc^rgR$eP');
define('SECURE_AUTH_SALT', 'VS*MQOqFQX|w/s[Ey?m^f*{DMl=_anTn<?HsB$g?I>HevCubiDuNLJlING@/GITFC[WAGzb@rn^nstZ[]^C+g;apmo+CzbVdiio;&gXgOM{*TbWHkt%ucHlWX/T(Ld$i');
define('LOGGED_IN_SALT', 'IczZOYXcd%TJBm|EK)FAkl=%)!^wftpqldVVg{mQ|TFzSQkPNuKqMQ@v&Y]_S|fdEUPZ@fbXHwoyXa%-=o)qhRrl<d|lijKiILqrET^/oZY*OW;la!q[$</nWx{&^)Oy');
define('NONCE_SALT', 'o$uGn$R_}PcfZnvmF<@*CKo=j%Mx{MMg)ZL=uLHV;UoFx_kGxbDIBi;Q)>ihrzEqKj_GN(B};VTP!MRzH>H*a_LtF})f;=KUz-tARWk&Xd[BPLy-j-NhgeBx]dX?$$-?');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_gemb_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
