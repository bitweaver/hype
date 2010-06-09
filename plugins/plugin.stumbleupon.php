<?php
/**
 * @version $Header$
 * @package hype
 * @subpackage plugins
 */

global $gHypeSystem;

$pPluginHash = array(
	'template' => 'bitpackage:hype/stumbleupon_inc.tpl',
	'label' => 'Display stumbleupon link',
	'note' => 'Displays the stumbleupon logo to make it easy for people to stumbleupon your content.',
	'styles' => array(
		'small'	=> 'Small Icon',
		'text-icon' => 'Text and Icon',
		'icon' => 'Wide Icon',
		),
	);

$gHypeSystem->registerPlugin('stumbleupon', $pPluginHash);

?>