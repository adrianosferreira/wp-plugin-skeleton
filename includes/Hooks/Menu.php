<?php

namespace PluginMainNamespace\Hooks;

use PluginMainNamespace\Template\Loader;

class Menu implements IHook
{
    public function registerHooks()
    {
        add_action('admin_menu', array( $this, 'myPluginMenu' ));
    }

    public function myPluginMenu()
    {
        add_menu_page('Plugin Name', 'Plugin Name', 'manage_options', 'plugin-name-main-menu', array( $this, 'main' ), 'dashicons-share');
    }

    public function main()
    {
        $template = ( new Loader() )->get();
        echo $template->render('admin-menu-page.twig', ['name' => 'Adriano Ferreira']);
    }
}
