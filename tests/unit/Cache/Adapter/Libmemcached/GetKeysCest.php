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

namespace Phalcon\Test\Unit\Cache\Adapter\Libmemcached;

use Phalcon\Cache\Adapter\Libmemcached;
use Phalcon\Storage\SerializerFactory;
use Phalcon\Test\Fixtures\Traits\LibmemcachedTrait;
use UnitTester;
use function getOptionsLibmemcached;

class GetKeysCest
{
    use LibmemcachedTrait;

    /**
     * Tests Phalcon\Cache\Adapter\Libmemcached :: getKeys()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2019-04-13
     */
    public function cacheAdapterLibmemcachedGetKeys(UnitTester $I)
    {
        $I->wantToTest('Cache\Adapter\Libmemcached - getKeys()');

        $serializer = new SerializerFactory();

        $adapter = new Libmemcached(
            $serializer,
            getOptionsLibmemcached()
        );

        $adapter->clear();

        $adapter->set('key-1', 'test');
        $adapter->set('key-2', 'test');

        $actual = $adapter->getKeys();
        sort($actual);
        $I->assertEquals(
            [
                'ph-memc-key-1',
                'ph-memc-key-2',
            ],
            $actual
        );
    }
}
