<?php

namespace GetOlympus\Hades\Application;

use GetOlympus\Hades\Application\ApplicationInterface;
use GetOlympus\Hades\Handler\Handler;
use GetOlympus\Hades\Logger\Logger;
use GetOlympus\Hades\Render\Render;

/**
 * Application controller
 *
 * @package    OlympusHadesErrorHandler
 * @subpackage Application
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 *
 */

abstract class Application implements ApplicationInterface
{
    /**
     * @var array
     */
    protected static $options = [
        'debug' => true,
        'level' => 100,
        'logs'  => OL_HADES_PATH.S.'app'.S.'logs'.S,
        'title' => 'Olympus',
    ];

    /**
     * @var string
     */
    protected static $template = OL_HADES_PATH.S.'src'.S.'Hades'.S.'Resources'.S.'views'.S;

    /**
     * Display error page.
     *
     * @param  string  $title
     * @param  string  $message
     * @param  string  $type
     *
     * @since  0.0.1
     */
    public static function error500($title, $message, $type) : void
    {
        // Get rendered HTML
        $error = Render::include(self::$template, 'error.html.php', [
            'title'   => $title,
            'message' => $message,
            'type'    => $type,
        ]);

        // Add 500 header
        header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);

        // Display error and stop
        die($error);
    }

    /**
     * Register class.
     *
     * @param  array   $options
     *
     * @since  0.0.1
     */
    public static function register($options) : void
    {
        // Set default values
        $opts = array_merge(self::$options, $options);
        $opts['title'] = empty($opts['title']) ? self::$options['title'] : trim($opts['title']);

        // Set logger
        $logger = Logger::create($opts['title'], $opts['level'], $opts['logs']);

        // Add handlers
        $logger->pushHandler(Handler::create('RotatingFileHandler', $logger));
        $logger->pushHandler(Handler::create('StreamHandler', $logger));
        $logger->pushHandler(Handler::create('FirePHPHandler'));

        // Catch error
        $handler = Handler::register($opts['debug'], true);
    }
}
