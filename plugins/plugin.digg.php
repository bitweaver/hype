<?php
/**
 * @version $Header: /cvsroot/bitweaver/_bit_hype/plugins/plugin.digg.php,v 1.3 2008/06/19 05:11:03 lsces Exp $
 * @package hype
 * @subpackage plugins
 */

global $gHypeSystem;

$pPluginHash = array(
	'template' => 'bitpackage:hype/digg_inc.tpl',
	'label' => 'Display digg link',
	'note' => 'Displays the digg logo to make it easy for people to digg your content.',
	'styles' => array(
		'small'	=> 'Small Icon',
		'text-icon' => 'Text and Icon',
		'icon' => 'Wide Icon',
		'active' => 'Active Javascript'
		),
	);

$gHypeSystem->registerPlugin('digg', $pPluginHash);

?>