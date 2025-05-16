<?php

class PasswordValidator
{
    public static function validate(string $password): bool
    {
        // Минимум 8 символов
        if (strlen($password) < 8) {
            return false;
        }

        // Есть хотя бы одна заглавная буква
        if (!preg_match('/[A-Z]/', $password)) {
            return false;
        }

        // Есть хотя бы одна цифра
        if (!preg_match('/\d/', $password)) {
            return false;
        }

        // Нет пробелов
        if (strpos($password, ' ') !== false) {
            return false;
        }

        return true;
    }
}