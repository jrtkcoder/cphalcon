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

namespace Phalcon\Test\Integration\Mvc\Model\Relation;

use IntegrationTester;
use Phalcon\Mvc\Model\Relation;

/**
 * Class IsForeignKeyCest
 */
class IsForeignKeyCest
{
    /**
     * Tests Phalcon\Mvc\Model\Relation :: isForeignKey()
     *
     * @author Sid Roberts <https://github.com/SidRoberts>
     * @since  2019-04-18
     */
    public function mvcModelRelationIsForeignKey(IntegrationTester $I)
    {
        $I->wantToTest('Mvc\Model\Relation - isForeignKey()');


        $options = [];

        $relation = new Relation(
            Relation::HAS_MANY,
            'RobotsParts',
            'id',
            'robots_id',
            $options
        );

        $I->assertFalse(
            $relation->isForeignKey()
        );


        $options = [
            'foreignKey' => false,
        ];

        $relation = new Relation(
            Relation::HAS_MANY,
            'RobotsParts',
            'id',
            'robots_id',
            $options
        );

        $I->assertFalse(
            $relation->isForeignKey()
        );


        $options = [
            'foreignKey' => [],
        ];

        $relation = new Relation(
            Relation::HAS_MANY,
            'RobotsParts',
            'id',
            'robots_id',
            $options
        );

        $I->assertFalse(
            $relation->isForeignKey()
        );


        $options = [
            'foreignKey' => true,
        ];

        $relation = new Relation(
            Relation::HAS_MANY,
            'RobotsParts',
            'id',
            'robots_id',
            $options
        );

        $I->assertTrue(
            $relation->isForeignKey()
        );


        $options = [
            'foreignKey' => [
                'message' => 'The part_id does not exist on the Parts model',
            ],
        ];

        $relation = new Relation(
            Relation::HAS_MANY,
            'RobotsParts',
            'id',
            'robots_id',
            $options
        );

        $I->assertTrue(
            $relation->isForeignKey()
        );
    }
}
