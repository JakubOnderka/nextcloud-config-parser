<?php

$CONFIG = [
	'overwrite.cli.url' => 'https://cloud.example.com',
	'dbtype' => 'mysql',
	'dbname' => 'nextcloud',
	'dbhost' => '127.0.0.1',
	'dbport' => '',
	'dbtableprefix' => 'oc_',
	'dbuser' => 'nextcloud',
	'dbpassword' => 'secret',
	'redis' => [
		'host' => 'localhost'
	],
	'apps_paths' => [
	    ['path' => '/foo', 'url' => '/foo'],
	]
];
