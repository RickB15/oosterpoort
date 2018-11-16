<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function checkDevice() {
    $detect = new Mobile_Detect;
    // Any mobile device (phones or tablets).
	if ( $detect->isMobile() ) {
		return 'mobileTablet';
	}
	 
	// Any tablet device.
	else if( $detect->isTablet() ){
	 	return 'tablet';
	}
	 
	// Exclude tablets.
    else if( $detect->isMobile() && !$detect->isTablet() ){
		return 'mobile';
	}

	else {
		return 'notMobile';
	}
}

function checkPlatform() {
	$detect = new Mobile_Detect;
	// Check for a specific platform with the help of the magic methods:
	if( $detect->isiOS() ){
	 	return 'apple';
	}
	 
	else if( $detect->isAndroidOS() ){
	 	return 'android';
	}

	else {

	}
}

function checkBrowser() {
	$detect = new Mobile_Detect;
	$detect->is('Chrome');
	$detect->is('iOS');
	$detect->is('UC Browser');
}

function checkVersion() {
	$detect = new Mobile_Detect;
	$detect->version('iPad');
	$detect->version('iPhone');
	$detect->version('Android');
	$detect->version('Opera Mini');
}