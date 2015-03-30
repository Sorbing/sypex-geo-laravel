<?php

namespace Sorbing\SypexGeoLaravel;

class SypexGeoService
{
	/**
	 * @var \IgI\SypexGeo\SxGeo
	 */
	private static $sxGeo;

	public function __construct($dbFile = null)
	{
		$dbFile = $dbFile ?: \Config::get('sypexgeo::db_path');

		static::$sxGeo = new \IgI\SypexGeo\SxGeo($dbFile);
	}

	public static function get($ip)
	{
		$geoData = new Wrappers\GeoDataWrapper(static::$sxGeo->getCityFull($ip));

		return $geoData;
	}
}
