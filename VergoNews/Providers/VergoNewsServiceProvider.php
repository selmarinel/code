<?php
namespace App\Modules\VergoNews\Providers;

use App;
use Config;
use Lang;
use View;
use Illuminate\Support\ServiceProvider;

class VergoNewsServiceProvider extends ServiceProvider
{
	/**
	 * Register the VergoNews module service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		// This service provider is a convenient place to register your modules
		// services in the IoC container. If you wish, you may make additional
		// methods or service providers to keep the code more focused and granular.
		App::register('App\Modules\VergoNews\Providers\RouteServiceProvider');
		$this->registerNamespaces();
	}

	/**
	 * Register the VergoNews module resource namespaces.
	 *
	 * @return void
	 */
	protected function registerNamespaces()
	{
		Lang::addNamespace('vergo_news', realpath(__DIR__.'/../Resources/Lang'));
		View::addNamespace('vergo_news', base_path('resources/views/vendor/vergo_news'));
		View::addNamespace('vergo_news', realpath(__DIR__.'/../Resources/Views'));
	}
}
