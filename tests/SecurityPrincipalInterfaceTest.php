<?php

declare(strict_types=1);

namespace Tests\BHR;

use BHR\SecurityPrincipalInterface;
use PHPUnit\Framework\TestCase;

class SecurityPrincipalInterfaceTest extends TestCase
{
    /**
     * Verifies that the interface exists.
     *
     * @return void
     */
    public function testInterfaceExists()
    {
        $this->assertTrue(interface_exists(SecurityPrincipalInterface::class));
    }
}
