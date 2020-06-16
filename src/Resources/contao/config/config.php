<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * -------------------------------------------------------------------------
 * Voreinstellungen
 * -------------------------------------------------------------------------
 */

$GLOBALS['TL_CONFIG']['characterSet'] = 'utf-8'; // Zeichensatz

$GLOBALS['TL_CONFIG']['editableFiles'] = 'css,csv,html,ini,js,json,less,md,scss,svg,svgz,txt,xliff,xml,yml,yaml'; // Editierbare Dateien

$GLOBALS['TL_CONFIG']['undoPeriod'] = 86400; // Speicherzeit für Undo-Schritte
$GLOBALS['TL_CONFIG']['versionPeriod'] = 7776000; // Speicherzeit für Versionen
$GLOBALS['TL_CONFIG']['logPeriod'] = 1209600; // Speicherzeit für Log-Einträge
$GLOBALS['TL_CONFIG']['sessionTimeout'] = 3600; // Verfallszeit einer Session
