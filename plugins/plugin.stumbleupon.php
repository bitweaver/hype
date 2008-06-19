<?php
/**
 * @version $Header: /cvsroot/bitweaver/_bit_hype/plugins/plugin.stumbleupon.php,v 1.3 2008/06/19 05:11:03 lsces Exp $
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