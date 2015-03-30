<?php

namespace Sorbing\SypexGeoLaravel\Wrappers;

/**
 * Class GeoDataWrapper
 * @package Sorbing\SypexGeoLaravel\Wrappers
 *
 * @property \Sorbing\SypexGeoLaravel\Wrappers\CityWrapper $city
 * @property \Sorbing\SypexGeoLaravel\Wrappers\RegionWrapper $region
 * @property \Sorbing\SypexGeoLaravel\Wrappers\CountryWrapper $country
 */
class GeoDataWrapper extends BaseWrapper
{
    public function __construct(array $data)
    {
        $this->city = new CityWrapper($data['city']);
        $this->region = new RegionWrapper($data['region']);
        $this->country = new CountryWrapper($data['country']);
    }
}