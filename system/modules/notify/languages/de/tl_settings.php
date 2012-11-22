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

$GLOBALS['TL_LANG']['tl_settings']['notify_legend'] = 'Notify';

$GLOBALS['TL_LANG']['tl_settings']['notifyUrl'][0] = 'Notify Bridge Incoming URL';
$GLOBALS['TL_LANG']['tl_settings']['notifyUrl'][1] = 'An diese URL sendet Notify Notifications als POST request.';

$GLOBALS['TL_LANG']['tl_settings']['notifySocketioUrl'][0] = 'Notify Bridge Frontend URL';
$GLOBALS['TL_LANG']['tl_settings']['notifySocketioUrl'][1] = 'Browserseitig werden Notifications ueber diese URL entgegengenommen.';

$GLOBALS['TL_LANG']['tl_settings']['notifyAuth'][0] = 'Basic Authentication';
$GLOBALS['TL_LANG']['tl_settings']['notifyAuth'][1] = 'Soll Contao Basic Authentication verwenden um mit Notify Bridge zu kommunizieren?';

$GLOBALS['TL_LANG']['tl_settings']['notifyUsername'][0] = 'Benutzername';
$GLOBALS['TL_LANG']['tl_settings']['notifyUsername'][1] = 'Basic Authentication Benutzername';

$GLOBALS['TL_LANG']['tl_settings']['notifyPassword'][0] = 'Passwort';
$GLOBALS['TL_LANG']['tl_settings']['notifyPassword'][1] = 'Basic Authentication Passwort';