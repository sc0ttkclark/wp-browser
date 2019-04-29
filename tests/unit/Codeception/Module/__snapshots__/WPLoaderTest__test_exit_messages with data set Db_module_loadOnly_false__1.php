<?php return 'The WPLoader module could not correctly load WordPress.
If you do not see any other output beside this, probably a call to `die` or `exit` might have been made while loading WordPress files.
There are a number of reasons why this might happen and the most common is an empty, incomplete or incoherent database status.

E.g. you are trying to bootstrap WordPress as multisite on a database that does not contain multisite tables.

It looks like, alongside the WPLoader module, you are using the Db one.
Since the `WPLoader::loadOnly` parameter is not set or set to `false` both the WPLoader module and the Db one are trying to populate the database.
If you want to fill the database with a dump then keep using the Db module but set the `WPLoader::loadOnly` parameter to `true` and make sure that, in the suite configuration file, in the `modules` section, the Db module comes before the WPLoader one.

If you are, instead, trying to run integration tests you do not probably need the Db module or should set the `populate` and `cleanup` arguments to `false`
Find out more about this at https://wpbrowser.wptestkit.dev/summary/modules/wploader#wploader-to-only-bootstrap-wordpress
';
