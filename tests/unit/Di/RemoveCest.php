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

namespace Phalcon\Test\Unit\Di;

use Phalcon\Di;
use Phalcon\Escaper;
use UnitTester;

class RemoveCest
{
    /**
     * Tests Phalcon\Di :: remove()
     *
     * @author Sid Roberts <https://github.com/SidRoberts>
     * @since  2019-06-02
     */
    public function diRemove(UnitTester $I)
    {
        $I->wantToTest('Di - remove()');

        $di = new Di();

        $di->set('escaper', Escaper::class);

        $I->assertTrue(
            $di->has('escaper')
        );

        $di->remove('escaper');

        $I->assertFalse(
            $di->has('escaper')
        );
    }
}
