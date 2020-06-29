<?php

namespace PluginMainNamespace\Template;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class Loader
{

    public function get()
    {
        return new Environment(
            new FilesystemLoader(PLUGIN_NAME_PATH . '/templates'),
            []
        );
    }
}
