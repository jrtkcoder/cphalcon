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

namespace Phalcon\Test\Unit\Html\Attributes;

use Phalcon\Html\Attributes;
use UnitTester;

class GetIteratorCest
{
    /**
     * Tests Phalcon\Html\Attributes :: getIterator()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2019-06-02
     */
    public function htmlAttributesGetIterator(UnitTester $I)
    {
        $I->wantToTest('Html\Attributes - getIterator()');

        $data = [
            'type'  => 'text',
            'class' => 'form-control',
            'name'  => 'q',
            'value' => '',
        ];

        $attributes = new Attributes($data);

        foreach ($attributes as $key => $value) {
            $I->assertEquals(
                $data[$key],
                $attributes[$key]
            );
        }
    }
}
