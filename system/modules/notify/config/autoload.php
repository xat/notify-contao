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

/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'Notify',
));

/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Library
	'Notify\Notify' => 'system/modules/notify/library/Notify/Notify.php',
	'Notify\NotifyHooks' => 'system/modules/notify/classes/NotifyHooks.php'
));
