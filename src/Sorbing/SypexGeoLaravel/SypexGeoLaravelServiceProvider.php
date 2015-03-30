<?php

namespace Sorbing\SypexGeoLaravel;

use Illuminate\Foundation\Application;
use Illuminate\Support\ServiceProvider;

class SypexGeoLaravelServiceProvider extends ServiceProvider
{
	protected $defer = false;

	public function boot()
	{
		$this->package('Sorbing/SypexGeoLaravel', 'sypexgeo');
	}

	public function register()
	{
		$this->app->bindShared('sypexgeo', function(Application $app) {
			$dbFile = \Config::get('sypexgeo::db_path');

			$service = $app->make('\Sorbing\SypexGeoLaravel\SypexGeoService', [$dbFile]);

			return $service;
		});
	}

	public function provides()
	{
		return ['sypexgeo'];
	}

}
