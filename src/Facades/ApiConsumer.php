<?php

namespace Mosaiqo\ApiConsumer\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mosaiqo\ApiConsumer\Router
 */
class ApiConsumer extends Facade
{
	/**
	 * @return string
	 */
	protected static function getFacadeAccessor()
	{
		return 'apiconsumer';
	}
}