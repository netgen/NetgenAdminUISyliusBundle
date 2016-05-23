<?php

namespace Netgen\Bundle\AdminUISyliusBundle\MenuPlugin;

use Netgen\Bundle\AdminUIBundle\MenuPlugin\MenuPluginInterface;
use Symfony\Component\HttpFoundation\Request;

class SyliusMenuPlugin implements MenuPluginInterface
{
    /**
     * Returns plugin identifier
     *
     * @return string
     */
    public function getIdentifier()
    {
        return 'sylius';
    }

    /**
     * Returns the list of templates this plugin supports
     *
     * @return array
     */
    public function getTemplates()
    {
        return array(
            'aside' => 'NetgenAdminUISyliusBundle:menu/plugins/sylius:aside.html.twig',
            'left' => 'NetgenAdminUISyliusBundle:menu/plugins/sylius:left.html.twig'
        );
    }

    /**
     * Returns if this plugin matches the current request
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return bool
     */
    public function matches( Request $request )
    {
        // The sylius backend route names always start with "sylius_backend"
        $currentRoute = $request->attributes->get( '_route' );
        return ( stripos( $currentRoute, 'sylius_backend' ) !== false );
    }
}
