<?php

namespace hypeJunction\StaticPages;

use Elgg\Hook;
use hypeJunction\Fields\MetaField;

class SetFormFields {

	/**
	 * Setup static page fields
	 *
	 * @param Hook $hook Hook
	 *
	 * @return void
	 */
	public function __invoke(Hook $hook) {

		$fields = $hook->getValue();
		/* @var $fields \hypeJunction\Fields\Collection */

		$fields->add('sidebar_content', new MetaField([
			'type' => 'longtext',
			'is_profile_field' => false,
		]));

		if (elgg_is_active_plugin('hypeMenus')) {
			$fields->add('menu_category', new MetaField([
				'type' => 'radio',
				'options' => array_flip([
					'help' => elgg_echo('static_page:category:help'),
					'about' => elgg_echo('static_page:category:about'),
					'none' => elgg_echo('static_page:category:none'),
				]),
				'value' => 'none',
				'is_profile_field' => false,
			]));
		}
	}
}