# Overview
A PHP class for interacting with the SkyWise Insight API. Check out [the API docs](http://docs.api.wdtinc.com/insight-api/en/latest/overview.html) to reference exposed endpoints. Also check out [some examples](https://github.com/wdtinc/Insight-API).

## Prerequisites

- [PHP 5.6](http://php.net/releases/5_6_0.php)

## Examples

Instantiate the class:

```php
require_once 'InsightAPI.php';
date_default_timezone_set('UTC');

const APPID = '<your app id>';
const APPKEY = '<your app key>';

$insight = new InsightAPI(APPID, APPKEY);
```

Calculate the average temperature over a time series:

```php

$params = array(
  'start' => (new \DateTime())->modify('-5 hours')->format("Y-m-d\TH:00:00P"),
  'end' => (new \DateTime())->modify('+5 hours')->format("Y-m-d\TH:00:00P"),
);

$lat = 35;
$lon = -95;

$result = $insight->hourlyTemperatureByPoint($lat, $lon, $params);
$avg = 0;
foreach ($result->{'series'} as &$s) {
    $avg += $s->value;
}
$avg /= count($result->{'series'});
echo "average temperature: $avg\n";
```

Create an asset, and get statistics over the asset area:

```php
$geojson = file_get_contents('./asset.geojson');
$asset = $insight->createAsset($geojson);

$result = $insight->hourlyTemperatureByAsset($asset->id, $params);
foreach ($result->{'series'} as &$series) {
    echo 'min: '.$series->assetStatistics->minimum.PHP_EOL;
    echo 'max: '.$series->assetStatistics->maximum.PHP_EOL;
    echo 'mean: '.$series->assetStatistics->mean.PHP_EOL;
}
```

Grab some asset contours:

```php
$contours = $insight->hourlyPrecipitationContours($asset->id, $params);
echo json_encode($contours).PHP_EOL;
```

```geojson
{
   "startDate":"2016-10-22",
   "endDate":"2016-10-27",
   "features":[
      {
         "geometry":{
            "type":"Polygon",
            "coordinates":[
               [
                  [
                     -97.3889923096,
                     35.1847140483
                  ],
                  [
                     -97.4047851562,
                     35.1842612643
                  ],
                  [
                     -97.4487304688,
                     35.1891128046
                  ],
                  [
                     -97.490272522,
                     35.1916218165
                  ],
                  [
                     -97.490272522,
                     35.2565534411
                  ],
                  [
                     -97.3889923096,
                     35.2565534411
                  ],
                  [
                     -97.3889923096,
                     35.1847140483
                  ]
               ]
            ]
         },
         "type":"Feature",
         "properties":{
            "precipitation":4.6
         }
      },
      {
         "geometry":{
            "type":"Polygon",
            "coordinates":[
               [
                  [
                     -97.400744598,
                     35.2565534411
                  ],
                  [
                     -97.4024544492,
                     35.2276723549
                  ],
                  [
                     -97.4047851562,
                     35.2272833537
                  ],
                  [
                     -97.4225764149,
                     35.2276723549
                  ],
                  [
                     -97.4369814385,
                     35.2565534411
                  ],
                  [
                     -97.400744598,
                     35.2565534411
                  ]
               ]
            ]
         },
         "type":"Feature",
         "properties":{
            "precipitation":6.3
         }
      }
   ],
   "asset":"\/assets\/6b6f8b7e-9859-11e6-a87c-1224761ecbee",
   "type":"FeatureCollection",
   "unit":{
      "description":"millimeters",
      "label":"mm"
   }
}
```
