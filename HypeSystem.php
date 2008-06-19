<?php
/**
 * @version $Header: /cvsroot/bitweaver/_bit_hype/HypeSystem.php,v 1.3 2008/06/19 04:44:09 lsces Exp $
 * @package hotwords
 */

/**
 * @package hotwords
 */
class HypeSystem {

	var $mPlugins = array();

	var $mPluginTemplates = array();

	function HypeSystem() {
	}

	function scanAllPlugins() {
		// Scan all the plugins
		if( $pluginDir = opendir( HYPE_PKG_PATH.'plugins' ) ) {
			$pattern = "/^plugin.*\.php$/";
			while( FALSE !== ( $plugin = readdir( $pluginDir ) ) ) {
				if( preg_match( $pattern, $plugin ) ) {
					include_once( HYPE_PKG_PATH.'plugins/'.$plugin );
				}
			}
		}
	}

	function registerPlugin($pPluginName, $pPluginHash) {
		$this->mPlugins[$pPluginName] = $pPluginHash;
		$this->mPluginTemplates[$pPluginName] = $pPluginHash['template'];
	}

	function getPlugins() {
		return $this->mPlugins;
	}

	function isPluginActive($pPluginName, $gContent) {
		global $gBitSystem;
		if ( $gBitSystem->isFeatureActive( 'hype_'.$pPluginName ) ) {
			if ( !empty( $gContent->mContentTypeGuid ) ) {
				return $gBitSystem->isFeatureActive( 'hype_'.$pPluginName.'-'.$gContent->mContentTypeGuid );
			}
		}
		return false;
	}

	function getPluginStyle($pPluginName) {
		global $gBitSystem;
		$style = $gBitSystem->getConfig( 'hype_'.$pPluginName.'_style' );
		return $style;
	}

	function getAdminToggles() {
		$ret = array();
		foreach ( $this->mPlugins as $key => $data ) {
			$ret['hype_'.$key] = 'hype_'.$key;
			if ( !empty( $data['toggles'] ) ) {
				$ret = array_merge( $ret, $data['toggles'] );
			}
		}

		return $ret;
	}

	function getAdminValues() {
		$ret = array();
		foreach ( $this->mPlugins as $key => $data ) {
			$ret['hype_'.$key.'_style'] = 'hype_'.$key.'_style';
			if ( !empty( $data['values'] ) ) {
				$ret = array_merge( $ret, $data['values'] );
			}
		}

		return $ret;
	}
}

?>