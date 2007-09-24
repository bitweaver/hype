<?php
/**
 * base package include
 *
 * @author   nick <nick@overtsolutions.com>
 * @version  $Revision: 1.1 $
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

?>
