<?php

namespace GetOlympus\Hades;

use GetOlympus\Hades\Application\Application;

/**
 * Package constants.
 */

// Main file path
define('OL_HADES_PATH', dirname(dirname(dirname(__FILE__))));
// Directory separator
defined('S') or define('S', DIRECTORY_SEPARATOR);

/**
 * Olympus Hades Error Handler.
 *
 * @package    OlympusHadesErrorHandler
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 *
 */

class Hades extends Application
{
}
