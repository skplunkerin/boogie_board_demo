Purpose of this site is to display a demo of a fake company called "Boogie Board" which shows how Geomaticly is used.

You'll find two branches, php and rails. The php branch shows two demo php sites, and rails shows two rails demo sites; one template will use Bootstrap, the other will use Foundation.

To get this project up-and-running you'll need to:
* (inside both bootstrap/ & foundation/ directories) Copy .htaccess-example -> .htaccess, and copy constants.php-example -> constants.php
     * Then make sure you fix the paths to match where you project sits
* (For PHP deployment) Update your apache sites-available conf file to contain `AllowOverride All`
