<?php

namespace GetOlympus\Hades\Render;

/**
 * Render interface
 *
 * @package    OlympusHadesErrorHandler
 * @subpackage Render
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 *
 */

interface RenderInterface
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
    public static function include($template, $name, $context = []) : string;
}
