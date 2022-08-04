<?php
/**
 * bphelper plugin for Craft CMS 3.x
 *
 * This is a helper plugin.
 *
 * @link      https://bit-part.net
 * @copyright Copyright (c) 2022 bit part LLC
 */

namespace bitpart\bphelper\controllers;

use bitpart\bphelper\Bphelper;

use Craft;
use craft\web\Controller;

/**
 * Api Controller
 *
 * Generally speaking, controllers are the middlemen between the front end of
 * the CP/website and your plugin’s services. They contain action methods which
 * handle individual tasks.
 *
 * A common pattern used throughout Craft involves a controller action gathering
 * post data, saving it on a model, passing the model off to a service, and then
 * responding to the request appropriately depending on the service method’s response.
 *
 * Action methods begin with the prefix “action”, followed by a description of what
 * the method does (for example, actionSaveIngredient()).
 *
 * https://craftcms.com/docs/plugins/controllers
 *
 * @author    bit part LLC
 * @package   Bphelper
 * @since     1.0.0
 */
class ApiController extends Controller
{

    // Protected Properties
    // =========================================================================

    /**
     * @var    bool|array Allows anonymous access to this controller's actions.
     *         The actions must be in 'kebab-case'
     * @access protected
     */
    protected int|bool|array $allowAnonymous = ['index', 'do-something'];

    // Public Methods
    // =========================================================================

    /**
     * Handle a request going to our plugin's index action URL,
     * e.g.: actions/bphelper/api
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $result = 'Welcome to the ApiController actionIndex() method';

        return $result;
    }

    /**
     * Handle a request going to our plugin's actionDoSomething URL,
     * e.g.: actions/bphelper/api/do-something
     *
     * @return mixed
     */
    public function actionDoSomething()
    {
        $result = Bphelper::$plugin->bphelperService->exampleService();

        return $result;
    }
}
