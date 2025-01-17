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

namespace Phalcon\Test\Unit\Acl\Adapter\Memory;

use Phalcon\Acl\Adapter\Memory;
use Phalcon\Acl\Enum;
use UnitTester;

class GetActiveRoleCest
{
    /**
     * Tests Phalcon\Acl\Adapter\Memory :: getActiveRole() - default
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function aclAdapterMemoryGetActiveRoleDefault(UnitTester $I)
    {
        $I->wantToTest('Acl\Adapter\Memory - getActiveRole() - default');

        $acl = new Memory();

        $I->assertNull(
            $acl->getActiveRole()
        );
    }

    /**
     * Tests Phalcon\Acl\Adapter\Memory :: getActiveRole() - default
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function aclAdapterMemoryGetActiveRole(UnitTester $I)
    {
        $I->wantToTest('Acl\Adapter\Memory - getActiveRole()');

        $acl = new Memory();

        $acl->setDefaultAction(
            Enum::DENY
        );

        $acl->addRole('Guests');

        $acl->addComponent(
            'Login',
            ['help', 'index']
        );

        $acl->allow('Guests', 'Login', '*');


        $I->assertTrue(
            $acl->isAllowed('Guests', 'Login', 'index')
        );

        $I->assertEquals(
            'Guests',
            $acl->getActiveRole()
        );
    }
}
