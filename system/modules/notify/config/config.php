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

$GLOBALS['TL_CONFIG']['notifyUrl']                 = 'http://127.0.0.1:4440';
$GLOBALS['TL_CONFIG']['notifySocketioUrl']         = '';
$GLOBALS['TL_CONFIG']['notifyAuth']                = false;
$GLOBALS['TL_CONFIG']['notifyUsername']            = 'admin';
$GLOBALS['TL_CONFIG']['notifyPassword']            = 'admin';

$GLOBALS['TL_HOOKS']['generatePage'][] = array('\Notify\NotifyHooks', 'generatePage');