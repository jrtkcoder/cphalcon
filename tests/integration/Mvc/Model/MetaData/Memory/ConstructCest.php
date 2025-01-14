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

namespace Phalcon\Test\Integration\Mvc\Model\MetaData\Memory;

use function dataDir;
use IntegrationTester;
use Phalcon\Mvc\Model\MetaData\Memory;
use Phalcon\Mvc\Model\MetaDataInterface;
use Phalcon\Test\Fixtures\Traits\DiTrait;
use Phalcon\Test\Models\Robots;
use Phalcon\Test\Models\Robotto;

/**
 * Class ConstructCest
 */
class ConstructCest
{
    use DiTrait;

    private $data;

    public function _before(IntegrationTester $I)
    {
        $I->checkExtensionIsLoaded('redis');

        $this->setNewFactoryDefault();
        $this->setDiMysql();

        $this->container->setShared(
            'modelsMetadata',
            function () {
                return new Memory();
            }
        );

        $this->data = require dataDir('fixtures/metadata/robots.php');
    }

    public function _after(IntegrationTester $I)
    {
        $this->container['db']->close();
    }

    /**
     * Tests Phalcon\Mvc\Model\MetaData\Memory :: __construct()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function mvcModelMetadataMemoryConstruct(IntegrationTester $I)
    {
        $I->wantToTest('Mvc\Model\MetaData\Memory - __construct()');

        /** @var MetaDataInterface $md */
        $md = $this->container->getShared('modelsMetadata');

        $md->reset();
        $I->assertTrue($md->isEmpty());

        Robots::findFirst();

        $I->assertFalse($md->isEmpty());

        $md->reset();
        $I->assertTrue($md->isEmpty());
    }

    /**
     * Tests Phalcon\Mvc\Model\MetaData\Memory :: __construct() - manual
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function mvcModelMetadataMemoryConstructManual(IntegrationTester $I)
    {
        $I->wantToTest('Mvc\Model\MetaData\Memory - __construct() - manual');
        /** @var MetaDataInterface $metaData */
        $metaData = $this->container->getShared('modelsMetadata');

        $robotto = new Robotto();

        //Robots
        $pAttributes = [
            0 => 'id',
            1 => 'name',
            2 => 'type',
            3 => 'year',
        ];

        $attributes = $metaData->getAttributes($robotto);
        $I->assertEquals($attributes, $pAttributes);

        $ppkAttributes = [
            0 => 'id',
        ];

        $pkAttributes = $metaData->getPrimaryKeyAttributes($robotto);
        $I->assertEquals($ppkAttributes, $pkAttributes);

        $pnpkAttributes = [
            0 => 'name',
            1 => 'type',
            2 => 'year',
        ];

        $npkAttributes = $metaData->getNonPrimaryKeyAttributes($robotto);
        $I->assertEquals($pnpkAttributes, $npkAttributes);

        $I->assertEquals($metaData->getIdentityField($robotto), 'id');
    }
}
