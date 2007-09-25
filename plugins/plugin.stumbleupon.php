<?php

global $gHypeSystem;

$pPluginHash = array(
	'template' => 'bitpackage:hype/stumbleupon_inc.tpl',
	'label' => 'Display stumbleupon link',
	'note' => 'Displays the stumbleupon logo to make it easy for people to stumbleupon your content.',
	'styles' => array(
		'text-icon' => 'Text and Icon',
		'icon' => 'Wide Icon',
		),
	);

$gHypeSystem->registerPlugin('stumbleupon', $pPluginHash);

?>