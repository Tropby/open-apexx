<?php

//Security-Check
if (!defined('APXRUN')) {
    die('You are not allowed to execute this file directly!');
}

//Tags Autocomplete
function togglestate()
{
    global $apx, $db, $set;

    $id = (int) $_REQUEST['id'];
    $status = (int) $_REQUEST['status'];
    if (!$id) {
        terminate();
    }

    $open = $apx->session->get('navi_open');
    $open = array_map('intval', dash_unserialize($open));
    if (!is_array($open)) {
        $open = [];
    }

    if ($status) {
        if (!in_array($id, $open)) {
            $open[] = $id;
        }
    } else {
        $index = array_search($id, $open);
        if (false !== $index) {
            unset($open[$index]);
        }
    }

    $apx->session->set('navi_open', dash_serialize($open));
}

//Tags Autocomplete
function nodemoved()
{
    global $apx;
    if (!checkToken()) {
        return;
    }
    if (!$apx->user->has_right('navi.edit')) {
        return;
    }
    $id = (int) $_REQUEST['id'];
    $newparent = (int) $_REQUEST['parentid'];
    $beforeid = (int) $_REQUEST['before'];
    $afterid = (int) $_REQUEST['after'];
    if (!$id) {
        return;
    }
    require_once BASEDIR.'lib/class.recursivetree.php';
    $tree = new RecursiveTree(PRE.'_navi', 'id');

    //In einen Knoten verschieben
    if (!$beforeid && !$afterid) {
        $tree->moveNode($id, $newparent);
    }

    //Vor einen Knoten verschieben
    elseif ($beforeid) {
        $tree->moveNodeBefore($id, $newparent, $beforeid);
    }

    //Nach einen Knoten
    elseif ($afterid) {
        $tree->moveNodeAfter($id, $newparent, $afterid);
    }
}
