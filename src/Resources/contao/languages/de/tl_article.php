<?php
/*
 * Sxm Extended Article
 *
 * (c) 2019 sixtmedia <info@sixtmedia.de>
 *
 * Author: Timon Sixt
 * https://www.sixtmedia.de
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

$GLOBALS['TL_LANG']['tl_article']['fullsize_legend'] = 'Fullsize - volle Viewport-Höhe';
$GLOBALS['TL_LANG']['tl_article']['background_legend'] = 'Hintergrundbild / -farbe';

$GLOBALS['TL_LANG']['tl_article']['fullsize'] = array('Volle Höhe', 'den Artikel in der Höhe dem Viewport anpassen');
$GLOBALS['TL_LANG']['tl_article']['fullsizeOffsetElements'] = array('Offset Elemente für Fullsize-Höhe', 'Elemente, die bei der Berechnung der Fullsize-Höhe abgezogen werden sollen. Mehrere Elemente mit | trennen. Z.B. header|#breadcrumb ');
$GLOBALS['TL_LANG']['tl_article']['addFullsizeScroller'] = array('Scroll-Button hinzufügen', 'Dem Artikel ein klickbares Element zum nach unten scrollen hinzufügen');
$GLOBALS['TL_LANG']['tl_article']['fullsizeScrollerColor'] = array('Farbe des Scroll-Buttons', '');
$GLOBALS['TL_LANG']['tl_article']['scrollOffsetElements'] = array('Offset Elemente für Scroll-Funktion', 'Elemente, die bei der Scroll-Funktion abgezogen werden sollen. Mehrere Elemente mit | trennen. Z.B. header|#breadcrumb ');
$GLOBALS['TL_LANG']['tl_article']['verticalAlignment'] = array('Inhalt vertikal zentrieren', '');

$GLOBALS['TL_LANG']['tl_article']['backgroundColor'] = array('Artikel Hintergrundfarbe', 'Wählen Sie eine Hintergrundfarbe aus.');
$GLOBALS['TL_LANG']['tl_article']['backgroundHexColor'] = array('Eigene Hintergrundfarbe', 'Farbe als HEX-Wert, z.B. ffffff');
$GLOBALS['TL_LANG']['tl_article']['addImage'] = array('Ein Bild hinzufügen', 'Dem Inhaltselement ein Bild hinzufügen.');
$GLOBALS['TL_LANG']['tl_article']['singleSRC'] = array('Quelldatei', 'Bitte wählen Sie eine Datei oder einen Ordner aus der Dateiübersicht.');
$GLOBALS['TL_LANG']['tl_article']['backgroundAttachment'] = array('Fixierung', '');
$GLOBALS['TL_LANG']['tl_article']['backgroundPosition'] = array('Position', '');
$GLOBALS['TL_LANG']['tl_article']['backgroundSize'] = array('Größe', '');
$GLOBALS['TL_LANG']['tl_article']['backgroundRepeat'] = array('Wiederholen', '');
$GLOBALS['TL_LANG']['tl_article']['parallax'] = array('Parallax Effekt', 'Den Parallax-Effekt für das Hintergrundbild ein-/ausschalten.');
$GLOBALS['TL_LANG']['tl_article']['overlayColor'] = array('Überlagernde Farbe', 'Überlagernde Farbe auswählen.');
$GLOBALS['TL_LANG']['tl_article']['overlayHexColor'] = array('Eigene überlagernde Farbe', 'Farbe als HEX-Wert, z.B. ffffff');
$GLOBALS['TL_LANG']['tl_article']['overlayColorAlpha'] = array('Deckkraft der überlagernden Farbe', 'Deckkraft der überlagernden Farbe einstellen: undurchsichtig = 100, 0 = durchsichtig');

$GLOBALS['TL_LANG']['tl_article']['fullsizeScrollerColor']['options'] = array (
  'light' => 'hell',
  'dark' => 'dunkel',
);
$GLOBALS['TL_LANG']['tl_article']['backgroundColor']['options'] = array (
  'ffffff' => 'Weiß',
  '000000' => 'Schwarz',
  'individual' => 'Eigene Farbe',
);
$GLOBALS['TL_LANG']['tl_article']['backgroundPosition']['options'] = array (
  'left top' => 'left top',
  'center top' => 'center top',
  'right top' => 'right top',
  'left' => 'left center',
  'center' => 'center center',
  'right' => 'right center',
  'left bottom' => 'left bottom',
  'center bottom' => 'center bottom',
  'right bottom' => 'right bottom',
);
$GLOBALS['TL_LANG']['tl_article']['backgroundRepeat']['options'] = array (
  'no-repeat' => 'no-repeat',
  'repeat-x' => 'repeat-x',
  'repeat-y' => 'repeat-y',
  'repeat' => 'repeat'
);
$GLOBALS['TL_LANG']['tl_article']['backgroundSize']['options'] = array (
  'auto auto' => 'auto auto',
  'cover' => 'cover',
  'contain' => 'contain',
);

$GLOBALS['TL_LANG']['tl_article']['backgroundAttachment']['options'] = array (
  'scroll' => 'scroll',
  'fixed' => 'fixed',
);
$GLOBALS['TL_LANG']['tl_article']['overlayColor']['options'] = array (
  'ffffff' => 'Weiß',
  '000000' => 'Schwarz',
  'individual' => 'Eigene Farbe',
);

