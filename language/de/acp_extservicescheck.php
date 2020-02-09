<?php
/**
*
* @package Extension .yml Check Extension
* @copyright (c) 2019 david63
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

/// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'COMMON_ERRORS'					=> 'Häufige Fehler',
	'COMMON_ERRORS_EXPLAIN'			=> 'Einige der häufig auftretenden Fehler, welche oben gemeldet werden, können möglicherweise, aber nicht ausschließlich, folgende Gründe haben:<hr>- Ein einfaches Anführungszeichen fehlt, wenn anführend entweder ein “@” oder “%” steht<br>- “pattern” wurde ersetzt durch “path”<br>- “scope: prototype” wurde zu “shared: false”<br>- “scope: container” wurde zu “shared: true”<br>- “scope: request” wurde ebenfalls geändert, muss aber noch genauer geprüft werden, was die korrekte Ersetzung im jeweiligen Fall sein muss<br>- Der Namespace einer Erweiterung wird als fehlerhaft gemeldet, wenn er einen Unterstrich enthält.<hr>Wenn nicht sicher ist, was geändert werden sollte, oder wie es geändert werden sollte, dann prüfe zunächst, ob es eine aktualisierte Version der Extension gibt, und wenn nicht, kontaktiere den Entwickler im Supportthema der Erweiterung.',
	'CONFIG_FILE_FAIL'				=> '<strong>Die Datei <em>%s</em> ist fehlerhaft.</strong>',
	'CONFIG_FILE_PASS'				=> 'Die Datei <em>%s</em> ist gültig.',
	'COPY_CLIPBOARD'				=> 'In die Zwischenablage kopieren',

	'DISABLED'						=> 'Deaktiviert',
	'DISABLE_EXPLAIN'				=> 'Wenn du hier klickst, wird die Erweiterung deaktiviert.',
	'DORMANT'						=> 'Ruhend',

	'ENABLED'						=> 'Aktiviert',
	'ERROR_EXPLAIN'					=> 'Gibt eine Erweiterung an, bei der mindestens eine der .yml-Dateien eine ungültige Syntax zu enthalten scheint.',
	'EXTENSION_NAME'				=> 'Erweiterungsname',
	'EXTENSION_QUERY_EXPLAIN'		=> 'Es gibt eine Abfrage mit einer oder mehreren Dateien in dieser Erweiterung.',
	'EXT_SERVICES_CHECK'			=> 'Extensions .yml Files Syntax Check',
	'EXT_SERVICES_CHECK_EXPLAIN'	=> 'Diese Erweiterung wird die Syntax aller <em>.yml</em> Dateien prüfen, für alle Erweiterungen dieses Boards, bezüglich der Kompatibilität mit phpBB 3.3.<br>Außerdem wird der Namespace der Erweiterung auf aktuelle und zukünftige Kompatibilität überprüft.
  <br><br>Die Ergebnisse der Prüfung durch diese Erweiterung garantieren <strong>NICHT</strong>, dass die fraglichen Erweiterungen in jeder Weise mit phpBB 3.3 kompatibel sind, und sie garantieren auch nicht, dass es nicht noch andere Probleme mit den <em>.yml</em> Dateien geben könnte.<br><br>Hinweis: Eine als “Ruhend”  bezeichnete Erweiterung ist eine, die sich im Ordner <em>ext</em> befindet, aber weder aktiviert, noch deaktiviert (also nicht installiert) ist.',
	'EXT_STATUS'					=> 'Erweiterungsstatus',

	'FILE_EMPTY'					=> 'Die Datei <em>%s</em> ist leer.',
	'FILE_ERROR'					=> 'Der folgende Fehler wurde erkannt, wenn auf %1$s zugegriffen wird<br>Error: %2$s',
	'FILE_EXPLAIN'					=> 'Wenn du hier klickst, wird das “vorher” and “nachher” der Dateiformatierung geöffnet.',
	'FILE_NOT_ACCESSIBLE'			=> 'Auf die Datei <em>%s</em> kann nicht zugeriffen werden.',
	'FILE_NOT_READABLE'				=> 'Die Datei <em>%s</em> ist nicht lesbar.',
	'FILE_OPEN_EXPLAIN'				=> 'Wenn du hier klickst, wird das “vorher” and “nachher” der Dateiformatierung geschlossen.',
	'FILE_QUERY_EXPLAIN'			=> 'Es gibt eine Abfrage mit dieser Datei.',

	'ICON_EXTN_DISABLE'				=> 'Deaktiviere diese Erweiterung',
	'ICON_EXTN_ERROR'				=> 'Diese Erweiterung scheint Fehler aufzuweisen.',
	'ICON_EXTN_OK'					=> 'Diese Erweiterung scheint korrekt zu sein.',
	'ICON_EXTN_QUERY'				=> 'Es gibt eine Abfrage mit einer oder mehreren Dateien in dieser Erweiterung.',
	'ICON_FILE_CLOSED'				=> 'Klicke hier, um die Dateien anzuzeigen',
	'ICON_FILE_OPEN'				=> 'Klicke hier, um die Dateien zu schließen',
	'ICON_FILE_QUERY'				=> 'Es gibt eine Abfrage mit dieser Datei.',
	'INVALID_CHRACTERS'				=> 'Der Namespace <em>%s</em> enthält ungültige Zeichen.',

	'LEGEND'						=> 'Legende',

	'NEW_FILE'						=> 'Neuformatierte Datei',
	'NO_CONFIG_FILES'				=> 'Diese Erweiterung besitzt keine Konfigurationsdateien.',

	'OK_EXPLAIN'					=> 'Diese Erweiterung scheint OK zu sein.',
	'ORIGINAL_FILE'					=> 'Originaldatei',

	'REQUIRES_ATTENTION'			=> '&nbsp;#Diese Zeile erfordert Aufmerksamkeit',

	'STATUS'						=> '.yml Dateistatus',

	'VENDOR'						=> 'Vendor',
));
