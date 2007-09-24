<?php
$formHypeLocations = array(
	'hype_nav' => array(
		'label' => 'Hype in "nav"',
		'note' => 'Displays the hype in the "nav" section of each page.',
	),
	'hype_view' => array(
		'label' => 'Hype in "view"',
		'note' => 'Displays the hype in the "view" section of each page.',
	),
	'hype_icon' => array(
		'label' => 'Hype in "icons"',
		'note' => 'Displays the hype in the "icons" section of each page.',
	),
);
$gBitSmarty->assign( 'formHypeLocations', $formHypeLocations );

$formHypeTypes = array(
	'hype_digg' => array(
		'label' => 'Display digg link',
		'note' => 'Displays the digg logo to make it easy for people to digg your content.',
		'styles' => array(
			'text-icon' => 'Text and Icon',
			'icon' => 'Wide Icon',
			'active' => 'Active Javascript'
		),
	),
	'hype_stumbleupon' => array(
		'label' => 'Display stumbleupon link',
		'note' => 'Displays the stumbleupon logo to make it easy for people to stumbleupon your content.',
		'styles' => array(
			'text-icon' => 'Text and Icon',
			'icon' => 'Wide Icon'
		),
	),
	'hype_delicious' => array(
		'label' => 'Display delicious link',
		'note' => 'Displays the delicious logo to make it easy for people to delicious your content.',
		'styles' => array(
			'text-icon' => 'Text and Icon',
			'icon' => 'Wide Icon',
			'active' => 'Active Javascript',
		),
	),
	'hype_furl' => array(
		'label' => 'Display furl link',
		'note' => 'Displays the furl logo to make it easy for people to furl your content.',
		'styles' => array(
			'text-icon' => 'Text and Icon',
			'icon' => 'Wide Icon',
		),
	),
);
$gBitSmarty->assign( 'formHypeTypes', $formHypeTypes );

if( !empty( $_REQUEST['change_prefs'] )) {
	$formFeatures = array_merge( $formHypeLocations, $formHypeTypes );
	foreach( $formHypeTypes as $item => $data ) {
		simple_set_value( $item . "_style", HYPE_PKG_NAME );
	}

	foreach( $formFeatures as $item ) {
		simple_set_toggle( $item, HYPE_PKG_NAME );
	}
}

?>
