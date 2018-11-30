#Installing IP Weather Service as an Anax module

Before doing this an Anax framework must already have been installed as must composer.

In the command line type:

<pre><code>
composer require klasse-w/ip-weather-service
</code></pre>

Having the root of your Anax installation as working directory, type:

<pre><code>
rsync -av vendor/klasse-w/ip-weather-service/config ./
rsync -av vendor/klasse-w/ip-weather-service/src ./
rsync -av vendor/klasse-w/ip-weather-service/test ./
rsync -av vendor/klasse-w/ip-weather-service/view/geotagip view/anax/v2/
rsync -av vendor/klasse-w/ip-weather-service/view/ipweb view/anax/v2/
rsync -av vendor/klasse-w/ip-weather-service/view/weather view/anax/v2/
</code></pre>

please add
    "KW\\": "src/"

to autoload in composer.json

Following services shall now be available on:

htdocs/ipweb/

htdocs/geotag/

htdocs/weather/
