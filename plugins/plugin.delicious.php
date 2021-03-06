<?php
/**
 * @version $Header$
 * @package hype
 * @subpackage plugins
 */

global $gHypeSystem;

$pPluginHash = array(
	'template' => 'bitpackage:hype/delicious_inc.tpl',
	'label' => 'Display delicious link',
	'note' => 'Displays the delicious logo to make it easy for people to save your content on delicious.',
	'styles' => array(
		'small' => 'Small Icon',
		'text-icon' => 'Text and Icon',
		'icon' => 'Wide Icon',
		'active' => 'Active Javascript'
		),
	);

$gHypeSystem->registerPlugin('delicious', $pPluginHash);

?>