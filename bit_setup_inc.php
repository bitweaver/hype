<?php
/**
 * base package include
 *
 * @author   nick <nick@overtsolutions.com>
 * @version  $Revision: 1.2 $
 * @package  hype
 */

$registerHash = array(
	'package_name' => 'hype',
	'package_path' => dirname( __FILE__ ).'/',
	'service' => 'hype',
);
$gBitSystem->registerPackage( $registerHash );

if( $gBitSystem->isPackageActive( 'hype' ) ) {
	$gLibertySystem->registerService( 'hype', HYPE_PKG_NAME, array(
		'content_icon_tpl' => 'bitpackage:hype/service_content_icon_inc.tpl',
		'content_view_tpl' => 'bitpackage:hype/service_content_view_inc.tpl',
		'content_nav_tpl'  => 'bitpackage:hype/service_content_nav_inc.tpl',
		));
}

require_once(HYPE_PKG_PATH."HypeSystem.php");
global $gHypeSystem;

// Initialize system
if ( empty( $gHypeSystem ) ) {
	$gHypeSystem = new HypeSystem();
	$gHypeSystem->scanAllPlugins();
	$gBitSmarty->assign_by_ref('gHypeSystem', $gHypeSystem);
}

?>
