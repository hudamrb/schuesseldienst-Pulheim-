<?php
define( 'WP_CACHE', false); 
/**
 * Grundeinstellungen für WordPress
 *
 * Zu diesen Einstellungen gehören:
 *
 * * MySQL-Zugangsdaten,
 * * Tabellenpräfix,
 * * Sicherheitsschlüssel
 * * und ABSPATH.
 *
 * Mehr Informationen zur wp-config.php gibt es auf der
 * {@link https://codex.wordpress.org/Editing_wp-config.php wp-config.php editieren}
 * Seite im Codex. Die Zugangsdaten für die MySQL-Datenbank
 * bekommst du von deinem Webhoster.
 *
 * Diese Datei wird zur Erstellung der wp-config.php verwendet.
 * Du musst aber dafür nicht das Installationsskript verwenden.
 * Stattdessen kannst du auch diese Datei als wp-config.php mit
 * deinen Zugangsdaten für die Datenbank abspeichern.
 *
 * @package WordPress
 */
// ** MySQL-Einstellungen ** //
/**   Diese Zugangsdaten bekommst du von deinem Webhoster. **/
/**
 * Ersetze datenbankname_hier_einfuegen
 * mit dem Namen der Datenbank, die du verwenden möchtest.
 */
define('DB_NAME', 'web59_db1');
/**
 * Ersetze benutzername_hier_einfuegen
 * mit deinem MySQL-Datenbank-Benutzernamen.
 */
define('DB_USER', 'web59_db1');
/**
 * Ersetze passwort_hier_einfuegen mit deinem MySQL-Passwort.
 */
define('DB_PASSWORD', 'z$v8_yaP7zdK');
/**
 * Ersetze localhost mit der MySQL-Serveradresse.
 */
define('DB_HOST', 'localhost');
/**
 * Der Datenbankzeichensatz, der beim Erstellen der
 * Datenbanktabellen verwendet werden soll
 */
define('DB_CHARSET', 'utf8mb4');
/**
 * Der Collate-Type sollte nicht geändert werden.
 */
define('DB_COLLATE', '');
/**#@+
 * Sicherheitsschlüssel
 *
 * Ändere jeden untenstehenden Platzhaltertext in eine beliebige,
 * möglichst einmalig genutzte Zeichenkette.
 * Auf der Seite {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * kannst du dir alle Schlüssel generieren lassen.
 * Du kannst die Schlüssel jederzeit wieder ändern, alle angemeldeten
 * Benutzer müssen sich danach erneut anmelden.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'AV*EYnFUr,xt$x) nrQZ{}v%SZ<J;|#>LNX-D2^F~]t~}+pr0B3g4^b(!*L[rsib');
define('SECURE_AUTH_KEY',  '_w3OlV]Qh|C>bDI!7%ON.Lm(r_LX^t##-b6wQlYeqG@Q2D@pK)?VH45jR@lN3$di');
define('LOGGED_IN_KEY',    '3F=QE<k%Yk8>85lp)9eG!Of!rLfrzq6Ssujoc=g*24<E-x?*raUpPRo,}-;1j{l@');
define('NONCE_KEY',        'W}S83CLMPtzg0E]w9 iwob8Q7$}:t`gL,#5vSXq;;K6{afv!=$BWc/+iho(p1^wW');
define('AUTH_SALT',        '%{&(#kkC>ic$MdD1T9`*ZFh/<5V*D[yg8#a0KbV6|*9U@#=]+^+BhRR8`Nn>Q~V-');
define('SECURE_AUTH_SALT', 'j>F3)X[pi(;w-&-2;7jqdF3hc*MFwJ/Dqs^e_(2f``ay.^(4= pP*C9Z;nf QPl:');
define('LOGGED_IN_SALT',   'MbfMH04N(CX(is=y+^,Oi zR+,3RZ~f#7{sEDF@,jiuhDl!_<}/Hl7$[v-pQby*A');
define('NONCE_SALT',       'aloG=x]? sONk1RXY%%O*Tu<64Fe$_OzAvaQg:Z$jhst^%3B+^t;fhV~9kg9}oA.');
/**#@-*/
/**
 * WordPress Datenbanktabellen-Präfix
 *
 * Wenn du verschiedene Präfixe benutzt, kannst du innerhalb einer Datenbank
 * verschiedene WordPress-Installationen betreiben.
 * Bitte verwende nur Zahlen, Buchstaben und Unterstriche!
 */
$table_prefix  = 'wp_wordpress';
/**
 * Für Entwickler: Der WordPress-Debug-Modus.
 *
 * Setze den Wert auf „true“, um bei der Entwicklung Warnungen und Fehler-Meldungen angezeigt zu bekommen.
 * Plugin- und Theme-Entwicklern wird nachdrücklich empfohlen, WP_DEBUG
 * in ihrer Entwicklungsumgebung zu verwenden.
 *
 * Besuche den Codex, um mehr Informationen über andere Konstanten zu finden,
 * die zum Debuggen genutzt werden können.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);
/* Das war’s, Schluss mit dem Bearbeiten! Viel Spaß beim Bloggen. */
/* That's all, stop editing! Happy blogging. */
/** Der absolute Pfad zum WordPress-Verzeichnis. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
/** Definiert WordPress-Variablen und fügt Dateien ein.  */
require_once(ABSPATH . 'wp-settings.php');