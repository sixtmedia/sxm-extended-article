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

declare(strict_types=1);

namespace Sixtmedia\SxmExtendedArticle\Classes;

class ClassExtArticle
{
    public function myGetArticle($objRow)
    {
      $strAddCss = "";

      if ($objRow->backgroundColor) {
        $backgroundColor = ($objRow->backgroundColor == 'individual' ? $objRow->backgroundHexColor : $objRow->backgroundColor ) ;

      } else {
        $backgroundColor = 'transparent';
      }
     
      if ($objRow->overlayColor) {

        $overlayColor = ($objRow->overlayColor == 'individual' ? $objRow->overlayHexColor : $objRow->overlayColor ) ;

        if ( strlen($overlayColor) == 3 ) {
          $rgb_r = hexdec(substr($overlayColor,0,1) . substr($overlayColor,0,1));
          $rgb_g = hexdec(substr($overlayColor,1,1) . substr($overlayColor,1,1));
          $rgb_b = hexdec(substr($overlayColor,2,1) . substr($overlayColor,2,1));
        } elseif ( strlen($overlayColor) == 6 ) {
          $rgb_r = hexdec(substr($overlayColor,0,2));
          $rgb_g = hexdec(substr($overlayColor,2,2));
          $rgb_b = hexdec(substr($overlayColor,4,2));
        } else {
          $rgb_r = 255;
          $rgb_g = 255;
          $rgb_b = 255;
        }

        $overlayColorAlpha = ( $objRow->overlayColorAlpha && $objRow->overlayColorAlpha != 0 ? ( $objRow->overlayColorAlpha / 100 ) : '1' );

        $strOverlayRgbColor = 'rgba('. $rgb_r .', '. $rgb_g .', '. $rgb_b .', '. $overlayColorAlpha .')';

      }

      if ($objRow->addImage) {

        $strAddCss .= '
        #article-' . $objRow->id. '{
        background-color: #' . $backgroundColor . ';
        background-image: url(' . \FilesModel::findById( $objRow->singleSRC )->path . ');
        background-attachment: ' . ($objRow->parallax == true ? 'fixed' : $objRow->backgroundAttachment) . ';
        background-position: ' . $objRow->backgroundPosition . ';
        background-size:' . $objRow->backgroundSize . ';
        background-repeat:' . $objRow->backgroundRepeat . '; } '; 

        if ($objRow->overlayColor) {
          
          $strAddCss .= '
            #article-' . $objRow->id . ':before {
              position: absolute;
              top: 0; 
              left: 0; 
              width: 100%; 
              height: 100%; 
              content: \'\'; 
              background-color: ' . $strOverlayRgbColor . ';              
            }';           
        }
        
        if ($objRow->parallax) {
          $strAddJS .= '
            $(document).ready(function(){
//              $(\'#article-' . $objRow->id. '\').parallax(\'' . '50%' . '\', 0.5, false);
              $(\'#article-' . $objRow->id. '\').parallax({xpos:\'' . '50%' . '\', speedFactor:0.5, outerHeight:false});
            });
          '; 
        }
      } elseif ($objRow->backgroundColor) {
        $strAddCss = '#article-' . $objRow->id. '{background-color: #' . $backgroundColor . ';}'; 
      }

      if ($objRow->fullsize) {
        $strAddJS .= '
          $(document).ready(function(){
            $(\'#article-' . $objRow->id. '\').sizeContent(\'' . html_entity_decode( $objRow->fullsizeOffsetElements ) . '\');
            $(window).resize( function () {
              $(\'#article-' . $objRow->id. '\').sizeContent(\'' . html_entity_decode( $objRow->fullsizeOffsetElements ) . '\');
            });
          });
        '; 

        if ($objRow->addFullsizeScroller) {
          $strAddJS .= '
            $(document).ready(function(){
              $(\'#article-' . $objRow->id. '\').addFullsizeScroller(\'' . $objRow->fullsizeScrollerColor . '\');
              $(\'#article-' . $objRow->id. ' .fullsizeScroller\').click(function(){
                $(\'#article-' . $objRow->id. ' .fullsizeScroller\').scrollBeyondFullsize(\'#article-' . $objRow->id. '\', \'' . html_entity_decode( $objRow->scrollOffsetElements ) . '\');
              });
            });
          '; 
        }
        
        if ($objRow->verticalAlignment) {
          $strAddCss .= '
            #article-' . $objRow->id . ' {
              display: flex;
              align-items: center; 
              justify-content: center; 
            }'; 
        }
        
      }

      // Add JS to the header
      if ($strAddJS) {
        $GLOBALS['TL_JAVASCRIPT'][] = 'bundles/sxmextendedarticle/js/sxm_extended_article.js';
        $GLOBALS['TL_HEAD'][] = '<script> ' . $strAddJS . ' </script>'; 
      }
      
      // Add CSS to the header
      if ($strAddCss) {
        $GLOBALS['TL_HEAD'][] = '<style> ' . $strAddCss . ' </style>'; 
      }
    }
}