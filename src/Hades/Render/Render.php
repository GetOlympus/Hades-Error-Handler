<?php

namespace GetOlympus\Hades\Render;

use GetOlympus\Hades\Render\RenderInterface;

/**
 * Render controller
 *
 * @package    OlympusHadesErrorHandler
 * @subpackage Render
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 *
 */

abstract class Render implements RenderInterface
{
    /**
     * Render template to display error.
     *
     * @param  string  $template
     * @param  string  $name
     * @param  array   $context
     *
     * @return string
     *
     * @since  0.0.1
     */
    public static function include($template, $name, $context = []) : string
    {
        extract($context, EXTR_SKIP);

        ob_start();
        include rtrim($template, S).S.$name;

        return trim(ob_get_clean());
    }
}
