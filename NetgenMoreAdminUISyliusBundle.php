<?php

namespace Netgen\Bundle\MoreAdminUISyliusBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class NetgenMoreAdminUISyliusBundle extends Bundle
{
    /**
     * Returns the bundle parent name.
     *
     * @return string The Bundle parent name it overrides or null if no parent
     */
    public function getParent()
    {
        return 'SyliusWebBundle';
    }
}
