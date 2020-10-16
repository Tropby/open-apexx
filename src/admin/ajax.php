<?php

define('APXRUN', true);

////////////////////////////////////////////////////////////////////////////////////////////////////////
require 'includes/_start.php';  /////////////////////////////////////////////////////// SYSTEMSTART ///
////////////////////////////////////////////////////////////////////////////////////////////////////////

$apx->tmpl->loaddesign('blank');

list($module, $func) = explode('.', $_REQUEST['action'], 2);
if (file_exists(BASEDIR.getpath('module', ['MODULE' => $module]).'admin_ajax.php')) {
    include_once BASEDIR.getpath('module', ['MODULE' => $module]).'admin_ajax.php';

    $call = $func;
    if (function_exists($call)) {
        $call();
    } else {
        echo 'function does not exist!';
    }
} else {
    echo 'ajax-file does not exist!';
}

////////////////////////////////////////////////////////////////////////////////////////////////////////
require 'includes/_end.php';  ////////////////////////////////////////////////////// SCRIPT BEENDEN ///
////////////////////////////////////////////////////////////////////////////////////////////////////////
