<?php

namespace GetOlympus\Hades\Logger;

/**
 * Logger interface
 *
 * @package    OlympusHadesErrorHandler
 * @subpackage Logger
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 *
 */

interface LoggerInterface
{
    /**
     * Getter.
     *
     * @param  string  $handler
     *
     * @since  0.0.1
     */
    public function get($attribute);

    /**
     * Push useful handler.
     *
     * @param  string  $handler
     *
     * @since  0.0.1
     */
    public function pushHandler($handler) : void;
}
