<?php

/**
 * States of Cameroon
 *
 * @author Deris237
 * @version 1.0.0
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 */

global $states;

$states['CM'] = array(
	'AD' => 'Adamaoua',
	'CE' => 'Centre',
	'ES' => 'Est',
	'EN' => 'Extrême-Nord',
	'LT' => 'Littoral',
	'NO' => 'Nord',
	'NW' => 'Nord-Ouest',
	'OU' => 'Ouest',
	'SU' => 'Sud',
	'SW' => 'Sud-Ouest',
);

// Use this filter to handle the States of Cameroon
$states['CM'] = apply_filters('scpwoo_custom_states_cm', $states['CM']);
