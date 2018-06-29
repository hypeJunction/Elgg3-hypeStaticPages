<?php

namespace hypeJunction\StaticPages;

use Elgg\Includer;
use Elgg\PluginBootstrap;
use Elgg\Values;
use hypeJunction\StaticPages\StaticPageCollection;

class Bootstrap extends PluginBootstrap {

	/**
	 * Get plugin root
	 * @return string
	 */
	protected function getRoot() {
		return $this->plugin->getPath();
	}

	/**
	 * {@inheritdoc}
	 */
	public function load() {
		Includer::requireFileOnce($this->getRoot() . '/autoloader.php');
	}

	/**
	 * {@inheritdoc}
	 */
	public function boot() {

	}

	/**
	 * {@inheritdoc}
	 */
	public function init() {
		elgg_register_collection('collection:object:static_page:all', StaticPageCollection::class);

		elgg_register_plugin_hook_handler('uses:cover', 'object:static_page', [Values::class, 'getTrue']);
		elgg_register_plugin_hook_handler('uses:comments', 'object:static_page', [Values::class, 'getFalse']);
		elgg_register_plugin_hook_handler('uses:river', 'object:static_page', [Values::class, 'getFalse']);

		elgg_register_plugin_hook_handler('fields', 'object:static_page', SetFormFields::class);
		elgg_register_plugin_hook_handler('modules', 'object:static_page', AddLayoutModules::class);

		elgg_register_plugin_hook_handler('menus', 'menu:editor', AddCustomMenus::class);

		elgg_register_plugin_hook_handler('register', 'menu:page', PageMenu::class);

		elgg_register_plugin_hook_handler('prepare', 'menu:static_pages:about', '_elgg_setup_vertical_menu', 999);
		elgg_register_plugin_hook_handler('prepare', 'menu:static_pages:help', '_elgg_setup_vertical_menu', 999);

		elgg_extend_view('elgg.css', 'static_page/styles.css');
	}

	/**
	 * {@inheritdoc}
	 */
	public function ready() {

	}

	/**
	 * {@inheritdoc}
	 */
	public function shutdown() {

	}

	/**
	 * {@inheritdoc}
	 */
	public function activate() {

	}

	/**
	 * {@inheritdoc}
	 */
	public function deactivate() {

	}

	/**
	 * {@inheritdoc}
	 */
	public function upgrade() {

	}

}