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

namespace Phalcon\Test\Unit\Cache\Adapter\Memory;

use UnitTester;

class GetDefaultSerializerCest
{
    /**
     * Unit Tests Phalcon\Cache\Adapter\Memory :: getDefaultSerializer()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2019-05-25
     */
    public function cacheAdapterMemoryGetDefaultSerializer(UnitTester $I)
    {
        $I->wantToTest('Cache\Adapter\Memory - getDefaultSerializer()');

        $I->skipTest('Need implementation');
    }
}
