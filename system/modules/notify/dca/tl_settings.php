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

$GLOBALS['TL_DCA']['tl_settings']['subpalettes']['notifyAuth'] = 'notifyUsername,notifyPassword';

$GLOBALS['TL_DCA']['tl_settings']['palettes']['__selector__'][] = 'notifyAuth';

$GLOBALS['TL_DCA']['tl_settings']['palettes']['default'] = str_replace('customSections;', 'customSections;{notify_legend:hide},notifyUrl,notifySocketioUrl,notifyAuth;', $GLOBALS['TL_DCA']['tl_settings']['palettes']['default']);

$GLOBALS['TL_DCA']['tl_settings']['fields']['notifyUrl'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['notifyUrl'],
	'inputType'               => 'text',
	'eval'                    => array('rgxp'=>'url', 'trailingSlash'=>true, 'tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_settings']['fields']['notifySocketioUrl'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['notifySocketioUrl'],
	'inputType'               => 'text',
	'eval'                    => array('rgxp'=>'url', 'trailingSlash'=>true, 'tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_settings']['fields']['notifyAuth'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['notifyAuth'],
	'inputType'               => 'checkbox',
	'eval'                    => array('submitOnChange'=>true)
);

$GLOBALS['TL_DCA']['tl_settings']['fields']['notifyUsername'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['notifyUsername'],
	'inputType'               => 'text',
	'eval'                    => array('tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_settings']['fields']['notifyPassword'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['notifyPassword'],
	'inputType'               => 'text',
	'eval'                    => array('tl_class'=>'w50')
);

