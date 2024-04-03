<?php

/**
 * Cameroun Places
 *
 * @author  Deris DADJO <dadjofokouang400@@gmail.com>
 * @version 1.3.3
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 */

global $places;

$places['CM'] = array(
	'EN' => array(
		'Maroua',
		'Kousséri',
		'Yagoua',
		'Kaélé',
		'Mora',
		'Mokolo',
	),
	'NO' => array(
		'Garoua',
		'Poli',
		'Guider',
		'Tcholliré',
	),
	'AD' => array(
		'Tibati',
		'Tignère',
		'Banyo',
		'Meiganga',
		'Ngaoundéré',
	),
	'ES' => array(
		'Yokadouma',
		'Abong-Mbang',
		'Batouri',
		'Bertoua',
	),
	'CE' => array(
		'Yaoundé',
		'Nanga-Eboko',
		'Monatele',
		'Bafia',
		'Ntui',
		'Mfou',
		'Ngoumou',
		'Éséka',
		'Akonolinga',
		'Mbalmayo',
	),
	'SU' => array(
		'Ebolowa',
		'Kribi',
		'Sangmélima',
		'Ambam',
	),
	'LT' => array(
		'Douala',
		'Édéa',
		'Yabassi',
		'Nkongsamba',
	),
	'OU' => array(
		'Mbouda',
		'Bafang',
		'Baham',
		'Bandjoun',
		'Dschang',
		'Bafoussam',
		'Bangangté',
		'Foumban',
	),
	'NW' => array(
		'Bamenda',
		'Fundong',
		'Kumbo',
		'Nkambé',
		'Wum',
		'Mbengwi',
		'Ndop',
	),
	'SW' => array(
		'Limbé',
		'Bangem',
		'Menji',
		'Mamfé',
		'Kumba',
		'Mundemba',
	),
);

// Use this filter to handle the Cameroonian Places
$places['CM'] = apply_filters('scpwoo_custom_places_cm', $places['CM']);
