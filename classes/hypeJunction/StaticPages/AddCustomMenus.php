<?php

namespace hypeJunction\StaticPages;

use Elgg\Hook;

class AddCustomMenus {

	public function __invoke(Hook $hook) {

		$menus = $hook->getValue();

		$menus[] = 'static_pages:help';
		$menus[] = 'static_pages:about';

		return $menus;
	}
}