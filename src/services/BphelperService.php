<?php
/**
 * bphelper plugin for Craft CMS 3.x
 *
 * This is a helper plugin.
 *
 * @link      https://bit-part.net
 * @copyright Copyright (c) 2022 bit part LLC
 */

namespace bitpart\bphelper\services;

use bitpart\bphelper\Bphelper;

use Craft;
use craft\base\Component;

/**
 * BphelperService Service
 *
 * All of your plugin’s business logic should go in services, including saving data,
 * retrieving data, etc. They provide APIs that your controllers, template variables,
 * and other plugins can interact with.
 *
 * https://craftcms.com/docs/plugins/services
 *
 * @author    bit part LLC
 * @package   Bphelper
 * @since     1.0.0
 */
class BphelperService extends Component
{
    // Public Methods
    // =========================================================================

    /**
     * This function can literally be anything you want, and you can have as many service
     * functions as you want
     *
     * From any other plugin file, call it like this:
     *
     *     Bphelper::$plugin->bphelperService->exampleService()
     *
     * @return mixed
     */
    public function exampleService()
    {
        $result = 'something';
        // Check our Plugin's settings for `someAttribute`
        if ($setting = Bphelper::$plugin->getSettings()->someAttribute) {
            return $setting;
        }

        return $result;
    }
}
