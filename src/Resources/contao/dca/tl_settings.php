<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 *
 * Copyright (C) 2005-2016 Leo Feyer
 *
 * @package   fen
 * @author    Frank Hoppe
 * @license   GNU/LGPL
 * @copyright Frank Hoppe 2013
 */

/**
 * palettes
 */

$suchen = array
(
	',adminEmail;', // Zeichensatz hier anhängen
	',allowedDownload', // Editierbare Dateien
	',indexProtected;' // Speicherzeiten hier anhängen
);

$ersetzen = array
(
	',adminEmail,characterSet;', // Zeichensatz
	',allowedDownload,editableFiles', // Editierbare Dateien
	',indexProtected;{timeout_legend:hide},undoPeriod,versionPeriod,logPeriod,sessionTimeout;' // Speicherzeiten
);

// Ersetzungen vornehmen (Ersetzung ab Contao 4.7.0)
$GLOBALS['TL_DCA']['tl_settings']['palettes']['default'] = str_replace($suchen, $ersetzen, $GLOBALS['TL_DCA']['tl_settings']['palettes']['default']);

/**
 * fields
 */

$GLOBALS['TL_DCA']['tl_settings']['fields']['characterSet'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['characterSet'],
	'inputType'               => 'text',
	'eval'                    => array('mandatory'=>true, 'rgxp'=>'alnum', 'nospace'=>true, 'tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_settings']['fields']['editableFiles'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['editableFiles'],
	'inputType'               => 'text',
	'eval'                    => array('tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_settings']['fields']['undoPeriod'] = array
( 
	'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['undoPeriod'],
	'inputType'               => 'text',
	'eval'                    => array('mandatory'=>true, 'rgxp'=>'natural', 'nospace'=>true, 'tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_settings']['fields']['versionPeriod'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['versionPeriod'],
	'inputType'               => 'text',
	'eval'                    => array('mandatory'=>true, 'rgxp'=>'natural', 'nospace'=>true, 'tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_settings']['fields']['logPeriod'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['logPeriod'],
	'inputType'               => 'text',
	'eval'                    => array('mandatory'=>true, 'rgxp'=>'natural', 'nospace'=>true, 'tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_settings']['fields']['sessionTimeout'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['sessionTimeout'],
	'inputType'               => 'text',
	'eval'                    => array('mandatory'=>true, 'rgxp'=>'natural', 'minlength'=>3, 'nospace'=>true, 'tl_class'=>'w50')
);
