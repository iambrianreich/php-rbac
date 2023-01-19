<?php

declare(strict_types=1);

namespace BHR\Traits;

use BHR\SecurityIdentifier;

trait SecurityIdentifierTrait
{

    protected SecurityIdentifier $securityIdentifier;

    public function getSecurityIdentifier(): SecurityIdentifier
    {
        return $this->securityIdentifier;
    }
}
