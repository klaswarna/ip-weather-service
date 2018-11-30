#Installing IP Weather Service as an Anax module

Before doing this an Anax framework must already have been installed as must composer.

In the command line type:

<pre><code>
composer require klasse-w/ip-weather-service
</code></pre>

Having the root of your Anax installation as working directory, type:

<pre><code>
rsync -av vendor/klasse-w/ip-weather-service/config config/
rsync -av vendor/klasse-w/ip-weather-service/src src/
rsync -av vendor/klasse-w/ip-weather-service/test test/
rsync -av vendor/klasse-w/ip-weather-service/view view/anax/v2/
</code></pre>


Following services shall now be available on:

htdocs/ipweb/

htdocs/geotag/

htdocs/weather/
