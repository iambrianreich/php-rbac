<?php

declare(strict_types=1);

namespace BHR;

/**
 * A Security Principal is an entity that can be authenticated by a computer
 * system. A principal can be a user, a group, a process, etc.
 */
interface SecurityPrincipalInterface
{
    /**
     * Returns the SecurityIdentifier for this SecurityPrincipalInterface.
     *
     * @return SecurityIdentifier Returns the SecurityIdentifier for this SecurityPrincipalInterface.
     */
    public function getSecurityIdentifier(): SecurityIdentifier;
}
