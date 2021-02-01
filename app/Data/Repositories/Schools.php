<?php

namespace App\Data\Repositories;

use App\Data\Models\School;
use Geocoder\Exception\NoResult;
use Geocoder\Provider\GoogleMaps;
use Ivory\HttpAdapter\CurlHttpAdapter;

class Schools extends Repository
{
    protected $geocoder;

    public function __construct()
    {
        $curl = new CurlHttpAdapter();
        $this->geocoder = new GoogleMaps(
            $curl,
            'pt-BR',
            'BR',
            true,
            config('services.gooleMaps.key')
        );
    }

    protected function compare($a, $b)
    {
        $a = mb_strtolower($this->translit($a));
        $b = mb_strtolower($this->translit($b));

        $a = str_replace('morais', 'moraes', $a);
        $b = str_replace('morais', 'moraes', $b);

        $a = str_replace('paraty', 'parati', $a);
        $b = str_replace('paraty', 'parati', $b);

        return $a == $b;
    }

    protected function geolocate($school)
    {
        $school = $this->geolocateByAddress($school);

        if (!$school->latitude) {
            $school = $this->geolocateByZipCode($school);

            if (!$school->latitude) {
                $this->geolocateByCity($school);
            }
        }
    }

    public function geolocateByAddress($school)
    {
        return $this->findGeolocation($school, $school->address);
    }

    protected function geolocateByCity($school)
    {
        return $this->findGeolocation($school, $school->city);
    }

    public function geolocateByZipCode($school)
    {
        return $this->findGeolocation($school, $school->zip_code);
    }

    public function findGeolocation($school, $data)
    {
        try {
            $addresses = $this->geocoder->geocode($data);
        } catch (NoResult $exception) {
            return $school;
        }

        $school->geolocation = json_encode(
            $this->geolocationToArray($addresses)
        );

        foreach ($addresses as $address) {
            if ($this->isSameAddress($address, $school)) {
                $school->latitude = $address->getCoordinates()->getLatitude();
                $school->longitude = $address->getCoordinates()->getLongitude();

                break;
            }
        }

        $school->save();

        echo "$school->name<br>";

        $this->obFlush();

        return $school;
    }

    public function geolocateAll()
    {
        ob_start();

        foreach (School::all() as $school) {
            if ($school->address && !$school->latitude) {
                $this->geolocate($school);
            }
        }

        ob_end_clean();
    }

    protected function geolocationToArray($addresses)
    {
        $result = [];

        foreach ($addresses as $address) {
            $result[] = [
                'coordinates' => [
                    'latitude' => $address->getCoordinates()->getLatitude(),
                    'longitude' => $address->getCoordinates()->getLongitude(),
                ],

                'bounds' => [
                    'south' => $address->getBounds()->getSouth(),
                    'west' => $address->getBounds()->getWest(),
                    'north' => $address->getBounds()->getNorth(),
                    'east' => $address->getBounds()->getEast(),
                ],

                'streetNumber' => $address->getStreetNumber(),
                'streetName' => $address->getStreetName(),
                'subLocality' => $address->getSubLocality(),
                'locality' => $address->getLocality(),
                'postalCode' => $address->getPostalCode(),

                'adminLevels' => $this->getAdminLevels($address),

                'country' => [
                    'name' => $address->getCountry()->getName(),
                    'code' => $address->getCountry()->getCode(),
                ],

                'timezone' => $address->getTimezone(),
            ];
        }

        return $result;
    }

    protected function getAdminLevels($address)
    {
        $result = [];

        foreach ($address->getAdminLevels() as $adminLevel) {
            $result = [
                'level' => $adminLevel->getLevel(),
                'name' => $adminLevel->getName(),
                'code' => $adminLevel->getCode(),
            ];
        }

        return $result;
    }

    protected function isSameAddress($address, $school)
    {
        if ($this->compare($address->getLocality(), $school->city)) {
            return true;
        }

        foreach ($address->getAdminLevels() as $adminLevel) {
            if ($this->compare($adminLevel->getName(), $school->city)) {
                return true;
            }
        }

        return false;
    }

    protected function obFlush()
    {
        ob_flush();
        flush();
    }

    protected function translit($string)
    {
        $string = str_replace('\n', '', $string);

        return mb_strtolower(iconv('utf8', 'ASCII//TRANSLIT', $string));
    }
}

function getJsonData()
{
    $var = get_object_vars($this);
    foreach ($var as &$value) {
        if (is_object($value) && method_exists($value, 'getJsonData')) {
            $value = $value->getJsonData();
        }
    }
    return $var;
}
