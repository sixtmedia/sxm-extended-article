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

$GLOBALS['TL_DCA']['tl_article']['palettes']['default'] = str_replace 
( 
    'keywords;', 
    'keywords;{fullsize_legend:hide},fullsize;{background_legend:hide},backgroundColor,backgroundHexColor,addImage;', 
    $GLOBALS['TL_DCA']['tl_article']['palettes']['default'] 
); 
$GLOBALS['TL_DCA']['tl_article']['palettes']['__selector__'][] = 'fullsize';
$GLOBALS['TL_DCA']['tl_article']['palettes']['__selector__'][] = 'addImage';

// Subpalettes
$GLOBALS['TL_DCA']['tl_article']['subpalettes'] = array(
  'fullsize' => 'fullsizeOffsetElements,addFullsizeScroller,fullsizeScrollerColor,scrollOffsetElements,verticalAlignment',
  'addImage' => 'singleSRC,backgroundImageSize,backgroundAttachment,backgroundPosition,backgroundSize,backgroundRepeat,parallax,overlayColor,overlayHexColor,overlayColorAlpha',
);


// Hinzufügen der Feld-Konfiguration 
$GLOBALS['TL_DCA']['tl_article']['fields']['fullsize'] = array
(
  'label'                   => &$GLOBALS['TL_LANG']['tl_article']['fullsize'],
  'exclude'                 => true,
  'inputType'               => 'checkbox',
  'eval'                    => array('submitOnChange'=>true, 'tl_class'=>'clr'),
  'sql'                     => "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_article']['fields']['fullsizeOffsetElements'] = array 
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_article']['fullsizeOffsetElements'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'multiple'=>false, 'size'=>2, 'tl_class'=>'w50'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_article']['fields']['addFullsizeScroller'] = array
(
  'label'                   => &$GLOBALS['TL_LANG']['tl_article']['addFullsizeScroller'],
  'exclude'                 => true,
  'inputType'               => 'checkbox',
  'eval'                    => array('tl_class'=>'clr w50'),
  'sql'                     => "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_article']['fields']['fullsizeScrollerColor'] = array 
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_article']['fullsizeScrollerColor'],
    'exclude'                 => true,
    'filter'                  => true,
    'sorting'                 => true,
    'inputType'               => 'select',
    'options'                 => $GLOBALS['TL_LANG']['tl_article']['fullsizeScrollerColor']['options'],
    //'foreignKey'            => 'tl_user.name',
    //'options_callback'      => array('CLASS', 'METHOD'),
    'eval'                    => array('includeBlankOption'=>true, 'tl_class'=>'w50'),
    'sql'                     => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_article']['fields']['scrollOffsetElements'] = array 
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_article']['scrollOffsetElements'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'multiple'=>false, 'size'=>2, 'tl_class'=>'w50'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_article']['fields']['verticalAlignment'] = array
(
  'label'                   => &$GLOBALS['TL_LANG']['tl_article']['verticalAlignment'],
  'exclude'                 => true,
  'inputType'               => 'checkbox',
  'eval'                    => array('tl_class'=>'clr'),
  'sql'                     => "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_article']['fields']['backgroundColor'] = array 
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_article']['backgroundColor'],
    'exclude'                 => true,
    'filter'                  => true,
    'sorting'                 => true,
    'inputType'               => 'select',
    'options'                 => $GLOBALS['TL_LANG']['tl_article']['backgroundColor']['options'],
    //'foreignKey'            => 'tl_user.name',
    //'options_callback'      => array('CLASS', 'METHOD'),
    'eval'                    => array('includeBlankOption'=>true, 'tl_class'=>'w50'),
    'sql'                     => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_article']['fields']['backgroundHexColor'] = array 
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_article']['backgroundHexColor'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>false, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_article']['fields']['addImage'] = array
(
  'label'                   => &$GLOBALS['TL_LANG']['tl_article']['addImage'],
  'exclude'                 => true,
  'inputType'               => 'checkbox',
  'eval'                    => array('submitOnChange'=>true, 'tl_class'=>'clr'),
  'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['singleSRC'] = array
(
  'label'                   => &$GLOBALS['TL_LANG']['tl_article']['singleSRC'],
  'exclude'                 => true,
  'inputType'               => 'fileTree',
  'eval'                    => array('filesOnly'=>true, 'fieldType'=>'radio', 'mandatory'=>true, 'extensions'=>Config::get('validImageTypes'), 'tl_class'=>'clr'),
  'sql'                     => "binary(16) NULL"
);
$GLOBALS['TL_DCA']['tl_article']['fields']['backgroundAttachment'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_article']['backgroundAttachment'],
    'exclude'                 => true,
    'filter'                  => true,
    'sorting'                 => true,
    'inputType'               => 'select',
    'options'                 => $GLOBALS['TL_LANG']['tl_article']['backgroundAttachment']['options'],
    //'foreignKey'            => 'tl_user.name',
    //'options_callback'      => array('CLASS', 'METHOD'),
    'eval'                    => array('includeBlankOption'=>false, 'tl_class'=>'w50'),
    'sql'                     => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_article']['fields']['backgroundPosition'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_article']['backgroundPosition'],
    'exclude'                 => true,
    'filter'                  => true,
    'sorting'                 => true,
    'inputType'               => 'select',
    'options'                 => $GLOBALS['TL_LANG']['tl_article']['backgroundPosition']['options'],
    //'foreignKey'            => 'tl_user.name',
    //'options_callback'      => array('CLASS', 'METHOD'),
    'eval'                    => array('includeBlankOption'=>false, 'tl_class'=>'w50'),
    'sql'                     => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_article']['fields']['backgroundSize'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_article']['backgroundSize'],
    'exclude'                 => true,
    'filter'                  => true,
    'sorting'                 => true,
    'inputType'               => 'select',
    'options'                 => $GLOBALS['TL_LANG']['tl_article']['backgroundSize']['options'],
    //'foreignKey'            => 'tl_user.name',
    //'options_callback'      => array('CLASS', 'METHOD'),
    'eval'                    => array('includeBlankOption'=>false, 'tl_class'=>'w50'),
    'sql'                     => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_article']['fields']['backgroundRepeat'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_article']['backgroundRepeat'],
    'exclude'                 => true,
    'filter'                  => true,
    'sorting'                 => true,
    'inputType'               => 'select',
    'options'                 => $GLOBALS['TL_LANG']['tl_article']['backgroundRepeat']['options'],
    //'foreignKey'            => 'tl_user.name',
    //'options_callback'      => array('CLASS', 'METHOD'),
    'eval'                    => array('includeBlankOption'=>false, 'tl_class'=>'w50'),
    'sql'                     => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_article']['fields']['parallax'] = array 
( 
    'label'     => &$GLOBALS['TL_LANG']['tl_article']['parallax'], 
    'exclude'   => true, 
    'inputType' => 'checkbox', 
    'eval'      => array('mandatory'=>false, 'tl_class'=>'clr'), 
    'sql'       => "char(1) NOT NULL default ''" 
);
$GLOBALS['TL_DCA']['tl_article']['fields']['overlayColor'] = array 
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_article']['overlayColor'],
    'exclude'                 => true,
    'filter'                  => true,
    'sorting'                 => true,
    'inputType'               => 'select',
    'options'                 => $GLOBALS['TL_LANG']['tl_article']['overlayColor']['options'],
    //'foreignKey'            => 'tl_user.name',
    //'options_callback'      => array('CLASS', 'METHOD'),
    'eval'                    => array('includeBlankOption'=>true, 'tl_class'=>'w50'),
    'sql'                     => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_article']['fields']['overlayHexColor'] = array 
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_article']['overlayHexColor'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>false, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_article']['fields']['overlayColorAlpha'] = array 
(
    'label'     => &$GLOBALS['TL_LANG']['tl_article']['overlayColorAlpha'], 
    'exclude'   => true, 
    'inputType' => 'text', 
    'eval'      => array('mandatory'=>false, 'tl_class'=>'w50'), 
    'sql'       => "varchar(64) NOT NULL default ''" 
);