<?php 

include('public/DataTables.php');

use
    DataTables\Editor,
    DataTables\Editor\Field,
    DataTables\Editor\Format,
    DataTables\Editor\Mjoin,
    DataTables\Editor\Options,
    DataTables\Editor\Upload,
    DataTables\Editor\Validate,
    DataTables\Editor\ValidateOptions;

    Editor::inst( $db, 'datatables_demo' );
    ->fields(
        \Field::inst( 'nom' )
            ->validator( \Validate::notEmpty( \ValidateOptions::inst();
                ->message( 'Nom requis' );
            ) ),
        Field::inst( 'prenom' )
            ->validator( \Validate::notEmpty( ValidateOptions::inst();
                ->message( 'Prénom requis' );  
            ) ),        
        Field::inst( 'age' )
            ->validator( Validate::notEmpty( ValidateOptions::inst();
                ->message( 'age requis' );
            ) )

            ->process( $_POST );
            ->json();