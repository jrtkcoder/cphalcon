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

namespace Phalcon\Test\Unit\Assets\Asset;

use Codeception\Example;
use Phalcon\Assets\Asset;
use UnitTester;

class GetRealTargetPathCest
{
    /**
     * Tests Phalcon\Assets\Asset :: getRealTargetPath() - css local
     *
     * @author       Phalcon Team <team@phalconphp.com>
     * @since        2018-11-13
     *
     * @dataProvider localProvider
     */
    public function assetsAssetGetAssetKeyLocal(UnitTester $I, Example $example)
    {
        $I->wantToTest('Assets\Asset - getRealTargetPath() - css local');

        $asset = new Asset(
            $example['type'],
            $example['path']
        );

        $I->assertEquals(
            $example['path'],
            $asset->getRealTargetPath()
        );
    }

    /**
     * Tests Phalcon\Assets\Asset :: getRealTargetPath() - css remote
     *
     * @author       Phalcon Team <team@phalconphp.com>
     * @since        2018-11-13
     *
     * @dataProvider remoteProvider
     */
    public function assetsAssetGetAssetKeyRemote(UnitTester $I, Example $example)
    {
        $I->wantToTest('Assets\Asset - getRealTargetPath() - css remote');

        $asset = new Asset(
            $example['type'],
            $example['path'],
            false
        );

        $I->assertEquals(
            $example['path'],
            $asset->getRealTargetPath()
        );
    }

    protected function localProvider(): array
    {
        return [
            [
                'type' => 'css',
                'path' => 'css/docs.css',
            ],
            [
                'type' => 'js',
                'path' => 'js/jquery.js',
            ],
        ];
    }

    protected function remoteProvider(): array
    {
        return [
            [
                'type' => 'css',
                'path' => 'https://phalcon.ld/css/docs.css',
            ],
            [
                'type' => 'js',
                'path' => 'https://phalcon.ld/js/jquery.js',
            ],
        ];
    }
}
