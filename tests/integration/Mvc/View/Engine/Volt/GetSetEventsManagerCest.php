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

namespace Phalcon\Test\Integration\Mvc\View\Engine\Volt;

use IntegrationTester;
use Phalcon\Mvc\View\Engine\Volt;
use Phalcon\Test\Fixtures\Traits\DiTrait;

class GetSetEventsManagerCest
{
    use DiTrait;

    /**
     * Tests Phalcon\Mvc\View\Engine\Volt ::
     * getEventsManager()/setEventsManager()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function mvcViewEngineVoltGetEventsManager(IntegrationTester $I)
    {
        $I->wantToTest('Mvc\View\Engine\Volt - getEventsManager()/setEventsManager()');

        $this->setNewFactoryDefault();
        $this->setDiView();

        $view = $this->getService('view');

        $eventsManager = $this->newEventsManager();
        $engine        = new Volt($view, $this->container);

        $I->assertNull(
            $engine->getEventsManager()
        );

        $engine->setEventsManager($eventsManager);

        $I->assertSame(
            $eventsManager,
            $engine->getEventsManager()
        );
    }
}
