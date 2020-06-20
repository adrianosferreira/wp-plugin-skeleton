<?php

namespace PluginMainNamespace\Menu;

class TestSomething extends \PHPUnit\Framework\TestCase
{

    /**
     * @test
     */
    public function testSomething() {
        $twig = new \PluginMainNamespace\Template\Loader();
        $this->assertTrue(true);
    }
}