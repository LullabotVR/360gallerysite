# Getting Started

* Copy `default.settings.php` to `settings.php`. It should be writeable by Apache.
* Set your configuration variables to point to our repo's config directories:
  * note: replace `/Users/sirkitree/repos/` with the location of your local clone
```
$config_directories['active'] = '/Users/sirkitree/repos/360gallerysite/config/kittens';
$config_directories['staging'] = '/Users/sirkitree/repos/360gallerysite/config/puppies';
```
* Visit your site and complete the install process.

# Installing drush for Backdrop

If you'd like to have *some* of the features from drush you can follow this install guide. Drush in Backdrop isn't perfect, but its' better than no drush :P
http://serundrop.staffordtavern.com/using-drush-backdrop-cms

If you're aching for a specific feature, you can make feature requests for specific drush commands here:
https://github.com/backdrop-contrib/drush/issues

# Moving config around
Config is read/written directly to the config files, so the config files are always up to date when you make a change.

If you'd like to move some config from local/dev to production:
Find the changed file in `config/dev-active`, copy it to `config/prod-staging`

If you'd like to move some config from production to local/dev:
Find the changed file in `config/prod-active`, copy it to `config/dev-staging`

After you copy the file, commit it in git, push, pull on the other environment, then visit Configuration > Development > Configuration Management > Synchronize
