<?php

declare(strict_types=1);

namespace BHR;

interface SecurableResourceInterface
{
    public function getSecurityIdentifier(): SecurityIdentifier;
    public function can(SecurityPrincipalInterface $principal, Permission $permission): bool;
    public function authorize(SecurityPrincipalInterface $principal, Permission $permission);
}
