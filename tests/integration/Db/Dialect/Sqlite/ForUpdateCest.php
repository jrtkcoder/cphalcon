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

namespace Phalcon\Test\Integration\Db\Dialect\Sqlite;

use IntegrationTester;

class ForUpdateCest
{
    /**
     * Tests Phalcon\Db\Dialect\Sqlite :: forUpdate()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function dbDialectSqliteForUpdate(IntegrationTester $I)
    {
        $I->wantToTest('Db\Dialect\Sqlite - forUpdate()');
        $I->skipTest('Need implementation');
    }
}
