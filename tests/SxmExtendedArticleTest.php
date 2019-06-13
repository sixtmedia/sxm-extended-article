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


namespace Sixtmedia\SxmExtendedArticle\Tests;

use Sixtmedia\SxmExtendedArticle\SxmExtendedArticle;
use PHPUnit\Framework\TestCase;

class SxmExtendedArticle extends TestCase
{
    public function testCanBeInstantiated()
    {
        $bundle = new SxmExtendedArticle();

        $this->assertInstanceOf('Sixtmedia\SxmExtendedArticle\SxmExtendedArticle', $bundle);
    }
}
