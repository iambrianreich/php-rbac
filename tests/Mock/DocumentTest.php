<?php

use BHR\Permission;
use BHR\SecurableResourceInterface;
use BHR\SecurityPrincipalInterface;
use BHR\Traits\SecurityIdentifierTrait;

class Document implements SecurableResourceInterface
{
    #region Traits

    use SecurityIdentifierTrait;

    #endregion Traits

    #region SecurableResourceInterface Methods

    public function can(SecurityPrincipalInterface $principal, Permission $permission): bool
    {
        return false;
    }
    public function authorize(SecurityPrincipalInterface $principal, Permission $permission)
    {
        throw new \Exception();
    }

    #region SecurableResourceInterface Methods
}
