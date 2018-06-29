<?php

namespace hypeJunction\StaticPages;

use ElggObject;

/**
 * @property bool $disable_html_filtering
 */
class StaticPage extends ElggObject {

	const SUBTYPE = 'static_page';

	/**
	 * {@inheritdoc}
	 */
	public function initializeAttributes() {
		parent::initializeAttributes();

		$this->attributes['subtype'] = self::SUBTYPE;
	}

	/**
	 * {@inheritdoc}
	 */
	public function __get($name) {
		switch ($name) {
			case 'template' :
				return 'static_page';
		}

		return parent::__get($name);
	}
}
