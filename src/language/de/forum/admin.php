<?php

//
// German Language Pack
// ====================
//

// MODULE NAME
$lang['modulename']['MODULENAME_FORUM'] = 'Forum';

// HEADLINES
$lang['titles'] = [
    'TITLE_FORUM_SEARCHUSER' => 'Benutzer suchen',
    'TITLE_FORUM_SHOW' => 'Foren-�bersicht',
    'TITLE_FORUM_ADD' => 'Forum erstellen',
    'TITLE_FORUM_EDIT' => 'Forum bearbeiten',
    'TITLE_FORUM_DEL' => 'Forum l�schen',
    'TITLE_FORUM_CLEAN' => 'Forum leeren',
    'TITLE_FORUM_MOVE' => 'Foren anordnen',
    'TITLE_FORUM_ANNOUNCE' => 'Ank�ndigungen',
    'TITLE_FORUM_RANKS' => 'Benutzerr�nge',
    'TITLE_FORUM_ICONS' => 'Themensymbole',
    'TITLE_FORUM_FILETYPES' => 'Erlaubte Anh�nge',
    'TITLE_FORUM_REINDEX' => 'Suchindex neu erzeugen',
    'TITLE_FORUM_RESYNC' => 'Synchronisieren',
];

// NAVIGATION
$lang['navi'] = [
    'NAVI_FORUM_SHOW' => 'Foren',
    'NAVI_FORUM_ANNOUNCE' => 'Ank�ndigungen',
    'NAVI_FORUM_RANKS' => 'Benutzerr�nge',
    'NAVI_FORUM_ICONS' => 'Themensymbole',
    'NAVI_FORUM_FILETYPES' => 'Erlaubte Anh�nge',
    'NAVI_FORUM_REINDEX' => 'Index neu erzeugen',
    'NAVI_FORUM_RESYNC' => 'Synchronisieren',
];

// ACTION EXPLICATION
$lang['expl'] = [
];

// LOG MESSAGES
$lang['log'] = [
    'LOG_FORUM_ADD' => 'Forum hinzugef�gt',
    'LOG_FORUM_EDIT' => 'Forum bearbeitet',
    'LOG_FORUM_DEL' => 'Forum gel�scht',
    'LOG_FORUM_CLEAN' => 'Forum geleert',
    'LOG_FORUM_RANKADD' => 'Benutzerrang erstellt',
    'LOG_FORUM_RANKEDIT' => 'Benutzerrang bearbeitet',
    'LOG_FORUM_RANKDEL' => 'Benutzerrang gel�scht',
    'LOG_FORUM_FILETYPEADD' => 'Dateityp hinzugef�gt',
    'LOG_FORUM_FILETYPEDEL' => 'Dateityp gel�scht',
    'LOG_FORUM_ICONSADD' => 'Themensymbol erstellt',
    'LOG_FORUM_ICONSDEL' => 'Themensymbol gel�scht',
    'LOG_FORUM_REINDEX' => 'Index neu erzeugt',
    'LOG_FORUM_RESYNC' => 'Forum synchronisiert',
];

// CONFIG
$lang['config'] = [
    'VIEW' => 'Darstellung',
    'OPTIONS' => 'Einstellungen',
    'CODES' => 'Codes in Beitr�gen erlauben?',
    'SMILIES' => 'Smilies ein Beitr�ge erlauben?',
    'BADWORDS' => 'Badword-Filter verwenden?',
    'TPP' => 'Themen pro Seite (Standardwert):',
    'PPP' => 'Beitr�ge pro Seite (Standardwert):',
    'HOT_POSTS' => 'Anzahl der Antworten ab denen ein Thema &quot;hot&quot; wird:',
    'HOT_VIEWS' => 'Anzahl der Klicks ab denen ein Thema &quot;hot&quot; wird:',
    'TIMEOUT' => 'Inaktivit�t in Minuten, ab der alle Forenbeitr�ge als gelesen markiert werden:',
    'CAPTCHA' => 'Gast-Beitr�ge m�ssen visuell best�tigt werden (Captcha)?',
    'RATINGS' => 'Themen d�rfen bewertet werden?',
    'FORUMTITLE' => 'Forum-Titel:',
    'AUTOSUBSCRIBE' => 'Themen, in denen ein Benutzer postet, automatisch abonnieren?',
    'EDITTIME' => 'Dauer in Minuten, die ein Beitrag bearbeitet werden darf (0 = immer m�glich):',
    'SPAMPROT' => 'Dauer in Minuten bis erneut ein Beitrag geschrieben werden kann (0 = aus):',
];

// ACTIONS

//SEARCHUSER
$lang['actions']['searchuser'] = [
    'SEARCH' => 'Suchen',
    'LOGINNAME' => 'Login-Benutzername',
    'INSERT' => 'Ausw�hlen',
    'NONE' => 'Keine Benutzer gefunden!',
];

//SHOW
$lang['actions']['show'] = [
    'ADDFORUM' => 'Neues Unterforum von',
    'NEW' => 'Auf oberster Ebene',
    'CREATEFORUM' => 'Forum erstellen',
    'CREATECAT' => 'Kategorie erstellen',
    'COL_TITLE' => 'Titel',
    'COL_POSTS' => 'Beitr�ge',
    'COL_THREADS' => 'Themen',
    'USEDND' => 'Sie k�nnen die Foren per Drag &amp; Drop anordnen',
    'CLEAN' => 'Forum leeren',
    'MOVEUP' => 'Nach oben',
    'MOVEDOWN' => 'Nach unten',
    'NONE' => 'Noch keine Foren erstellt!',
];

//ADD + EDIT
$lang['actions']['add'] =
$lang['actions']['edit'] = [
    'ADDCAT' => 'Kategorie erstellen',
    'EDITCAT' => 'Kategorie bearbeiten',
    'TITLE' => 'Titel',
    'DESCRIPTION' => 'Beschreibung',
    'META_DESCRIPTION' => 'Meta Description',
    'STYLESHEET' => 'Pfad Forum-Stylesheet',
    'LINK' => 'Forum-Link',
    'LINKINFO' => 'Statt einem Forum wird zu dieser Adresse weitergeleitet',
    'MODERATORS' => 'Betreuer',
    'MODINFO' => 'Betreuer haben in ihrem Forum die gleichen Rechte wie ein Administrator',
    'ADDMOD' => 'Hinzuf�gen',
    'SELECTUSER' => 'Benutzer ausw�hlen',
    'OPTIONS' => 'Optionen',
    'OPEN' => 'Forum ist offen?',
    'SEARCHABLE' => 'Forum in den Suchindex aufnehmen?',
    'COUNTPOSTS' => 'Beitr�ge erh�hen die Beitragszahl des Benutzers?',
    'PREFIXES' => 'Pr�fixe',
    'NEWPREFIX' => 'Neues Pr�fix',
    'CODE' => 'HTML-Code',
    'RIGHTS' => 'Zugriffsrechte',
    'INHERIT' => 'Rechte vom �berforum erben',
    'RIGHT_VISIBLE' => 'Forum sichtbar',
    'RIGHT_READ' => 'Inhalt lesen',
    'RIGHT_OPEN' => 'Themen erstellen',
    'RIGHT_ANNOUNCE' => 'Gepinte Themen erstellen',
    'RIGHT_POST' => 'Beitr�ge schreiben',
    'RIGHT_EDITPOST' => 'Eigene Beitr�ge bearbeiten',
    'RIGHT_DELPOST' => 'Eigene Beitr�ge l�schen',
    'RIGHT_DELTHREAD' => 'Eigene Themen l�schen',
    'RIGHT_ADDATTACHMENT' => 'Anh�nge hochladen',
    'RIGHT_READATTACHMENT' => 'Anh�nge lesen',
    'ALL' => 'Alle',
    'NOBODY' => 'Keiner',
    'PASSWORD' => 'Passwortschutz',
    'SEPBYCOMMA' => 'mehrere eMail-Adressen durch Komma trennen',
    'SUBMIT_ADD' => 'Erstellen',
    'SUBMIT_EDIT' => 'Aktualisieren',
    'INFO_ADDMOD' => 'Betreuer hinzugef�gt!',
    'INFO_DELMOD' => 'Betreuer entfernt!',
    'INFO_USERFAILED' => 'Unter diesem Benutzernamen existiert kein Account!',
];

//DEL
$lang['actions']['del'] = [
    'MSG_TEXT' => 'Soll das Forum &quot;{TITLE}&quot; wirklich gel�scht werden?',
];

//CLEAN
$lang['actions']['clean'] = [
    'TITLE' => 'Forum',
    'MOVETO' => 'Inhalt verschieben nach',
    'DELFORUM' => 'Forum l�schen',
    'DELTHREADSINFO' => 'Ansonsten werden alle Beitr�ge unwiderruflich gel�scht',
    'SUBMIT' => 'Forum leeren',
];

//RANKS
$lang['actions']['ranks'] = [
    'LAYER_POST' => 'Beitr�ge',
    'LAYER_USERGROUPS' => 'Benutzergruppen',
    'LAYER_USER' => 'Benutzer',
    'COL_RANK' => 'Rang',
    'COL_POSTS' => 'Mindestzahl an Beitr�gen',
    'COL_USERGROUP' => 'Benutzergruppe',
    'COL_USER' => 'Benutzer',
    'ADDRANK' => 'Rang hinzuf�gen',
    'NONE' => 'Noch keine R�nge erstellt!',
];

//ADD/EDIT RANK
$lang['actions']['ranks_add'] =
$lang['actions']['ranks_edit'] = [
    'ADDRANK' => 'Rang hinzuf�gen',
    'EDITRANK' => 'Rang bearbeiten',
    'COLOR' => 'Farbe',
    'IMAGE' => 'Dateipfad zum Symbol',
    'UPDATE' => 'Aktualisieren',
    'TITLE' => 'Rang',
    'CRITERIA' => 'Kriterium',
    'SEARCHUSER' => 'Benutzer suchen',
    'INFO_USERFAILED' => 'Unter diesem Benutzernamen existiert kein Account!',
];

//DEL RANK
$lang['actions']['ranks_del'] = [
    'MSG_TEXT' => 'Soll der Rang &quot;{TITLE}&quot; wirklich gel�scht werden?',
];

//ANNOUNCEMENTS
$lang['actions']['announce'] = [
    'COL_TITLE' => 'Titel',
    'COL_USER' => 'Autor',
    'COL_PUBDATE' => 'Ver�ffentlichung',
    'SORT_ADDTIME' => 'Erstellungsdatum',
    'ADDANNOUNCE' => 'Ank�ndigung erstellen',
    'NONE' => 'Noch keine Ank�ndigungen erstellt!',
];

//ADD/EDIT ANNOUNCEMENTS
$lang['actions']['announce_add'] =
$lang['actions']['announce_edit'] = [
    'ADDANNOUNCE' => 'Ank�ndigung erstellen',
    'EDITANNOUNCE' => 'Ank�ndigung bearbeiten',
    'TITLE' => 'Titel',
    'FORUMS' => 'Foren',
    'ALLFORUMS' => 'Alle Foren',
    'TEXT' => 'Text',
    'BBCODEALLOWED' => 'BB-Codes erlaubt',
    'STARTTIME' => 'Ver�ffentlichen ab',
    'PUBNOW' => 'Sofort ver�ffentlichen',
    'ENDTIME' => 'Automatisch widerrufen',
    'UPDATE' => 'Aktualisieren',
];

//ANNOUNCEMENTS RANK
$lang['actions']['announce_del'] = [
    'MSG_TEXT' => 'Soll die Ank�ndigung &quot;{TITLE}&quot; wirklich gel�scht werden?',
];

//ICONS
$lang['actions']['icons'] = [
    'ICON' => 'Symbol',
    'FILE' => 'Dateipfad',
    'PREVIEW' => 'Vorschau',
    'FILEINFO' => 'Der Dateipfad des Symbol-Bilds ist relativ zum Foren-Ordner, alternativ auch relativ zum Mutterverzeichnis der Domain (mit / beginnend).',
    'ADDICONS' => 'Symbole hinzuf�gen',
    'USEDND' => 'Sie k�nnen die Eintr�ge per Drag &amp; Drop anordnen',
    'MSG_TEXT' => 'Wollen Sie dieses Symbol wirklich l�schen?',
    'NONE' => 'Noch keine Symbole eingetragen!',
];

//FILETYPES
$lang['actions']['filetypes'] = [
    'EXT' => 'Dateiendung',
    'ICON' => 'Symbol',
    'MAXSIZE' => 'Maximale Dateigr��e',
    'FILEINFO' => 'Der Dateipfad des Symbol-Bilds ist relativ zum Foren-Ordner, alternativ auch relativ zum Mutterverzeichnis der Domain (mit / beginnend).',
    'ADDFILETYPE' => 'Dateityp hinzuf�gen',
    'EDITFILETYPE' => 'Dateityp bearbeiten',
    'MSG_TEXT' => 'Wollen Sie den Dateityp &quot;{TITLE}&quot; wirklich erntfernen?',
    'MSG_EXISTS' => 'Dieser Dateityp ist bereits definiert!',
    'NONE' => 'Noch keine Dateitypen eingetragen!',
];

//REINDEX
$lang['actions']['reindex'] = [
    'START' => 'Starten',
    'MSG_START' => 'Soll der Suchindex wirklich neu erzeugt werden? <b>ACHTUNG:</b> Dieser Vorgang ist sehr serverlastig!',
    'MSG_RUNNING' => 'Suchindex wird gerade erzeugt. Brechen Sie diesen Vorgang nicht ab!',
    'MSG_OK' => 'Der Suchindex wurde neu erzeugt!',
];

//RESYNC
$lang['actions']['resync'] = [
    'START' => 'Starten',
    'MSG_TEXT' => 'Sollen Themenzahlen, Beitragszahlen und letzte Beitr�ge neu berechnet werden?',
    'MSG_OK' => 'Vorgang abgeschlossen!',
];
