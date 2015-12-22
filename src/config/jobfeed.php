<?php

/* Simple configuration file for Laravel Jobfeed package */
// return [
//     'use_cache'      => false,
//     'cache_key'      => 'laravel-sitemap.' . config('app.url'),
//     'cache_duration' => 3600,
//     'escaping'       => true,
//     'use_limit_size'   => false,
// ];

return [
	'indeed_publisher_id' => env('INDEED_PUB_ID', '<enter pub id here>'),

	'sources' => [
		"indeed",
		"dice",
		"simplyhired",
		"juju",
	],
]