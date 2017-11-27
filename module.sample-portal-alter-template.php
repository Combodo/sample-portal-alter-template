<?php

SetupWebPage::AddModule(
	__FILE__, // Path to the current file, all other file names are relative to the directory containing this file
	'sample-portal-alter-template/1.0.0', array(
	// Identification
	'label' => 'Sample portal: Alter template by moving menu from left to top',
	'category' => 'Portal',
	// Setup
	'dependencies' => array(
		'itop-portal-base/2.4.0',
		'itop-portal/2.4.0',
	),
	'mandatory' => false,
	'visible' => true,
	// Components
	'datamodel' => array(
	),
	'webservice' => array(
	//'webservices.itop-portal.php',
	),
	'dictionary' => array(
	),
	'data.struct' => array(
	//'data.struct.itop-portal.xml',
	),
	'data.sample' => array(
	//'data.sample.itop-portal.xml',
	),
	// Documentation
	'doc.manual_setup' => '',
	'doc.more_information' => '',
	// Default settings
	'settings' => array(
	),
	)
);
