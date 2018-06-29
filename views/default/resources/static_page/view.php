<?php

$guid = elgg_extract('guid', $vars);
elgg_entity_gatekeeper($guid);

$entity = get_entity($guid);
if (!$entity instanceof \ElggEntity) {
	throw new \Elgg\BadRequestException();
}

$header = elgg_view('static_page/header', [
	'entity' => $entity,
]);

$content = elgg_view('post/layout', [
	'entity' => $entity,
]);

echo elgg_view_page($entity->getDisplayName(), $header . $content, 'default', [
	'entity' => $entity,
	'header' => false,
	'page_attrs' => [
		'class' => 'elgg-page-static',
	],
]);
