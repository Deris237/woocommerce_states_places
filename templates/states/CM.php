<?php

/**
* Regions of Cameroom
* 10 regions
*
* Source:
* - https://fr.wikipedia.org/wiki/Régions_du_Cameroun
*
* @author  Deris DADJO <dadjofokouang400@@gmail.com>
* @version 1.3.2
* @license http://www.gnu.org/licenses/gpl-2.0.html
*/

global $states;

$states['CM'] = array(
    'EN' => 'Extrême-Nord',
    'NO' => 'Nord',
    'AD' => 'Adamaoua',
    'ES' => 'Est',
    'CE' => 'Centre',
    'SU' => 'Sud',
    'LT' => 'Littoral',
    'OU' => 'Ouest',
    'NW' => 'Nord-Ouest',
    'SW' => 'Sud-Ouest',
);

// Use this filter to handle the Regions of Cameroon
$states['CM'] = apply_filters('scpwoo_custom_states_cm', $states['CM']);
