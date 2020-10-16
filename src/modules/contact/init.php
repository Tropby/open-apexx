<?php

//Security-Check
if (!defined('APXRUN')) {
    die('You are not allowed to execute this file directly!');
}

//Modul registrieren
$module = [1, 8900,
    'id' => 'contact',
    'dependence' => [],
    'requirement' => ['main' => '1.2.0'],
    'version' => '1.1.0',
    'author' => 'Christian Scheb',
    'contact' => 'http://www.stylemotion.de',
];

//Aktionen registrieren  S V O R
$action['show'] = [0, 1, 1, 0];
$action['add'] = [0, 1, 2, 0];
$action['edit'] = [0, 0, 3, 0];
$action['del'] = [0, 0, 4, 0];

/*
S = Sonderrechte
V = Sichtbar (Visibility)
O = Anordnung (Order)
R = Rechte f�r Alle
*/

//Template-Funktionen                         F           V
//$func['']=array('',false);

/*
F = Funktions-Name
V = Variablen akzeptieren
*/
