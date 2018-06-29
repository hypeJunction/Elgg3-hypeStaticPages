<?php

$entity = elgg_extract('entity', $vars);

if (!$entity instanceof \hypeJunction\StaticPages\StaticPage) {
	return;
}

if (!$entity->sidebar_content) {
	return;
}

$output = elgg_view('output/longtext', [
	'value' => $entity->sidebar_content,
	'sanitize' => $entity->disable_html_filtering ? false : true,
	'autop' => $entity->disable_html_filtering ? false : true,
]);

echo elgg_view_module('info', null, $output);