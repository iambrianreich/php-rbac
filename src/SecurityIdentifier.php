<?php

declare(strict_types=1);

namespace BHR;

use Stringable;

/**
 * A SecurityIdentifier that is unique to a particular resource.
 */
class SecurityIdentifier implements Stringable
{
    public function __construct(
        public string $identifier
    ) {
    }

    /**
     * Returns the SecurityIdentifier as a string.
     *
     * @return string Returns the SecurityIdentifier as a string.
     */
    public function getString(): string
    {
        return $this->identifier;
    }

    /**
     * Returns the SecurityIdentifier as a string.
     *
     * @return string Returns the SecurityIdentifier as a string.
     */
    public function __toString()
    {
        return $this->getString();
    }
}
