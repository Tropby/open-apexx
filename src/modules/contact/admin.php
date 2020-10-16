<?php

// CONTACT CLASS
// =============

//Security-Check
if (!defined('APXRUN')) {
    die('You are not allowed to execute this file directly!');
}

class action
{
    //***************************** Kontakte zeigen *****************************
    public function show()
    {
        global $set,$db,$apx,$html;

        quicklink('contact.add');

        $orderdef[0] = 'title';
        $orderdef['title'] = ['title', 'ASC', 'COL_TITLE'];
        $orderdef['email'] = ['email', 'ASC', 'COL_EMAIL'];

        $col[] = ['ID', 3, 'align="center"'];
        $col[] = ['COL_TITLE', 50, 'class="title"'];
        $col[] = ['COL_EMAIL', 47, ''];

        list($count) = $db->first('SELECT count(id) FROM '.PRE.'_contact');
        pages('action.php?action=contact.show&amp;sortby='.$_REQUEST['sortby'], $count);

        $data = $db->fetch('SELECT id,title,email FROM '.PRE.'_contact '.getorder($orderdef).getlimit());
        if (count($data)) {
            foreach ($data as $res) {
                ++$i;

                $tabledata[$i]['COL1'] = $res['id'];
                $tabledata[$i]['COL2'] = replace($res['title']);
                $tabledata[$i]['COL3'] = replace($res['email']);

                //Optionen
                if ($apx->user->has_right('contact.edit')) {
                    $tabledata[$i]['OPTIONS'] .= optionHTML('edit.gif', 'contact.edit', 'id='.$res['id'], $apx->lang->get('CORE_EDIT'));
                }
                if ($apx->user->has_right('contact.del')) {
                    $tabledata[$i]['OPTIONS'] .= optionHTMLOverlay('del.gif', 'contact.del', 'id='.$res['id'], $apx->lang->get('CORE_DEL'));
                }
            }
        }

        $apx->tmpl->assign('TABLE', $tabledata);
        $html->table($col);

        orderstr($orderdef, 'action.php?action=contact.show');
        save_index($_SERVER['REQUEST_URI']);
    }

    //***************************** Kontakt hinzuf�gen *****************************
    public function add()
    {
        global $set,$db,$apx;

        if (1 == $_POST['send']) {
            $emails = explode(',', $_POST['email']);
            foreach ($emails as $one) {
                if (!checkmail(trim($one))) {
                    $wrongmail = true;

                    break;
                }
            }

            if (!checkToken()) {
                infoInvalidToken();
            } elseif (!$_POST['title'] || !$_POST['email']) {
                info('back');
            } elseif ($wrongmail) {
                info($apx->lang->get('INFO_NOEMAIL', ['EMAIL' => $one]));
            } else {
                $db->dinsert(PRE.'_contact', 'title,email');
                logit('CONTACT_ADD', 'ID #'.$db->insert_id());
                printJSRedirect('action.php?action=contact.show');
            }
        } else {
            $apx->tmpl->assign('TITLE', compatible_hsc($_POST['title']));
            $apx->tmpl->assign('EMAIL', compatible_hsc($_POST['email']));
            $apx->tmpl->assign('ACTION', 'add');

            $apx->tmpl->parse('add_edit');
        }
    }

    //***************************** Kontakt bearbeiten *****************************
    public function edit()
    {
        global $set,$db,$apx;
        $_REQUEST['id'] = (int) $_REQUEST['id'];
        if (!$_REQUEST['id']) {
            die('missing ID!');
        }

        if (1 == $_POST['send']) {
            $emails = explode(',', $_POST['email']);
            foreach ($emails as $one) {
                if (!checkmail(trim($one))) {
                    $wrongmail = true;

                    break;
                }
            }

            if (!checkToken()) {
                infoInvalidToken();
            } elseif (!$_POST['title'] || !$_POST['email']) {
                infoNotComplete();
            } elseif ($wrongmail) {
                info($apx->lang->get('INFO_NOEMAIL', ['EMAIL' => $one]));
            } else {
                $db->dupdate(PRE.'_contact', 'title,email', " WHERE id='".$_REQUEST['id']."' LIMIT 1");
                logit('CONTACT_EDIT', 'ID #'.$_REQUEST['id']);
                printJSRedirect(get_index('contact.show'));
            }
        } else {
            list($_POST['title'], $_POST['email']) = $db->first('SELECT title,email FROM '.PRE."_contact WHERE id='".$_REQUEST['id']."' LIMIT 1");

            $apx->tmpl->assign('TITLE', compatible_hsc($_POST['title']));
            $apx->tmpl->assign('EMAIL', compatible_hsc($_POST['email']));
            $apx->tmpl->assign('ID', $_REQUEST['id']);
            $apx->tmpl->assign('ACTION', 'edit');

            $apx->tmpl->parse('add_edit');
        }
    }

    //***************************** Kontakt l�schen *****************************
    public function del()
    {
        global $set,$db,$apx;
        $_REQUEST['id'] = (int) $_REQUEST['id'];
        if (!$_REQUEST['id']) {
            die('missing ID!');
        }

        if (1 == $_POST['send']) {
            if (!checkToken()) {
                printInvalidToken();
            } else {
                $db->query('DELETE FROM '.PRE."_contact WHERE id='".$_REQUEST['id']."' LIMIT 1");
                logit('CONTACT_DEL', 'ID #'.$_REQUEST['id']);
                printJSRedirect(get_index('contact.show'));
            }
        } else {
            list($title) = $db->first('SELECT title FROM '.PRE."_contact WHERE id='".$_REQUEST['id']."' LIMIT 1");
            $apx->tmpl->assign('MESSAGE', $apx->lang->get('MSG_TEXT', ['TITLE' => compatible_hsc($title)]));
            tmessageOverlay('deltitle', ['ID' => $_REQUEST['id']], '/');
        }
    }
} //END CLASS
