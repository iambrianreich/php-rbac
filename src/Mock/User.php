<?php

declare(strict_types=1);

namespace BHR\Mock;

use BHR\SecurityIdentifier;
use BHR\SecurityPrincipalInterface;
use BHR\Traits\SecurityIdentifierTrait;

/**
 * A User in a proof of concept Role Based Access Authorization system.
 */
class User implements SecurityPrincipalInterface
{
    #region Traits

    use SecurityIdentifierTrait;

    #endregion Traits

    #region Constructor

    public function __construct(
        protected string $username,
        protected SecurityIdentifier $securityIdentifier
    ) {
    }

    #engregion Constructor

    #region Getters and Setters

    public function getUsername(): string
    {
        return $this->username;
    }

    #endregion Getters and Setters
}
