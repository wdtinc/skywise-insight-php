<?php

class InsightAPI
{
    const GROWING_DEGREE_DAYS = 'growing-degree-days';
    const COOLING_DEGREE_DAYS = 'cooling-degree-days';
    const HEATING_DEGREE_DAYS = 'heating-degree-days';
    const DAILY_PRECIPITATION = 'daily-precipitation';
    const HOURLY_PRECIPITATION = 'hourly-precipitation';
    const HOURLY_RELATIVE_HUMIDITY = 'hourly-relative-humidity';
    const DAILY_SOLAR_RADIATION = 'daily-solar-radiation';
    const HOURLY_SOLAR_RADIATION = 'hourly-solar-radiation';
    const HOURLY_TEMPERATURE = 'hourly-temperature';
    const DAILY_HIGH_TEMPERATURE = 'daily-high-temperature';
    const DAILY_LOW_TEMPERATURE = 'daily-low-temperature';
    const HOURLY_DEWPOINT = 'hourly-dewpoint';
    const HOURLY_WIND_SPEED = 'hourly-wind-speed';
    const HOURLY_WIND_DIRECTION = 'hourly-wind-direction';

    const BASE_URL = 'https://insight.api.wdtinc.com';

    protected $appId;
    protected $appKey;

    public function growingDegreeDaysByPoint($lat, $lon, $params = null)
    {
        $endpoint = self::GROWING_DEGREE_DAYS;

        return $this->callByPoint($endpoint, $lat, $lon, $params);
    }

    public function coolingDegreeDaysByPoint($lat, $lon, $params = null)
    {
        $endpoint = self::COOLING_DEGREE_DAYS;

        return $this->callByPoint($endpoint, $lat, $lon, $params);
    }

    public function heatingDegreeDaysByPoint($lat, $lon, $params = null)
    {
        $endpoint = self::HEATING_DEGREE_DAYS;

        return $this->callByPoint($endpoint, $lat, $lon, $params);
    }

    public function dailyPrecipitationByPoint($lat, $lon, $params = null)
    {
        $endpoint = self::DAILY_PRECIPITATION;

        return $this->callByPoint($endpoint, $lat, $lon, $params);
    }

    public function hourlyPrecipitationByPoint($lat, $lon, $params = null)
    {
        $endpoint = self::HOURLY_PRECIPITATION;

        return $this->callByPoint($endpoint, $lat, $lon, $params);
    }

    public function hourlyRelativeHumidityByPoint($lat, $lon, $params = null)
    {
        $endpoint = self::HOURLY_RELATIVE_HUMIDITY;

        return $this->callByPoint($endpoint, $lat, $lon, $params);
    }

    public function dailySolarRadiationByPoint($lat, $lon, $params = null)
    {
        $endpoint = self::DAILY_SOLAR_RADIATION;

        return $this->callByPoint($endpoint, $lat, $lon, $params);
    }

    public function hourlySolarRadiationByPoint($lat, $lon, $params = null)
    {
        $endpoint = self::HOURLY_SOLAR_RADIATION;

        return $this->callByPoint($endpoint, $lat, $lon, $params);
    }

    public function hourlyTemperatureByPoint($lat, $lon, $params = null)
    {
        $endpoint = self::HOURLY_TEMPERATURE;

        return $this->callByPoint($endpoint, $lat, $lon, $params);
    }

    public function dailyHighTemperatureByPoint($lat, $lon, $params = null)
    {
        $endpoint = self::DAILY_HIGH_TEMPERATURE;

        return $this->callByPoint($endpoint, $lat, $lon, $params);
    }

    public function dailyLowTemperatureByPoint($lat, $lon, $params = null)
    {
        $endpoint = self::DAILY_LOW_TEMPERATURE;

        return $this->callByPoint($endpoint, $lat, $lon, $params);
    }

    public function hourlyDewPointByPoint($lat, $lon, $params = null)
    {
        $endpoint = self::HOURLY_DEWPOINT;

        return $this->callByPoint($endpoint, $lat, $lon, $params);
    }

    public function hourlyWindSpeedByPoint($lat, $lon, $params = null)
    {
        $endpoint = self::HOURLY_WIND_SPEED;

        return $this->callByPoint($endpoint, $lat, $lon, $params);
    }

    public function hourlyWindDirectionByPoint($lat, $lon, $params = null)
    {
        $endpoint = self::HOURLY_WIND_DIRECTION;

        return $this->callByPoint($endpoint, $lat, $lon, $params);
    }

    public function growingDegreeDaysByAsset($uuid, $params = null)
    {
        $endpoint = self::GROWING_DEGREE_DAYS;

        return $this->callByAsset($endpoint, $uuid, $params);
    }

    public function coolingDegreeDaysByAsset($uuid, $params = null)
    {
        $endpoint = self::COOLING_DEGREE_DAYS;

        return $this->callByAsset($endpoint, $uuid, $params);
    }

    public function heatingDegreeDaysByAsset($uuid, $params = null)
    {
        $endpoint = self::HEATING_DEGREE_DAYS;

        return $this->callByAsset($endpoint, $uuid, $params);
    }

    public function dailyPrecipitationByAsset($uuid, $params = null)
    {
        $endpoint = self::DAILY_PRECIPITATION;

        return $this->callByAsset($endpoint, $uuid, $params);
    }

    public function hourlyPrecipitationByAsset($uuid, $params = null)
    {
        $endpoint = self::HOURLY_PRECIPITATION;

        return $this->callByAsset($endpoint, $uuid, $params);
    }

    public function hourlyRelativeHumidityByAsset($uuid, $params = null)
    {
        $endpoint = self::HOURLY_RELATIVE_HUMIDITY;

        return $this->callByAsset($endpoint, $uuid, $params);
    }

    public function dailySolarRadiationByAsset($uuid, $params = null)
    {
        $endpoint = self::DAILY_SOLAR_RADIATION;

        return $this->callByAsset($endpoint, $uuid, $params);
    }

    public function hourlySolarRadiationByAsset($uuid, $params = null)
    {
        $endpoint = self::HOURLY_SOLAR_RADIATION;

        return $this->callByAsset($endpoint, $uuid, $params);
    }

    public function hourlyTemperatureByAsset($uuid, $params = null)
    {
        $endpoint = self::HOURLY_TEMPERATURE;

        return $this->callByAsset($endpoint, $uuid, $params);
    }

    public function dailyHighTemperatureByAsset($uuid, $params = null)
    {
        $endpoint = self::DAILY_HIGH_TEMPERATURE;

        return $this->callByAsset($endpoint, $uuid, $params);
    }

    public function dailyLowTemperatureByAsset($uuid, $params = null)
    {
        $endpoint = self::DAILY_LOW_TEMPERATURE;

        return $this->callByAsset($endpoint, $uuid, $params);
    }

    public function hourlyDewPointByAsset($uuid, $params = null)
    {
        $endpoint = self::HOURLY_DEWPOINT;

        return $this->callByAsset($endpoint, $uuid, $params);
    }

    public function hourlyWindSpeedByAsset($uuid, $params = null)
    {
        $endpoint = self::HOURLY_WIND_SPEED;

        return $this->callByAsset($endpoint, $uuid, $params);
    }

    public function hourlyWindDirectionByAsset($uuid, $params = null)
    {
        $endpoint = self::HOURLY_WIND_DIRECTION;

        return $this->callByAsset($endpoint, $uuid, $params);
    }

    public function growingDegreeDaysContours($uuid, $params = null)
    {
        $endpoint = self::GROWING_DEGREE_DAYS;

        return $this->contoursByAsset($endpoint, $uuid, $params);
    }

    public function coolingDegreeDaysContours($uuid, $params = null)
    {
        $endpoint = self::COOLING_DEGREE_DAYS;

        return $this->contoursByAsset($endpoint, $uuid, $params);
    }

    public function heatingDegreeDaysContours($uuid, $params = null)
    {
        $endpoint = self::HEATING_DEGREE_DAYS;

        return $this->contoursByAsset($endpoint, $uuid, $params);
    }

    public function dailyPrecipitationContours($uuid, $params = null)
    {
        $endpoint = self::DAILY_PRECIPITATION;

        return $this->contoursByAsset($endpoint, $uuid, $params);
    }

    public function hourlyPrecipitationContours($uuid, $params = null)
    {
        $endpoint = self::HOURLY_PRECIPITATION;

        return $this->contoursByAsset($endpoint, $uuid, $params);
    }

    public function hourlyRelativeHumidityContours($uuid, $params = null)
    {
        $endpoint = self::HOURLY_RELATIVE_HUMIDITY;

        return $this->contoursByAsset($endpoint, $uuid, $params);
    }

    public function dailySolarRadiationContours($uuid, $params = null)
    {
        $endpoint = self::DAILY_SOLAR_RADIATION;

        return $this->contoursByAsset($endpoint, $uuid, $params);
    }

    public function hourlySolarRadiationContours($uuid, $params = null)
    {
        $endpoint = self::HOURLY_SOLAR_RADIATION;

        return $this->contoursByAsset($endpoint, $uuid, $params);
    }

    public function hourlyTemperatureContours($uuid, $params = null)
    {
        $endpoint = self::HOURLY_TEMPERATURE;

        return $this->contoursByAsset($endpoint, $uuid, $params);
    }

    public function dailyHighTemperatureContours($uuid, $params = null)
    {
        $endpoint = self::DAILY_HIGH_TEMPERATURE;

        return $this->contoursByAsset($endpoint, $uuid, $params);
    }

    public function dailyLowTemperatureContours($uuid, $params = null)
    {
        $endpoint = self::DAILY_LOW_TEMPERATURE;

        return $this->contoursByAsset($endpoint, $uuid, $params);
    }

    public function hourlyDewPointContours($uuid, $params = null)
    {
        $endpoint = self::HOURLY_DEWPOINT;

        return $this->contoursByAsset($endpoint, $uuid, $params);
    }

    public function hourlyWindSpeedContours($uuid, $params = null)
    {
        $endpoint = self::HOURLY_WIND_SPEED;

        return $this->contoursByAsset($endpoint, $uuid, $params);
    }

    public function hourlyWindDirectionContours($uuid, $params = null)
    {
        $endpoint = self::HOURLY_WIND_DIRECTION;

        return $this->contoursByAsset($endpoint, $uuid, $params);
    }

    public function __construct($appId, $appKey)
    {
        $this->appId = $appId;
        $this->appKey = $appKey;
    }

    private function setup_curl($url, $headers)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_USERPWD,  $this->appId.':'.$this->appKey);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);

        return $ch;
    }

    private function execute_curl($ch)
    {
        $output = curl_exec($ch);
        $info = curl_getinfo($ch);
        if ($info['http_code'] > 201) {
            var_dump($output);
            throw new Exception($info['http_code']);
        }

        curl_close($ch);

        return $output;
    }

    public function createAsset($geojson)
    {
        $url = self::BASE_URL.'/assets';
        $ch = $this->setup_curl($url, array(
          'Content-Type: application/json',
          'Accept: application/vnd.wdt+json; version=1',
          ));
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $geojson);

        return json_decode($this->execute_curl($ch));
    }

    public function listAssets()
    {
        $url = self::BASE_URL.'/assets';

        return $this->call($url);
    }

    public function updateAsset($id, $geojson)
    {
        $url = self::BASE_URL.'/assets/'.$id;

        $ch = $this->setup_curl($url, array(
          'Content-Type: application/json',
          'Accept: application/vnd.wdt+json; version=1',
          ));
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
        curl_setopt($ch, CURLOPT_POSTFIELDS, $geojson);

        return $this->execute_curl($ch);
    }

    public function deleteAsset($id)
    {
        $url = self::BASE_URL.'/assets/'.$id;

        $ch = $this->setup_curl($url, array(
          'Accept: application/vnd.wdt+json; version=1',
          ));
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');

        return $this->execute_curl($ch);
    }

    public function contoursByAsset($endpoint, $uuid, $params = null)
    {
        $url = self::BASE_URL."/$endpoint/".$uuid.'/contours?';

        return $this->call($url);
    }

    private function call($url)
    {
        $ch = $this->setup_curl($url, array('Accept: application/vnd.wdt+json; version=1'));

        return json_decode($this->execute_curl($ch));
    }

    private function callByAsset($endpoint, $uuid, $params = null)
    {
        $url = self::BASE_URL."/$endpoint/$uuid";
        if (!empty($params)) {
            $url .= '?';
            $url .= http_build_query($params);
        }

        return $this->call($url);
    }

    private function callByPoint($endpoint, $lat, $lon, $params = null)
    {
        $url = self::BASE_URL."/$endpoint/$lat/$lon";
        if (!empty($params)) {
            $url .= '?';
            $url .= http_build_query($params);
        }

        return $this->call($url);
    }
}
