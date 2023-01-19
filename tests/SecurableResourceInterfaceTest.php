<?php

declare(strict_types=1);

namespace Tests\BHR;

use BHR\SecurableResourceInterface;
use PHPUnit\Framework\TestCase;

/**
 * Tests SecurableResourceInterface
 */
class SecurableResourceInterfaceTest extends TestCase
{
    /**
     * Verifies that the interface exists.
     *
     * @return void
     */
    public function testInterfaceExists()
    {
        $this->assertTrue(interface_exists(SecurableResourceInterface::Class));
    }
}
