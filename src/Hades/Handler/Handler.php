<?php

namespace GetOlympus\Hades\Handler;

use GetOlympus\Hades\Exception\Exception;
use GetOlympus\Hades\Handler\HandlerInterface;
use Monolog\Handler\FirePHPHandler;
use Monolog\Handler\RotatingFileHandler;
use Monolog\Handler\StreamHandler;
use Symfony\Component\ErrorHandler\Debug;
use Symfony\Component\ErrorHandler\ErrorHandler;

/**
 * Handler controller
 *
 * @package    OlympusHadesErrorHandler
 * @subpackage Handler
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 *
 */

class Handler implements HandlerInterface
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
    public static function create($handler, $logger = null)
    {
        $handlers = ['FirePHPHandler', 'RotatingFileHandler', 'StreamHandler'];

        // Check handler
        if (!in_array($handler, $handlers)) {
            throw new Exception(sprintf(
                'Handler "%d" is unknown. It must be a part of one of the followings: <code>%s</code>.',
                $handler,
                implode('</code>, <code>', $handlers)
            ));
        }

        $errorpath = null === $logger ? '' : $logger->get('errorpath');
        $level     = null === $logger ? 100 : $logger->get('level');

        // Add RotatingFile handler
        if ('RotatingFileHandler' === $handler) {
            if (empty($errorpath)) {
                throw new Exception(sprintf(
                    'Logger\'s error path for <code>%s</code> cannot be empty.',
                    'RotatingFileHandler'
                ));
            }

            return new RotatingFileHandler($errorpath, 0, $level);
        }

        // Add Stream handler
        if ('StreamHandler' === $handler) {
            if (empty($errorpath)) {
                throw new Exception(sprintf(
                    'Logger\'s error path for <code>%s</code> cannot be empty.',
                    'StreamHandler'
                ));
            }

            return new StreamHandler($errorpath, $level);
        }

        // Add default FirePHP handler
        return new FirePHPHandler;
    }

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
    public static function register($debug, $replace = true) : ErrorHandler
    {
        // Enable debug
        $enable = $debug ? Debug::enable() : null;

        // Catch error
        $handler = ErrorHandler::register($enable, $replace);

        // Check debug
        if (!$debug) {
            $handler->scopeAt(0, $replace);
        }

        return $handler;
    }
}
