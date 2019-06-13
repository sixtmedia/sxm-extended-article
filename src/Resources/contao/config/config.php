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

// HOOKS
$GLOBALS['TL_HOOKS']['getArticle'][] = array('Sixtmedia\SxmExtendedArticle\Classes\ClassExtArticle', 'myGetArticle');
