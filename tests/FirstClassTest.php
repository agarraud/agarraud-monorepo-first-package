<?php

declare(strict_types=1);

namespace Agarraud\AgarraudMonorepoFirstPackage\Tests;

use Agarraud\AgarraudMonorepoFirstPackage\FirstClass;
use Agarraud\AgarraudMonorepoSecondPackage\SecondClass;
use PHPUnit\Framework\TestCase;

final class FirstClassTest extends TestCase
{
    public function testExtendsSecondClass(): void
    {
        self::assertInstanceOf(SecondClass::class, new FirstClass());
    }

    public function testDescribeUsesInheritedName(): void
    {
        $first = new FirstClass();

        self::assertSame('first extends second', $first->describe());
    }
}