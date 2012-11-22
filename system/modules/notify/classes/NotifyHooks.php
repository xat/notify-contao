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
 * Namespace
 */
namespace Notify;

/**
 * Class NotifyHooks
 *
 */
class NotifyHooks
{

	/**
	 * Gets called when a PageRegular
	 * is created
	 * @param object
	 * @param object
	 */
	public function generatePage($objPage, &$objLayout)
	{
		if (!$objLayout->addNotify || !$GLOBALS['TL_CONFIG']['notifySocketioUrl'])
		{
			return;
		}

		$strScript = "<script src='".$GLOBALS['TL_CONFIG']['notifySocketioUrl']."socket.io/socket.io.js'>window.socket = io.connect('".$GLOBALS['TL_CONFIG']['notifySocketioUrl']."');</script>\n";

		if ($objLayout->head)
		{
			$objLayout->head = $strScript . $objLayout->head;
		} else
		{
			$objLayout->head = $strScript;
		}
	}
}
