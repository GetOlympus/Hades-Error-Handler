<?php declare(strict_types=1);

namespace GetOlympus\Hades;

use GetOlympus\Hades\Application\Application;

/**
 * Package constants.
 */

// Directory separator
defined('S')             or define('S', DIRECTORY_SEPARATOR);
// Main file path
defined('OL_HADES_PATH') or define('OL_HADES_PATH', dirname(dirname(dirname(__FILE__))));

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
    //
}
