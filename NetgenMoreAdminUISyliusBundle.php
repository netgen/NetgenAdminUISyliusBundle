<?php

namespace Netgen\Bundle\MoreAdminUISyliusBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class NetgenMoreAdminUISyliusBundle extends Bundle
{
    public function getParent()
    {
        return 'SyliusWebBundle';
    }
}
