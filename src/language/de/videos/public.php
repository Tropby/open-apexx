<?php

//
// German Language Pack
// ====================
//

$lang['global'] = [
    'HEADLINE' => 'Videos',
    'HITS' => 'Klicks',
    'COMMENTS' => 'Kommentare',
    'TELL' => 'Empfehlen',
    'BROKEN' => 'Defekt?',
    'ICON_TOP' => 'Top!',
    'ICON_NEW' => 'Neu!',
];

$lang['globalwohl'] = $lang['global'];
unset($lang['globalwohl']['HEADLINE']);

$lang['list'] = [
    'TOPVIDEOS_RATING' => 'Beste Bewertung',
    'TOPVIDEOS_HITS' => 'Meiste Klicks',
    'NEWVIDEOS' => 'Neueste Videos',
    'COL_TITLE' => 'Titel',
    'COL_SIZE' => 'Gr��e',
    'COL_DATE' => 'Datum',
    'COL_TEXT' => 'Beschreibung',
    'SORTBY' => 'Sortieren nach',
    'SORT_TITLE' => 'Titel',
    'SORT_DATE' => 'Datum',
    'SORT_HITS' => 'Klicks',
    'SORT_UPLOADER' => 'Uploader',
    'SORT_AUTHOR' => 'Autor',
    'SORT_RATING' => 'Bewertung',
    'ICON_ASC' => 'Aufsteigend',
    'ICON_DESC' => 'Absteigend',
];

$lang['detail'] = [
    'PICTURES' => 'Bilder',
    'NOPICS' => 'Keine Bilder',
    'UPLOADER' => 'Uploader',
    'DATE' => 'Datum',
    'AUTHOR' => 'Autor',
    'SIZE' => 'Dateigr��e',
    'ESTTIME' => 'Gesch�tze Dauer',
    'MODEM' => 'Modem',
    'ISDN' => 'ISDN',
    'DSL' => 'DSL',
    'DOWNLOAD' => 'Download',
    'DOWNLOADS' => 'Downloads',
    'MIRRORS' => 'Mirrors',
    'MSG_LIMITREACHED' => 'Das t�gliche Download-Limit wurde erreicht, bitte versuchen Sie es sp�ter noch einmal!',
    'MSG_PWDREQUIRED' => 'Dieses Video ist durch ein Passwort gesch�tzt!',
    'SUBMITPWD' => 'Passwort senden',
];

$lang['search'] = [
    'HEADLINE_SEARCH' => 'Suchergebnisse',
    'SEARCH' => 'Videos suchen',
    'ITEM' => 'Suchbegriffe',
    'CONNAND' => 'UND-Verkn�pfung',
    'CONNOR' => 'ODER-Verkn�pfung',
    'CATEGORY' => 'Kategorie',
    'ALL' => 'Alle',
    'TIMEPERIOD' => 'Zeitraum',
    'MSG_NORESULT' => 'Die Suchanfrage ergab keine Treffer!',
];

$lang['broken'] = [
    'MSG_TEXT' => 'Wollen Sie diesen Video wirklich als defekt melden?',
    'MSG_BROKEN' => 'Danke f�r Ihren Hinweis! Sie werden nun weitergeleitet...',
    'MAIL_BROKEN_TITLE' => 'Video defekt',
    'MAIL_BROKEN_TEXT' => "Hallo,\nder folgende Video wurde soeben als defekt gemeldet: {URL}",
];

$lang['func_stats'] = [
    'CATEGORIES' => 'Kategorien',
    'VIDEOS' => 'Videos',
    'AVG_HITS' => 'Klicks durchschnittlich',
];

$lang['func_search'] = [
    'SEARCH_VIDEOS' => 'Videos',
];
