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
    /**
     * @param array $data ['city' => array, 'region' => array, 'country' => array]
     */
    public function __construct(array $data)
    {
        $this->city = new CityWrapper(isset($data['city']) ? $data['city'] : []);
        $this->region = new RegionWrapper(isset($data['region']) ? $data['region'] : []);
        $this->country = new CountryWrapper(isset($data['country']) ? $data['country'] : []);
    }
}