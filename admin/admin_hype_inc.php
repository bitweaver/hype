<?php

global $gHypeSystem;

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

// allow selection of what packages can have ratings
$exclude = array( 'bituser', 'tikisticky', 'pigeonholes' );
foreach( $gLibertySystem->mContentTypes as $cType ) {
	if( !in_array( $cType['content_type_guid'], $exclude ) ) {
		foreach ( $gHypeSystem->getPlugins() as $hType => $hData ) {
			$formContentTypes[$hType]['guid'][$cType['content_type_guid']]  = $cType['content_description'];
		}
	}
}

if( !empty( $_REQUEST['change_prefs'] )) {
	$formFeatures = array_merge( $formHypeLocations, $gHypeSystem->getAdminToggles() );

	foreach ( array_keys($formFeatures) as $item ) {
		simple_set_toggle( $item, HYPE_PKG_NAME );
	}

	foreach ( $gHypeSystem->getAdminValues() as $item => $data ) {
		simple_set_value( $item,  HYPE_PKG_NAME );
	}
	foreach ( $gHypeSystem->getPlugins() as $hType => $hData ) {
		if ( isset($_REQUEST['hype_'.$hType.'_guid'] ) ) {
			foreach ( $gLibertySystem->mContentTypes as $cType ) {
				if (in_array($cType['content_type_guid'], $_REQUEST['hype_'.$hType.'_guid'])) {
					$gBitSystem->storeConfig('hype_'.$hType.'-'.$cType['content_type_guid'], 'y', HYPE_PKG_NAME);
				}
				else {
					$gBitSystem->storeConfig('hype_'.$hType.'-'.$cType['content_type_guid'], NULL, HYPE_PKG_NAME);
				}
			}
		}
		else {
			// Clear them all for this type
			foreach ( $gLibertySystem->mContentTypes as $cType ) {
				$gBitSystem->storeConfig('hype_'.$hType.'-'.$cType['content_type_guid'], NULL, HYPE_PKG_NAME);
			}
		}
	}

}

// check the correct packages in the package selection
foreach( $gLibertySystem->mContentTypes as $cType ) {
	foreach ( $gHypeSystem->getPlugins() as $hType => $hData )
		if( $gBitSystem->isFeatureActive( 'hype_'.$hType.'-'.$cType['content_type_guid'] ) ) {
			$formContentTypes[$hType]['checked'][] = $cType['content_type_guid'];
		}
}
$gBitSmarty->assign( 'formContentTypes', $formContentTypes );

?>
