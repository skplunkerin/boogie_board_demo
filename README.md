Demo PHP site for [Geomatic.ly]
===============================

### The following content in this \`php` branch
 * [Bootstrap themed] demo
 * [Foundation themed] demo

#### To get this project up-and-running you'll need to:
* (inside both bootstrap/ & foundation/ directories) 
  * Copy .htaccess-example -> .htaccess
  * Copy constants.php-example -> constants.php
  * Copy helpers/geomaticly.php-example -> helpers/geomaticly.php
     * Then make sure you fix the paths to match where you project sits
* Apache configurations:
  * Update your apache sites-available conf file to contain `AllowOverride All`
  * Run `sudo a2enmod rewrite` then `sudo service apache2 restart`

[Geomatic.ly]:https://geomatic.ly/
[Bootstrap themed]:http://startbootstrap.com/template-overviews/freelancer/
[Foundation themed]:http://foundation.zurb.com/templates/banded.html
