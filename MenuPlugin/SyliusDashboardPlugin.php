<?php
/**
 * Created by PhpStorm.
 * User: filip
 * Date: 21.10.15.
 * Time: 10:56
 */
namespace Netgen\Bundle\MoreAdminUISyliusBundle\MenuPlugin;


use Netgen\Bundle\MoreAdminUIBundle\MenuPlugin\MenuPluginInterface;
use Symfony\Component\HttpFoundation\Request;

class SyliusDashboardPlugin implements MenuPluginInterface
{

    /**
     * Returns plugin identifier
     *
     * @return string
     */
    public function getIdentifier()
    {
        return 'sylius_dashboard';
    }

    /**
     * Returns aside menu template name
     *
     * @return string
     */
    public function getAsideTemplate()
    {
        return 'NetgenMoreAdminUISyliusBundle:plugins:sylius_menu_item.html.twig';
    }

    /**
     * Returns left menu template name
     *
     * @return string
     */
    public function getLeftTemplate()
    {
        return null;
    }

    /**
     * Returns if this plugin matches the current request
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return bool
     */
    public function matches(Request $request)
    {
        return false;
    }
}
