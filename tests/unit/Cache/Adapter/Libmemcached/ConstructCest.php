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

use DateInterval;
use Exception;
use Phalcon\Cache\Adapter\AdapterInterface;
use Phalcon\Storage\SerializerFactory;
use Phalcon\Test\Fixtures\Cache\Adapter\Libmemcached;
use Phalcon\Test\Fixtures\Traits\LibmemcachedTrait;
use UnitTester;
use function getOptionsLibmemcached;

class ConstructCest
{
    use LibmemcachedTrait;

    /**
     * Tests Phalcon\Cache\Adapter\Libmemcached :: __construct()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2019-04-09
     */
    public function cacheAdapterLibmemcachedConstruct(UnitTester $I)
    {
        $I->wantToTest('Cache\Adapter\Libmemcached - __construct()');

        $serializer = new SerializerFactory();

        $adapter = new Libmemcached(
            $serializer,
            getOptionsLibmemcached()
        );

        $I->assertInstanceOf(
            Libmemcached::class,
            $adapter
        );

        $I->assertInstanceOf(
            AdapterInterface::class,
            $adapter
        );
    }

    /**
     * Tests Phalcon\Cache\Adapter\Libmemcached :: __construct() - empty
     * options
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2019-04-09
     */
    public function cacheAdapterLibmemcachedConstructEmptyOptions(UnitTester $I)
    {
        $I->wantToTest('Cache\Adapter\Libmemcached - __construct() - empty options');

        $serializer = new SerializerFactory();
        $adapter    = new Libmemcached($serializer);

        $expected = [
            'servers' => [
                0 => [
                    'host'   => '127.0.0.1',
                    'port'   => 11211,
                    'weight' => 1,
                ],
            ],
        ];

        $I->assertEquals(
            $expected,
            $adapter->getOptions()
        );
    }

    /**
     * Tests Phalcon\Cache\Adapter\Libmemcached :: __construct() - getTtl
     * options
     *
     * @throws Exception
     * @since  2019-04-09
     *
     * @author Phalcon Team <team@phalconphp.com>
     */
    public function cacheAdapterLibmemcachedConstructGetTtl(UnitTester $I)
    {
        $I->wantToTest('Cache\Adapter\Libmemcached - __construct() - getTtl');

        $serializer = new SerializerFactory();
        $adapter    = new Libmemcached($serializer);

        $I->assertEquals(
            3600,
            $adapter->getTtl(null)
        );

        $I->assertEquals(
            20,
            $adapter->getTtl(20)
        );

        $time = new DateInterval('PT5S');

        $I->assertEquals(
            5,
            $adapter->getTtl($time)
        );
    }
}
