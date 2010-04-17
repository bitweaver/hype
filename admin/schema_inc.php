<?php
global $gBitInstaller;

$gBitInstaller->registerPackageInfo( HYPE_PKG_NAME, array(
	'description' => "The hype package provides an easy way to promote your content on various promotion services. It supports easy to make plugins to add new promotion services.",
	'license' => '<a href="http://www.gnu.org/licenses/licenses.html#LGPL">LGPL</a>',
) );

// Requirements
$gBitInstaller->registerRequirements( HYPE_PKG_NAME, array(
	'liberty' => array( 'min' => '2.1.4' ),
));

