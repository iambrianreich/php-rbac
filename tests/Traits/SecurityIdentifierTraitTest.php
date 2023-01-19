<?php

declare(strict_types=1);

namespace Tests\Bhr\Traits;

use BHR\SecurityIdentifier;
use BHR\Traits\SecurityIdentifierTrait;
use PHPUnit\Framework\TestCase;

/**
 * Tests SecurityIdentifierTrait.
 */
class SecurityidentifierTraitTest extends TestCase
{
    /**
     * Verifies that getSecurityIdentifier() returns the SecurityIdentifier
     * set on the instance.
     *
     * @return void
     */
    public function testGetSecurityIdentifier()
    {
        $uuid = uniqid();
        $sid = new SecurityIdentifier($uuid);
        $mock = new class($sid)
        {
            use SecurityIdentifierTrait;

            public function __construct(SecurityIdentifier $securityIdentifier)
            {
                $this->securityIdentifier = $securityIdentifier;
            }
        };
        $this->assertEquals($sid, $mock->getSecurityIdentifier());
    }
}
