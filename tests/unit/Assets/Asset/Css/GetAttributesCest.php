<?php
declare(strict_types=1);

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Unit\Assets\Asset\Css;

use Phalcon\Assets\Asset\Css;
use UnitTester;

class GetAttributesCest
{
    /**
     * Tests Phalcon\Assets\Asset\Css :: getAttributes()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function assetsAssetCssGetAttributes(UnitTester $I)
    {
        $I->wantToTest('Assets\Asset\Css - getAttributes()');

        $attributes = [
            'data-key' => 'phalcon',
        ];

        $asset = new Css(
            'css/docs.css',
            true,
            false,
            $attributes
        );

        $I->assertEquals(
            $attributes,
            $asset->getAttributes()
        );
    }
}
