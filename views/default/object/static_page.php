<?php

$entity = elgg_extract('entity', $vars);
$full_view = elgg_extract('full_view', $vars);

if ($full_view && $entity->disable_html_filtering) {
	$vars['body'] = elgg_view('output/longtext', [
		'value' => $entity->description,
		'sanitize' => false,
		'autop' => false,
	]);
}

echo elgg_view('post/view', $vars);
