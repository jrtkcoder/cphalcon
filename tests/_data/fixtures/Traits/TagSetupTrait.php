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

namespace Phalcon\Test\Fixtures\Traits;

use Phalcon\Html\Tag;
use UnitTester;

trait TagSetupTrait
{
    /**
     * Constructor
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-10-26
     */
    public function _before(UnitTester $I)
    {
        $this->newDi();
        $this->setDiEscaper();
        $this->setDiUrl();
    }

    /**
     * @inheritdoc
     */
    abstract protected function newDi();

    /**
     * @inheritdoc
     */
    abstract protected function setDiEscaper();

    /**
     * @inheritdoc
     */
    abstract protected function setDiUrl();

    /**
     * Runs the test for a Tag::$function with $options
     */
    protected function testFieldParameter(
        UnitTester $I,
        Tag $tag,
        string $name,
        string $function,
        $options,
        string $expected,
        bool $xhtml = false,
        string $set = ''
    ) {
        if ($xhtml && 'textArea' !== $function) {
            $tag->setDocType(
                Tag::XHTML10_STRICT
            );

            $expected .= ' />';
        } else {
            $tag->setDocType(
                Tag::HTML5
            );

            $expected .= '>';
        }

        if ($set) {
            $tag->{$set}('x_name', 'x_value');
        }

        $I->assertEquals(
            $expected,
            $tag->$function($name, $options)
        );
    }
}
