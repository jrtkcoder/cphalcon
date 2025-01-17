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

namespace Phalcon\Test\Unit\Assets\Manager;

use Phalcon\Assets\Manager;
use Phalcon\Test\Fixtures\Traits\DiTrait;
use UnitTester;
use function dataDir;

class AddInlineJsCest
{
    use DiTrait;

    /**
     * executed before each test
     */
    public function _before(UnitTester $I)
    {
        $this->newDi();
        $this->setDiEscaper();
        $this->setDiUrl();
    }

    /**
     * executed after each test
     */
    public function _after(UnitTester $I)
    {
        $this->resetDi();
    }

    /**
     * Tests Phalcon\Assets\Manager :: addInlineJs()
     *
     * @issue https://github.com/phalcon/cphalcon/issues/11409
     */
    public function assetsManagerAddInlineJs(UnitTester $I)
    {
        $I->wantToTest('Assets\Manager - addInlineJs()');

        $manager = new Manager();

        $jsFile = dataDir('assets/assets/signup.js');
        $js     = file_get_contents($jsFile);

        $manager->addInlineJs($js);

        $expected = "<script type=\"text/javascript\">{$js}</script>\n";

        ob_start();
        $manager->outputInlineJs();
        $actual = ob_get_contents();
        ob_end_clean();

        $I->assertSame($expected, $actual);
    }
}
