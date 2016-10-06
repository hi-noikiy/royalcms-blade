<?php namespace Royalcms\Component\Blade\Facades;

use Royalcms\Component\Support\Facades\Facade;

/**
 * @see \Royalcms\Component\View\Compilers\BladeCompiler
 */
class Blade extends Facade {

	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor()
	{
		return static::$royalcms['view']->getEngineResolver()->resolve('blade')->getCompiler();
	}

}
