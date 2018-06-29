<?php

$entity = elgg_extract('entity', $vars);

if (!$entity instanceof \hypeJunction\StaticPages\StaticPage) {
	return;
}

$category = $entity->menu_category;
if (!$category || $category === 'none') {
	return;
}

$output = elgg_view_menu("static_pages:$category", [
	'entity' => $entity,
	'category' => $category,
	'class' => 'elgg-menu-page',
	'menu_view' => 'navigation/menu/page',
]);

if (!$output) {
	return;
}

echo elgg_view_module('info', null, $output, [
	'class' => 'elgg-page-menu',
]);
