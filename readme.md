## The SypexGeo Laravel 4.x Package

Determine the City and Country info by IP address.

### Installation

Require the package via composer:

    composer require sorbing/sypex-geo-laravel

Or specify manually the package in `require` section in `composer.json`:

    "sorbing/sypex-geo-laravel": "dev-master"

.. and run:

    composer update

Register the Service Provider in `providers` array in `app/config/app.php`:

    'Sorbing\SypexGeoLaravel\SypexGeoLaravelServiceProvider',

Use the following config in `composer.json` for install `SxGeoCity.dat` database:

    "scripts": {
        "post-update-cmd": [
            "IgI\\SypexGeo\\Composer::installDatabases"
        ]
    },
    "extra": {
        "sypexgeo_remote": "https://sypexgeo.net/files/SxGeoCity_utf8.zip",
        "sypexgeo_local": "app/database/SxGeoCity.dat"
    }

### Usage

Usage the `sypexgeo` service from IoC:

    /** @var \Sorbing\SypexGeoLaravel\SypexGeoService $sypexGeo */
    $sypexGeo = \App::make('sypexgeo');
    
    /** @var \Sorbing\SypexGeoLaravel\Wrappers\GeoDataWrapper $geoData */ 
    $geoData = $sypexGeo->get('1.2.3.4');
    
    echo $geoData->city->nameRu;

