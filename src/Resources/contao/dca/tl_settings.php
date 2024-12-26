<?php

use Contao\CoreBundle\DataContainer\PaletteManipulator;

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
 * Palette manipulieren
 */

// Contao 4.7  'default' => '{global_legend},adminEmail;{date_legend},dateFormat,timeFormat,datimFormat,timeZone;{backend_legend:hide},doNotCollapse,resultsPerPage,maxResultsPerPage;{frontend_legend},folderUrl,doNotRedirectEmpty;{security_legend:hide},disableRefererCheck,allowedTags;{files_legend:hide},allowedDownload,gdMaxImgWidth,gdMaxImgHeight;{uploads_legend:hide},uploadTypes,maxFileSize,imageWidth,imageHeight;{cron_legend:hide},disableCron;{search_legend:hide},enableSearch,indexProtected;{chmod_legend},defaultUser,defaultGroup,defaultChmod'
// Contao 4.9  'default' => '{global_legend},adminEmail;{date_legend},dateFormat,timeFormat,datimFormat,timeZone;{backend_legend:hide},doNotCollapse,resultsPerPage,maxResultsPerPage;{frontend_legend},folderUrl,doNotRedirectEmpty;{security_legend:hide},disableRefererCheck,allowedTags,allowedAttributes;{files_legend:hide},allowedDownload,gdMaxImgWidth,gdMaxImgHeight;{uploads_legend:hide},uploadTypes,maxFileSize,imageWidth,imageHeight;{cron_legend:hide},disableCron;{chmod_legend},defaultUser,defaultGroup,defaultChmod'
// Contao 4.13 'default' => '{global_legend},adminEmail;{date_legend},dateFormat,timeFormat,datimFormat,timeZone;{backend_legend:hide},doNotCollapse,resultsPerPage,maxResultsPerPage;{security_legend:hide},disableRefererCheck,allowedTags,allowedAttributes;{files_legend:hide},allowedDownload,gdMaxImgWidth,gdMaxImgHeight;{uploads_legend:hide},uploadTypes,maxFileSize,imageWidth,imageHeight;{cron_legend:hide},disableCron;{chmod_legend},defaultUser,defaultGroup,defaultChmod'

if(version_compare(VERSION.BUILD, '4.13.0', '>='))
{
	//echo '<h4>Version >= 4.13.0</h4>'.VERSION.BUILD;
	PaletteManipulator::create()
	    ->addField('characterSet', 'adminEmail', PaletteManipulator::POSITION_AFTER)
	    ->addField('editableFiles', 'allowedDownload', PaletteManipulator::POSITION_AFTER)
	    ->addLegend('timeout_legend', 'uploads_legend', PaletteManipulator::POSITION_AFTER)
	    ->addField('undoPeriod', 'timeout_legend', PaletteManipulator::POSITION_APPEND)
	    ->addField('versionPeriod', 'timeout_legend', PaletteManipulator::POSITION_APPEND)
	    ->addField('logPeriod', 'timeout_legend', PaletteManipulator::POSITION_APPEND)
	    ->addField('sessionTimeout', 'timeout_legend', PaletteManipulator::POSITION_APPEND)
	    ->applyToPalette('default', 'tl_settings');
}
elseif(version_compare(VERSION.BUILD, '4.9.0', '>='))
{
	//echo '<h4>Version >= 4.9.0</h4>';
	PaletteManipulator::create()
	    ->addField('characterSet', 'adminEmail', PaletteManipulator::POSITION_AFTER)
	    ->addField('editableFiles', 'allowedDownload', PaletteManipulator::POSITION_AFTER)
	    ->addLegend('timeout_legend', 'uploads_legend', PaletteManipulator::POSITION_AFTER)
	    ->addField('undoPeriod', 'timeout_legend', PaletteManipulator::POSITION_AFTER)
	    ->addField('versionPeriod', 'undoPeriod', PaletteManipulator::POSITION_AFTER)
	    ->addField('logPeriod', 'versionPeriod', PaletteManipulator::POSITION_AFTER)
	    ->addField('sessionTimeout', 'logPeriod', PaletteManipulator::POSITION_AFTER)
	    ->applyToPalette('default', 'tl_settings');
}
elseif(version_compare(VERSION.BUILD, '4.7.0', '>='))
{
	//echo '<h4>Version >= 4.7.0</h4>';
	PaletteManipulator::create()
	    ->addField('characterSet', 'adminEmail', PaletteManipulator::POSITION_AFTER)
	    ->addField('editableFiles', 'allowedDownload', PaletteManipulator::POSITION_AFTER)
	    ->addLegend('timeout_legend', 'search_legend', PaletteManipulator::POSITION_AFTER)
	    ->addField('undoPeriod', 'timeout_legend', PaletteManipulator::POSITION_AFTER)
	    ->addField('versionPeriod', 'undoPeriod', PaletteManipulator::POSITION_AFTER)
	    ->addField('logPeriod', 'versionPeriod', PaletteManipulator::POSITION_AFTER)
	    ->addField('sessionTimeout', 'logPeriod', PaletteManipulator::POSITION_AFTER)
	    ->applyToPalette('default', 'tl_settings');
}

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
