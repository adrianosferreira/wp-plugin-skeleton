<?php

namespace PluginMainNamespace\Template;

class Loader
{

    public function get()
    {
        return new \Twig\Environment(
            new \Twig\Loader\FilesystemLoader(PLUGIN_NAME_PATH . '/templates'),
            []
        );
    }
}