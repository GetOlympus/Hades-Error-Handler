<?php

namespace GetOlympus\Hades\Logger;

use GetOlympus\Hades\Exception\Exception;
use GetOlympus\Hades\Logger\LoggerInterface;
use Monolog\Logger as MonologLogger;

/**
 * Logger controller
 *
 * @package    OlympusHadesErrorHandler
 * @subpackage Logger
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 *
 */

class Logger implements LoggerInterface
{
    /**
     * @var string
     */
    protected $errorpath;

    /**
     * @var integer
     */
    protected $level = MonologLogger::DEBUG;

    /**
     * @var array<string,int>
     */
    protected $levels = [
        'debug'     => MonologLogger::DEBUG,     // 100
        'info'      => MonologLogger::INFO,      // 200
        'notice'    => MonologLogger::NOTICE,    // 250
        'warning'   => MonologLogger::WARNING,   // 300
        'error'     => MonologLogger::ERROR,     // 400
        'critical'  => MonologLogger::CRITICAL,  // 500
        'alert'     => MonologLogger::ALERT,     // 550
        'emergency' => MonologLogger::EMERGENCY, // 600
    ];

    /**
     * @var \Monolog\Logger
     */
    protected $logger;

    /**
     * @var string
     */
    protected $title;

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
    public static function create($title, $level, $errorpath) : self
    {
        // Get static occurrence
        $logger = new self();

        /**
         * @todo  Sentry.io integration?
         */

        // Set log level and title
        $logger->errorpath = $errorpath;
        $logger->level     = MonologLogger::getLevelName($level);
        $logger->title     = empty($title) ? 'Olympus' : trim($title);

        // Check level
        if (in_array($logger->level, $logger->levels)) {
            throw new Exception(sprintf(
                'Logger\'s level "%d" is unknown. It must be a part of one of the followings: <code>%s</code>.',
                $logger->level,
                implode('</code>, <code>', $logger->levels)
            ));
        }

        // Set logger
        $logger->logger = new MonologLogger($title);

        // Return occurrence
        return $logger;
    }

    /**
     * Getter.
     *
     * @param  string  $handler
     *
     * @since  0.0.1
     */
    public function get($attribute)
    {
        // Attribute
        return $this->$attribute;
    }

    /**
     * Push useful handler.
     *
     * @param  string  $handler
     *
     * @since  0.0.1
     */
    public function pushHandler($handler) : void
    {
        // Push handler
        $this->logger->pushHandler($handler);
    }
}
