<?php
/**
 * bphelper plugin for Craft CMS 3.x
 *
 * This is a helper plugin.
 *
 * @link      https://bit-part.net
 * @copyright Copyright (c) 2022 bit part LLC
 */

namespace bitpart\bphelpertests\unit;

use Codeception\Test\Unit;
use UnitTester;
use Craft;
use bitpart\bphelper\Bphelper;

/**
 * ExampleUnitTest
 *
 *
 * @author    bit part LLC
 * @package   Bphelper
 * @since     1.0.0
 */
class ExampleUnitTest extends Unit
{
    // Properties
    // =========================================================================

    /**
     * @var UnitTester
     */
    protected $tester;

    // Public methods
    // =========================================================================

    // Tests
    // =========================================================================

    /**
     *
     */
    public function testPluginInstance()
    {
        $this->assertInstanceOf(
            Bphelper::class,
            Bphelper::$plugin
        );
    }

    /**
     *
     */
    public function testCraftEdition()
    {
        Craft::$app->setEdition(Craft::Pro);

        $this->assertSame(
            Craft::Pro,
            Craft::$app->getEdition()
        );
    }
}
