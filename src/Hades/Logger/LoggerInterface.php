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
     * Push useful handler.
     *
     * @param  string  $title
     * @param  integer $level
     * @param  string  $errorpath
     *
     * @return self
     *
     * @since  0.0.1
     */
    public static function create($title, $level, $errorpath) : self;

    /**
     * Getter.
     *
     * @param  string  $property
     *
     * @since  0.0.1
     */
    public function get($property);

    /**
     * Push useful handler.
     *
     * @param  string  $handler
     *
     * @since  0.0.1
     */
    public function pushHandler($handler) : void;
}
