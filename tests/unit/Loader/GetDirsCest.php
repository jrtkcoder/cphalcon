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

namespace Phalcon\Test\Unit\Loader;

use Phalcon\Loader;
use UnitTester;
use function dataDir;

class GetDirsCest
{
    /**
     * Tests Phalcon\Loader :: getDirs()
     *
     * @author Sid Roberts <https://github.com/SidRoberts>
     * @since  2019-05-25
     */
    public function loaderGetDirs(UnitTester $I)
    {
        $I->wantToTest('Loader - getDirs()');

        $loader = new Loader();

        $loader->registerDirs(
            [
                // missing trailing slash
                dataDir('fixtures/Loader/Example/Folders/Dialects'),
                dataDir('fixtures/Loader/Example/Folders/Types/'),
            ]
        );

        $I->assertEquals(
            [
                dataDir('fixtures/Loader/Example/Folders/Dialects'),
                dataDir('fixtures/Loader/Example/Folders/Types/'),
            ],
            $loader->getDirs()
        );
    }
}
