<?php


//
// Structure des tables
//

if (!defined("_ECRIRE_INC_VERSION")) return;

function continents_declarer_tables_interfaces($interface){


    
    //-- Table des tables ----------------------------------------------------
    
    $interface['table_des_tables']['continents']='continents';

    return $interface;
}

function continents_declarer_tables_principales($tables_principales){
    $spip_continents = array(
        "id_continent"  => "SMALLINT NOT NULL",
        "nom"     => "varchar(255) NOT NULL",
        "code_onu"  => "SMALLINT NOT NULL",
        "latitude"  => 'text not null default ""',
        "longitude"     => 'text not null default ""',
        "zoom"  => 'text not null default ""',
        "maj"       => "TIMESTAMP");
    
    $spip_continents_key = array(
        "PRIMARY KEY" => "id_continent");
        

    $tables_principales['spip_continents'] = array(
        'field' => &$spip_continents,
        'key' => &$spip_continents_key,
        'join'=> array(
            'id_continent' => 'id_continent'
        )
        );
    
    $tables_principales['spip_pays']['field']['id_continent']= "SMALLINT NOT NULL";
        
    return $tables_principales;
}


?>