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
Editor::inst( $db, 'TRAINER' )
	->fields(
		Field::inst( 'TRAINER_FIRST_NAME' )
			->validator( 'Validate::required' ),
		Field::inst( 'TRAINER_LAST_NAME' )
			->validator( 'Validate::required' ),
		Field::inst( 'TRAINER_TEL' )
			->validator( 'Validate::required' ),
		Field::inst( 'TRAINER_GENDER' )
			->validator( 'Validate::required' )
	)
	->process( $_POST )
	->json();

