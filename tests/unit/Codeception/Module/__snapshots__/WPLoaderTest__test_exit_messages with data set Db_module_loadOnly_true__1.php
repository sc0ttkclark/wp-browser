<?php return 'The WPLoader module could not correctly load WordPress.
If you do not see any other output beside this, probably a call to `die` or `exit` might have been made while loading WordPress files.
There are a number of reasons why this might happen and the most common is an empty, incomplete or incoherent database status.

E.g. you are trying to bootstrap WordPress as multisite on a database that does not contain multisite tables.

It looks like, alongside the WPLoader module, you are using the Db one.
Since the `WPLoader::loadOnly` parameter is set to `true` the WPLoader module will not try to populate the database.
The database should be populated from a dump using the Db modules.
Make sure the SQL dump you\'re trying to use is not empty and correct for the kind of installation you are trying to test.

Make also sure that, in the suite configuration file, in the `modules` section, the Db modules comes before the WPLoader one.
If you are, instead, trying to run integration tests you do not probably need the Db module or should set the `populate` and `cleanup` arguments to `false` and set the `WPLoader::loadOnly` parameter to `false` to let the WPLoader module populate the database for you.
Find out more about this at https://wpbrowser.wptestkit.dev/summary/modules/wploader#wploader-to-only-bootstrap-wordpress
';
