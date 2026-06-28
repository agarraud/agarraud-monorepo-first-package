<?php

declare(strict_types=1);

namespace Agarraud\AgarraudMonorepoFirstPackage;

use Agarraud\AgarraudMonorepoSecondPackage\SecondClass;

class FirstClass extends SecondClass
{
    public function describe(): string
    {
        return sprintf('first extends %s', $this->name());
    }
}
