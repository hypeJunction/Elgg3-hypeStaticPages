<?php

namespace hypeJunction\StaticPages;

use Elgg\Hook;
use ElggMenuItem;

class PageMenu {

	/**
	 * Setup page menu
	 *
	 * @param Hook $hook Hook
	 */
	public function __invoke(Hook $hook) {

		$menu = $hook->getValue();
		/* @var $menu \Elgg\Menu\MenuItems */

		$menu->add(ElggMenuItem::factory([
			'name' => "admin:static_pages",
			'text' => elgg_echo('collection:object:static_page'),
			'href' => elgg_generate_url('collection:object:static_page:all'),
			'section' => 'configure',
			'context' => ['admin'],
		]));
	}
}
