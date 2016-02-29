# Getting Started

1. Copy default.settings.php and make it settings.php. It should be writeable by Apache.
2. Setup a vhost for this site and visit to complete install process
3. Back in command line-land, visit `docroot/files/config_***************` (where the asterisks is some random nonsense)
4. Delete the `active` and `staging` folders
5. Symlink `ln -s [repo-root]/config/dev-active active`
6. Symlink `ln -s [repo-root]/config/dev-staging staging`
7. Visit site and be awesome!

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
