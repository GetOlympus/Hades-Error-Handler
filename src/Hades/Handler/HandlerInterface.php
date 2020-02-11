<?php

namespace GetOlympus\Hades\Handler;

use Symfony\Component\ErrorHandler\ErrorHandler;

/**
 * Handler interface
 *
 * @package    OlympusHadesErrorHandler
 * @subpackage Handler
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 *
 */

interface HandlerInterface
{
    /**
     * Create handler.
     *
     * @param  string  $handler
     * @param  Logger  $logger
     * @throws Exception
     *
     * @return FirePHPHandler | RotatingFileHandler | StreamHandler;
     *
     * @since  0.0.1
     */
    public static function create($handler, $logger = null);

    /**
     * Register handler.
     *
     * @param  boolean $debug
     * @param  boolean $replace
     *
     * @return ErrorHandler
     *
     * @since  0.0.1
     */
    public static function register($debug, $replace = true) : ErrorHandler;
}
