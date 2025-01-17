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

namespace Phalcon\Test\Unit\Image\Adapter\Gd;

use Phalcon\Image\Adapter\Gd;
use Phalcon\Image\Enum;
use Phalcon\Test\Fixtures\Traits\GdTrait;
use UnitTester;

class FlipCest
{
    use GdTrait;

    /**
     * Tests Phalcon\Image\Adapter\Gd :: flip()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function imageAdapterGdFlip(UnitTester $I)
    {
        $I->wantToTest('Image\Adapter\Gd - flip()');

        $params = [
            'jpg' => [
                [Enum::HORIZONTAL, 'df9fcfc7c38381c1'],
                [Enum::VERTICAL, '8381c1c3e3f3f9fb'],
            ],
            'png' => [
                [Enum::HORIZONTAL, '0c1e3e3c78181818'],
                [Enum::VERTICAL, '1818181e3c7c7830'],
            ],
        ];

        $outputDir = 'tests/image/gd';

        foreach ($this->getImages() as $type => $imagePath) {
            foreach ($params[$type] as list($direction, $hash)) {
                $resultImage = 'flip-' . $direction . '.' . $type;
                $output      = outputDir($outputDir . '/' . $resultImage);

                $image = new Gd($imagePath);

                $image->flip($direction)->save($output);

                $I->amInPath(
                    outputDir($outputDir)
                );

                $I->seeFileFound($resultImage);

                $I->assertTrue(
                    $this->checkImageHash($output, $hash)
                );

                $I->safeDeleteFile($output);
            }
        }
    }
}
