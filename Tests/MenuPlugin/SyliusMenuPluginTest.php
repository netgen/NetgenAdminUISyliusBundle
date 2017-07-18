<?php

namespace Netgen\Bundle\AdminUISyliusBundle\Tests\MenuPlugin;

use Netgen\Bundle\AdminUIBundle\MenuPlugin\MenuPluginInterface;
use Netgen\Bundle\AdminUISyliusBundle\MenuPlugin\SyliusMenuPlugin;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\ParameterBag;
use Symfony\Component\HttpFoundation\Request;

class SyliusMenuPluginTest extends TestCase
{
    /**
     * @var SyliusMenuPlugin
     */
    protected $plugin;

    public function setUp()
    {
        $this->plugin = new SyliusMenuPlugin();
    }

    public function testInstanceOfMenuPlugin()
    {
        $this->assertInstanceOf(MenuPluginInterface::class, $this->plugin);
    }

    public function testGetIdentifier()
    {
        $this->assertEquals('sylius', $this->plugin->getIdentifier());
    }

    public function testIsActive()
    {
        $this->assertTrue($this->plugin->isActive());
    }

    public function testGetTemplates()
    {
        $expected = array(
            'aside' => 'NetgenAdminUISyliusBundle:menu/plugins/sylius:aside.html.twig',
            'left' => 'NetgenAdminUISyliusBundle:menu/plugins/sylius:left.html.twig',
            'top' => 'NetgenAdminUISyliusBundle:menu/plugins/sylius:top.html.twig',
        );

        $actual = $this->plugin->getTemplates();

        $this->assertInternalType('array', $actual);
        $this->assertEquals($expected, $actual);
    }

    public function testMatches()
    {
        $request = new Request();
        $request->attributes = new ParameterBag(array(
            '_route' => 'sylius_admin',
        ));
        $this->assertTrue($this->plugin->matches($request));

        $request->attributes = new ParameterBag(array(
            '_route' => 'test_sylius_admin_test',
        ));
        $this->assertTrue($this->plugin->matches($request));

        $request->attributes = new ParameterBag(array(
            '_route' => 'sylius_admin_test',
        ));
        $this->assertTrue($this->plugin->matches($request));
    }

    public function testDoesNotMatches()
    {
        $request = new Request();
        $this->assertFalse($this->plugin->matches($request));

        $request->attributes = new ParameterBag(array(
            '_route' => 'test',
        ));
        $this->assertFalse($this->plugin->matches($request));
    }
}
