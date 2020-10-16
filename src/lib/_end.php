<?php 

//Security-Check
if ( !defined('APXRUN') ) die('You are not allowed to execute this file directly!');

///////////////////////////////////////////////////////////////////////////////////////// SHUTDOWN

//Shutdown durchf�hren
foreach ( $apx->modules AS $module => $info ) {
	if ( !file_exists(BASEDIR.getmodulepath($module).'shutdown.php') ) continue;
	include_once(BASEDIR.getmodulepath($module).'shutdown.php');
}


///////////////////////////////////////////////////////////////////////////////////////// SCRIPT BEENDEN

//Ausgabe vorbereiten
$apx->tmpl->out();

//MySQL Verbindung schlie�en
$db->close();

//Renderzeit
if ( $set['rendertime'] ) {
	list($usec,$sec)=explode(' ',microtime()); 
	$b2=((float)$usec+(float)$sec);
	list($usec,$sec)=explode(' ',$_BENCH); 
	$b1=((float)$usec+(float)$sec);
	echo '<div style="font-size:11px;">Processing: '.($b2-$b1).' sec.</div>';
}


//Script beenden, nachfolgenden Code nicht ausf�hren!
//(falls _end.php erzwungen wird)
exit;

?>