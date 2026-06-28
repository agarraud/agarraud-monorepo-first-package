<?php

declare(strict_types=1);

namespace Agarraud\AgarraudMonorepoFirstPackage;

use Agarraud\AgarraudMonorepoSecondPackage\SecondClass;

class FirstClass extends SecondClass
{
    public function describe(): string
    {
        return sprintf('first test extends %s', $this->name());
    }

    public function loud(): string
    {
        return strtolower($this->greet());
    }
}
