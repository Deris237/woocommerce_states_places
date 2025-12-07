<?php

/**
 * Cameroonian Places
 *
 * @author  Deris237
 * @version 1.0.0
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 */

global $places;

$places['CM'] = array(
	'AD' => array(
		'Ngaoundéré',
		'Meiganga',
		'Tignère',
		'Banyo',
		'Tibati'
	),
	'CE' => array(
		'Yaoundé',
		'Mbalmayo',
		'Obala',
		'Bafia',
		'Eséka',
		'Mfou',
		'Nanga-Eboko',
		'Akonolinga',
		'Monatélé',
		'Saa'
	),
	'ES' => array(
		'Bertoua',
		'Batouri',
		'Abong-Mbang',
		'Yokadouma',
		'Lomié',
		'Doumé'
	),
	'EN' => array(
		'Maroua',
		'Kousseri',
		'Mokolo',
		'Yagoua',
		'Kaélé',
		'Mora',
		'Guider'
	),
	'LT' => array(
		'Douala',
		'Nkongsamba',
		'Edéa',
		'Loum',
		'Dibombari',
		'Manoka',
		'Yabassi'
	),
	'NO' => array(
		'Garoua',
		'Poli',
		'Tcholliré',
		'Guider',
		'Lagdo',
		'Pitoa',
		'Figuil'
	),
	'NW' => array(
		'Bamenda',
		'Kumbo',
		'Wum',
		'Fundong',
		'Mbengwi',
		'Ndop',
		'Bafut'
	),
	'OU' => array(
		'Bafoussam',
		'Mbouda',
		'Foumban',
		'Dschang',
		'Bafang',
		'Bangangté',
		'Foumbot'
	),
	'SU' => array(
		'Ebolowa',
		'Kribi',
		'Sangmélima',
		'Ambam',
		'Lolodorf',
		'Akom II',
		'Campo'
	),
	'SW' => array(
		'Buéa',
		'Limbé',
		'Kumba',
		'Tiko',
		'Mamfé',
		'Mundemba',
		'Idenau'
	)
);

// Use this filter to handle the Cameroonian Places
$places['CM'] = apply_filters('scpwoo_custom_places_cm', $places['CM']);
