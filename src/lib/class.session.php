<?php

global $set;

//API-Version w�hlen
if ('db' == $set['session_api']) {
    require BASEDIR.'lib/class.dbsession.php';
} else {
    require BASEDIR.'lib/class.phpsession.php';
}
