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

namespace Sixtmedia\SxmExtendedArticle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Sixtmedia\SxmExtendedArticle\SxmExtendedArticle;

class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(SxmExtendedArticle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
