<?php

declare(strict_types=1);

namespace Tests\BHR;

use BHR\Mock\User;
use BHR\SecurityIdentifier;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testUser()
    {
        $username = 'phpunit.user';
        $securityIdentifier = new SecurityIdentifier(uniqid());
        $user = new User($username, $securityIdentifier);

        $this->assertEquals($username, $user->getUsername());
        $this->assertEquals($securityIdentifier, $user->getSecurityIdentifier());
    }
}
