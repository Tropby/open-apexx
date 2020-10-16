<?php

//
// German Language Pack
// ====================
//

// MODULE NAME
$lang['modulename']['MODULENAME_BANNER'] = 'Bannerrotation';

// HEADLINES
$lang['titles'] = [
    'TITLE_BANNER_SHOW' => 'Banner',
    'TITLE_BANNER_ADD' => 'Banner hinzuf�gen',
    'TITLE_BANNER_EDIT' => 'Banner bearbeiten',
    'TITLE_BANNER_DEL' => 'Banner l�schen',
    'TITLE_BANNER_ENABLE' => 'Banner aktivieren',
    'TITLE_BANNER_DISABLE' => 'Banner deaktivieren',
    'TITLE_BANNER_GROUP' => 'Bannergruppen',
];

// NAVIGATION
$lang['navi'] = [
    'NAVI_BANNER_SHOW' => 'Banner zeigen',
    'NAVI_BANNER_ADD' => 'Neues Banner',
    'NAVI_BANNER_GROUP' => 'Bannergruppen',
];

// ACTION EXPLICATION
$lang['expl'] = [
];

// LOG MESSAGES
$lang['log'] = [
    'LOG_BANNER_ADD' => 'Banner hinzugef�gt',
    'LOG_BANNER_EDIT' => 'Banner bearbeitet',
    'LOG_BANNER_DEL' => 'Banner gel�scht',
    'LOG_BANNER_ENABLE' => 'Banner aktiviert',
    'LOG_BANNER_DISABLE' => 'Banner deaktiviert',
    'LOG_BANNER_GROUPADD' => 'Bannergruppe hinzugef�gt',
    'LOG_BANNER_GROUPDEL' => 'Bannergruppe gel�scht',
];

// ACTIONS

//SHOW
$lang['actions']['show'] = [
    'COL_PARTNER' => 'Werbepartner',
    'COL_PERIOD' => 'Laufzeit',
    'COL_VIEWS' => 'Views',
    'COL_GROUP' => 'Gruppe',
    'FROM' => 'Von',
    'TILL' => 'Bis',
    'CHOOSE' => 'Nach einer Bannergruppe filtern',
    'NONE' => 'Bisher keine Banner eingetragen!',
];

//ADD + EDIT
$lang['actions']['add'] = $lang['actions']['edit'] = [
    'PARTNER' => 'Werbepartner',
    'CODE' => 'Bannercode',
    'LIMIT' => 'Anzeigelimit',
    'CAPPING' => 'Capping pro Tag',
    'RATIO' => 'Anzeigeverh�ltnis',
    'GROUP' => 'Gruppe',
    'PUBLICATION' => 'Freischaltung',
    'STARTTIME' => 'Freischalten ab',
    'ENDTIME' => 'Automatisch deaktivieren',
    'SUBMIT' => 'Freischalten',
    'SUBMIT_ADD' => 'Banner hinzuf�gen',
    'SUBMIT_EDIT' => 'Aktualisieren',
];

//DEL
$lang['actions']['del'] = [
    'MSG_TEXT' => 'Wollen Sie den Banner &quot;{TITLE}&quot; wirklich l�schen?',
];

//ENABLE
$lang['actions']['enable'] = [
    'TITLE' => 'Banner',
    'STARTTIME' => 'Freischalten ab',
    'ENDTIME' => 'Automatisch deaktivieren',
    'SUBMIT' => 'Freischalten',
];

//DISABLE
$lang['actions']['disable'] = [
    'DISABLE' => 'Deaktivieren',
    'MSG_TEXT' => 'Wollen Sie den Banner &quot;{TITLE}&quot; wirklich deaktivieren?',
];

//GROUP
$lang['actions']['group'] = [
    'COL_TITLE' => 'Bezeichnung',
    'COL_BANNERS' => 'Banneranzahl',
    'NONE' => 'Noch keine Bannergruppen erstellt!',
    'CATADD' => 'Bannergruppe erstellen',
    'CATEDIT' => 'Aktualisieren',
    'MSG_TEXT' => 'Soll die Bannergruppe &quot;{TITLE}&quot; wirklich gel�scht werden?',
];
