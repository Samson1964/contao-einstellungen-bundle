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
$GLOBALS['TL_DCA']['tl_settings']['palettes']['default'] .= ';{timeout_legend:hide},undoPeriod,versionPeriod,logPeriod,sessionTimeout';

/**
 * fields
 */

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
