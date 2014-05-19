<?php

/*
 * Editor server script for DB table EVENTS
 * Automatically generated by http://editor.datatables.net/generator
 */

// DataTables PHP library
include( "lib/DataTables.php" );

// Alias Editor classes so they are easy to use
use
	DataTables\Editor,
	DataTables\Editor\Field,
	DataTables\Editor\Format,
	DataTables\Editor\Join,
	DataTables\Editor\Validate;


// Build our Editor instance and process the data coming from _POST
Editor::inst( $db, 'ADMINS' )
	->fields(
		Field::inst( 'ADMIN_FIRST_NAME' )
			->validator( 'Validate::maxLen_required', 20 ),
		Field::inst( 'ADMIN_LAST_NAME' )
			->validator( 'Validate::maxLen_required', 30 ),
		Field::inst( 'ADMIN_TEL' )
			->validator( 'Validate::maxLen_required', 20 ),
		Field::inst( 'ADMIN_GENDER' )
		->validator( 'Validate::maxLen_required', 20 )
	)
	->process( $_POST )
	->json();
