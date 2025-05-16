<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../PasswordValidator.php'; // Путь к твоему классу

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
            // Валидные пароли
            ['ValidPass1', true],
            ['AnotherP4ss', true],

            // Менее 8 символов
            ['Short1A', false],

            // Нет заглавной буквы
            ['alllowercase1', false],

            // Нет цифр
            ['NoDigitsHere', false],

            // Есть пробел
            ['Pass Word123', false],
            
            // Все условия нарушены
            ['short', false],
        ];
    }
}