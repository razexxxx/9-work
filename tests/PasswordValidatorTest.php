<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\PasswordValidator;

class PasswordValidatorTest extends TestCase
{
    /**
     * @dataProvider passwordDataProvider
     */
    public function testValidate(string $password, bool $expectedResult): void
    {
        $this->assertEquals($expectedResult, PasswordValidator::validate($password));
    }

    public function passwordDataProvider(): array
    {
        return [
            ['ValidPass1', true],
            ['AnotherP4ss', true],
            ['Short1A', false],
            ['alllowercase1', false],
            ['NoDigitsHere', false],
            ['Pass Word123', false],
            ['short', false],
        ];
    }
}