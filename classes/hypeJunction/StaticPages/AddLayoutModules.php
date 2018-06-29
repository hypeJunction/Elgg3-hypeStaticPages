<?php

namespace hypeJunction\StaticPages;

use Elgg\Hook;

class AddLayoutModules {

	/**
	 * @elgg_plugin_hook modules object
	 *
	 * @param Hook $hook Hook
	 * @return array
	 */
	public function __invoke(Hook $hook) {

		$entity = $hook->getEntityParam();
		if (!$entity) {
			return;
		}

		$modules = [];

		$modules['static_page/menu'] = [
			'enabled' => $entity->canEdit(),
			'position' => 'sidebar',
			'priority' => 200,
		];

		$modules['static_page/sidebar_content'] = [
			'enabled' => $entity->canEdit(),
			'position' => 'sidebar',
			'priority' => 100,
		];

		return $modules;
	}
}