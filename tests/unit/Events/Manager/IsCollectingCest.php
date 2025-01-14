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

namespace Phalcon\Test\Unit\Events\Manager;

use Phalcon\Events\Manager;
use UnitTester;

class IsCollectingCest
{
    /**
     * Tests Phalcon\Events\Manager :: isCollecting()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function eventsManagerIsCollecting(UnitTester $I)
    {
        $I->wantToTest('Events\Manager - isCollecting()');

        $manager = new Manager();

        $I->assertFalse(
            $manager->isCollecting()
        );

        $manager->collectResponses(true);

        $I->assertTrue(
            $manager->isCollecting()
        );

        $manager->collectResponses(false);

        $I->assertFalse(
            $manager->isCollecting()
        );
    }
}
