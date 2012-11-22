<?php
/**
 * Contao Open Source CMS
 *
 * Copyright (C) 2005-2012 Leo Feyer
 *
 * @package   Notify
 * @author    Simon Kusterer
 * @license   MIT
 * @copyright Simon Kusterer 2012
 */

$GLOBALS['TL_DCA']['tl_layout']['palettes'] = str_replace(',head;', ',head,addNotify;', $GLOBALS['TL_DCA']['tl_layout']['palettes']);

$GLOBALS['TL_DCA']['tl_layout']['fields']['addNotify'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_layout']['addNotify'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'sql'                     => "char(1) NOT NULL default ''"
);