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
 * Class Notify
 *
 * JSON-RPC Notifications made easy
 */
class Notify
{
	/**
	 * Default Config
	 * @var array
	 */
	protected $cfg;

	/**
	 * Object instance (Singleton)
	 * @var Notify
	 */
	protected static $objInstance;

	/**
	 * Create a new instance
	 */
	function __construct()
	{
		$this->cfg = array(
			'url' => $GLOBALS['TL_CONFIG']['notifyUrl'], // Send the Notifications to this URL
			'auth' => $GLOBALS['TL_CONFIG']['notifyAuth'], // Use Basic Authentification
			'username' => $GLOBALS['TL_CONFIG']['notifyUsername'], // Username for Basic Authentification
			'password' => $GLOBALS['TL_CONFIG']['notifyPassword'], // Password for Basic Authentification
			'fieldName' => 'rpc' // Name of the Form Fieldname
		);
	}

	/**
	 * Instantiate a new Notify object (Factory)
	 *
	 * @return Notify
	 */
	public static function getInstance()
	{
		if (static::$objInstance === null)
		{
			static::$objInstance = new static();
		}

		return static::$objInstance;
	}

	/**
	 * Emit a notification
	 * @param string
	 * @param mixed
	 * @return mixed
	 */
	public function emit($method, $params = false)
	{
		$rpc = new \stdClass();
		$rpc->jsonrpc = '2.0';
		$rpc->method = $method;

		if ($params)
		{
			$rpc->params = $params;
		}

		$post = http_build_query(array
			(
				$this->cfg['fieldName'] => json_encode($rpc)
			)
		);

		if ($this->cfg['auth'])
		{
			$authHeader  = "Authorization: Basic " . base64_encode($this->cfg['username'].':'.$this->cfg['password'])."\r\n";
		} else
		{
			$authHeader = '';
		}

		$context = stream_context_create(array('http' => array
			(
				'method' => 'POST',
				'header' => "Content-Type: application/x-www-form-urlencoded\r\n" .
					$authHeader .
					'Content-Length: '. strlen($post) . "\r\n",
				'content' => $post,
			)
		));

		return @file_get_contents($this->cfg['url'], false, $context);
	}
}
