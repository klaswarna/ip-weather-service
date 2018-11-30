#Install IP Weather Service as Anax module

Before doing this an Anax framework must already have been installed as must composer.

In the command line type:

<pre><code>
composer require mittvendornamn/ip-weather-service
</code></pre>

Having the root of your Anax installation as working directory, type:

<pre><code>
rsync -av vendor/ditt-vendor-namn/modul/config config/
rsync -av vendor/ditt-vendor-namn/modul/src src/
rsync -av vendor/ditt-vendor-namn/modul/test test/
rsync -av vendor/ditt-vendor-namn/modul/view view/anax/v2/
</code></pre>

In composer.json

Please add "KW\\": "src/" under autoload, like this

<code><pre>
"autoload": {
        "psr-4": {
            "KW\\": "src/"
        }
    },
</code></pre>

Following services are now available on:

htdocs/ipweb/
htdocs/geotag/
htdocs/weather/
