<?php

return [
	'bootstrap' => \hypeJunction\StaticPages\Bootstrap::class,

	'entities' => [
		'static_page' => [
			'type' => 'object',
			'subtype' => 'static_page',
			'class' => \hypeJunction\StaticPages\StaticPage::class,
			'searchable' => false,
		],
	],
	'routes' => [
		'add:object:static_page' => [
			'path' => '/static_page/add/{guid}',
			'resource' => 'post/add',
			'defaults' => [
				'type' => 'object',
				'subtype' => 'static_page',
			],
			'middleware' => [
				\Elgg\Router\Middleware\AdminGatekeeper::class,
			],
		],
		'edit:object:static_page' => [
			'path' => '/static_page/edit/{guid}',
			'resource' => 'post/edit',
			'middleware' => [
				\Elgg\Router\Middleware\AdminGatekeeper::class,
			],
		],
		'view:object:static_page' => [
			'path' => '/static_page/view/{guid}/{title?}',
			'resource' => 'static_page/view',
		],
		'collection:object:static_page:all' => [
			'path' => '/static_page/all',
			'resource' => 'collection/all',
			'middleware' => [
				\Elgg\Router\Middleware\AdminGatekeeper::class,
			],
		],
	],
];
