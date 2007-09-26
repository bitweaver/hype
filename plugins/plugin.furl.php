<?php

global $gHypeSystem;

$pPluginHash = array(
	'template' => 'bitpackage:hype/furl_inc.tpl',
	'label' => 'Display furl link',
	'note' => 'Displays the furl logo to make it easy for people to furl your content.',
	'styles' => array(
		'small' => 'Small Icon',
		'text-icon' => 'Text and Icon',
		'icon' => 'Wide Icon',
		'active' => 'Active Javascript'
		),
	);

$gHypeSystem->registerPlugin('furl', $pPluginHash);

?>