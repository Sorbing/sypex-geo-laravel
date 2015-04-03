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
		$data = static::$sxGeo->getCityFull($ip);

		if (!$data || !is_array($data)) {
			return false;
		}

		$geoData = new Wrappers\GeoDataWrapper($data);

		return $geoData;
	}
}
