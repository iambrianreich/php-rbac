<?php

declare(strict_types=1);

namespace Tests\BHR\SecurityIdentifier;

use BHR\SecurityIdentifier;
use PHPUnit\Framework\TestCase;

class SecurityIdentifierTest extends TestCase
{
    /**
     * Verifies that the class exists.
     *
     * @return void
     */
    public function testClassExists()
    {
        $securityIdentifier = new SecurityIdentifier('');
        $this->assertInstanceOf(SecurityIdentifier::class, $securityIdentifier);
    }

    /**
     * Verifies that getString() returns the string passed to the constructor.
     *
     * @return void
     */
    public function testGetStringReturnsExpectedValue()
    {
        $uuid = uniqid();
        $securityIdentifier = new SecurityIdentifier($uuid);
        $this->assertEquals($uuid, $securityIdentifier->getString());
    }

    /**
     * Verifies that __toString() converts the SecurityIdentifier to the
     * expected string value.
     *
     * @return void
     */
    public function testToStringEqualsExpectedValue()
    {
        $uuid = uniqid();
        $securityIdentifier = new SecurityIdentifier($uuid);
        $this->assertEquals($uuid, (string) $securityIdentifier);
    }
}
