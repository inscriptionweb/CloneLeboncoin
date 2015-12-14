<?php

namespace keny\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class kenyUserBundle extends Bundle
{
public function getParent()
  {
    return 'FOSUserBundle';
  }
}
