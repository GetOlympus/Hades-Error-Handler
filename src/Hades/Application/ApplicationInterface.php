<?php

namespace GetOlympus\Hades\Application;

/**
 * Olympus Hades interface.
 *
 * @package    OlympusHadesErrorHandler
 * @subpackage Application
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 *
 */

interface ApplicationInterface
{
    /**
     * Display error page.
     *
     * @param string $title
     * @param string $message
     * @param string $type
     *
     * @since 0.0.1
     */
    public static function error500($title, $message, $type) : void;

    /**
     * Register class.
     *
     * @param  array   $options
     *
     * @since  0.0.1
     */
    public static function register($options) : void;
}
