<?php
/**
 * The wire sidebar
 */

echo elgg_view('page/elements/tagcloud_block', array(
	'subtypes' => 'thewire',
	'container_guid' => elgg_get_page_owner_guid(),
));
